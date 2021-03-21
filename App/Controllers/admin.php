<?php

use App\Core\Controller;
use App\Auth;

class Admin extends Controller{

	public function vagasAdmin(){

		Auth::checkLogin();

		$escolaDao = $this->model('EscolaDao');
        $DadosEscola = $escolaDao->buscarEscolaPorCnpj( $_SESSION['cnpjEmpresaUser']);

        $_SESSION['idEscola'] =  $DadosEscola[0]['id'];
        $_SESSION['RazaoEscola'] =  $DadosEscola[0]['razaoSocial'];

        //Listar vagas da empresa
        $vagasEscola = $escolaDao->listarVagasPorEscola($_SESSION['idEscola']);

		$this->viewDash('admEscola/gerenciarVagas', $dados = ['VagasEscolas' => $vagasEscola]);
     
	}

	public function cadastrarVagas(){

		Auth::checkLogin();

		if(isset($_POST['serie']) && isset($_POST['modalidade']) && isset($_POST['quantidade'])):
		
		$vagas = $this->model('Vagas');
		$vagas->setCnpj($_SESSION['idEscola']);
		$vagas->setQuantidade($_POST['quantidade']);
		$vagas->setModalidade($_POST['modalidade']);
		$vagas->setSerie($_POST['serie']);

		$VagasDao = $this->model('VagasDao');
		$cadastrarVagas = $VagasDao->cadastrar($vagas);

		else:

			echo "<script>alert(Preencha todos os campos)</script>";

		endif;
	}

	public function logout(){

        Auth::logout();
    }

    public function solicitacoes(){

    	$matriculas = $this->model('MatriculaDao');
    	$solicitacoes = $matriculas->buscarSolicitacoesPorEscola($_SESSION['idEscola']);

    	$this->viewDash('admEscola/solicitacoes', $dados = ['solicitacoesVagas' => $solicitacoes]);
    }

    public function aprovarVaga($id){

    	$matriculas = $this->model('MatriculaDao');
    	$Aprovarsolicitacoes = $matriculas->aprovarMatricula($id);
    }

    public function aprovadas(){

    	$matriculas = $this->model('MatriculaDao');
    	$solicitacoes = $matriculas->buscarSolicitacoesAprovadasPorEscola($_SESSION['idEscola']);

    	$this->viewDash('admEscola/aprovados', $dados = ['solicitacoesVagas' => $solicitacoes]);
    }


}
