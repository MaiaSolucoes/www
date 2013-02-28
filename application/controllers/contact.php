<?php
class Contact_Controller extends Base_Controller {

    private $roles = array(

        'name' => 'required',
        'email' => 'required',
        'message' => 'required'

    );

	public function action_index() {

		return View::make('maiasolucoes.contact');

    }

    public function action_process() {

        $input = Input::all();

        $validate = Validator::make($input,$this->roles);

        if($validate->passes()) {

            $contact = new Contact();
            $contact->name = $input['name'];
            $contact->email = $input['email'];
            $contact->message = $input['message'];
            $contact->ip = $_SERVER['REMOTE_ADDR'];

            $contact->save();

            if($contact->save() == 1) {

                return Redirect::to('../contact')->with('result', '2');

            } else {

                return Redirect::to('../contact')->with('result', '1');

            }
        } else {

            return Redirect::to('../contact')->with_errors($validate);

        }

    }

}