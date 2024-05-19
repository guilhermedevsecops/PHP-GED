<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassContabilidade;

class ControllerContabilidade extends ClassContabilidade{

    public function __construct(){

        $Render = new ClassRender();
        $Render->setTitle("Contabilidade");
        $Render->setDescription("Gerenciador documentos Contabilidade");
        $Render->setKeywords("Contador, administração, dinheiro");
        $Render->setDir("contabilidade");
        $Render->renderLayout();

    }


    public function uploadDemonstrativo(){

        $this->Demonstrativo();

    }

    public function uploadMovimentosContabeis(){

        $this->MovimentosContabeis();

    }

    public function uploadFiscal(){

        $this->Fiscal();

    }
}
