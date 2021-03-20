<?php

use App\Core\Conexao;

class MatriculaDao extends Conexao{

	public function cadastrar(Matricula $m){

		$query = "INSERT INTO alunos (nome, cpf, dataNascimento, serieEscolar, nivelEscolar, escolaInteresse, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $m->getNome());
		$stmt->bindValue(2, $m->getCpf());
		$stmt->bindValue(3, $m->getDataNascimento());
		$stmt->bindValue(4, $m->getSerieEscolar());
		$stmt->bindValue(5, $m->getNivelEscolar());
		$stmt->bindValue(6, $m->getEscolaInteresse());
		$stmt->bindValue(7, $m->getStatus());

		if($stmt->execute()):

			 echo "<script>alert('".$m->getNome()." Matricula solicitada com sucesso'); location ='/educacional/home'; </script>";

		else:

			//echo "<script>alert('Erro ao solicitar matricula'); location ='/educacional/home'; </script>";
			print_r($stmt->errorInfo());
		endif;
	}

	public function buscarSolicitacoesPorEscola($idEscola){

		$query = "SELECT * FROM alunos where escolaInteresse = ? and STATUS = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $idEscola);
		$stmt->bindValue(2, "Espera");
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

		else:

			return [];

		endif;
	}
}