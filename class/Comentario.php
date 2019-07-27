<?php 
/**
 * 
 */
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
		$sqlComentarios = "SELECT *,(SELECT nome FROM usuarios WHERE id = fk_id_usuario) as nome_usuario FROM comentarios ORDER BY dia DESC";	
		$stmt = $this->PDO->prepare($sqlComentarios);
		$stmt->execute();
		$comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $comentarios;
		// Será retornado: id, comentario, dia, horario, nome_usuario.
	}

}
// Subconsultas são usadas ao inves de dar um JOIN para obter-se apenas um unico valor de retorno, e ao usar de subconsultas deve se dar ao nome da coluna nova(nome_usuario) e nunca ser usado para realizar retorno de mais de uma coluna, se esse for o caso, faça varias subconsultas separadamente.