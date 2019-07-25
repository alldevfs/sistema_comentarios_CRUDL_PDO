<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<!-- ... -->
	<title>Sistema de Comentário</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<nav id="nav-1">
		<a class="link-1" href="index.php">Inicio</a>
		<a class="link-1" href="descussao.php">Assuntos</a>

		<?php if (isset($_SESSION['master'])) { ?>
			<a class="link-1" href="dados.php">Dados</a>
		<?php } ?> 
		<?php if (isset($_SESSION['id'])) { ?>
			<a class="link-1" href="sair.php">Sair</a>
		<?php } else { ?>
			<a class="link-1" href="entrar.php">Entrar</a>
		<?php } ?>
	</nav>