<?php

class Admin_Controller extends Base_Controller{

	public function action_index(){

		return View::make('admin.index');

	}

	public function action_login(){

        $input = Input::all();

		if( Auth::attempt(array ('username'=> $input['email'], 'password'=> $input['password']))){

			$messages = Contact::all();

            return View::make('admin.contacts')->with(array('messages' => $messages));

		}else{

            return Redirect::to('../admin')->with('result', '1');

		}
	}

    public function action_logout(){

		Auth::logout();

		return Redirect::to('../admin');

	}
}