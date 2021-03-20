<?php

use App\Core\Conexao;

class UsuariosDao extends Conexao{

	public function cadastrar(Usuarios $u){

		$query = "INSERT INTO usuariosadmescola (nome, sobrenome, cnpjEscola, email, senha) VALUES (?, ?, ?, ?, ?)";
		$stmt = Conexao::getConn()->prepare($query);
		$stmt->bindValue(1, $u->getNome());
		$stmt->bindValue(2, $u->getSobrenome());
		$stmt->bindValue(3, $u->getcnpjEscola());
		$stmt->bindValue(4, $u->getEmail());
		$stmt->bindValue(5, $u->getSenha());

		if($stmt->execute()):

			 echo "<script>alert('".$u->getNome()." Cadastrado com sucesso'); location ='/educacional/home'; </script>";

		else:

			echo "<script>alert('Erro ao cadastrar'); location ='/educacional/home'; </script>";
			
		endif;
	}

}