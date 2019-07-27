<?php 
require_once 'Global.php';

try {
	$usuarios = new Usuario();
	$lista = $usuarios->listarUsuario();
} catch (Exception $e) {
	Erro::tratarErro($e);
}
