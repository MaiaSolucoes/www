<html>
<head>

    <meta charset="utf-8">

    <title>@yield('title')</title>

    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
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

	@include('layouts/header')

	<div id="content">

		@yield('banner')

        @yield('content')

	</div>
	<div class="footer" style="border-top: 1px solid #c6c6c6;">
		@include('layouts/footer')
	</div>
    {{ Asset::container('bootstrapper')->scripts(); }}

</body>

</html>