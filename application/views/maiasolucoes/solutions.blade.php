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

    <meta name="description" content="Crie campanhas de marketing personalizadas de acordo com o perfil dos seus clientes e acompanhe os resultados em tempo
                real. Tudo com preço baixo"/>
    <meta name="keywords" content="preço, baixo, tempo, real, personalizar, personalizada, acompanhe, controle, negócio, casa, celular"/>

@endsection

@section('title')

    Maia Soluções em TI - Controle do seu negócio, seja no trabalho, em casa ou no seu celular

@endsection

@section('link_select')

    <?php $link = 'solutions';?>

@endsection

@section('content')

<div class="row offset1 downset1">

    <div class="row">
        <div class="span5">
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