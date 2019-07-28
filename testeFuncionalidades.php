<?php 
require_once 'Global.php';

try {
	session_start();
	$coments = new Comentario();
	$id_ex = addslashes($_GET['id_comentario']);
	$id_us = addslashes($_SESSION['id']);
	// echo $id_ex;
	// echo "<hr>";
	// echo $id_us;


	$coments->excluirComentario($id_ex,$id_us);
	
} catch (Exception $e) {
	Erro::tratarErro($e);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Testes</title>
</head>
<body>
	<!-- <table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Senha</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($lista as $linha): ?>
				<tr>
					<td><a href="detalhe.php" class="btn btn-link"><?php echo $linha['id'] ?></a></td>
					<td><a href="detalhe.php" class="btn btn-link"><?php echo $linha['nome'] ?></a></td>
					<td><a href="detalhe.php" class="btn btn-link"><?php echo $linha['email'] ?></a></td>
					<td><a href="detalhe.php" class="btn btn-link"><?php echo $linha['senha'] ?></a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table> -->
</body>
</html>