<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de comentários</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo-cadastrar.css">
</head>
<body class="fadeIn">
	<header>
		<h2>Tela de cadastro</h2>
	</header>
	<section>
		<div>
			<h3>Preencha os campos abaixo</h3>
		</div>	
		<div class="box-limit">
			<form method="POST" action="#efetuar-cadastro.php">
				<label>Nome:* </label>
				<input type="text" name="nome" placeholder="Primeiro e segundo nome.." required class="campos"><br>
				<label>E-mail: </label>
				<input type="text" name="login" placeholder="Seu e-mail de acesso.." required class="campos"><br>
				<label>Senha:</label>
				<input type="password" name="senha" required class="campos"><br>
				<label>Confirme a senha:* </label>
				<input type="password" name="senha-conf" required class="campo-conf"><br>
				<br>
				<center><input type="submit" value="Cadastrar" class="btn-logar"></center>
			</form>
		</div>
	</section>
	<footer>
		<p>&copy; Allan Victor</p>
	</footer>
	<script type="text/javascript" src="js/Sistema-hora-do-dia.js"></script>
</body>
</html>