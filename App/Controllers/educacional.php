<?php

use App\Core\Controller;

class Educacional extends Controller{

	public function home(){

		$this->view('home/principal');
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
}
