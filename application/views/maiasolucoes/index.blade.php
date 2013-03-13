@layout('layouts/default')

@section('title')

    Página Inicial

@endsection

@section('link_select')

<?php $link = 'main';?>

@endsection

@section('banner')

	


	<div id="banner">

		<h1>Temos uma única paixão:<br>
		Ajudar nossos clientes a desenvolver seu potencial</h1>
		<br />
		<p class="sentence_index">
			<img src="img/arrow.png" id="arrow">
			Nós fazemos isso criando soluções intuitivas e que funcionam de verdade.
		</p>

        <a href="solutions">Saiba Mais »</a>

	</div>

@endsection
