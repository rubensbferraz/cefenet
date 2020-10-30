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
        $PDFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where semanaPalestra='domingo' order by DataPalestra ASC");
        $PDFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PDFetch->execute();
        foreach ($PDFetch as $dom) {

            $geralDom = [$dom];
            $arrayDom = [$dom['DataPalestra']];
            $arrayOrador = [$dom['oradorPalestra']];
            $arrayTema = [$dom['temaPalestra']];
            $P_dia = date('Y-m-' . $arrayDom[0]);
            $U_dia = date('Y-m-t');
            //numero da semana corrente do sistema
            $inicio = new DateTime($P_dia);
            $interval = new DateInterval('P7D');
            $fim = new DateTime($U_dia);
            $recurrences = 5;
            // All of these periods are equivalent.
            $period = new DatePeriod($inicio, $interval, $recurrences);
            $period = new DatePeriod($inicio, $interval, $fim);

            foreach ($period as $date) {
                $teste = $date->format('d');
                //var_dump($teste);
            }
            $geral = [$geralDom[0]];

            array_filter($geral, function ($k) {
                $diaDomingo =  $k[0] >= date('d');
                if ($diaDomingo == true) {
                    echo "
                    <div class='sexta border border-success p-2 rounded'>
                    <p class='sem text-uppercase'> Domingo/ Dia:&nbsp &nbsp " . $k[0] . "</p>
                    <p Slass='ortD'>Orador: " . $k[1] . "</p>
                    <p class='ortD'>Tema: " . $k[2] . "</p>
                    </div>
                            ";
                }
            }, ARRAY_FILTER_USE_BOTH);
        }
    }
    public function addDiaSexta()
    {
        $PSFetch = $this->Db = $this->conexaoDB()->prepare("SELECT DATE_FORMAT(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where semanaPalestra='sexta' order by DataPalestra ASC");
        $PSFetch->bindParam('DataPalestra', $dataPalestra, \PDO::PARAM_STR);
        $PSFetch->execute();
        foreach ($PSFetch as $Sex) {

            $geralSex = [$Sex];
            $arraySex = [$Sex['DataPalestra']];
            $arrayOrador = [$Sex['oradorPalestra']];
            $arrayTema = [$Sex['temaPalestra']];
            $P_dia = date('Y-m-' . $arraySex[0]);
            $U_dia = date('Y-m-t');
            //numero da semana corrente do sistema
            $inicio = new DateTime($P_dia);
            $interval = new DateInterval('P7D');
            $fim = new DateTime($U_dia);
            $recurrences = 5;
            // All of these periods are equivalent.
            $period = new DatePeriod($inicio, $interval, $recurrences);
            $period = new DatePeriod($inicio, $interval, $fim);

            foreach ($period as $date) {
                $teste = $date->format('d');
                //var_dump($teste);
            }
            $geral = [$geralSex[0]];

            array_filter($geral, function ($k) {
                $diaSexta =  $k[0] >= date('d');
                if ($diaSexta == true) {
                    echo "
                    <div class='sexta border border-success p-2 rounded'>
                    <p class='sem text-uppercase'> Sexta/ Dia:&nbsp &nbsp " . $k[0] . "</p>
                    <p Slass='ortD'>Orador: " . $k[1] . "</p>
                    <p class='ortD'>Tema: " . $k[2] . "</p>
                    </div>
                            ";
                }
            }, ARRAY_FILTER_USE_BOTH);
        } # code...

    }
}
