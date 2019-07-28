<?php
require_once 'Global.php';
try {
	session_start();
	$dadoComentarios = new Comentario();
	if (isset($_GET['id_comentario'])) {
		$id_ex = addslashes($_GET['id_comentario']);
		$id_us = addslashes($_SESSION['id']);
		if (isset($_SESSION['master'])) {
			// echo "<script> alert('MASTER'); </script>";
			$dadoComentarios->excluirComentario($id_ex, $id_us);
		} elseif (isset($_SESSION['id'])) {
			// echo "<script> alert('USER'); </script>";
			$dadoComentarios->excluirComentario($id_ex, $id_us);
		}
	}
	header('Location: descussao.php');
} catch (Exception $e) {
	Erro::tratarErro($e);
}
