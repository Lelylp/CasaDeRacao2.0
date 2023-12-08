<?php include "header.php"; ?>
<main class="mt-7">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="first-slide mw-100" src="img/racao 1.png" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>ALL BREEDS</h1>
						
						<p><a class="btn btn-lg btn-darkblue" href="#contato" role="button">Quero saber mais</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="first-slide mw-100" src="img/racao 2.png" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1 class="text-white">HILLS</h1>
						
						<p><a class="btn btn-lg btn-darkblue" href="#contato" role="button">Quero saber mais</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="first-slide mw-100" src="img/racao 3.png" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>EUKANUBA</h1>
						<a class="btn btn-lg btn-darkblue" href="#contato" role="button">Quero saber mais</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Voltar</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Avançar</span>
		</a>
	</div>
	<br>

	<div class="container marketing">

		<!-- Aqui começa meu carrossel de icones -->
		<div class="row">
			<div class="col-md-4 mb-1">
				<div class="d-flex align-items-center justify-content-center mb-3">
					<img src="img/terceira.png">
					</img>
					<title>Placeholder</title>
					<rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
					</svg>
				</div>
				<h2 class="d-flex align-items-center justify-content-center mb-4">Ração Premier</h2>
				<p class="text-justify">Ótimas fontes de proteínas, livre de corantes
					Fórmula contém transgênicos
				</p>
				<div class="d-flex align-items-center justify-content-center">
					<p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
				</div>
				<div class="d-flex align-items-center justify-content-center">
					<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal1">Visualizar</button>
				</div>
			</div><!-- /.col-lg-4 -->
			<div class="col-md-4 mb-4">
				<div class="d-flex align-items-center justify-content-center mb-3">
					<img src="img/quarta.png" alt="">
				</div>
				<h2 class="d-flex align-items-center justify-content-center mb-3">Ração Golden</h2>
				<p class="text-justify">Proteína de boa qualidade,
					presença de componentes que ajudam na saúde intestinal e urinária,
					adição de ômegas 3 e 6 para beleza e saúde da pele e pelagem
				</p>
				<div class="d-flex align-items-center justify-content-center">
					<p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
				</div>
				<div class="d-flex align-items-center justify-content-center">
					<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal2">Visualizar</button>
				</div>
			</div><!-- /.col-lg-4 -->
			<div class="col-md-4 mb-4">
				<div class="d-flex align-items-center justify-content-center mb-3">
					<img src="img/segunda.png" alt="">
				</div>
				<h2 class="d-flex align-items-center justify-content-center mb-3">Ração Friskies</h2>
				<p class="text-justify">Deliciosa combinação de carne, peru, fígado e frango agora sem corantes artificiais .<br>
				Trato urinário saudável com 
				vitaminas e minerais essenciais.
				<div class="d-flex align-items-center justify-content-center">
					<p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
				</div>
				<div class="d-flex align-items-center justify-content-center">
					<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal3">Visualizar</button>
				</div>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->
	</div>
	<section id="projetos" class="row mx-auto justify-content-center"><!-- Aqui começa meus cards de projetos -->
		<div class="card my-3 mx-5" style="width: 18rem;">
			<img src="img/saas.png" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 id="saas" class="card-title">SaaS</h5>
				<p class="card-text">O Car Location é um sistema de gerenciamento e locação de veículos para pequenas e
					médias locadoras.</p>
				<a href="#" class="btn btn-primary">Visitar</a>
			</div>
		</div>

		<div class="card my-3 mx-5" style="width: 18rem;">
			<img src="img/spa.png" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 id="spa" class="card-title">SPA</h5>
				<p class="card-text">Uma solução Single Page Aplication que tem como principal objetivo agregar
					microserviços para modelos de sustentabilidade corporativas</p>
				<a href="#" class="btn btn-primary">Visitar</a>
			</div>
		</div>

		<div class="card my-3 mx-5" style="width: 18rem;">
			<img src="img/api.png" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 id="api" class="card-title">API REST FULL</h5>
				<p class="card-text">Uma API que faz o controle de marcação, acompanhamento e exclusão de consultas
					médicas para clínicas e hospitais.</p>
				<a href="#" class="btn btn-primary">Visitar</a>
			</div>
		</div>
	</section>
	

	<!-- Aqui começa o meu Modal 1 -->
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Linha Premier</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="img/Linha Premier.jpg" alt="" class="img-thumbnail">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

				</div>
			</div>
		</div>
	</div>

	<!-- Aqui começa o meu Modal 2 -->
	<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Linha Golden</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="img/Linha Golden.jpg" alt="" class="img-thumbnail">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

				</div>
			</div>
		</div>
	</div>

	<!-- Aqui começa o meu  Modal 3 -->
	<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Linha Friskies</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="img/Linha Friskies.jpg" alt="" class="img-thumbnail">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

				</div>
			</div>
		</div>
	</div>

	<section id="contato" class="mb-5"> <!-- Aqui começa os meus contatos -->
		<div class="container">
			<h2 class="text-center">Receba notícias e promoções</h2>
			<div class="row">
				<div class="col-md-6">
					<!-- Formulário de Contato -->
					<form>
						<div class="form-group">
							<label for="nome">Nome:</label>
							<input type="text" class="form-control" id="nome" placeholder="Seu nome">
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" id="email" placeholder="Seu email">
						</div>
						<div class="form-group">
							<label for="mensagem">Deixe suas observações:</label>
							<textarea class="form-control" id="mensagem" rows="4" placeholder="Sua mensagem"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Enviar Mensagem</button>
					</form>
				</div>
				<div class="col-md-6">
					<!-- Informações de Contato -->
					<h4>Onde Ficamos</h4>
					<p>Endereço: Av.Conselheiro Aguiar, 4010 - Boa Viagem - Recife/PE</p>
					<p>Telefone: (81) 9-9166-8155</p>
					<p>Email: devleofulco@gmail.com</p>
				</div>
			</div>
		</div>
	</section>




</main>

<?php include "footer.php"; ?>