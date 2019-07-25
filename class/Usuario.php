<?php 

class Usuario {

	private $PDO;

	function __construct() {
		try {

			$this->PDO = Conexao::pegarConexao();

		} catch(PDOException $e){

			echo "Erro com o Banco: " . $e->getMessage();

		} catch(Exception $e) {

			echo "Erro genérico: " . $e->getMessage();
		}
		
	}
	/*Criar um UsuarioDAO para encurtar mais ainda e simplificar o codigo. No mesmo estilo da classe Conexao! */

	//Cadastrar

	public function cadastrarUsuario($nome, $email, $senha)	{
		$sqlVerifica = "SELECT id FROM usuarios WHERE email = :e";
		$sqlCadastro = "INSERT INTO usuarios(nome, email, senha) VALUES(:n, :e, :s)";
		$stmt = $this->PDO->prepare($sqlVerifica);
		$stmt->bindValue(":e", $email);
		$stmt->execute();

		if ($stmt->rowCount() > 0) { // Se tiver retorno significa que já existe este email.
			return false;
		} else {					 // Não houve retorno então prossegue com o cadastro.
			$stmt = $this->PDO->prepare($sqlCadastro);
			$stmt->bindValue(":n", $nome);
			$stmt->bindValue(":e", $email);
			$stmt->bindValue(":s", md5($senha));
			$stmt->execute();
			return true;
		}

	}

	//Logar

	public function logarUsuario($email, $senha)	{
		$sqlBusca = "SELECT * FROM usuarios WHERE email = :e AND senha = :s";
		$stmt = $this->PDO->prepare($sqlBusca);
		$stmt->bindValue(":e", $email);
		$stmt->bindValue(":s", md5($senha));
		$stmt->execute();

		if ($stmt->rowCount() > 0) {		//Caso a pessoa exista.
			$session = $stmt->fetch();
			session_start();
			//Aqui vai a regra de negócio de nivel de acesso. 
			echo "<script> alert('Caso existe'); </script>";
			if ($session['nivel'] == true) { // ou 1 no BD
				//É ADM
				$_SESSION['master'] = $session['nivel'];
				$_SESSION['id'] = $session['id'];
			} else {
				//Não é ADM
				$_SESSION['id'] = $session['id'];
			}
			return true;
		} else{
			return false;
		}


	}

	public function buscarUsuario($id) {
		$sqlBuscaUsuario = "SELECT * FROM usuarios WHERE id = :i";
		$stmt = $this->PDO->prepare($sqlBuscaUsuario);
		$stmt->bindValue(":i", $id);
		$stmt->execute();

		$dadosUsuario = $stmt->fetch();
		return $dadosUsuario;
	}
}