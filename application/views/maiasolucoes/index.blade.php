@layout('layouts/default')

@section('title')

    Página Inicial

@endsection

@section('link_select')

<?php $link = 'main';?>

@endsection

@section('banner')

    <div class="row" style="background-color: #f8b9b7;">

        <div class="row">

            <img src="img/arrow.png" class="span1">

            <div class="span9">

                <h1>Temos uma única paixão:<br>
                    Ajudar nossos clientes a desenvolver seu potencial</h1>
                    <br />
                    <p class="">Nós fazemos isso criando soluções intuitivas e que funcionam de verdade.</p>
                    <a href="solutions">Saiba Mais »</a>

                </div>

            </div>

        </div>

@endsection
