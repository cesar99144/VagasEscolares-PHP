<?php

namespace App;

use App\Core\Conexao;

class Auth{

	public static function login($email, $senha){

      $query = "SELECT * FROM usuariosadmescola WHERE email = ?";
      $stmt = Conexao::getConn()->prepare($query);
      $stmt->bindValue(1, $email);
      $stmt->execute();

      if($stmt->rowCount() >= 1):
     	   
     	   $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

           if(password_verify($senha, $resultado['senha'])):

           	  $_SESSION['logado'] = true;
           	  $_SESSION['userId'] = $resultado['id'];
           	  $_SESSION['userNome'] = $resultado['nome'];
           	  $_SESSION['userSobreNome'] = $resultado['sobrenome'];
           	  $_SESSION['cnpjEmpresaUser'] = $resultado['cnpjEscola'];
              
           	  header('Location: /Admin/vagasAdmin');
           else:
           	  return "Senha invalida";
           endif;

     	else:
     	  return "Email não encontrado";
     	endif;
    }

    public function logout(){

        session_destroy();
        header('Location: /educacional/home');
    }

    //Impede que algumas páginas do software sejam acessadas sem o usuário está logado
    public static function checkLogin(){

        if(!isset($_SESSION['logado'])):

           header('Location: /educacional/home');
           die;

        endif;

    }

}