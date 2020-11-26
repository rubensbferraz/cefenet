<?php

namespace App\Model;

use App\Model\ClassConexao;
use App\Model\ClassLivraria;

class query extends ClassConexao
{
    protected $PDO;
    public $numExecutes;
    public $numStatements;

    public function queryTitulo()
    {
        $querySelectTitulo = "SELECT titulo, descricao, edicao, dtPublicacao, isbn, preco, editora, tipoObra FROM tb_titulo inner join tb_tipoobra on tb_titulo.id_tipoobra=tb_tipoobra.id inner join tb_editora on tb_titulo.id_editora=tb_editora.id";

        $queryT = $this->conexaoDB()->prepare($querySelectTitulo);
        $queryT->execute();
        $I = 0;
        while ($Fetch = $queryT->fetch(\PDO::FETCH_ASSOC)) {
            $Array = $Fetch['editora'];
            $I++;
            return $Array;
        }
    }
    public function queryEditora()
    {


        $querySelectEditora = "SELECT id, editora FROM tb_editora ";

        $queryEd = $this->conexaoDB()->prepare($querySelectEditora);
        $queryEd->execute();
        $I = 0;
        while ($Fetch = $queryEd->fetch(\PDO::FETCH_ASSOC)) {
            $ArrayEd = $Fetch['editora'];
            $I++;
            return $ArrayEd++;
        }
    }
    public function queryTipoObra()
    {
        $querySelectTipoObra = "SELECT id, tipoObra FROM tb_tipoobra ";

        $queryOb = $this->conexaoDB()->prepare($querySelectTipoObra);
        $queryOb->execute();

        while ($teste = $queryOb->fetch(\PDO::FETCH_ASSOC)) {

            return $teste['tipoObra'];
        }
    }
}

/*$queryTitulos = ""*/