<?php
$mes_pesq = date('Y-m-d');
$diaSistema = date("d", strtotime($mes_pesq)); //echo ($diaSistema); //captura a data do sistema;
$msSistema = date("m", strtotime($mes_pesq)); //captura o mês do sistema
$anoSistema = date("Y", strtotime($mes_pesq)); //captura o ano do sistema
$NumS = date('w', strtotime("+2 days", strtotime($diaSistema))); //capturo do número da semana iqual a 5 Sexta feira;
//------------------------------
$diaS_1 = date('d', strtotime("+1 days", strtotime($diaSistema))); //echo $diaS_1;
$diaS_2 = date('d', strtotime("+2 days", strtotime($diaSistema))); //echo $diaS_2;
$diaS_3 = date('d', strtotime("+3 days", strtotime($diaSistema))); //echo $diaS_3;
$diaS_4 = date('d', strtotime("+4 days", strtotime($diaSistema))); //echo $diaS_4;
$diaS_5 = date('d', strtotime("+5 days", strtotime($diaSistema))); //echo $diaS_5;
$diaS_6 = date('d', strtotime("+6 days", strtotime($diaSistema))); //echo $diaS_6;
$diaS_7 = date('d', strtotime("+7 days", strtotime($diaSistema))); //echo $diaS_7;
