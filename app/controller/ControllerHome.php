<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{

    public function __construct(){

        
            $this->setTitle("Gerenciador de Documentos Eletronicos");
            $this->setDescription("Modelo de Gerenciador de Documentos Eletrônicos");
            $this->setKeywords("Financeiro, Contabilidade, Estoque, RH");
            $this->setDir("home");
            $this->renderLayout();
        

    }

}
