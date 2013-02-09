@layout('layouts/default')

@section('title')
    Contato
@endsection

@section('conteudo')

<div class="alert alert-success" >
    <a class="close" data-dismiss="alert" href="#">&times;</a>
    <h3>
        Sua mensagem foi enviada com sucesso.<br>
        Logo entraremos em contato com você.aaaa
    </h3>
</div>







<div id="contato_area">

		<div id="contato" class="offset">

			<h1>Telefone:</h1>
			<h4>(12) 3906-0348</h4>
			<h4>(12) 9752-7325</h4>
			<h1>Email:</h1><h4>maia@maiasolucoes.com.br</h4>

		</div>

		<div id="form">

		    {{ Form::open(URL::to('/contact/process'), 'POST', array('class'=>'span4')) }}

			    {{ Form::label('name', 'Seu nome') }}

                {{ $errors->has('name') ? $errors->first('name') : '' }}
			    {{ Form::text('name', '', array('class'=>'span4', 'style' => 'height: 30px;')) }}

			    {{ Form::label('email', 'Email') }}
			    {{ Form::email('email', '', array('class'=>'span4 input', 'style' => 'height: 30px;')) }}

			    {{ Form::label('message', 'Mensagem') }}
			    {{ Form::textarea('message', '', array('class'=>'span4')) }}

			    <br /><br />
			    {{ Form::submit('Enviar', array('class'=>'btn btn-inverse')) }}

		    {{ Form::close() }}


		</div>


	</div>

@endsection