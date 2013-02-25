<?php

class Admin_Controller extends Base_Controller {

	public function action_index() {

        if(Auth::check()) {

            //$page = Session::get('page');
            return Redirect::to('../admin/contacts')->with('auth', 'true');

        }

		return View::make('admin.index');

	}

	public function action_login() {

		$input = Input::all();

        if(empty($input)) {

            if(Auth::check()) {

                return Redirect::to('../admin/contacts')->with('auth', 'true');

            }

            return Redirect::to('../admin');

        } else {

            if(Auth::attempt(array ('username'=> $input['email'], 'password'=> $input['password'])) ){

                return Redirect::to('../admin/contacts')->with('auth', 'true');

            } else {

                return Redirect::to('../admin')->with('result', '1');

            }

        }

	}

    public function action_contacts($page=1) {

        if(!Auth::check()) {

            return Redirect::to('../admin');

        }
        $per_page = 5;
        //$page = Session::get('page');
        $messages = DB::table('contacts')->paginate($per_page, array('id', 'name','email','message', 'created_at'));
        //dd($messages->results);
        //$orders = DB::table('orders')->paginate($per_page);
        //$messages = Contact::all();
        $auth = Session::get('auth');

        return $auth == true
            ? View::make('admin.contacts')->with(array('messages' => $messages,'page' => $page))
            : Redirect::to('../admin')->with('result', '1');

    }

	public function action_logout() {

		Auth::logout();
		return Redirect::to('../admin');

	}

}