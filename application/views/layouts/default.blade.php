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

	<script type="text/javascript">
		$(function () {
			$('.alert').alert('close');
		});

	</script>

</head>

<body>
<div id="all">

    <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Project name</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
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
{{ Asset::container('bootstrapper')->scripts(); }}

</body>

</html>