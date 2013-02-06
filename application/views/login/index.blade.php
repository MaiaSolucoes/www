@layout('layouts/default')

@section('conteudo')

<div id="container">


    <h1 class="offset4">Login</h1>

	@if(!Auth::check())
	
	    {{ Form::open(URL::to('login/login'), 'POST', array('class'=>'offset4 well span4')) }}

		    {{ Form::label('email', 'Email') }}
		    {{ Form::text('email', '', array('class'=>'span4')) }}

		    {{ Form::label('password', 'Password') }}
		    {{ Form::password('password') }}

		    <br /><br />
		    {{ Form::submit('Enviar', array('class'=>'btn btn-inverse')) }}

	    {{ Form::close() }}
	

	@else

		<p class="offset4 well span4"> Olá {{ Auth::User()->email }}, {{ HTML::link('login/logout', 'Logout') }}</p>

	@endif

	<h1 class="offset4">Cadastro</h1>
	
	{{ Form::open(URL::to('login/new'), 'POST', array('class'=>'offset4 well span4')) }}

		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', '', array('class'=>'span4')) }}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}

		<br /><br />
		{{ Form::submit('Enviar', array('class'=>'btn btn-success')) }}

	{{ Form::close() }}
	


</div>

@endsection