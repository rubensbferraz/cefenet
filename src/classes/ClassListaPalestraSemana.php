<?php

namespace Src\Classes;

use App\Model\ClassConexao;
use PDOException;


class ClassListaPalestraSemana extends ClassConexao
{

    public function listaPalestraSexta()
    {
        include("diaNaSemana.php");
        $mesPal = date('m');
        $PSFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where semanaPalestra='sexta' order by DataPalestra ASC");
        $PSFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PSFetch->execute();

        foreach ($PSFetch as $Sex) {
            $DPalestra = explode("-", $Sex['DataPalestra']); //$diaPalestra[2] = captura os dia de minhas
            $ArrayDp = $DPalestra[0];
            $teste = array_search($ArrayDp, $array7dias);
            $resultadoFill = in_array($Sex['DataPalestra'], $array7datas);
        }

        if ($teste == 1) {
            $resultadoFill == true;
            echo "
            <div class='sexta border border-success p-2 rounded'>
            <p class='sem text-uppercase'>" . $Sex['semanaPalestra'] . "/ Dia:&nbsp &nbsp " . $DPalestra[0] . "</p>
            <p Slass='ortD'>Orador: " . $Sex['oradorPalestra'] . "</p>
            <p class='ortD'>Tema: " . $Sex['temaPalestra'] . "</p>
            </div>
                    ";
        } else {
            echo "
            <div class='sexta border border-success p-2 rounded'>
            <p class='sem text-uppercase'> Não Informado / Dia:&nbsp &nbsp Não Informado</p>
            <p Slass='ortD'>Orador: Não Informado </p>
            <p class='ortD'>Tema: Não Informado </p>
            </div>
            ";
        }
    }
    public function listaPalestraDomingo()
    {
        include("diaNaSemana.php");
        $mesPal = date('m');
        $PSFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where semanaPalestra='domingo' order by DataPalestra ASC");
        $PSFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PSFetch->execute();

        foreach ($PSFetch as $Sex) {
            $DPalestra = explode("-", $Sex['DataPalestra']); //$diaPalestra[2] = captura os dia de minhas
            $ArrayDp = $DPalestra[0];
            $teste = array_search($ArrayDp, $array7dias);
            $resultadoFill = in_array($Sex['DataPalestra'], $array7datas);
        }

        if ($teste == 1) {
            $resultadoFill == true;
            echo "
            <div class='sexta border border-success p-2 rounded'>
            <p class='sem text-uppercase'>" . $Sex['semanaPalestra'] . "/ Dia:&nbsp &nbsp " . $DPalestra[0] . "</p>
            <p Slass='ortD'>Orador: " . $Sex['oradorPalestra'] . "</p>
            <p class='ortD'>Tema: " . $Sex['temaPalestra'] . "</p>
            </div>
                    ";
        } else {
            echo "
            <div class='sexta border border-success p-2 rounded'>
            <p class='sem text-uppercase'> Não Informado / Dia:&nbsp &nbsp Não Informado</p>
            <p Slass='ortD'>Orador: Não Informado </p>
            <p class='ortD'>Tema: Não Informado </p>
            </div>
            ";
        }
    }
}
