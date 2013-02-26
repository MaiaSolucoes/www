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
	@include('layouts/header')

	<div id="content">

		@yield('banner')

		@yield('content')

	</div>
	<div id="footer">
		@include('layouts/footer')
	</div>
</div>
{{ Asset::container('bootstrapper')->scripts(); }}

</body>

</html>