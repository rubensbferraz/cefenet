<?php

namespace App\Model\Palestra;

use App\Model\ClassConexao;

class ClassPalestra extends ClassConexao
{
    private $Db;

    #Cadastrara os Administrador no sistema
    protected function cadastroPalestra($dataPalestra, $oradorPalestra, $temaPalestra, $diretorPalestra, $semanaPalestra)
    {
        $idPalestra = 0;
        $this->Db = $this->conexaoDB()->prepare("INSERT INTO tb_palestra VALUES(dataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra)");
        $this->Db->bindParam("idPalestra", $idPalestra, \PDO::PARAM_INT);
        $this->Db->bindParam("dataPalestra", $dataPalestra, \PDO::PARAM_STR);
        $this->Db->bindParam("oradorPalestra", $oradorPalestra, \PDO::PARAM_STR);
        $this->Db->bindParam("temaPalestra", $temaPalestra, \PDO::PARAM_STR);
        $this->Db->bindParam("diretorPalestra", $diretorPalestra, \PDO::PARAM_STR);
        $this->Db->bindParam("semanaPalestra", $semanaPalestra, \PDO::PARAM_STR);
        $this->Db->execute();
    }

    #Seleciona os dados cadastrados no banco de dados
    protected function selecionaPalestra($dataPalestra, $oradorPalestra, $temaPalestra, $diretorPalestra, $semanaPalestra)
    {
        $dataPalestra = '%' . $dataPalestra . '%';
        $oradorPalestra = '%' . $oradorPalestra . '%';
        $temaPalestra = '%' . $temaPalestra . '%';
        $diretorPalestra = '%' . $diretorPalestra . '%';
        $semanaPalestra = '%' . $semanaPalestra . '%';

        $PFetch = $this->Db = $this->conexaoDB()->prepare("SELECT FROM tb_palestra where dataPalestra like :dataPalestra, oradorPalestra like :oradorPalestra, temaPalestra like :temaPalestra, diretorPalestra like :diretorPalestra, semanaPalestra like :semanaPalestra)");
        $PFetch->bindParam(":idPalestra", $idPalestra, \PDO::PARAM_INT);
        $PFetch->bindParam(":dataPalestra", $dataPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":oradorPalestra", $oradorPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":temaPalestra", $temaPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":diretorPalestra", $diretorPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":semanaPalestra", $semanaPalestra, \PDO::PARAM_STR);
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
        $PFetch->bindParam(":dataPalestra", $dataPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":oradorPalestra", $oradorPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":temaPalestra", $temaPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":diretorPalestra", $diretorPalestra, \PDO::PARAM_STR);
        $PFetch->bindParam(":semanaPalestra", $semanaPalestra, \PDO::PARAM_STR);
        $PFetch->execute();
    }
}
