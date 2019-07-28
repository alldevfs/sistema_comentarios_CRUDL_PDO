<?php 

require_once 'Global.php';
session_start();
$comentInser = new Comentario();
try {
	if (isset($_POST['texto'])) {
		$texto = addslashes($_POST['texto']);
		if (isset($_SESSION['master'])) {
			$comentInser->inserirComentario($_SESSION['id'], $texto);
		} elseif (isset($_SESSION['id'])) {
			$comentInser->inserirComentario($_SESSION['id'], $texto);
		}
	}
	header('Location: descussao.php');
} catch (Exception $e) {
	Erro::tratarErro($e);
}