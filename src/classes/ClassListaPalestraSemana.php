<?php

namespace Src\Classes;

use App\Model\ClassPalestra;

class ClassListaPalestraSemana extends ClassPalestra
{
    public function listaPalestraSexta()
    {
        include("diaNaSemana.php");
        $PSFetch = $this->Db = $this->conexaoDB()->prepare("SELECT dataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where semanaPalestra='sexta'");
        $PSFetch->bindParam('dataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('oradorPalestra', $oradorPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('temaPalestra', $temaPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('diretorPalestra', $diretorPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('semanaPalestra', $semanaPalestra, \PDO::PARAM_STR);
        $PSFetch->execute();

        foreach ($PSFetch as $sex) {
            $DataPalestra = explode("-", $sex['dataPalestra']); //$diaPalestra[2] = captura os dia de minhas 
            $diaPalestra = $DataPalestra[2];
            $mesPalestra = $DataPalestra[1];

            if ($mesPalestra === $msSistema) {
                if ($diaS_1 == $diaPalestra or $diaS_2 == $diaPalestra or $diaS_3 == $diaPalestra or $diaS_4 == $diaPalestra or $diaS_5 == $diaPalestra or $diaS_6 == $diaPalestra or $diaS_7 == $diaPalestra) {
                    echo "
                <div class='sexta border border-success p-2 rounded'>
                <p class='sem text-uppercase'>" . $sex['semanaPalestra'] . "/ Dia:&nbsp &nbsp " . $diaPalestra . "</p>
                <p Slass='ortD'>Orador: " . $sex['oradorPalestra'] . "</p>
                <p class='ortD'>Tema: " . $sex['temaPalestra'] . "</p>
                </div>
                ";
                }
            }
        }
    }

    public function listaPalestraDomingo()
    {
        include("diaNaSemana.php");
        $PDFetch = $this->Db = $this->conexaoDB()->prepare("SELECT dataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where semanaPalestra='domingo'");
        $PDFetch->bindParam('dataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PDFetch->bindParam('oradorPalestra', $oradorPalestra, \PDO::PARAM_STR);
        $PDFetch->bindParam('temaPalestra', $temaPalestra, \PDO::PARAM_STR);
        $PDFetch->bindParam('diretorPalestra', $diretorPalestra, \PDO::PARAM_STR);
        $PDFetch->bindParam('semanaPalestra', $semanaPalestra, \PDO::PARAM_STR);
        $PDFetch->execute();

        foreach ($PDFetch as $D) {
            $DataPalestra = explode("-", $D['dataPalestra']); //$diaPalestra[2] = captura os dia de minhas 
            $diaPalestra = $DataPalestra[2];
            $mesPalestra = $DataPalestra[1];
            if ($mesPalestra === $msSistema) {
                if ($diaS_1 == $diaPalestra or $diaS_2 == $diaPalestra or $diaS_3 == $diaPalestra or $diaS_4 == $diaPalestra or $diaS_5 == $diaPalestra or $diaS_6 == $diaPalestra or $diaS_7 == $diaPalestra) {
                    echo "
                <div class='sexta border border-success p-2 rounded'>
                <p class='sem text-uppercase'>" . $D['semanaPalestra'] . "/ Dia:&nbsp &nbsp " . $diaPalestra . "</p>
                <p class='ortD'>Orador: " . $D['oradorPalestra'] . "</p>
                <p class='ortD'>Tema: " . $D['temaPalestra'] . "</p>
                </div>
                ";
                }
            }
        }
    }
}
