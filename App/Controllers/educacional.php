<?php

use App\Core\Controller;

class Educacional extends Controller{

	public function home(){

		$this->view('home/principal');
	}

	public function usuario(){

		$this->view('home/loginEcadastro');
	}
}
