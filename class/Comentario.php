<?php 
/**
 * 
 */
date_default_timezone_set('America/Sao_Paulo');

class Comentario {
	
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

	public function buscarComentario() {	//Repara que tem uma subconsulta para uma outra tabela, não sei ainda se seria melhor fazer um JOIN mas.. 
		$sqlComentarios = "SELECT *,(SELECT nome FROM usuarios WHERE id = fk_id_usuario) as nome_usuario FROM comentarios ORDER BY dia, horario DESC";	
		$stmt = $this->PDO->prepare($sqlComentarios);
		$stmt->execute();
		$comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $comentarios;
		// Será retornado: id, comentario, dia, horario, nome_usuario.
	}

	public function excluirComentario($id_comentario, $id_usuario) {
		if (isset($_SESSION['master'])) {
			$sqlExcluiAdm = "DELETE FROM comentarios WHERE id = :id_coment";
			$stmt = $this->PDO->prepare($sqlExcluiAdm);
			$stmt->bindValue(":id_coment", $id_comentario);
			$stmt->execute();
		} else {
			
			$sqlExcluiUsr = "DELETE FROM comentarios WHERE id = :id_coment AND fk_id_usuario = :id_us";
			$stmt = $this->PDO->prepare($sqlExcluiUsr);
			$stmt->bindValue(":id_coment", $id_comentario);
			$stmt->bindValue(":id_us", $id_usuario);
			$stmt->execute();
		}

	}

	public function inserirComentario($id_usuario, $comentario) {
		$sqlInsComent = "INSERT INTO comentarios(comentario, dia, horario, fk_id_usuario) VALUES (:c, :d, :h, :f)";
		$stmt = $this->PDO->prepare($sqlInsComent);
		$stmt->bindValue(":c", $comentario);
		$stmt->bindValue(":d", date('Y-m-d'));
		$stmt->bindValue(":h", date('H:i'));
		$stmt->bindValue(":f", $id_usuario);
		$stmt->execute();

	}
}
// Subconsultas são usadas ao inves de dar um JOIN para obter-se apenas um unico valor de retorno, e ao usar de subconsultas deve se dar ao nome da coluna nova(nome_usuario) e nunca ser usado para realizar retorno de mais de uma coluna, se esse for o caso, faça varias subconsultas separadamente.