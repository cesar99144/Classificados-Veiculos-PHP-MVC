<?php

use App\Core\Controller;
use App\Auth;

class Usuarios extends Controller{

    public function cadastro(){

        //Sempre que entrar na rota verifica se foi submetido algum dado de cadastro do usuário
		if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['cidade']) && isset($_POST['estado']) && isset($_POST['email']) && isset($_POST['senha'])):

            $dataAtual = date('Y-m-d');
			$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

			$usuarios = $this->model('Usuario');
			$usuarios->setNome($_POST['nome']);
			$usuarios->setSobrenome($_POST['sobrenome']);
			$usuarios->setCidade($_POST['cidade']);
			$usuarios->setUf($_POST['estado']);
			$usuarios->setEmail($_POST['email']);
			$usuarios->setSenha($senha);
			$usuarios->setDataCadastro($dataAtual);

            $usuariosDao = $this->model('UsuariosDao');
			$cadastrarUsuario = $usuariosDao->cadastrarUsuario($usuarios);

        endif;

        $this->view('home/cadastroUsuarios');
    }

    public function login(){
		

        if(isset($_POST['userEmail']) && isset($_POST['userSenha'])):

			Auth::login($_POST['userEmail'], $_POST['userSenha']);

		endif;

        $this->view('home/login');
    }

	public function logout(){

		Auth::logout();
	}
}