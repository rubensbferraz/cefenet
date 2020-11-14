<?php

namespace Src\Classes;

class ClassRender
{

    #Propriedade
    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;

    public function getDir()
    {
        return $this->Dir;
    }
    public function setDir($Dir)
    {
        $this->Dir = $Dir;
        return $this;
    }

    public function getTitle()
    {
        return $this->Title;
    }
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    public function getDescription()
    {
        return $this->Description;
    }
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    public function getKeywords()
    {
        return $this->Keywords;
    }
    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }


    #Método responsável por renderizar todo o Layout
    public function renderLayout()
    {
        include_once(DIRREQ . "App/view/Layout.php");
    }

    #Adiciona caracteristicas especificas no head 
    public function addHead()
    {
        if (file_exists(DIRREQ . "app/view/{$this->getDir()}/Head.php")) {
            include(DIRREQ . "App/view/{$this->getDir()}/Head.php");
        }
    }

    #Adiciona caracteristicas especificas no header
    public function addHeader()
    {
        if (file_exists(DIRREQ . "App/view/{$this->getDir()}/Header.php")) {
            include(DIRREQ . "App/view/{$this->getDir()}/Header.php");
        }
    }

    #Adiciona caracteristicas especificas no Main
    public function addMain()
    {
        if (file_exists(DIRREQ . "App/view/{$this->getDir()}/Main.php")) {
            include(DIRREQ . "App/view/{$this->getDir()}/Main.php");
        }
    }

    #Adiciona caracteristicas especificas no Footer
    public function addFooter()
    {
        if (file_exists(DIRREQ . "App/view/{$this->getDir()}/Footer.php")) {
            include(DIRREQ . "App/view/{$this->getDir()}/Footer.php");
        }
    }
}
