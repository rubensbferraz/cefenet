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

    public function loginsuccessfully()
    {
        echo "setTimeout(.window.location='painel.php', 3000)";
    }
    public function altenticacao()
    {
        include("../../public/Pghome/admin/altenticacao.php");
    }
}
