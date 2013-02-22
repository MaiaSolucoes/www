@layout('layouts/default')

@section('title')

    Administração

@endsection

@section('content')

    <div id="contact_area">

        <div id="form">
            @if (Session::get('result')==1)

            <div class="alert alert-error pull-right">
                <a class="close" data-dismiss="alert" href="#">&times;</a>
                <b>Usu&aacute;rio e/ou senha inv&aacute;lidos.</b>
            </div>

            @endif

            <h1 class="offset4">Login</h1>

            {{ Form::open(URL::to('../admin/login'), 'POST', array('class'=>'offset4 well span3')) }}

            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', '', array('class'=>'span3', 'style' => 'height: 30px;')) }}

            {{ Form::label('password', 'Password') }}
            {{ Form::password('password',array('class'=>'span3', 'style' => 'height: 30px;')) }}

            <br /><br />

            {{ Form::submit('Enviar', array('class'=>'btn btn-inverse')) }}

            {{ Form::close() }}
        </div>
    </div>

@endsection