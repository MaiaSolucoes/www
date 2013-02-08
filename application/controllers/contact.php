<?php

class Contact_Controller extends Base_Controller {

    private $roles = array(
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'

    );



	public function action_index()
	{
		return View::make('maiasolucoes.contact');
	}

    public function action_process(){
        $input = Input::all();

        $validar = Validator::make($input,$this->roles);


        if($validar->passes()){

            $contact = new Contact();
            $contact->name = $input['name'];
            $contact->email = $input['email'];
            $contact->message = $input['message'];
            $contact->save();

            return Redirect::to('../contact')->with('success','Email enviado com sucesso.');


//            return 'passou';

        }
        else{
            return Redirect::to('../contact')->with_errors($validar);

        }


    }
}

