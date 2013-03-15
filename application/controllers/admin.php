<?php

class Admin_Controller extends Base_Controller {

    public static $cache_token;

    public static $cache_user;

	public function action_index() {

        //return Pulsar::check() ? Pulsar::check().'truee' : 'falseee';
        if(Pulsar::check()){

            //return 'admin check ON';
            return Redirect::to('../admin/contacts');

        }

        //return 'admin check OFF';
		return View::make('admin.index');

	}

	public function action_login() {

        $input = Input::all();

        if(empty($input)) {

            //$token = isset($input['token']) ? $input['token'] : '';

            if(Pulsar::check()) {

                //return 'admin check login ONN';
                return Redirect::to('../admin/contacts');

            }

            //return 'admin check login OFF';
            return Redirect::to('../admin');

        } else {


            $token = Pulsar::login(array('username' => $input['email'], 'password' => $input['password']));
            //return dd(($token)).'aki';
            //$user = Pulsar::who();
            //return Redirect::to('../admin/contacts/')->with('token', $token, 'user', $user);
            //return dd(Pulsar::check()).'pol';// ? 'truee' : 'falseee';
            if(!$token){
                //? Pulsar::$cache_user.'  =user     '.Pulsar::$cache_token.' =token'
                return dd(Pulsar::check()).'pol';// ? 'truee' : 'falseee';
                //return Redirect::to('../admin');
            } else {
                self::$cache_token = $token;
                self::$cache_user = $input['email'];
                //return dd(Pulsar::check().'posdfsfsdl');// ? 'truee' : 'falseee';
                return Redirect::to('../admin/contacts');

            }




            //return 'admin check login ON foi';
            //return Redirect::to('../admin/contacts')->with(array('username' => $username, 'token' => $token));

        }

	}

    public function action_contacts($page=1) {

        //return 'user='.self::$cache_user.'       tk= '.self::$cache_token;

        //return Pulsar::$cache_user.'  =user     '.Pulsar::$cache_token.' =token';
        //return dd(Pulsar::check());// ? 'truee' : 'falseee';

        if(!Pulsar::check()) {

            //return 'admin check contact OFFFF';
            return Redirect::to('../admin');

        }
        $user = Cache::get('username');
        $per_page = 15;
        $messages = DB::table('contacts')->paginate($per_page, array('id', 'name','email','message','ip', 'created_at'));

        //return 'admin check contact ONdgdfgdf';
		return View::make('admin.contacts')->with(array('messages' => $messages,'page' => $page, 'user' => $user));

    }

	public function action_logout(){
		Pulsar::logout();
		return Redirect::to('../admin');

	}

}