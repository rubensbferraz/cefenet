<?php

namespace App\Controller;

use App\Model\ClassLivraria;
use Src\Classes\ClassRender;

class ControllerLivraria extends ClassLivraria
{
    protected $id;
    protected $titulo;
    protected $descricao;
    protected $edicao;
    protected $dtPublicacao;
    protected $isbn;
    protected $preco;
    protected $editora;
    protected $tipoObra;

    use \Src\Traits\TraitUrlParser;

    public function __construct()
    {
        if (count($this->parseUrl()) == 1) {
            $Render = new ClassRender();
            $Render->setTitle("Administração da livraria");
            $Render->setDescription("Seja bem vindo Livraria da CEFE");
            $Render->setKeywords("Menus, páginas internas, palestras e livraria");
            $Render->setDir("livraria/");
            $Render->renderLayout();
        }
    }

    public function recebeVariaveis()
    {

        if (isset($_POST['titulo'])) {
            $this->titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['descricao'])) {
            $this->descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['edicao'])) {
            $this->edicao = filter_input(INPUT_POST, 'edicao', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['dtPublicacao'])) {
            $this->dtPublicacao = filter_input(INPUT_POST, 'dtPublicacao', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['isbn'])) {
            $this->isbn = filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['preco'])) {
            $this->preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['editora'])) {
            $this->editora = filter_input(INPUT_POST, 'id_editora', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['tipoObra'])) {
            $this->tipoObra = filter_input(INPUT_POST, 'id_tipoObra', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }

    public function cadastrar()
    {
        $this->recebeVariaveis();
        $this->cadastroTitulo($this->titulo, $this->descricao, $this->edicao, $this->dtPublicacao, $this->isbn, $this->preco, $this->editora, $this->tipoObra);
        header("Location: " . DIRPAGE . "livraria", 3000);
        echo ("Alteração realizada com sucesso...");
    }

    public function seleciona()
    {

        $this->recebeVariaveis();
        $this->selecionaTitulo($this->titulo, $this->descricao, $this->edicao, $this->dtPublicacao, $this->isbn, $this->preco, $this->editora, $this->tipoObra);
    }
}
