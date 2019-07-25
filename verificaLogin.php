<?php 

include_once 'Global.php';

if (isset($_POST['email'])) { //Ver uma forma melhor de verificar o input de cadastrar.
	
	$email = htmlentities(addslashes($_POST['email']));
	$senha = htmlentities(addslashes($_POST['senha']));

	if (!empty($email) && !empty($senha)) {								//SUCESS 1/2

		require_once 'class/Usuario.php';
		$usuario = new Usuario();

		if ($usuario->logarUsuario($email, $senha)) {					//SUCESS 2/2
			echo "<script> alert('Logado com sucesso!'); </script>";
			header("Location: index.php.");
		} else {														//ERRO 2/2
			echo "<script> alert('Email ou senha incorretos!'); </script>";
		}

	} else {															//ERRO 1/2			
		echo "<script> alert('É obrigatório preencher todos os campos!'); </script>";
	}
}