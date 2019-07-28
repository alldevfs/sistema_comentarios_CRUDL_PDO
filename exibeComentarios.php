<?php 
require_once 'Global.php';

try {
	$comentarios = new Comentario();
	$dadoComentarios = $comentarios->buscarComentario();
	$_SESSION['sessaoComentarios'] = $dadoComentarios;
} catch (Exception $e) {
	Erro::tratarErro($e);
}