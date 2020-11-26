<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassLivraria extends ClassConexao
{
    private $Db;

    #Cadastrara os Administrador no sistema
    protected function cadastroTitulo($titulo, $descricao, $edicao, $dtPublicacao, $isbn, $preco, $editora, $tipoObra)
    {
        $idT = 0;
        $dataP = date("Y-m-d", strtotime($dtPublicacao));
        $this->Db = $this->conexaoDB()->prepare("INSERT INTO tb_titulo VALUES(:id, :titulo, :descricao, :edicao, :dtPublicacao, :isbn, :preco, :id_editora, :id_tipoObra)");
        $this->Db->bindParam(":id", $idT, \PDO::PARAM_INT);
        $this->Db->bindParam(":titulo", $titulo, \PDO::PARAM_STR);
        $this->Db->bindParam(":descricao", $descricao, \PDO::PARAM_STR);
        $this->Db->bindParam(":edicao", $edicao, \PDO::PARAM_STR);
        $this->Db->bindParam(":dtPublicacao", $dataP, \PDO::PARAM_STR);
        $this->Db->bindParam(":isbn", $isbn, \PDO::PARAM_STR);
        $this->Db->bindParam(":preco", $preco, \PDO::PARAM_STR);
        $this->Db->bindParam(":id_editora", $editora, \PDO::PARAM_INT);
        $this->Db->bindParam(":di_tipoObra", $tipoObra, \PDO::PARAM_INT);
        $this->Db->execute();
    }

    #Seleciona os dados cadastrados no banco de dados
    protected function selecionaTitulo($titulo, $descricao, $edicao, $dtPublicacao, $isbn, $preco, $editora, $tipoObra)
    {
        $dataPub = date("Y-m-d", strtotime($dtPublicacao));
        $dataPub = '%' . $dataPub . '%';
        $titulo = '%' . $titulo . '%';
        $descricao = '%' . $descricao . '%';
        $edicao = '%' . $edicao . '%';
        $isbn = '%' . $isbn . '%';
        $preco = '%' . $preco . '%';
        $editora = '%' . $editora . '%';
        $tipoObra = '%' . $tipoObra . '%';

        $PFetch = $this->Db = $this->conexaoDB()->prepare("SELECT FROM tb_titulo where titulo like :titulo, descricao like :descricao, edicao like :edicao, isbn like :isbn, preco like :preco, id_editora like :id_editora, id_tipoObra like :id_tipoObra)");
        $PFetch->bindParam("titulo", $titulo, \PDO::PARAM_STR);
        $PFetch->bindParam("descricao", $descricao, \PDO::PARAM_STR);
        $PFetch->bindParam("edicao", $edicao, \PDO::PARAM_STR);
        $PFetch->bindParam("dtPublicacao", $dataPub, \PDO::PARAM_STR);
        $PFetch->bindParam("isbn", $isbn, \PDO::PARAM_STR);
        $PFetch->bindParam("preco", $preco, \PDO::PARAM_STR);
        $PFetch->bindParam("id_editora", $editora, \PDO::PARAM_INT);
        $PFetch->bindParam("id_tipoObra", $tipoObra, \PDO::PARAM_INT);
        $PFetch->execute();

        $I = 0;

        while ($Fetch = $PFetch->fetch(\PDO::FETCH_ASSOC)) {
            $Array[$I] = [
                'id' => $Fetch['id'], 'titulo' => $Fetch['titulo'], 'descricao' => $Fetch['descricao'],
                'edicao' => $Fetch['edicao'], 'dtPublicacao' => $Fetch['dtPublicacao'], 'isbn' => $Fetch['isbn'],   'preco' => $Fetch['preco'], 'editora' => $Fetch['editora'], 'tipoObra' => $Fetch['tipoObra']
            ];
            $I++;
        }
        return $Array;
    }

    #Deleta diretamente da base de dados
    protected function deletarTitulo($Id)
    {
        $PFetch = $this->Db = $this->conexaoDB()->prepare("DELETE FROM tb_titulo where Id=:id");
        $PFetch->bindParam("id", $Id, \PDO::PARAM_INT);
        $PFetch->execute();
    }

    protected function atualizarTitulo($titulo, $descricao, $edicao, $dtPublicacao, $isbn, $preco, $editora, $tipoObra)
    {
        $PFetch = $this->Db = $this->conexaoDB()->prepare("UPDATE tb_titulo SET titulo =:titulo, descricao =:descricao, edicao =:edicao, dtPublicacao =:dtPublicacao, isbn =:isbn, preco = :preco, id_editora = :id_editora, id_tipoObra = :id_tipoObra WHERE id=:id)");
        $PFetch->bindParam(":id", $id, \PDO::PARAM_INT);
        $PFetch->bindParam(":titulo", strtotime($titulo), \PDO::PARAM_STR);
        $PFetch->bindParam(":descricao", $descricao, \PDO::PARAM_STR);
        $PFetch->bindParam(":edicao", $edicao, \PDO::PARAM_STR);
        $PFetch->bindParam(":dtPublicacao", $dtPublicacao, \PDO::PARAM_STR);
        $PFetch->bindParam(":isbn", $isbn, \PDO::PARAM_STR);
        $PFetch->bindParam(":preco", $preco, \PDO::PARAM_STR);
        $PFetch->bindParam(":id_editora", $editora, \PDO::PARAM_INT);
        $PFetch->bindParam(":id_tipoObra", $tipoObra, \PDO::PARAM_INT);
        $PFetch->execute();
    }
}
