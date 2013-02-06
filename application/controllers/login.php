<?php

class Login_Controller extends Base_Controller{

	public function action_index(){

		return View::make('login.index');

	}

	public function action_login(){

		$input = Input::all();

		if( Auth::attempt(array ('username'=> $input['email'], 'password'=> $input['password']))){

			return Redirect::to('login');

		}else{

			echo 'falha na autenticacao';

		}
	}

	public function action_logout(){

		Auth::logout();

		return Redirect::to('login');

	}

}