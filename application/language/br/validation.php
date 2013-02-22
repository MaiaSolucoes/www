<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"       => "O :attribute deve ser aceite.",
	"active_url"     => "Este campo não é uma URL válida.",
	"after"          => "Este campo deve ser uma data após :date.",
	"alpha"          => "Este campo só pode conter letras.",
	"alpha_dash"     => "Este campo só pode conter letras, números e traços.",
	"alpha_num"      => "Este campo só pode conter letras e números.",
	"before"         => "Este campo deve ser uma data anterior à :date.",
	"between"        => array(
		"numeric" => "O valor deste campo deve estar entre :min - :max.",
		"file"    => "O valor deste campo deve estar entre :min - :max kilobytes.",
		"string"  => "O valor deste campo deve estar entre :min - :max caracteres.",
	),
	"confirmed"      => "O :attribute confirmação não coincide.",
	"different"      => "O :attribute e :other devem ser diferentes.",
	"email"          => "O :attribute não é um e-mail válido.",
	"exists"         => "O :attribute selecionado é inválido.",
	"image"          => "Este campo deve ser uma imagem.",
	"in"             => "O valor deste campo selecionado é inválido.",
	"integer"        => "Este campo deve ser um inteiro.",
	"ip"             => "Este campo deve ser um endereço IP válido.",
	"match"          => "O formato deste campo é inválido.",
	"max"            => array(
		"numeric" => "O valor deste campo deve ser inferior a :max.",
		"file"    => "O valor deste campo deve ser inferior a :max kilobytes.",
		"string"  => "O valor deste campo deve ser inferior a :max caracteres.",
	),
	"mimes"          => "O :attribute deve ser um arquivo do tipo: :values.",
	"min"            => array(
		"numeric" => "O :attribute deve conter pelo menos :min.",
		"file"    => "O :attribute deve conter pelo menos :min kilobytes.",
		"string"  => "O :attribute deve conter pelo menos :min caracteres.",
	),
	"not_in"         => "O :attribute selecionado é inválido.",
	"numeric"        => "O :attribute deve ser um número.",
	"required"       => "Este campo deve ser preenchido.",
	"same"           => "O :attribute e :other devem ser iguais.",
	"size"           => array(
		"numeric" => "O :attribute deve ser :size.",
		"file"    => "O :attribute deve ter :size kilobyte.",
		"string"  => "O :attribute deve ter :size caracteres.",
	),
	"unique"         => "Este :attribute já existe.",
	"url"            => "O formato deste campo é inválido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(),

);