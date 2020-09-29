<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerAdmin extends ClassRender implements InterfaceView
{

    public function __construct()
    {
        $this->setTitle("Página de administração");
        $this->setDescription("Área restrita");
        $this->setKeywords("palestras e livraria");
        $this->setDir("admin/");
        $this->renderLayout();
    }

    public function admin()
    {
        echo "Você esta na pagina do Admin!!";
    }
}
