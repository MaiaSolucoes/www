<html>
<head>

    <meta charset="utf-8">

    <title>@yield('title')</title>

    <link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
    <link rel='shortcut icon' href='/favicon.png' />
    {{ Asset::container('bootstrapper')->styles(); }}
    {{ Asset::styles(); }}

    <script type="text/javascript">
        $(function(){
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