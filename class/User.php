<?php 


class User {
	public $nome;
	public $email;
	public $senha;

	function __construct($id = false) {
		if ($id) {
			$this->id = $id;
			$this->consultarUsuario();
		}
	}

	//CRUDL
	
	public function inserirUsuario() {
		$query = "INSERT INTO usuarios(nome, email, senha) VALUES('" . $this->nome . "', '" . $this->email . "', '" . $this->senha . "')";
		$conexao = Conexao::pegarConexao();
		$conexao->exec($query);
	}

	public function consultarUsuario() {
		$query = "SELECT id, nome, email, senha FROM usuarios WHERE id = " . $this->id;
		$conexao = Conexao::pegarConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		foreach ($lista as $linha) {
			$this->id = $linha['id'];
			$this->nome = $linha['nome'];
			$this->email = $linha['email'];
			$this->senha = $linha['senha'];
		}
	}

	public function atualizarUsuario() {
		$query = "UPDATE usuarios SET nome = " . $this->nome . ", email = " . $this->email ." senha = " . $this->senha . " WHERE id = " . $this->id;
		$conexao = Conexao::pegarConexao();
		$conexao->exec($query); 
	}

	public function excluirUsuario() {
		$query = "DELETE FROM usuarios WHERE id = " . $this->id;
		$conexao = Conexao::pegarConexao();
		$conexao->exec($query);
	}

	public function listarUsuario() {
		$query = "SELECT id, nome, email, senha FROM usuarios";
		$conexao = Conexao::pegarConexao();
		$resultado = $conexao->query($query);
		$lista = $resultado->fetchAll();
		return $lista;
	}

	public function logarUsuario() {
		$query = "SELECT * FROM usuarios WHERE name = " . $this->name . " AND senha = " . $this->senha;
		$conexao = Conexao::pegarConexao();
		$resultado = $conexao->query($query);
		$login = $resultado->fetchAll();
		if ($login > 0) {
		 	//SUCESSO
			session_start();
			$_SESSION['valida'] = true;

		} else {
			$_SESSION['valida'] = false;
		}
	}
}