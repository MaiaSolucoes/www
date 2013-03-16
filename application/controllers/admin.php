<?php

class Admin_Controller extends Base_Controller {

    public static $cache_token;

    public static $cache_user;

	public function action_index() {

        if(Pulsar::check()){

            return Redirect::to('../admin/contacts');

        }

		return View::make('admin.index');

	}

	public function action_login() {

        $input = Input::all();

        if(empty($input)) {

            if(Pulsar::check()) {

                return Redirect::to('../admin/contacts');

            }

            return Redirect::to('../admin');

        } else {

            $token = Pulsar::login(array('username' => $input['email'], 'password' => $input['password']));

            if(!$token){

                return Redirect::to('../admin');

            } else {
                self::$cache_token = $token;
                self::$cache_user = $input['email'];
                return Redirect::to('../admin/contacts');

            }

        }

	}

    public function action_contacts($page=1) {

        if(!Pulsar::check()) {

            return Redirect::to('../admin');

        }
        $user = Cache::get('username');
        $per_page = 15;
        $messages = DB::table('contacts')->paginate($per_page, array('id', 'name','email','message','ip', 'created_at'));

		return View::make('admin.contacts')->with(array('messages' => $messages,'page' => $page, 'user' => $user));

    }

	public function action_logout(){
		Pulsar::logout();
		return Redirect::to('../admin');

	}

}