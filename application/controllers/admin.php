<?php

class Admin_Controller extends Base_Controller {

	public function action_index() {

        //return Pulsar::check() ? 'truee' : 'falseee';
        if(Pulsar::check()){

            return 'admin check ON';
            return Redirect::to('../admin/contacts');

        }

        return 'admin check OFF';
		return View::make('admin.index');

	}

	public function action_login() {

        $input = Input::all();

        if(empty($input)) {

            //$token = isset($input['token']) ? $input['token'] : '';

            if(Pulsar::check()) {

                return 'admin check ON';
                return Redirect::to('../admin/contacts');

            }

            return 'admin check OFF';
            return Redirect::to('../admin');

        } else {


            $token = Pulsar::login(array('username' => $input['email'], 'password' => $input['password']));
            $user = Pulsar::who($token);
            return Redirect::to('../admin/contacts/')->with('token', $token, 'user', $user);
            //return Pulsar::check() ? 'truee' : 'falseee';
            return 'admin check ON';
            //return Redirect::to('../admin/contacts')->with(array('username' => $username, 'token' => $token));

        }

	}

    public function action_contacts($page=1) {

        if(!Pulsar::check()) {

            return 'admin check OFF';
            return Redirect::to('../admin');

        }
        $user = Pulsar::who();
        $per_page = 15;
        $messages = DB::table('contacts')->paginate($per_page, array('id', 'name','email','message','ip', 'created_at'));

        //return 'admin check ON';
		return View::make('admin.contacts')->with(array('messages' => $messages,'page' => $page, 'user' => $user));

    }

	public function action_logout(){
		Pulsar::logout();
		return Redirect::to('../admin');

	}

}