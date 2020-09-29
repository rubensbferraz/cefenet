<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView
{

    public function __construct()
    {
        $this->setTitle("Página Inicial da CEFE");
        $this->setDescription("Seja bem vindo ao site da CEFE");
        $this->setKeywords("Menus, páginas internas, palestras e livraria");
        $this->setDir("home/");
        $this->renderLayout();
    }
}
