<?php

use App\Core\Controller;
use App\Auth;

class Anuncios extends Controller{

    public function geral(){

        $this->viewDash('dashboard/anuncios');
    }

    public function perfil(){

        Auth::checkLogin();

        $this->viewDash('dashboard/perfil');
    }
}