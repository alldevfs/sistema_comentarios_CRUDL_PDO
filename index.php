<?php require_once 'buscaUsuario.php'; ?>
<?php require_once 'header.php' ?>
<?php 
if(isset($info['nome'])) { ?>
	<h2 id="saudacao">Você está na página  do  <?php echo $info['nome']; ?>.</h2>;
<?php } else {  ?>
	<h2>Você está na página inicial.</h2>
	<?php } ?>
	<?php require_once 'footer.php' ?>