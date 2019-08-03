<?php require_once 'buscaUsuario.php'; ?>
<?php require_once 'Validacao.php'; ?>
<?php require_once 'listaDados.php'; ?>
<?php include 'header.php' ?>
<table id="tabela_dados">
	<tr id="tabela_titulo">
		<th>Id</th>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Quant. comentários</th>
	</tr>
	<?php foreach ($lista as $linha) : ?>
		<tr class="tabela_corpo">
			<td><?= $linha['id'] ?></td>
			<td><?= $linha['nome'] ?></td>
			<td><?= $linha['email'] ?></td>
			<td><center><?= $linha['quant_comentarios'] ?></center></td>
		</tr>
	<?php endforeach ?>

</table>