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
    <meta name="description" content="
    Sabemos como são caros os softwares de gestão, então desenvolvemos soluções inteligentes para pequenos como nós.
    Transformando a TI (Tecnologia da Informação) em TN (Tecnologia dos Negócios)"/>
    <meta name="keywords" content=" maia soluções, maia soluções em ti, tecnologia informação,tecnologia negocio, barato,preço baixo,inovação, qualidade software"/>

@endsection

@section('link_select')

    <?php $link = 'about';?>

@endsection

@section('title')

Maia Soluções em TI - Qualidade de software, preço baixo e inovação

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

@section('content')

<div class="row offset1 downset1">
	<div class="span4">
	<h4>Nossa proposta</h4>
	<p class="">
		Somos uma pequena empresa e desenvolvemos soluções para os pequenos como nós. Nós sabemos o quanto
		somos importantes para a economia do país e também sabemos que os grandes softwares de gestão são muito
		caros.
		<br />
		Pensando nisso, criamos ferramentas simples, diretas e com uma linguagem próxima do cliente ao invés de
		telas complicadas e cheias de informações desnecessárias. Acreditamos que a tecnologia está a serviço
		das pessoas e dos negócios.
		<br />
		Estamos envolvidos em transformar a TI (Tecnologia da Informação) em TN (Tecnologia dos Negócios). Para
		isso, utilizamos boas práticas do mercado e as transmitimos aos nossos clientes na forma de serviço.
	</p>
    </div>

	<div class="span5">
	<h4>Missão, Visão e Valores</h4>
	<p class="">
		<strong>Missão</strong>
		<br />
		Desenvolver soluções inteligentes, maximizando valor para nossos clientes.
		<br /><br />
		<strong>Visão</strong>
		<br />
		Ser referência no Brasil em qualidade de software, preço baixo e inovação, através do investimento
		constante em pessoas e novas tecnologias.
		<br /><br />
		<strong>Valores</strong>
		<br />
		Ter uma conduta ética, honesta e transparente dentro e fora da empresa.
		<br />
		Ter foco e objetivo, priorizando resultados.
		<br />
		Ter respeito pelas pessoas e pelo meio ambiente.
		<br />
		Ter uma política de gestão em equipe.
	</p>
    </div>
</div>
<script>
@endsection