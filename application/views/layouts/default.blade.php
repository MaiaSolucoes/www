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

    <!--[if IE]> <script>alert('IE sucks bro.');</script> <![endif]-->
    <!--[if IE]>
    <link href="bootstrap_ie6/ie6.min.css" rel="stylesheet">

    <link href="css/fix_ie.css" rel="stylesheet">
    <![endif]-->

    @yield('script')

</head>

<body>
<div id="all">
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
                                {{ Form::text('email', '', array('class'=>'span3', 'style' => 'height: 30px;', 'placeholder="Login"')) }}
                                {{ Form::password('password',array('class'=>'span3', 'style' => 'height: 30px;', 'placeholder="Senha"')) }}
                                {{ Form::submit('Entrar', array('class'=>'btn btn-inverse')) }}
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
</div>

<script>
    $(function(){if($.browser.msie&&parseInt($.browser.version,10)===6){$('.row div[class^="span"]:last-child').addClass("last-child");$('[class*="span"]').addClass("margin-left-20");$(':button[class="btn"], :reset[class="btn"], :submit[class="btn"], input[type="button"]').addClass("button-reset");$(":checkbox").addClass("input-checkbox");$('[class^="icon-"], [class*=" icon-"]').addClass("icon-sprite");$(".pagination li:first-child a").addClass("pagination-first-child")}})
    $('.row div[class^="span"]:last-child').addClass('last-child');
</script>
{{ Asset::container('bootstrapper')->scripts(); }}
{{ Asset::scripts(); }}

</body>

</html>