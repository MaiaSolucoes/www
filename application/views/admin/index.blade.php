@layout('layouts/default')

@section('title')

    Administração

@endsection

@section('link_select')

<?php $link = '';?>

@endsection

@section('content')

	<h1 class="offset4">Login</h1>

    @if (Session::get('result')==1)
        <div class="alert alert-error span3 offset4">
	        <a class="close" data-dismiss="alert" href="#">&times;</a>
	        <b>Usu&aacute;rio e/ou senha inv&aacute;lidos.</b>
        </div>
    @endif

    {{ Form::open(URL::to('../admin/login'), 'POST', array('class'=>'offset4 well span3')) }}

    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', '', array('class'=>'span3')) }}

    {{ Form::label('password', 'Senha') }}
    {{ Form::password('password',array('class'=>'span3')) }}

    <br /><br />

    {{ Form::submit('Enviar', array('class'=>'btn btn-inverse')) }}

    {{ Form::close() }}

@endsection