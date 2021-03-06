<?php

namespace App;

use App\Core\Conexao;

class Auth{

	public static function login($email, $senha){

      $query = "SELECT * FROM usuarios WHERE email = ?";
      $stmt = Conexao::getConn()->prepare($query);
      $stmt->bindValue(1, $email);
      $stmt->execute();

      if($stmt->rowCount() > 0):
     	   
     	   $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

           if(password_verify($senha, $resultado['senha'])):
                print_r($resultado);
           	  $_SESSION['logado'] = true;
           	  $_SESSION['userId'] = $resultado['id'];
           	  $_SESSION['userNome'] = $resultado['nome'];
           	  $_SESSION['userSobreNome'] = $resultado['sobrenome'];
              $_SESSION['userEmail'] = $resultado['email'];
              $_SESSION['userCidade'] = $resultado['cidade'];
              $_SESSION['userEstado'] = $resultado['uf'];
              $_SESSION['userDataCadastro'] = $resultado['dataCadastro'];
              $_SESSION['userTelefone'] = $resultado['telefone'];
              
           	  header('Location: /anuncios/perfil');
           else:
           	  return "Senha invalida";
           endif;

     	else:
     	  return "Email não encontrado";
     	endif;
    }

    public function logout(){

        session_destroy();
        header('Location: /veiculos/home');
    }

    //Impede que algumas páginas do software sejam acessadas sem o usuário está logado
    public static function checkLogin(){

        if(!isset($_SESSION['logado'])):

           header('Location: /usuarios/login');
           die;

        endif;

    }

}