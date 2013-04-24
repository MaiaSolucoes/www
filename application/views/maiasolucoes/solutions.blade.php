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
    <meta name="msvalidate.01" content="48F5AC008B09E4F47425420073582C18" />
    <meta name="description" content="Crie campanhas de marketing personalizadas de acordo com o perfil cada um dos seus clientes e acompanhe os resultados em tempo real. Tudo com preço baixo"/>
    <meta name="keywords" content=" maia soluções, maia soluções em ti, preço baixo, tempo real, personalizar, personalizada, acompanhe, controle, negócio, controle de casa, controle do celular"/>

@endsection

@section('link_select')

    <?php $link = 'solutions';?>

@endsection

@section('title')

    Maia Soluções em TI - Controle do seu negócio, seja no trabalho, em casa ou no seu celular

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

    <div class="row">
        <div class="span5">
            <h1 class="hidden">Controle do seu próprio negócio</h1>
            <h4>Seu negócio no caminho certo</h4>
            <p>
                Nós trabalhamos duro para entregar a você as ferramentas necessárias para tornar a sua empresa mais
                competitiva e capaz de tomar decisões com mais velocidade. Nossa ferramenta de micro-ERP permite
                armazenar e recuperar todas as informações da sua empresa em um modelo simplificado. Tenha sempre em
                mãos o controle do seu negócio, seja no trabalho, em casa ou no seu celular.
                <br />
                Nós não gostamos de telas de cadastro sem sentido e de sistemas difíceis de se entender. Temos a
                preocupação de entregar ferramentas realmente úteis e fáceis de se usar. Nossa filosofia é simples:
                "faça apenas o necessário e bem feito".
            </p>
        </div>

        <div class="span5">
            <h4>Aproxime-se dos seus clientes</h4>
            <p>
                Nossa ferramenta de relacionamento aproxima sua você dos seus clientes aonde eles estiverem. Crie campanhas
                de marketing personalizadas de acordo com o perfil dos seus clientes e acompanhe os resultados em tempo
                real. Envie mensagens de e-mail ou SMS automaticamente (por exemplo, em aniversários ou outras datas
                importantes). Mantenha contato e veja o que seus clientes dizem dos seus produtos nas redes sociais.
                Tudo em uma ferramenta simples, direta e elegante.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="span5">
            <h4>Aumente sua presença</h4>
            <p>
                Esteja online 24 horas por dia, 7 dias por semana e exponha o seu negócio na Internet. Temos uma
                ferramenta simples que permite construir seu site em minutos.
                Se desejar, temos soluções personalizadas para vendas online, tudo integrado com todas as ferramentas que
                disponibilizamos.
            </p>
        </div>

        <div class="span5">
            <h4>Pague somente o que usar</h4>
            <p>
                Nossos contratos não possuem tempo mínimo de permanência e todos os serviços são ofertados sob demanda.
                Isso significa que você paga uma pequena quantia mensal pelo que utilizar. Recursos não utilizados não
                são cobrados e não existe uma taxa mínima para utilização de um recurso.
            </p>
        </div>
    </div>

</div>
@endsection