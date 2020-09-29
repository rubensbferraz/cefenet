<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassAdmin extends ClassConexao
{
    private $Db;

    #Cadastrara os Administrador no sistema
    protected function cadastroAdministrador($NomeAdm, $FuncaoAdm, $LiberaAdm, $AtivoAdm)
    {
        $Id = 0;
        $this->Db = $this->conexaoDB()->prepare("INSERT INTO tb_adm VALUES(:idAdm, :nomeAdm, :funcaoAdm, :liberaAdm, :ativoAdm)");
        $this->Db->bindParam(":id", $IdAdm, \PDO::PARAM_INT);
        $this->Db->bindParam(":nomeAdm", $NomeAdm, \PDO::PARAM_STR);
        $this->Db->bindParam(":funcaoAdm", $FuncaoAdm, \PDO::PARAM_STR);
        $this->Db->bindParam(":liberaAdm", $LiberaAdm, \PDO::PARAM_STR);
        $this->Db->bindParam(":ativoAdm", $AtivoAdm, \PDO::PARAM_INT);
        $this->Db->execute();
    }

    #Acesso ao banco de dados com seleção
    protected function selecionaAdministrador($NomeAdm, $FuncaoAdm, $LiberaAdm, $AtivoAdm)
    {
        $NomeAdm = '%' . $NomeAdm . '%';
        $FuncaoAdm = '%' . $FuncaoAdm . '%';
        $LiberaAdm = '%' . $LiberaAdm . '%';
        $AtivoAdm = '%' . $AtivoAdm . '%';

        $BFetch = $this->Db = $this->conexaoDB()->prepare("SELECT * FROM tb_adm where NomeAdm like :nomeAdm and FuncaoAdm like :funcaoAdm and LiberaAdm like :liberaAdm, AtivoAdm like :ativoAdm");
        $BFetch->bindParam("nomeAdm", $NomeAdm, \PDO::PARAM_STR);
        $BFetch->bindParam("funcaoAdm", $FuncaoAdm, \PDO::PARAM_STR);
        $BFetch->bindParam("liberaAdm", $LiberaAdm, \PDO::PARAM_STR);
        $BFetch->bindParam("ativoAdm", $AtivoAdm, \PDO::PARAM_INT);
        $BFetch->execute();

        $I = 0;
        while ($Fetch = $BFetch->fetch(\PDO::FETCH_ASSOC)) {
            $Array[$I] = [
                'idAdm' => $Fetch['IdAdm'],
                'nomeAdm' => $Fetch['NomeAdm'],
                'funcaoAdm' => $Fetch['FuncaoAdm'],
                'liberaAdm' => $Fetch['LiberaAdm']
            ];
            $I++;
        }
        return $Array;
    }

    #Deletar direto no banco de dados
    protected function deletarAdministrador($Id)
    {
        $BFetch = $this->Db = $this->conexaoDB()->prepare("DELETE FROM tb_adm where IdAdm=:idAdm");
        $BFetch->bindParam("idAdm", $Id, \PDO::PARAM_INT);
        $BFetch->execute();
    }

    #Atualizar direto no Banco de dados
    protected function atualizarAdministrador($IdAdm, $NomeAdm, $FuncaoAdm, $LiberaAdm, $AtivoAdm)
    {
        $BFetch = $this->Db = $this->conexaoDB()->prepare("UPDATE tb_adm SET NomeAdm=:nomeAdm , FuncaoAdm=:funcaoAdm, LiberaAdm=:liberaAdm WHERE IdAdm=:idAdm");
        $BFetch->bindParam("idAdm", $IdAdm, \PDO::PARAM_INT);
        $BFetch->bindParam("nomeAdm", $NomeAdm, \PDO::PARAM_STR);
        $BFetch->bindParam("funcaoAdm", $FuncaoAdm, \PDO::PARAM_STR);
        $BFetch->bindParam("liberaAdm", $LiberaAdm, \PDO::PARAM_STR);
        $BFetch->bindParam("ativoAdm", $AtivoAdm, \PDO::PARAM_INT);
        $BFetch->execute();
    }
}
