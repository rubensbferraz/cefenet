<?php

namespace App\Controller;

use App\Model\Palestra\ClassPalestra;
use Src\Classes\ClassRender;

class ControllerPalestra extends ClassPalestra
{
    protected $idPalestra;
    protected $dataPalestra;
    protected $oradorPalestra;
    protected $temaPalestra;
    protected $diretorPalestra;
    protected $semanaPalestra;

    use \Src\Traits\TraitUrlParser;

    public function __construct()
    {
        if (count($this->parseUrl()) == 1) {
            $Render = new ClassRender();
            $Render->setTitle("Administração de Palestras");
            $Render->setDescription("Seja bem vindo ao site da CEFE");
            $Render->setKeywords("Menus, páginas internas, palestras e livraria");
            $Render->setDir("palestra/");
            $Render->renderLayout();
        }
    }

    public function recebeVariaveis()
    {

        if (isset($_POST['dataPalestra'])) {
            $this->dataPalestra = filter_input(INPUT_POST, 'dataPalestra', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['oradorPalestra'])) {
            $this->oradorPalestra = filter_input(INPUT_POST, 'oradorPalestra', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['temaPalestra'])) {
            $this->temaPalestra = filter_input(INPUT_POST, 'temaPalestra', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['diretorPalestra'])) {
            $this->diretorPalestra = filter_input(INPUT_POST, 'diretorPalestra', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['semanaPalestra'])) {
            $this->semanaPalestra = filter_input(INPUT_POST, 'semanaPalestra', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }

    public function cadastrar()
    {
        $this->recebeVariaveis();
        var_dump($this->recebeVariaveis());
        $this->cadastroPalestra($this->dataPalestra, $this->oradorPalestra, $this->temaPalestra, $this->diretorPalestra, $this->semanaPalestra);
    }
}
