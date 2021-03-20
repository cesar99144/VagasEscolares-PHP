<?php

use App\Core\Conexao;

class Vagas extends Conexao{

	private $CnpjEscola, $quantidade, $modalidade, $serie;

	public function getCnpj(){

		return $this->CnpjEscola;
	}

	public function setCnpj($c){

		$this->CnpjEscola = $c;
	}

	public function getQuantidade(){

		return $this->quantidade;
	}

	public function setQuantidade($q){

		$this->quantidade = $q;
	}

	public function getModalidade(){

		return $this->modalidade;
	}

	public function setModalidade($m){

		$this->modalidade = $m;
	}

	public function getSerie(){

		return $this->serie;
	}

	public function setSerie($s){

		$this->serie = $s;
	}
	
}