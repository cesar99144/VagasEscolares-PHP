<?php

use App\Core\Conexao;

class Escola extends Conexao{

	private $razaoSocial, $cnpj, $cidade, $estado;

	public function getRazaoSocial(){

		return $this->razaoSocial;
	}

	public function setRazaoSocial($r){

		$this->razaoSocial = $r;
	}

	public function getCnpj(){

		return $this->cnpj;
	}

	public function setCnpj($c){

		$this->cnpj = $c;
	}

	public function getCidade(){

		return $this->cidade;
	}

	public function setCidade($c){

		$this->cidade = $c;
	}

	public function getEstado(){

		return $this->estado;
	}

	public function setEstado($e){

		$this->estado = $e;
	}
	
}