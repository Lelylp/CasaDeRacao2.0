<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		body {
			background: linear-gradient(to bottom right, #000000, #000066);
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			overflow: hidden;
		}

		.login-container {
			background: #fff;
			border: 2px solid #3498db;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
			padding: 20px;
			margin: 5%;
			max-width: 400px;
			/* Ajuste do tamanho se precisar mas acho que nao precisa */
			width: 100%;
			text-align: center;
			border-radius: 10px;
		}

		.form-signin {
			max-width: 100%;
		}

		.form-signin img {
			width: 100%;
			max-width: 400px;
			height: auto;
			margin-bottom: 20px;
			
		}

		.form-signin input {
			width: 100%;
			margin-bottom: 10px;
			padding: 10px;
			box-sizing: border-box;
			border: 1px solid #3498db;
			border-radius: 5px;
		}

		.form-signin button {
			width: 100%;
			padding: 10px;
			box-sizing: border-box;
			background-color: #3498db;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
	<title>Aula Bootstrap</title>
</head>

<body>
	<div class="login-container">
		<form class="form-signin" action="interna.php">
			<img class="mb-4" src="img\RA-ES-IMPORTADAS-27-11-2023.png" alt="" width="350" height="150">
			<h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
			<label for="inputEmail" class="sr-only">Endereço de email</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
			<label for="inputPassword" class="sr-only">Senha</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Lembrar de mim
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
			<p class="mt-5 mb-3 text-muted">&copy; By Leandresson Fulco 2023</p>
		</form>
	</div>

	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>