<?php

class Principal_Controller extends Base_Controller {

    function __construct(){

        Asset::add('style', 'css/style.css');
        Asset::container('bootstrapper')->styles();

    }

    public function action_index()
    {
        return View::make('layouts.default');
    }

}

