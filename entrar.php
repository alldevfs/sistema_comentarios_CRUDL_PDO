<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de comentários</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo-logar.css">
</head>
<body class="fadeIn">
	<header>
		<h2>Allan Victor Developer</h2>
	</header>
	<section>
		<div><h3>Tela de login</h3></div>	
		<div>
			<form method="POST">
				<input type="text" name="email" placeholder="Seu e-mail . . . " required class="campos" autocomplete="off"><br><br><br><br>
				<input type="password" name="senha" required class="campos">
				<br><br>
				<input type="submit" value="Entrar" class="btn-logar">
			</form>
			<div id="links">
				<a href="cadastrar.php">Registre-se</a>
			</div>
		</div>
	</section>
	<footer>
		<p>&copy; Allan Victor</p>
	</footer>
</body>
</html>
<?php require_once 'verificaLogin.php' ?>