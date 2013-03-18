<?php

class Admin_Controller extends Base_Controller {

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
            switch($token){
                case false:
                    $errors = "Usuario e/ou senha inválidos";
                    break;
                case 'Empty Fields':
                    $errors = "Há campo(s) que são de preenchimento obrigatório";
                    break;
                default:
                    return Redirect::to('../admin/contacts');
                    break;
            }
            return Redirect::to('../admin')->with('errors', $errors);
            //return $token ? Redirect::to('../admin/contacts') : Redirect::to('../admin')->with('errors', $token);

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