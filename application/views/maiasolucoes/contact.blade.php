@layout('layouts/default')

@section('analytics')

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-40076393-1', 'maiasolucoes.com.br');
        ga('send', 'pageview');

    </script>

@endsection

@section('meta')

    <meta name="google-site-verification" content="-jdv5nYhJIa7owgQgGffC4HXt7d9UIr8cuCrmTHjnD4" />
    <meta name="description" content="Entre em contato com a Maia Soluções para obter mais informações sobre os nossos serviços e tire suas dúvidas. Estamos à disposição para atendê-lo(a)"/>
    <meta name="keywords" content=" maia soluções, maia soluções em ti, contato software, contato negocio, contato serviço, contato barato,contato qualidade"/>

@endsection

@section('link_select')

    <?php $link = 'contact';?>

@endsection

@section('title')

    Maia Soluções em TI - Contato para negociar uma solução para você.

@endsection

@section('gtmanager')

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PZVX"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PZVX');</script>
    <!-- End Google Tag Manager -->

@endsection

@section('facebook')

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

@endsection

@section('script')

        <script type="text/javascript">
            $(function () {
                $('.alert').alert('close');
            });

        </script>

@endsection

@section('content')

<div class="row offset1 downset1">
	<div class="span5">
		<h1>Telefone:</h1>
		<h4>(12) 3912-7779</h4>
		<h1>Email:</h1><h4>contato@maiasolucoes.com.br</h4>
        <br />
        <div style="float: left;" class="fb-like-box" data-href="http://www.facebook.com/pages/Maia-Solu%C3%A7%C3%B5es-em-TI/448484765235098?ref=ts&amp;fref=ts" data-width="290" data-show-faces="true" data-stream="false" data-border-color="#999999" data-header="false"></div>
	</div>

	<!--  0 erro
	      1 sucesso-->

	@if (Session::get('result')==1)

	    <div class="alert alert-error">
	        <a class="close" data-dismiss="alert" href="#">&times;</a>
	        <b>Erro na inser&ccedil;&atilde;o no banco de dados.</b>
	    </div>

	@endif

	@if (Session::get('result')==2)

	    <div class="alert alert-success">
	        <a class="close" data-dismiss="alert" href="#">&times;</a>
	        <b>Email enviado com sucesso.</b>
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

		{{ Form::text('name', '', array('class'=>'span4')) }}

		{{ Form::label('email', 'Email') }}

	    @if ($errors->has('email'))

	        <div class="alert alert-error">
	            <a class="close" data-dismiss="alert" href="#">&times;</a>
	            <b>{{ $errors->first('email') }}</b>
	        </div>

	    @endif

	    {{ Form::email('email', '', array('class'=>'span4 input')) }}

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
@endsection