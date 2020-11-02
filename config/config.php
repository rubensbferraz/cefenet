<?php
//Arquivos diretórios raizes
$PastaInterna = "cefenet/";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

//Diretorio Específicos
define('DIRIMG', DIRPAGE . "public/img/");
define('DIRCSS', DIRPAGE . "public/css/");
define('DIRJS', DIRPAGE . "public/js/");
define('DIRINC', DIRPAGE . "src/Includes/");

//acesso ao banco de dados
define('HOST', "localhost");
define('DB', "cefeemmanuel1");
define('USER', "root");
define('PASS', "crbf");

//acesso ao banco de dados locaweb
/*define('HOST', "187.45.196.186");
define('DB', "cefeemmanue1");
define('USER', "provacefe1");
define('PASS', "@CRbf015174cefe");*/
