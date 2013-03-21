<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description"
		  content="Temos uma única paixão: Ajudar nossos clientes a desenvolver seu potencial. Nós fazemos isso criando soluções intuitivas e que funcionam de verdade."/>
	<meta name="keywords"
		  content="tecnologia, internet, site, criacao de site, erp, crm, relacionamento, cliente, tecnologia, php, web, empresa, sjc, software"/>
	<meta http-equiv="Content-Language" content="pt-br"/>

	<title>@yield('title')</title>

    <link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
    <link rel='shortcut icon' href='/favicon.png' />

    {{ Asset::container('bootstrapper')->styles(); }}
    {{ Asset::styles(); }}

    @yield('script')

</head>

<body>
<section id="wrap">
    <section class="container" id="main">

        <section class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="nav-collapse collapse">

                        @if(Pulsar::check())
                            <div class="brand">
                                Bem vindo, {{ Pulsar::who()->results[0]->first_name }} {{ HTML::link('../admin/logout','Logout') }}
                            </div>
                        @else
                            {{ Form::open(URL::to('../admin/login'), 'POST', array('class'=>'navbar-form pull-right')) }}
                                {{ Form::text('email', '', array('class'=>'span3', 'placeholder="Email"')) }}
                                {{ Form::password('password',array('class'=>'span3', 'placeholder="Senha"')) }}
                                {{ Form::submit('Entrar', array('class'=>'btn btn-inverse')) }}
                            {{ Form::close() }}
                        @endif

                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </section>

        @include('layouts/header')

		@yield('banner')

        @yield('content')

    </section>
</section>

@include('layouts/footer')

{{ Asset::container('bootstrapper')->scripts(); }}
{{ Asset::scripts(); }}

</body>

</html>