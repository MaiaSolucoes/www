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

            if ($token === true) {

                return Redirect::to('../admin/contacts');

            } elseif ($token == "Empty Fields") {

                $errors = "Há campo(s) que são de preenchimento obrigatório";

            } else {

                $errors = "Usuário e/ou senha inválidos.";

            }

            return Redirect::to('../admin')->with('errors', $errors);

        }

	}

    public function action_contacts($page=1) {

        if(!Pulsar::check()) {

            return Redirect::to('../admin');

        }
        $user = Pulsar::who();
        $per_page = 15;
        $messages = DB::table('contacts')->paginate($per_page, array('id', 'name','email','message','ip', 'created_at'));

		return View::make('admin.contacts')->with(array('messages' => $messages,'page' => $page, 'user' => $user));

    }

    public function action_services() {

        if(!Pulsar::check()) {

            return Redirect::to('../admin');

        }
        return View::make('admin.services');

    }

	public function action_logout(){

		Pulsar::logout();
		return Redirect::to('../admin');

	}

}