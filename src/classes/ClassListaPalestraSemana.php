<?php

namespace Src\Classes;

use App\Model\ClassPalestra;

class ClassListaPalestraSemana extends ClassPalestra
{
    public function listaPalestraSexta()
    {
        $mesPal = date('m');
        include("diaNaSemana.php");
        $PSFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where mesPalestra=$mesPal and semanaPalestra='sexta' order by DataPalestra ASC");
        $PSFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('oradorPalestra', $oradorPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('temaPalestra', $temaPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('diretorPalestra', $diretorPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('semanaPalestra', $semanaPalestra, \PDO::PARAM_STR);
        $PSFetch->execute();

        foreach ($PSFetch as $S) {
            $DPalestra = explode("-", $S['DataPalestra']); //$diaPalestra[2] = captura os dia de minhas
            $arraydiaP = $DPalestra;
            $teste = array($arraydiaP[0]);
            $n_arraydiaP = count($arraydiaP);
            $encontrado = '';
            for ($i = 0; $i < $n_arraydiaP; $i++) {
                if ($arraydiaP[$i] == $diaS_1 or $arraydiaP[$i] == $diaS_2 or $arraydiaP[$i] == $diaS_3 or $arraydiaP[$i] == $diaS_4 or $arraydiaP[$i] == $diaS_5 or $arraydiaP[$i] == $diaS_6 or $arraydiaP[$i] == $diaS_7) {
                    $encontrado = $i == 0 ? $arraydiaP[$i] : $arraydiaP[$i - 1];

                    if (min($teste)) {
                        echo "
                        <div class='sexta border border-success p-2 rounded'>
                        <p class='sem text-uppercase'>" . $S['semanaPalestra'] . "/ Dia:&nbsp &nbsp " . $encontrado . "</p>
                        <p Slass='ortD'>Orador: " . $S['oradorPalestra'] . "</p>
                        <p class='ortD'>Tema: " . $S['temaPalestra'] . "</p>
                        </div>
                                ";
                        break;
                    } else {
                        echo "
                            <div class='sexta border border-success p-2 rounded'>
                            <p class='sem text-uppercase'> Não Informado / Dia:&nbsp &nbsp " . $encontrado . "</p>
                            <p Slass='ortD'>Orador: Não Informado </p>
                            <p class='ortD'>Tema: Não Informado </p>
                            </div>
                            ";
                        break;
                    }
                }
                break;
            }
        } //fim fo foreach
    }
    public function listaPalestraDomingo()
    {
        $mesPal = date('m');
        include("diaNaSemana.php");
        $PSFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where mesPalestra=$mesPal and semanaPalestra='domingo' order by DataPalestra ASC");
        $PSFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('oradorPalestra', $oradorPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('temaPalestra', $temaPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('diretorPalestra', $diretorPalestra, \PDO::PARAM_STR);
        $PSFetch->bindParam('semanaPalestra', $semanaPalestra, \PDO::PARAM_STR);
        $PSFetch->execute();

        foreach ($PSFetch as $S) {
            $DPalestra = explode("-", $S['DataPalestra']); //$diaPalestra[2] = captura os dia de minhas
            $arraydiaP = $DPalestra;
            $teste = array($arraydiaP[0]);
            $n_arraydiaP = count($arraydiaP);
            $encontrado = '';
            for ($i = 0; $i < $n_arraydiaP; $i++) {
                if ($arraydiaP[$i] == $diaS_1 or $arraydiaP[$i] == $diaS_2 or $arraydiaP[$i] == $diaS_3 or $arraydiaP[$i] == $diaS_4 or $arraydiaP[$i] == $diaS_5 or $arraydiaP[$i] == $diaS_6 or $arraydiaP[$i] == $diaS_7) {
                    $encontrado = $i == 0 ? $arraydiaP[$i] : $arraydiaP[$i - 1];

                    if (min($teste)) {
                        echo "
                        <div class='sexta border border-success p-2 rounded'>
                        <p class='sem text-uppercase'>" . $S['semanaPalestra'] . "/ Dia:&nbsp &nbsp " . $encontrado . "</p>
                        <p Slass='ortD'>Orador: " . $S['oradorPalestra'] . "</p>
                        <p class='ortD'>Tema: " . $S['temaPalestra'] . "</p>
                        </div>
                                ";
                        break;
                    } else {
                        echo "
                            <div class='sexta border border-success p-2 rounded'>
                            <p class='sem text-uppercase'> Não Informado / Dia:&nbsp &nbsp " . $encontrado . "</p>
                            <p Slass='ortD'>Orador: Não Informado </p>
                            <p class='ortD'>Tema: Não Informado </p>
                            </div>
                            ";
                        break;
                    }
                }
                break;
            }
        } //fim fo foreach
    }
}
