<?php

use App\Core\Controller;
use App\Auth;

class Educacional extends Controller{

	public function home(){

		$escolasDao = $this->model('EscolaDao');
		$listaEscolas = $escolasDao->listarTodasAsEscolas();

		$this->view('home/principal', $dados = ['escolasLista' => $listaEscolas]);
	}

	public function usuario(){

		$this->view('home/loginEcadastro');
	}

	public function cadastrarEscola(){

		if(isset($_POST['cnpj']) && isset($_POST['razaoSocial']) && isset($_POST['razaoSocial'])):
			
			$escola = $this->model('Escola');
			$escola->setRazaoSocial($_POST['razaoSocial']);
			$escola->setCnpj($_POST['cnpj']);
			$escola->setCidade($_POST['cidade']);
			$escola->setEstado($_POST['uf']);


			//cadastrar a escola
			$escolaDao = $this->model('EscolaDao');
			$cadastrarEscola = $escolaDao->cadastrar($escola);

			if($cadastrarEscola):

				//Se o cadastro da escola for bem sucedido é carregada a tela de cadastrar usuário
				echo "<script>alert('Escola cadastrada com sucesso')</script>";

				$_SESSION['cnpj'] = $_POST['cnpj'];
				$this->view('home/cadastrarUsuario');
			else:
				echo "<script>Erro ao cadastrar escola, tente novamente</script>";
				$this->view('home/principal');

			endif;
		endif;
	}

	public function cadastrarUsuario(){

		if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['email'])):

			$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

			$usuario = $this->model('Usuarios');
			$usuario->setNome($_POST['nome']);
			$usuario->setSobrenome($_POST['sobrenome']);
			$usuario->setcnpjEscola($_SESSION['cnpj']);
			$usuario->setEmail($_POST['email']);
			$usuario->setSenha($senha);

			$usuarioDao = $this->model('UsuariosDao');
			$criarUsuario = $usuarioDao->cadastrar($usuario);


		endif;
		
	}

	public function login(){

		$mensagem = array();

		if(isset($_POST['entrar'])):

			if((empty($_POST['email'])) or (empty($_POST['senha']))):
			   $mensagem[] = "O campo email e senha são obrigatórios";
			else:
			   $email = $_POST['email'];
			   $senha = $_POST['senha'];
			   //$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
			   $mensagem[] = Auth::Login($email, $senha);
			endif;
		endif;

		$this->view('home/loginECadastro', $dados = ['mensagem' => $mensagem]);
	}

	public function buscarVagasEscolas(){

			//Listar vagas da escola escolhida
			$vagasDao = $this->model('VagasDao');
        	$vagasEscola = $vagasDao->listarTodasVagas();

        	$this->view('home/resultadoVagas', $data = ['vagasEscolas' => $vagasEscola]);
	}

	public function solicitarMatricula(){

		if(isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['dataUser']) && isset($_POST['modalidade'])):

			$data = implode('/', array_reverse(explode('-', $_POST['dataUser'])));

			$matricula = $this->model('Matricula');
			$matricula->setNome($_POST['nome']);
			$matricula->setCpf($_POST['cpf']);
			$matricula->setDataNascimento($data);
			$matricula->setSerieEscolar($_POST['serie']);
			$matricula->setNivelEscolar($_POST['modalidade']);
			$matricula->setEscolaInteresse($_POST['idEscola']);
			$matricula->setStatus("Espera");

			$matriculaDao = $this->model('MatriculaDao');
			$solicitarMatricula = $matriculaDao->cadastrar($matricula);
		else:


		endif;
	}

	public function acompanhar(){

		if(isset($_POST['cpf']) && isset($_POST['buscar'])):

		  	$matriculaDao = $this->model('MatriculaDao');
		    $situacaoAluno = $matriculaDao->buscarSituacaoAluno($_POST['cpf']);
		    echo $situacaoAluno[0]['nome'];
			$this->view('home/acompanharMatricula', $dados = ['statusAluno' => $situacaoAluno]);

		endif;
	}
}

