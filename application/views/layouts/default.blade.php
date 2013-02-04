<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    {{ Asset::container('bootstrapper')->styles(); }}
	{{ Asset::styles(); }}
</head>

<body>
	
	@include('layouts/header')

	<div id="content">

		@yield('banner')
		@yield('conteudo')

	</div>

	@include('layouts/footer')

</body>

</html>