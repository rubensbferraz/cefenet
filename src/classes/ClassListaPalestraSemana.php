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
        $PSFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where mesPalestra=$mesPal and semanaPalestra='sexta' order by DataPalestra ");
        $PSFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PSFetch->execute();

        foreach ($PSFetch as $S) {
            $DPalestra = explode("-", $S['DataPalestra']); //$diaPalestra[2] = captura os dia de minhas
            $ArrayDp = array($DPalestra);
            $resultadoFill = in_array($S[0], $arrayDias);
            var_dump($ArrayDp);
            if ($resultadoFill >= $ArrayDp) :
                echo "
                <div class='sexta border border-success p-2 rounded'>
                <p class='sem text-uppercase'>" . $S['semanaPalestra'] . "/ Dia:&nbsp &nbsp " . $DPalestra[0] . "</p>
                <p Slass='ortD'>Orador: " . $S['oradorPalestra'] . "</p>
                <p class='ortD'>Tema: " . $S['temaPalestra'] . "</p>
                </div>
                        ";
                break;
            else :
                echo "
                <div class='sexta border border-success p-2 rounded'>
                <p class='sem text-uppercase'> Não Informado / Dia:&nbsp &nbsp Não Informado</p>
                <p Slass='ortD'>Orador: Não Informado </p>
                <p class='ortD'>Tema: Não Informado </p>
                </div>
                "; //var_dump($resultadoFill);
                break;
            endif;
        }
    }
    public function listaPalestraDomingo()
    {
        include("diaNaSemana.php");
        $mesPal = date('m');
        $PSFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where mesPalestra=$mesPal and semanaPalestra='domingo' order by DataPalestra ASC");
        $PSFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PSFetch->execute();

        foreach ($PSFetch as $S) {
            $DPalestra = explode("-", $S['DataPalestra']); //$diaPalestra[2] = captura os dia de minhas
            $ArrayDp = array($DPalestra[0]);
            $resultadoFill = in_array($S[0], $arrayDias);
            if ($resultadoFill == $ArrayDp) :
                echo "
                <div class='sexta border border-success p-2 rounded'>
                <p class='sem text-uppercase'>" . $S['semanaPalestra'] . "/ Dia:&nbsp &nbsp " . $DPalestra[0] . "</p>
                <p Slass='ortD'>Orador: " . $S['oradorPalestra'] . "</p>
                <p class='ortD'>Tema: " . $S['temaPalestra'] . "</p>
                </div>
                        ";
                break;
            else :
                echo "
                <div class='sexta border border-success p-2 rounded'>
                <p class='sem text-uppercase'> Não Informado / Dia:&nbsp &nbsp Não Informado</p>
                <p Slass='ortD'>Orador: Não Informado </p>
                <p class='ortD'>Tema: Não Informado </p>
                </div>
                "; //var_dump($resultadoFill);
                break;
            endif;
        }
    }
}
