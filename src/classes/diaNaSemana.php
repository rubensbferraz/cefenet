<?php
$P_dia = date('Y-m-d');
$U_dia = date('Y-m-t');
$mes_pesq = date('Y-m-d');
$diaSistema = date("d", strtotime($mes_pesq)); //echo $diaSistema; //captura a dia do sistema;
$msSistema = date("m", strtotime($mes_pesq)); //captura o mês do sistema
$anoSistema = date("Y", strtotime($mes_pesq)); //captura o ano do sistema
//captura do número da semana correspondente ao dia do sistema (4);
$NumS = date('w', strtotime(strtotime($diaSistema)));
//var_dump($msSistema);
//------------------------------+
$diaS_1 = date('d-m-Y', strtotime("+1 days")); //echo $diaS_1;
$diaS_2 = date('d-m-Y', strtotime("+2 days")); //echo $diaS_2;
$diaS_3 = date('d-m-Y', strtotime("+3 days")); //echo $diaS_3;
$diaS_4 = date('d-m-Y', strtotime("+4 days")); //echo $diaS_4;
$diaS_5 = date('d-m-Y', strtotime("+5 days")); //echo $diaS_5;
$diaS_6 = date('d-m-Y', strtotime("+6 days")); //echo $diaS_6;
$diaS_7 = date('d-m-Y', strtotime("+7 days")); //echo $diaS_7;

$array7datas = [$diaS_1, $diaS_2, $diaS_3, $diaS_4, $diaS_5, $diaS_6, $diaS_7];

$dia_1 = date('d', strtotime("+1 days")); //echo $dia_1;
$dia_2 = date('d', strtotime("+2 days")); //echo $dia_2;
$dia_3 = date('d', strtotime("+3 days")); //echo $dia_3;
$dia_4 = date('d', strtotime("+4 days")); //echo $dia_4;
$dia_5 = date('d', strtotime("+5 days")); //echo $dia_5;
$dia_6 = date('d', strtotime("+6 days")); //echo $dia_6;
$dia_7 = date('d', strtotime("+7 days")); //echo $dia_7;

$array7dias = [$dia_1, $dia_2, $dia_3, $dia_4, $dia_5, $dia_6, $dia_7];

//numero da semana corrente do sistema
$inicio = new DateTime($P_dia);
$interval = new DateInterval('P7D');
$fim = new DateTime($U_dia);
$recurrences = 5;
// All of these periods are equivalent.
$period = new DatePeriod($inicio, $interval, $recurrences);
$period = new DatePeriod($inicio, $interval, $fim);

foreach ($period as $date) {
    $diaPalestra = $date->format('d');
}
