<?php 
include_once 'Global.php';
require_once 'class/Usuario.php';
session_start();

if (isset($_SESSION['id'])) {
	$usuario = new Usuario();
	$info = $usuario->buscarUsuario($_SESSION['id']);
} else if (isset($_SESSION['master'])) {  //DESNECESSARIO MAS...
	$usuario = new Usuario();
	$info = $usuario->buscarUsuario($_SESSION['id']);
}{

}

