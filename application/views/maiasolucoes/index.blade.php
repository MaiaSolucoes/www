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
    <meta name="keywords" content="maia soluções,maia soluções em TI, tecnologia da informação, ajudar, desenvolver seu potencial,intuitivas, negocio bom,negocio que funcionam, verdade,qualidade, software,criar proprio negocio"/>
    <meta name="robots" content="index, follow">

@endsection

@section('link_select')

    <?php $link = 'main';?>

@endsection

@section('title')

    Maia Soluções em TI - Controle e administre o seu próprio négocio

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
