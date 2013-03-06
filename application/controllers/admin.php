<?php

class Admin_Controller extends Base_Controller {

	public function action_index() {

        if(Auth::check()) {

            return Redirect::to('../admin/contacts')->with('auth', 'true');

        }

		return View::make('admin.index');

	}

	public function action_login() {

        $url = file_get_contents('http://pul.maia.maiasolucoes.com.br/user/user?id=1');
        dd($url);


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
        $per_page = 15;
        $messages = DB::table('contacts')->paginate($per_page, array('id', 'name','email','message','ip', 'created_at'));

		return View::make('admin.contacts')->with(array('messages' => $messages,'page' => $page));

    }

	public function action_logout() {

		Auth::logout();
		return Redirect::to('../admin');

	}

}