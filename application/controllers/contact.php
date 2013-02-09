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

            if($contact->save() == 1){
                return Redirect::to('../message');

            }
            else{
                return 'nao foi';
            }

        }
        else{
            return Redirect::to('../contact')->with_errors($validar);

        }


    }
}




/*    <script type="text/javascript">
    function atualizaValor(){
        var finalidade;
        finalidade = $('#finalidade').val();
        $.ajax({url: "ajaxfinalidade.php?finalidade="+finalidade}).done(function(html) {
            if(finalidade == "finalidade"){
                $('#preco').html(html);
                $('#preco').attr('disabled','disabled');
            }else{
                $('#preco').removeAttr('disabled');
                $('#preco').html(html);
            }
        });
    }
</script>*/