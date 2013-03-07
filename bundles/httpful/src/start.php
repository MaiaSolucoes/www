<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ricardo
 * Date: 07/03/13
 * Time: 09:40
 * To change this template use File | Settings | File Templates.
 */
Autoloader::map(array(
	'Httpful\Bootstrap' => Bundle::path('httpful').'src/Bootstrap.php',
	'Httpful\Http'      => Bundle::path('httpful').'src/Http.php',
	'Httpful\Httpful'   => Bundle::path('httpful').'src/Httpful.php',
	'Httpful\Mime'      => Bundle::path('httpful').'src/Mime.php',
	'Httpful\Request'   => Bundle::path('httpful').'src/Request.php',
	'Httpful\Response'  => Bundle::path('httpful').'src/Response.php',
	'Httpful\Handlers\CsvHandler'           => Bundle::path('httpful').'src/Handlers/CsvHandler.php',
	'Httpful\Handlers\FormHandler'          => Bundle::path('httpful').'src/Handlers/FormHandler.php',
	'Httpful\Handlers\JsonHandler'          => Bundle::path('httpful').'src/Handlers/JsonHandler.php',
	'Httpful\Handlers\MimeHandlerAdapter'   => Bundle::path('httpful').'src/Handlers/MimeHandlerAdapter.php',
	'Httpful\Handlers\XHtmlHandler'         => Bundle::path('httpful').'src/Handlers/XhtmlHandler.php',
	'Httpful\Handlers\XmlHandler'           => Bundle::path('httpful').'src/Handlers/XmlHandler.php',
));

$handlers = array(
	\Httpful\Mime::JSON => new \Httpful\Handlers\JsonHandler(),
	\Httpful\Mime::XML  => new \Httpful\Handlers\XmlHandler(),
	\Httpful\Mime::FORM => new \Httpful\Handlers\FormHandler(),
	\Httpful\Mime::CSV  => new \Httpful\Handlers\CsvHandler(),
);

foreach ($handlers as $mime => $handler) {
	Httpful\Httpful::register($mime, $handler);
}

class_alias('Httpful\Request', 'Httpful');

\Httpful\Bootstrap::init();