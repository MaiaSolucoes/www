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

            if(Auth::check()) {

                return Redirect::to('../admin/contacts')->with('auth', 'true');

            }

            return Redirect::to('../admin');

        } else {
            /*$input['email'] = 'maiams@msn.com';
            $input['password'] = 'ahseeutepego1';*/


            $url = file_get_contents("http://pul.cicero.maiasolucoes.com.br/auth/login?username=$input[email]&password=$input[password]");
            $auth = json_decode($url);
            $auth == 'verdade' ? print '<br>autenticado<br>' : print '<br>nao autenticado<br>' ;


            /*if(Auth::attempt(array ('username'=> $input['email'], 'password'=> $input['password'])) ){

                return Redirect::to('../admin/contacts')->with('auth', 'true');

            } else {

                return Redirect::to('../admin')->with('result', '1');

            }*/

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