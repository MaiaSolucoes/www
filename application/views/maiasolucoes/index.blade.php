@layout('layouts/default')

@section('title')

    Maia Soluções em TI

@endsection

@section('link_select')

<?php $link = 'main';?>

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

@endsection
