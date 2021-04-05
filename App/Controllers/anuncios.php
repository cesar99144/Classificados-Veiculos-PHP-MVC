<?php

use App\Core\Controller;
use App\Auth;

class Anuncios extends Controller{

    //Lista todos os anúncios que estão na plataforma
    public function geral(){

        $veiculosDao = $this->model('AnunciosDao');
        $listaAnuncios = $veiculosDao->listarTodosAnuncios();

        $this->viewDash('dashboard/anuncios', $dados = ['anuncios' => $listaAnuncios]);
    }

    public function perfil(){

        Auth::checkLogin();

        //Listar todos os  anúncios do perfil
        $AnunciosDao = $this->model('AnunciosDao');
        $listaAnunciosUser = $AnunciosDao->listarAnunciosDoUsuario($_SESSION['userId']);

        $this->viewDash('dashboard/perfil', $dados = ['anunciosUser' => $listaAnunciosUser]);
    }

    public function criarAnuncio(){

        if(isset($_POST['descricao']) && isset($_POST['km']) && isset($_POST['modelo']) && isset($_POST['marca']) && isset($_POST['preco'])):

			//Upload arquivos
			$storage = new \Upload\Storage\FileSystem('uploads');
			$file = new \Upload\File('foo', $storage);

			// Optionally you can rename the file on upload
			$new_filename = uniqid();
			$file->setName($new_filename);

			// Validate file upload
			// MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
			$file->addValidations(array(
			    // Ensure file is of type "image/png"
			    new \Upload\Validation\Mimetype('image/png'),

			    //You can also add multi mimetype validation
			    //new \Upload\Validation\Mimetype(array('image/png', 'image/gif'))

			    // Ensure file is no larger than 5M (use "B", "K", M", or "G")
			    new \Upload\Validation\Size('5M')
			));

			// Access data about the file that has been uploaded
			$data = array(
			    'name'       => $file->getNameWithExtension(),
			    'extension'  => $file->getExtension(),
			    'mime'       => $file->getMimetype(),
			    'size'       => $file->getSize(),
			    'md5'        => $file->getMd5(),
			    'dimensions' => $file->getDimensions()
			);

			// Try to upload file
			try {
			    // Success!
			    $file->upload();
			    $mensagem[] = "Upload feito com sucesso";

			    //Após salvar a imagem os dados são armazenados


			    $veiculos = $this->model('Anuncio');

			  	$veiculos->setDescricao($_POST['descricao']);
			  	$veiculos->setKm($_POST['km']);
			  	$veiculos->setMarca($_POST['marca']);
			  	$veiculos->setModelo($_POST['modelo']);
			  	$veiculos->setPreco($_POST['preco']);
			  	$veiculos->setUsuarioAnunciante($_SESSION['userId']);
			  	$veiculos->setImagemVeiculo($data['name']);
			  	$veiculos->setEstadoVeiculo($_POST['estadoVeiculo']);
			  	$veiculos->setTitulo($_POST['titulo']);
			  	


           		$anunciosDao = $this->model('AnunciosDao');
           		$salvarPublicacao = $anunciosDao->cadastrarAnuncio($veiculos);

			} catch (\Exception $e) {
			    // Fail!
			    $errors = $file->getErrors();
			    //$mensagem[] = implode("<br>", $errors);
			    echo "<script>Alert('error - ".$errors.")</script>'";
			}
	

		endif;

        $this->viewDash('dashboard/criarAnuncio');
    }

	public function vizualizarVeiculo($id, $idUser){

		$veiculosDao = $this->model('AnunciosDao');
        $listaAnunciosUser = $veiculosDao->abrirAnuncio($id);

        $usuariosDao = $this->model('UsuariosDao');
        $listUser = $usuariosDao->buscarUsuario($idUser);

		$this->viewDash('dashboard/detalhesCarro', $dados = ['anuncio' => $listaAnunciosUser, 'listUser' => $listUser]);
	}

	public function liberarAnuncio($idAnuncio){

		$veiculosDao = $this->model('AnunciosDao');
        $liberar = $veiculosDao->liberarAnuncio($idAnuncio);
	}

	public function bloquearAnuncio($idAnuncio){

		$veiculosDao = $this->model('AnunciosDao');
        $bloquear = $veiculosDao->BloquearAnuncio($idAnuncio);
	}
}