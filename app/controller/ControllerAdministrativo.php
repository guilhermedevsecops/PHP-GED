<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassAdministrativo;

class ControllerAdministrativo extends ClassAdministrativo{

    public function __construct(){


        $Render = new ClassRender();
        $Render->setTitle("Administrativo");
        $Render->setDescription("Gerenciador de dados administrativos");
        $Render->setKeywords("Administração");
        $Render->setDir("administrativo");
        $Render->renderLayout();

    }

    public function uploadNFE(){
        $this->NFE();
    }

    public function uploadDANFE(){
        $this->DANFE();
    }

    public function uploadPlanilhas(){
        $this->Planilhas();
    }
}