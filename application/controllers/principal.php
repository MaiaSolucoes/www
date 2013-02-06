<?php

class Principal_Controller extends Base_Controller {

<<<<<<< HEAD
    function __construct(){

        Asset::add('style', 'css/style.css');
        Asset::container('bootstrapper')->styles();

    }

    public function action_index()
    {
        return View::make('layouts.default');
    }

}

=======
	function __construct(){

		Asset::add('style', 'css/style.css');

	}

	public function action_index()
	{
		return View::make('maiasolucoes.index');
	}

}
>>>>>>> 22
