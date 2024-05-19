<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassEstoque;

class ControllerEstoque extends ClassEstoque{

    public function __construct(){

        $Render = new ClassRender();
        $Render->setTitle("Estoque");
        $Render->setDescription("Gerenciador documentos estoque");
        $Render->setKeywords("Produtos, Marca, Tipo, Valor, Quantidade");
        $Render->setDir("estoque");
        $Render->renderLayout();

    }

    public function uploadBalanco(){

        $this->Balanco();
    }

    public function uploadNotaEntrada(){
        
        $this->NotaEntrada();
    }

    public function uploadNotaSaida(){

        $this->NotaSaida();
    }
}
