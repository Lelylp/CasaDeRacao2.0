<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/signin.css">
	<title>Aula Bootstrap</title>
</head>

<body class="text-center">
	<form class="form-signin" action="interna.php">
		<img class="mb-4" src="img/w.png" alt="" width="72" height="72">
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
		<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
	</form>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>