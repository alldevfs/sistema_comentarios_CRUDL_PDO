<?php 
require_once 'Global.php';

try {
	$usuarios = new Usuario();
	$lista = $usuarios->listarDados();
} catch (Exception $e) {
	Erro::tratarErro($e);
}
