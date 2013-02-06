
<html>
<head>

    <meta charset="utf-8">
    <title>title</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    {{ Asset::container('bootstrapper')->styles(); }}
    {{ Asset::styles(); }}

</head>

<body>

<div class="navbar" id="header">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <img src="img/logo.png">

    <div class="nav-collapse collapse" id="menu">
        <ul class="nav">
            <li><a href="principal">Principal</a></li>
            <li><a href="sobrenos">Sobre Nós</a></li>
            <li><a href="solucoes">Soluções</a></li>
            <li><a href="contato">Contato</a></li>
        </ul>
    </div>
</div>




	
	<!--@include('layouts/header')-->

    <br><br><br><br><br><br><br><br><br><br><br><br>
	<div id="content">

		@yield('banner')
		@yield('conteudo')

	</div>

	@include('layouts/footer')
    {{ Asset::container('bootstrapper')->scripts(); }}

</body>

</html>