<?php

namespace Src\Classes;

use App\Model\ClassConexao;
use DateInterval;
use DatePeriod;
use DateTime;

class ClassDiaSemana extends ClassConexao
{

    private $Db;

    public function addDiaDomingo()
    {
        $diaS_1 = date('d-m-Y', strtotime("+1 days")); //echo $diaS_1;
        $diaS_2 = date('d-m-Y', strtotime("+2 days")); //echo $diaS_2;
        $diaS_3 = date('d-m-Y', strtotime("+3 days")); //echo $diaS_3;
        $diaS_4 = date('d-m-Y', strtotime("+4 days")); //echo $diaS_4;
        $diaS_5 = date('d-m-Y', strtotime("+5 days")); //echo $diaS_5;
        $diaS_6 = date('d-m-Y', strtotime("+6 days")); //echo $diaS_6;
        $diaS_7 = date('d-m-Y', strtotime("+7 days")); //echo $diaS_7;

        $array7datas = [$diaS_1, $diaS_2, $diaS_3, $diaS_4, $diaS_5, $diaS_6, $diaS_7];
        $mesAtual = date('m');
        $PDFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra FROM tb_palestra where semanaPalestra='domingo' and mesPalestra=$mesAtual ");
        $PDFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PDFetch->execute();
        foreach ($PDFetch as $Dom) {
            $arrayDom = [$Dom['DataPalestra']];
            $arrayDatasPDom = explode('-', $arrayDom[0]);
        }
        $P_dia = date($arrayDatasPDom[0] . '-m-Y'); // pegar as sextas feiras a partir da base de dados

        $U_dia = date('t-m-Y');
        //numero da semana corrente do sistema
        $inicio = new DateTime($P_dia);
        $interval = new DateInterval('P7D');
        $fim = new DateTime($U_dia);
        $recurrences = 4;
        // All of these periods are equivalent.
        $period = new DatePeriod($inicio, $interval, $recurrences);
        $period = new DatePeriod($inicio, $interval, $fim);

        foreach ($period as $date) {
            $diaPDom = $date->format('d-m-Y');

            $PD2Fetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where semanaPalestra='domingo' order by DataPalestra");
            $PD2Fetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
            $PD2Fetch->execute();

            foreach ($PD2Fetch as $Dom2) {
                $geralDom = $Dom2;
                $arrayDtPDom = explode('-', $geralDom[0]);
                while (in_array($geralDom[0], $array7datas)) {
                    echo "
                        <div class='Domingo border border-success p-2 rounded'>
                        <p class='sem text-uppercase'> Domingo/ Dia:&nbsp &nbsp " . $arrayDtPDom[0] . "</p>
                        <p Slass='ortD'>Orador: " . $geralDom[1] . "</p>
                        <p class='ortD'>Tema: " . $geralDom[2] . "</p>
                        </div>
                                ";
                    break;
                }
            }
        }
    }
    public function addDiaSexta()
    {
        $diaS_1 = date('d-m-Y', strtotime("+1 days")); //echo $diaS_1;
        $diaS_2 = date('d-m-Y', strtotime("+2 days")); //echo $diaS_2;
        $diaS_3 = date('d-m-Y', strtotime("+3 days")); //echo $diaS_3;
        $diaS_4 = date('d-m-Y', strtotime("+4 days")); //echo $diaS_4;
        $diaS_5 = date('d-m-Y', strtotime("+5 days")); //echo $diaS_5;
        $diaS_6 = date('d-m-Y', strtotime("+6 days")); //echo $diaS_6;
        $diaS_7 = date('d-m-Y', strtotime("+7 days")); //echo $diaS_7;

        $array7datas = [$diaS_1, $diaS_2, $diaS_3, $diaS_4, $diaS_5, $diaS_6, $diaS_7];
        $mesAtual = date('m');
        $PSFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra FROM tb_palestra where semanaPalestra='sexta' and mesPalestra=$mesAtual ");
        $PSFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PSFetch->execute();
        foreach ($PSFetch as $Sex) {
            $arraySex = [$Sex['DataPalestra']];
            $arrayDatasPSex = explode('-', $arraySex[0]);
        }
        $P_dia = date($arrayDatasPSex[0] . '-m-Y'); // pegar as sextas feiras a partir da base de dados
        $U_dia = date('t-m-Y');
        //numero da semana corrente do sistema
        $inicio = new DateTime($P_dia);
        $interval = new DateInterval('P7D');
        $fim = new DateTime($U_dia);
        $recurrences = 4;
        // All of these periods are equivalent.
        $period = new DatePeriod($inicio, $interval, $recurrences);
        $period = new DatePeriod($inicio, $interval, $fim);

        foreach ($period as $date) {
            $diaPSex = $date->format('d-m-Y');

            $PS2Fetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where semanaPalestra='sexta' order by DataPalestra");
            $PS2Fetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
            $PS2Fetch->execute();

            foreach ($PS2Fetch as $Sex2) {
                $geralSex = $Sex2;
                $arrayDtPSex = explode('-', $geralSex[0]);

                while (in_array($geralSex[0], $array7datas)) {
                    echo "
                        <div class='sexta border border-success p-2 rounded'>
                        <p class='sem text-uppercase'> Sexta/ Dia:&nbsp &nbsp " . $arrayDtPSex[0] . "</p>
                        <p Slass='ortD'>Orador: " . $geralSex[1] . "</p>
                        <p class='ortD'>Tema: " . $geralSex[2] . "</p>
                        </div>
                                ";
                    break;
                }
            }
        }
    }
}
