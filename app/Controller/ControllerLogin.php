<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassLogin;
use App\Model\ClassPalestra;

class ControllerLogin extends ClassLogin
{
    use \Src\Traits\TraitUrlParser;
    public function __construct()
    {
        if (count($this->parseUrl()) == 1) {
            $Render = new ClassRender();
            $Render->setTitle("Página de administração");
            $Render->setDescription("Área restrita");
            $Render->setKeywords("palestras e livraria");
            $Render->setDir("login/");
            $Render->renderLayout();
        }
    }

    #Responsável por altenticar o usuário no sistema
    public function altenticar()
    {
        $nomeAdm = $_POST['nomeAdm'];
        $senhaAdm = $_POST['senhaAdm'];
        $Validacao = $this->validarUsuario($nomeAdm, $senhaAdm);

        if ($Validacao == true) {
            echo "
           <div class='container'>
            <div class='container mt-5'>
                <script>
                    now = new Date
                    if (now.getHours() >= 0 && now.getHours() < 5) {
                        document.write('Olá nbsp $nomeAdm você está de madrugada! - Tenha um bom trabalho.')
                    } else if (now.getHours() >= 5 && now.getHours() < 12) {
                        document.write('Olá  $nomeAdm - Bom dia, => tenha um bom trabalho ')
                    } else if (now.getHours() >= 12 && now.getHours() < 18) {
                        document.write('Olá nbsp  $nomeAdm - Boa Tarde, => tenha um bom trabalho.')
                    } else {
                        document.write('Olá nbsp $nomeAdm - Boa Noite, => tenha um bom trabalho não deixe de descansar!')
                    }
                    setTimeout(function () { window.location.href = '../public/pghome/admin/painel.php'
                    }, 3000);
                </script>
            </div>
        </div>
           ";
        } else {
            echo "Você não está autorizado a usar o sistema, por favor entre em contato conosco:
            <script>setTimeout(function () { window.location.href = '../home'
            }, 3000);</script>
            ";
        }
    }
}
