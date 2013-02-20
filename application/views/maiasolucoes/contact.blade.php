@layout('layouts/default')

@section('title')

    Contato

@endsection

@section('content')

    <div id="contact_area">

        <div id="contact" class="offset">

            <h1>Telefone:</h1>
            <h4>(12) 3906-0348</h4>
            <h4>(12) 9752-7325</h4>
            <h1>Email:</h1><h4>maia@maiasolucoes.com.br</h4>

        </div>

        <div id="form">

            <!--  0 erro
                  1 sucesso-->

            @if (Session::get('result')==1)

                <div class="alert alert-error">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    <b>Mensagem de erro(erro ao inserir no banco)</b>
                </div>

            @endif

            @if (Session::get('result')==2)

                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    <b>Mensagem de sucesso(inserida no banco).</b>
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

                {{ Form::text('name', '', array('class'=>'span4', 'style' => 'height: 30px;')) }}

                {{ Form::label('email', 'Email') }}

                @if ($errors->has('email'))

                    <div class="alert alert-error">
                        <a class="close" data-dismiss="alert" href="#">&times;</a>
                        <b>{{ $errors->first('email') }}</b>
                    </div>

                @endif

                {{ Form::email('email', '', array('class'=>'span4 input', 'style' => 'height: 30px;')) }}

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

    </div>

@endsection