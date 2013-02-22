@layout('layouts/default')

@section('title')

    Sobre Nós

@endsection

@section('link_select')

    <?php $link = 'about';?>

@endsection

@section('content')

	<div id="box">

		<div class="p box1">
	
			<h4>Nossa proposta</h4>
			<p class="clear">
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

		<div class="p box1">
			<h4>Missão, Visão e Valores</h4>
			<p class="clear">
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

	<div class="clear"></div>

@endsection