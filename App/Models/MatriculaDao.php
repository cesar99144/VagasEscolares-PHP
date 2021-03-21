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

			echo "<script>alert('Erro ao solicitar matricula'); location ='/educacional/home'; </script>";
			//print_r($stmt->errorInfo());
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

	public function buscarSolicitacoesAprovadasPorEscola($idEscola){

		$query = "SELECT * FROM alunos where escolaInteresse = ? and STATUS = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $idEscola);
		$stmt->bindValue(2, "Aprovado");
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

		else:

			return [];

		endif;
	}


	public function aprovarMatricula($id){

		$query = "UPDATE alunos SET status = ? WHERE id = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, "Aprovado");
		$stmt->bindValue(2, $id);

		if($stmt->execute()):

			echo "<script>alert('Matricula solicitada com sucesso'); location ='/admin/aprovadas'; </script>";

		else:

			echo "<script>alert('Erro ao aprovar matricula'); location ='/admin/solicitacoes'; </script>";

		endif;
	}

	public function buscarSituacaoAluno($cpf){

		//$query = "SELECT * FROM alunos WHERE cpf = ?";
		$query = "SELECT e.id, e.razaoSocial, e.cnpj, e.cidade, e.estado, a.id, a.nome, a.cpf,  a.dataNascimento, a.serieEscolar, a.nivelEscolar, a.escolaInteresse, a.status FROM escolas e INNER JOIN alunos a ON a.escolaInteresse = e.id WHERE a.cpf = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $cpf);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

		else:

			echo "<script>alert('CPF não encontrado'); location ='/educacional/home'; </script>";


		endif;
	}
}