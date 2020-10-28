<?php
class ClassDiaSemana
{

    private $Db;

    public function addDiaDomingo()
    {
        //include("../Conexao/ClassConexao.php");
        $arrayDom = [04, 11, 18, 25];
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


        $arr = array(2, 9, 16, 23, 30);

        array_filter($arr, function ($k) {
            return $k >= 19;
        }, ARRAY_FILTER_USE_BOTH);
    }
}
$diaDom = new ClassDiaSemana();
$diaDom->addDiaDomingo();
var_dump($diaDom);
