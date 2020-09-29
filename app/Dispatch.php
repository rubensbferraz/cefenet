<?php

namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes
{
    #Atribudos
    private $Method;
    private $Param = [];
    private $Obj;

    protected function getMethod()
    {
        return $this->Method;
    }
    public function setMethod($Method)
    {
        $this->Method = $Method;
        return $this;
    }

    protected function getParam()
    {
        return $this->Param;
    }
    public function setParam($Param)
    {
        $this->Param = $Param;
        return $this;
    }

    #método construtor
    public function __construct()
    {
        return self::addController();
    }

    #método de adição de contrller
    private function addController()
    {
        $RotaController = $this->getRota();
        $NameS = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameS;

        if (isset($this->parseUrl()[1])) {
            self::addMethod();
        }
    }

    #método de adição de método do controller
    private function addMethod()
    {
        if (method_exists($this->Obj, $this->parseUrl()[1])) {
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
        }
    }

    #método de adição de parâmetros do controller
    private function addParam()
    {
        $ContArray = count($this->parseUrl());
        if ($ContArray > 2) {
            foreach ($this->parseUrl() as $key => $value) {
                if ($key > 1) {
                    $this->setParam($this->Param += [$key => $value]);
                }
            }
        }
    }
}
