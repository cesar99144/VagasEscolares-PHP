<?php

use App\Core\Conexao;

class VagasDao extends Conexao{

	public function cadastrar(Vagas $v){

		$query = "INSERT INTO vagas (idEscola, quantidade, modalidade, serie) VALUES (?, ?, ?, ?)";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $v->getCnpj());
		$stmt->bindValue(2, $v->getQuantidade());
		$stmt->bindValue(3, $v->getModalidade());
		$stmt->bindValue(4, $v->getSerie());

		if($stmt->execute()):

			echo "<script>alert('Vaga cadastrada com sucesso'); location ='/admin/vagasAdmin'; </script>";
		else:

			echo "<script>alert('Erro ao cadastrar a vaga. Verifique os dados informados e tente novamente'); location ='/admin/vagasAdmin'; </script>";
		endif;
	}
}