<?php 
require_once 'Global.php';

try {
	$comentarios = new Comentario();
	$dadoComentarios = $comentarios->buscarComentario();
} catch (Exception $e) {
	Erro::tratarErro($e);
}