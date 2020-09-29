<?php

namespace Src\Classes;

class ClassBreadcrumb
{
    use \Src\Traits\TraitUrlParser;

    #Crias os breadcrumbs do site
    public function addBreadcrumb()
    {
        $Contador = count($this->parseUrl());

        $ArreyLink[0] = '';

        echo "
        <nav aria-label='breadcrumb'>
            <ol class='breadcrumb'> 
                <li class='breadcrumb-item'><i class='far fa-star mr-2 white-text' aria-hidden='true'></i><a class='white-text' href=" . DIRPAGE . ">Home</a></li>";

        for ($i = 0; $i < $Contador; $i++) {
            $ArreyLink[0] .= $this->parseUrl()[$i] . '/';
            echo "
                <li class='breadcrumb-item active' aria-current='page'><i class='far fa-star mx-2 white-text' aria-hidden='true'></i><a href=" . DIRPAGE . $ArreyLink[0] . ">" . $this->parseUrl()[$i] . "</a></li>
                ";
        }
    }
}
