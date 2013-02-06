@layout('layouts/default')

@section('title')
    Contato
@endsection

@section('conteudo')

	<div id="contato_area">

		<div id="contato" class="offset">

			<h1>Telefone:</h1>
			<h4>(12) 3906-0348</h4>
			<h4>(12) 9752-7325</h4>
			<h1>Email:</h1><h4>maia@maiasolucoes.com.br</h4>

		</div>

		<div id="form">

		    {{ Form::open(URL::to(''), 'POST', array('class'=>'span4')) }}

			    {{ Form::label('nome', 'Seu nome') }}
			    {{ Form::text('nome', '', array('class'=>'span4')) }}

			    {{ Form::label('email', 'Email') }}
			    {{ Form::text('email', '', array('class'=>'span4')) }}

			    {{ Form::label('message', 'Mensagem') }}
			    {{ Form::textarea('message', '', array('class'=>'span4')) }}

			    <br /><br />
			    {{ Form::submit('Enviar', array('class'=>'btn btn-inverse')) }}

		    {{ Form::close() }}

		</div>

	</div>

@endsection