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
			<form method="POST">
				<label>Nome:* </label>
				<input type="text" name="nome" placeholder="Primeiro e segundo nome.." required class="campos" maxlength="45"><br>
				<label>E-mail: </label>
				<input type="text" name="email" placeholder="Seu e-mail de acesso.." required class="campos" maxlength="45"><br>
				<label>Senha:</label>
				<input type="password" name="senha" required class="campos" maxlength="45"><br>
				<label>Confirme a senha:* </label>
				<input type="password" name="senhaConf" required class="campo-conf" maxlength="45"><br>
				<br>
				<center><input type="submit" value="Cadastrar" class="btn-logar"></center>
			</form>
		</div>
	</section>
	<footer>
		<p>&copy; Allan Victor</p>
	</footer>
</body>
</html>
<!-- 
// Verificar o uso do botão cadastrar;
// Guardar os dados nas variáveis;
// Enviar os dados;
// Verificar o tipo de retorno, caso sucesso ou caso de falha com o true e false; 
-->
<?php require_once 'VerificaCadastro.php'; ?>