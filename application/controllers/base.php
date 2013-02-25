<?php

class Base_Controller extends \Laravel\Routing\Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */

    function __construct() {

        Asset::add('style', 'css/style.css');

    }

	public function __call($method, $parameters) {

		return Response::error('404');

    }

}