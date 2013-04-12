@layout('layouts/default')

@section('title')

    Contato

@endsection

@section('link_select')

<?php $link = 'contact';?>

@endsection

@section('script')
	<script type="text/javascript">
	    $(function () {
	        $('.alert').alert('close');
	    });

	</script>
@endsection

@section('content')

<div class="row offset1 downset1">
	<div class="span5">
		<h1>Telefone:</h1>
		<h4>(12) 3912-7779</h4>
		<h1>Email:</h1><h4>contato@maiasolucoes.com.br</h4>
	</div>

	<!--  0 erro
	      1 sucesso-->

	@if (Session::get('result')==1)

	    <div class="alert alert-error">
	        <a class="close" data-dismiss="alert" href="#">&times;</a>
	        <b>Erro na inser&ccedil;&atilde;o no banco de dados.</b>
	    </div>

	@endif

	@if (Session::get('result')==2)

	    <div class="alert alert-success">
	        <a class="close" data-dismiss="alert" href="#">&times;</a>
	        <b>Email enviado com sucesso.</b>
	    </div>

	@endif

	{{ Form::open(URL::to('/contact/process'), 'POST', array('class'=>'span4')) }}

		{{ Form::label('name', 'Seu nome') }}

		@if ($errors->has('name'))
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert" href="#">&times;</a>
				<b>{{ $errors->first('name') }}</b>
			</div>
		@endif

		{{ Form::text('name', '', array('class'=>'span4')) }}

		{{ Form::label('email', 'Email') }}

	    @if ($errors->has('email'))

	        <div class="alert alert-error">
	            <a class="close" data-dismiss="alert" href="#">&times;</a>
	            <b>{{ $errors->first('email') }}</b>
	        </div>

	    @endif

	    {{ Form::email('email', '', array('class'=>'span4 input')) }}

	    {{ Form::label('message', 'Mensagem') }}

	    @if ($errors->has('message'))

	        <div class="alert alert-error">
	            <a class="close" data-dismiss="alert" href="#">&times;</a>
	            <b>{{ $errors->first('message') }}</b>
	        </div>

	    @endif

	    {{ Form::textarea('message', '', array('class'=>'span4', 'style' => 'height: 130px;')) }}

	    <br /><br />
	    {{ Form::submit('Enviar', array('class'=>'btn btn-inverse')) }}

	{{ Form::close() }}
</div>
@endsection