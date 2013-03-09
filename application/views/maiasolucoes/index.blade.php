@layout('layouts/default')

@section('title')

    Página Inicial

@endsection

@section('link_select')

<?php $link = 'main';?>

@endsection

@section('banner')

    <div class="row offset1 downset1">

        <div class="row">

            <img src="img/arrow.png" class="span1">

            <div class="span9">

                <h1>Temos uma única paixão:</h1>
                <h1>Ajudar nossos clientes a desenvolver seu potencial</h1>
                <br />
                <p class="offset1">Nós fazemos isso criando soluções intuitivas e que funcionam de verdade.</p>
                <a href="solutions" class="offset5">Saiba Mais »</a>

                </div>

            </div>

        </div>

@endsection
