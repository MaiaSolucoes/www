<?php

class Contato_Controller extends Base_Controller {

	function __construct(){

		Asset::add('style', 'css/style.css');

	}

	public function action_index()
	{
		return View::make('maiasolucoes.contato');
	}

}