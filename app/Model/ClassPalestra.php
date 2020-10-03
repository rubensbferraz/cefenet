<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassPalestra extends ClassConexao
{
    private $Db;

    #Cadastrara os Administrador no sistema
    protected function cadastroPalestra($dataPalestra, $oradorPalestra, $temaPalestra, $diretorPalestra, $semanaPalestra)
    {
        $idP = 0;
        $dataP = date("Y-m-d", strtotime($dataPalestra));
        $this->Db = $this->conexaoDB()->prepare("INSERT INTO tb_palestra VALUES(:idPalestra, :dataPalestra, :oradorPalestra, :temaPalestra, :diretorPalestra, :semanaPalestra)");
        $this->Db->bindParam(":idPalestra", $idP, \PDO::PARAM_INT);
        $this->Db->bindParam(":dataPalestra", $dataP, \PDO::PARAM_STR);
        $this->Db->bindParam(":oradorPalestra", $oradorPalestra, \PDO::PARAM_STR);
        $this->Db->bindParam(":temaPalestra", $temaPalestra, \PDO::PARAM_STR);
        $this->Db->bindParam(":diretorPalestra", $diretorPalestra, \PDO::PARAM_STR);
        $this->Db->bindParam(":semanaPalestra", $semanaPalestra, \PDO::PARAM_STR);
        $this->Db->execute();
    }

    #Seleciona os dados cadastrados no banco de dados
    protected function selecionaPalestra($dataPalestra, $oradorPalestra, $temaPalestra, $diretorPalestra, $semanaPalestra)
    {
        $dataPP = date("Y-m-d", strtotime($dataPalestra));
        $dataPP = '%' . $dataPP . '%';
        $oradorPalestra = '%' . $oradorPalestra . '%';
        $temaPalestra = '%' . $temaPalestra . '%';
        $diretorPalestra = '%' . $diretorPalestra . '%';
        $semanaPalestra = '%' . $semanaPalestra . '%';

        $PFetch = $this->Db = $this->conexaoDB()->prepare("SELECT FROM tb_palestra where dataPalestra like :DataPalestra, oradorPalestra like :OradorPalestra, temaPalestra like :TemaPalestra, diretorPalestra like :DiretorPalestra, semanaPalestra like :SemanaPalestra)");
        $PFetch->bindParam("dataPalestra", $dataPP, \PDO::PARAM_STR);
        $PFetch->bindParam("oradorPalestra", $oradorPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam("temaPalestra", $temaPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam("diretorPalestra", $diretorPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam("semanaPalestra", $semanaPalestra, \PDO::PARAM_STR);
        $PFetch->execute();

        $I = 0;

        while ($Fetch = $PFetch->fetch(\PDO::FETCH_ASSOC)) {
            $Array[$I] = ['idPalestra' => $Fetch['idPalestra'], 'dataPalestra' => $Fetch['dataPalestra'], 'oradorPalestra' => $Fetch['oradorPalestra'], 'temaPalestra' => $Fetch['temaPalestra'], 'diretorPalestra' => $Fetch['diretorPalestra'], 'semanaPalestra' => $Fetch['semanaPalestra']];
            $I++;
        }
        return $Array;
    }

    #Deleta diretamente da base de dados
    protected function deletarPalestra($Id)
    {
        $PFetch = $this->Db = $this->conexaoDB()->prepare("DELETE FROM tb_palestra where Id=:idPalestra");
        $PFetch->bindParam("idPalestra", $Id, \PDO::PARAM_INT);
        $PFetch->execute();
    }

    protected function atualizarPalestra($idPalestra, $dataPalestra, $oradorPalestra, $temaPalestra, $diretorPalestra, $semanaPalestra)
    {
        $PFetch = $this->Db = $this->conexaoDB()->prepare("UPDATE tb_palestra SET dataPalestra =:dataPalestra, oradorPalestra =:oradorPalestra, temaPalestra =:temaPalestra, diretorPalestra =:diretorPalestra, semanaPalestra =:semanaPalestra WHERE idPalestra=:idPalestra)");
        $PFetch->bindParam(":idPalestra", $idPalestra, \PDO::PARAM_INT);
        $PFetch->bindParam(":dataPalestra", strtotime($dataPalestra), \PDO::PARAM_STR);
        $PFetch->bindParam(":oradorPalestra", $oradorPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":temaPalestra", $temaPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":diretorPalestra", $diretorPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":semanaPalestra", $semanaPalestra, \PDO::PARAM_STR);
        $PFetch->execute();
    }
}
