<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassFinanceiro;

class ControllerFinanceiro extends classFinanceiro{



    
    public function __construct(){

        $Render = new ClassRender();
        $Render->setTitle("Financeiro");
        $Render->setDescription("Gerenciador Documentos Financeiros");
        $Render->setKeywords("Financeiro, Pagas, Não Pagas, Valores");
        $Render->setDir("financeiro");
        $Render->renderLayout();
        

    }

    public function uploadBoletos(){

        $this->boletos();
        
        
        
        
    }

    public function uploadContasPagar(){

        $this->contasPagar();

    }

    public function uploadContasPagas(){

        $this->contasPagas();
    }

    public function uploadPlanilhas(){

        $this->planilhasFinanceiro();
    }

}

