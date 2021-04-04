<?php

use App\Core\Controller;

class Veiculos extends Controller{

    public function home(){

        $this->view('home/homepage');
    }
}