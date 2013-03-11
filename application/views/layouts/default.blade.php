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
<div class="container">

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="nav-collapse collapse">

                    @if(Auth::check())
                    <div class="brand">
                        Bem vindo, {{ Auth::user()->email }} {{ HTML::link('../admin/logout','Logout') }}
                    </div>
                    @endif
                    @if(!Auth::check())
                        {{ Form::open(URL::to('../admin/login'), 'POST', array('class'=>'navbar-form pull-right')) }}
                            <input class="span3" type="text" placeholder="Email" style="height: 30px">
                            <input class="span2" type="password" placeholder="Senha" style="height: 30px">
                            <button type="submit" class="btn">Entrar</button>
                        {{ Form::close() }}
                    @endif

                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

    @include('layouts/header')

    @yield('banner')

    @yield('content')

    @include('layouts/footer')

</div>

{{ Asset::container('bootstrapper')->scripts(); }}
{{ Asset::scripts(); }}

</body>

</html>