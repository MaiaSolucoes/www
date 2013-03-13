<?php

class Admin_Controller extends Base_Controller {

	public function action_index() {

        if(Auth::check()) {

            return Redirect::to('../admin/contacts')->with('auth', 'true');

        }

		return View::make('admin.index');

	}

	public function action_login() {

        $input = Input::all();

        if(empty($input)) {

            $token = $input['token'];

            if(Pulsar::who($token)) {

                return Redirect::to('../admin/contacts')->with('token', $token);

            }

            return Redirect::to('../admin');

        } else {
            /*$input['email'] = 'maiams@msn.com';
            $input['password'] = 'ahseeutepego1';*/
            $token = Pulsar::login(array('username' => $input['email'], 'password' => $input['password']));

            return Redirect::to('../admin/contacts')->with('token',$token);

        }

	}

    public function action_contacts($page=1) {

        if(!Auth::check()) {

            return Redirect::to('../admin');

        }
        $per_page = 15;
        $messages = DB::table('contacts')->paginate($per_page, array('id', 'name','email','message','ip', 'created_at'));

		return View::make('admin.contacts')->with(array('messages' => $messages,'page' => $page));

    }

	public function action_logout(){
        $user = Input::get('email');
		Pulsar::logout($user);
		return Redirect::to('../admin');

	}

}