<?php

class Admin_Controller extends Base_Controller {

    public function action_index()
    {
        $messages = Contact::all();
        /*dd($messages);*/

        return View::make('login.contacts')->with(array('messages' => $messages));

    }

}