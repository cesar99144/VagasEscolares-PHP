<?php

use App\Core\Conexao;

class Matricula extends Conexao{

	private $nome, $cpf, $dataNascimento, $serieEscolar, $nivelEscolar, $turno, $escolaInteresse, $status;

	public function getNome(){

		return $this->nome;
	}

	public function setNome($n){

		$this->nome = $n;
	}

	public function getCpf(){

		return $this->cpf;
	}

	public function setCpf($c){

		$this->cpf = $c;
	}

	public function getDataNascimento(){

		return $this->dataNascimento;
	}

	public function setDataNascimento($d){

		$this->dataNascimento = $d;
	}

	public function getSerieEscolar(){

		return $this->dataNascimento;
	}

	public function setSerieEscolar($s){

		$this->serieEscolar = $s;
	}

	public function getNivelEscolar(){

		return $this->nivelEscolar;
	}

	public function setNivelEscolar($n){

		$this->nivelEscolar = $n;
	}

	public function getTurno(){

		return $this->turno;
	}

	public function setTurno($t){

		$this->turno = $t;
	}

	public function getEscolaInteresse(){

		return $this->escolaInteresse;
	}

	public function setEscolaInteresse($e){

		$this->escolaInteresse = $e;
	}

	public function getStatus(){

		return $this->status;
	}

	public function setStatus($s){

		$this->status = $s;
	}

	
}