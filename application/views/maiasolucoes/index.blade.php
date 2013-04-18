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
    <meta name="description" content="A empresa Maia Soluções tem uma única paixão: Ajudar nossos clientes a desenvolver seu potencial e nós fazemos isso criando soluções intuitivas e que funcionam de verdade"/>
    <meta name="keywords" content="maia, soluções,solucoes,solucao,solução,TI, tecnologia,informação, ajudar, desenvolver, potencial,intuitivas, funcionam, verdade,qualidade, software"/>
    <meta name="robots" content="index, follow">

@endsection

@section('link_select')

    <?php $link = 'main';?>

@endsection

@section('title')

    Maia Soluções em TI - Controle o seu négocio

@endsection

@section('banner')

    <div class="row offset1 downset1">

        <div class="row">

            <div class="span9">

                <h2>Temos uma única paixão:</h2>
                <h2>Ajudar nossos clientes a desenvolver seu potencial</h2>
                <br />
                <div class="span1">
                    <img src="img/arrow.png">
                </div>
                <h4 class="offset1">Nós fazemos isso criando soluções intuitivas e que funcionam de verdade.</h4>
                <a href="solutions" class="offset5">Saiba Mais »</a>

            </div>

        </div>

    </div>
    </div>
@endsection
