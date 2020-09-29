<?php

namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes
{
    use TraitUrlParser;

    private $Rota;

    #Método de retorno da rota
    public function getRota()
    {
        $Url = $this->parseUrl();
        $I = $Url[0];
        $this->Rota = array(
            "" => "ControllerHome",
            "home" => "ControllerHome",
            "admin" => "ControllerAdmin",
            "palestra" => "ControllerPalestra",
            "sitemap" => "ControllerSitemap"

        );

        if (array_key_exists($I, $this->Rota)) {
            if (file_exists(DIRREQ . "app/Controller/{$this->Rota[$I]}.php")) {
                return $this->Rota[$I];
            } else {
                return "ControllerHome";
            }
        } else {
            return "Controller404";
        }
    }
}
