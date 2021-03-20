<?php

use App\Core\Conexao;

class Usuarios extends Conexao{

	private $nome, $sobrenome, $cnpjEscola, $email, $senha;

	public function getNome(){

		return $this->nome;
	}

	public function setNome($n){

		$this->nome = $n;
	}

	public function getSobrenome(){

		return $this->sobrenome;
	}

	public function setSobrenome($s){

		$this->sobrenome = $s;
	}

	public function getcnpjEscola(){

		return $this->cnpjEscola;
	}

	public function setcnpjEscola($i){

		$this->cnpjEscola = $i;
	}

	public function getEmail(){

		return $this->email;
	}

	public function setEmail($e){

		$this->email = $e;
	}

	public function getSenha(){

		return $this->senha;
	}

	public function setSenha($s){

		$this->senha = $s;
	}

}