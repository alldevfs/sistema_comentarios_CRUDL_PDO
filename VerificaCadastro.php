<?php

include_once 'Global.php';

if (isset($_POST['nome'])) { //Ver uma forma melhor de verificar o input de cadastrar.
	
	$nome = htmlentities(addslashes($_POST['nome']));
	$email = htmlentities(addslashes($_POST['email']));
	$senha = htmlentities(addslashes($_POST['senha']));
	$senhaConf = htmlentities(addslashes($_POST['senhaConf']));

	if (!empty($nome) && !empty($email) && !empty($senha) && !empty($senhaConf)) {	//SUCESS 1/2
		
		if ($senha == $senhaConf) {													//SUCESS 2/2
			require_once 'class/Usuario.php';
			$usuario = new Usuario();
			
			if ($usuario->cadastrarUsuario($nome, $email, $senha)) {
				echo "<script> alert('Cadastrado com sucesso!'); </script>";
				header('Location: entrar.php');
			} else {
				echo "<script> alert('Email já cadastrado!'); </script>";
			}

		} else {
			echo "<script> alert('As senhas não coincidem!'); </script>";			//ERRO 2
		}

	} else {																		//ERRO 1
		echo "<script> alert('É obrigatório preencher todos os campos!'); </script>";
	}
}