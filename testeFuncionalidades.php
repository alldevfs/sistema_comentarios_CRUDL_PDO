<?php 
require_once 'Global.php';
?>

<?php 
try {
	//Crie um GET para receber o valor id que será escluido. Apenas testes!
	$usuarios = new Usuario();
	//$usuarios->id = $_GET['id'];
	$usuarios->nome = "Allan";
	$usuarios->email = "allkes@outlook.com";
	$usuarios->senha = "1234";
	//$usuarios->inserirUsuario();
	//para zerar o AUTO_INCREMENT do id do banco use "ALTER TABLE usuarios AUTO_INCREMENT = 1";
	//$usuarios->excluirUsuario();
	$lista = $usuarios->listarUsuario();
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
	<table>
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
	</table>
</body>
</html>