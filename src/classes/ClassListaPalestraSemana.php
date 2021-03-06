<?php

namespace Src\Classes;

use App\Model\ClassConexao;
use Exception;
use Src\Classes\ClassDiaSemana;
use PDOException;


class ClassListaPalestraSemana extends ClassConexao
{

    public function listaPalestraSexta()
    {
        $dSex = new ClassDiaSemana();
        try {
            if (isset($dSex)) {
                $dSex->addDiaSexta();
            } else {
                echo "
                <div class='sexta border border-success p-2 rounded'>
               <p class='sem text-uppercase'> Domingo/ Dia:&nbsp &nbsp Não Encontrado</p>
               <p Slass='ortD'>Orador: Não Encontrado</p>
               <p class='ortD'>Tema: Não Encontrado</p>
               </div>
               ";
            }
        } catch (Exception $ee) {
            $ee->getMessage('nada rodando');
        }
    }
    public function listaPalestraDomingo()
    {
        $dDom = new ClassDiaSemana();
        try {
            if (isset($dDom)) {
                $dDom->addDiaDomingo();
            } else {
                echo "
                <div class='sexta border border-success p-2 rounded'>
               <p class='sem text-uppercase'> Domingo/ Dia:&nbsp &nbsp Não Encontrado</p>
               <p Slass='ortD'>Orador: Não Encontrado</p>
               <p class='ortD'>Tema: Não Encontrado</p>
               </div>
               ";
            }
        } catch (Exception $e) {
            $e->getMessage('nada rodando');
        }
    }

    //var_dump(isset($teste2->{'Sim'}));
}
