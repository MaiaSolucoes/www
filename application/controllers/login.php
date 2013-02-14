<?php

class Login_Controller extends Base_Controller{

	public function action_index(){

		return View::make('login.index');

	}

	public function action_login(){

        $input = Input::all();
        //dd($input);

		if( Auth::attempt(array ('username'=> $input['email'], 'password'=> $input['password']))){

			return Redirect::to('../admin');

		}else{

            return Redirect::to('../login')->with('result', '1');

		}
	}

   /* public function action_process(){
        $input = Input::all();

        $validate = Validator::make($input,$this->roles);


        if($validate->passes()){

            $contact = new Contact();
            $contact->name = $input['name'];
            $contact->email = $input['email'];
            $contact->message = $input['message'];
            $contact->save();

            if($contact->save() == 1){

                return Redirect::to('../contact')->with('result', '2');

            }
            else{

                return Redirect::to('../contact')->with('result', '1');
            }
        }
        else{
            return Redirect::to('../contact')->with_errors($validate);

        }
    }*/

	/*public function action_logout(){

		Auth::logout();

		return Redirect::to('login');

	}*/

}