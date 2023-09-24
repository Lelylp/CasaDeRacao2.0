<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">

	<title>Aula Bootstrap</title>
</head>

<body>
	<header class="container">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="#"><img src="img/Logo 3d.png" alt="Logo do dev leo fulco" class="w-75"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
				aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#sobre">Sobre<span class="sr-only">(atual)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contato">Contato</a>
					</li>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projetos</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="#saas">Saas</a>
							<a class="dropdown-item" href="#spa">SPA</a>
							<a class="dropdown-item" href="#api">API REST</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>

	</header>