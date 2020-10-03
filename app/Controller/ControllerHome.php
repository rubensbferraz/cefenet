<?php

namespace App\Controller;

use Src\Interfaces\InterfaceView;
use Src\Classes\ClassRender;

class ControllerHome extends ClassRender implements InterfaceView
{
    use \Src\Traits\TraitUrlParser;

    public function __construct()
    {

        $this->setTitle("Página Inicial da CEFE");
        $this->setDescription("Seja bem vindo ao site da CEFE");
        $this->setKeywords("Menus, páginas internas, palestras e livraria");
        $this->setDir("home/");
        $this->renderLayout();
    }

    public function apresentacaoPalestra()
    {
        include_once(DIRREQ . "app/view/palestra/apresentacaoPalestra.php");
    }
    public function divulgacaoInterna()
    {
        include_once(DIRREQ . "public/Pghome/divulgacao/internoPrimeiro.php");
    }
    public function assistenciaSocial()
    {
        include_once(DIRREQ . "public/Pghome/divulgacao/internoSegundo.php");
    }
}
