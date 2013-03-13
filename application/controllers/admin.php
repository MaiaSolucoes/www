<?php

class Admin_Controller extends Base_Controller {

	public function action_index() {

        if(Pulsar::check()) {

            return Redirect::to('../admin/contacts')->with('auth', 'true');

        }

		return View::make('admin.index');

	}

	public function action_login() {

        $input = Input::all();

        if(empty($input)) {

            //$token = isset($input['token']) ? $input['token'] : '';

            if(Pulsar::check()) {

                return Redirect::to('../admin/contacts')->with('auth', 'true');

            }

            return Redirect::to('../admin');

        } else {


            $token = Pulsar::login(array('username' => $input['email'], 'password' => $input['password']));
            return Redirect::to('../admin/contacts')->with('token', $token);

        }

	}

    public function action_contacts($page=1) {

        if(!Pulsar::check()) {

            return Redirect::to('../admin');

        }
        $user = Pulsar::who(Input::get('token'));
        $per_page = 15;
        $messages = DB::table('contacts')->paginate($per_page, array('id', 'name','email','message','ip', 'created_at'));

		return View::make('admin.contacts')->with(array('messages' => $messages,'page' => $page, 'user' => $user));

    }

	public function action_logout(){
		Pulsar::logout();
		return Redirect::to('../admin');

	}

}