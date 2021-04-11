<?php

use App\Core\Controller;

class Veiculos extends Controller{

    public function home(){

         //Carrega todas as  marcas
         $veiculosDao = $this->model('AnunciosDao');
         $listaMarcas = $veiculosDao->listarMarcas();

        $this->view('home/homepage', $dados = ['marcas' => $listaMarcas]);
    }
}