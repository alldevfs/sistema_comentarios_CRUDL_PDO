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
			
			if ($usuario->cadastrarUsuario($nome, $email, $senha)) { ?>

				<p class="mensagem">Cadastrado com sucesso! <a href="entrar.php">Deseja logar?</a></p>
				
			<?php } else { ?>

				<p class="mensagem">Email já cadastrado!</p>
			<?php }

		} else { ?>

			<p class="mensagem">As senhas não coincidem!</p>      						<!-- //ERRO 2 -->

		<?php }

	} else { ?>	

		<p class="mensagem">É obrigatório preencher todos os campos!</p>  				<!-- //ERRO 1 -->

	<?php 	}
}
?>