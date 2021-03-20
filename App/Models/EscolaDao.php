<?php

use App\Core\Conexao;

class EscolaDao extends Conexao{

	public function cadastrar(Escola $e){

		$query = "INSERT INTO escolas (razaoSocial, cnpj, cidade, estado) VALUES (?, ?, ?, ?)";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $e->getRazaoSocial());
		$stmt->bindValue(2, $e->getCnpj());
		$stmt->bindValue(3, $e->getCidade());
		$stmt->bindValue(4, $e->getEstado());

		if($stmt->execute()):

			return true;

		else:

			return false;

		endif;
	}

	public function buscarEscolaPorCnpj($cnpj){

		$query = "SELECT * FROM escolas where cnpj = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $cnpj);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

		else:

			return [];

		endif;

	}

	public function listarVagasPorEscola($idEscola){

		$query = "SELECT * FROM vagas where idEscola = ?";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $idEscola);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

		else:

			return [];

		endif;
	}

	public function listarTodasAsEscolas(){

		$query = "SELECT * FROM escolas";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->execute();

		if($stmt->rowCount() > 0):

			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $resultado;

		else:

			return [];

		endif;
	}
}