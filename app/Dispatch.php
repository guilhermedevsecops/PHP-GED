<?php
namespace App;

use App\Controller\Controller404;
use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes{

    private $Method;
    private $Param=[];
    private $Obj;


    protected function getMethod(){
        
        return $this->Method;
    }

    public function setMethod($Method){

        $this->Method = $Method;
    }

    protected function getParam(){
        
        return $this->Param;
    }

    public function setParam($Param){

        $this->Param = $Param;
    }

    public function __construct()
    {
        #Direciona para o Controller
        self::addController();
    }


    private function addController(){

        #Responsavel para definir a rota, 
        #NameS = Recebe os parametros da Rota
        #Obj = Instancia a classe chamando os metodos do controller
        $RotaController = $this->getRota();
        $NameS="App\\Controller\\{$RotaController}";
        $this->Obj=new $NameS;

        #Chama o Metodo exitente no Controller
        if(isset($this->ParseUrl()[1])){
            self::addMethod();
        }

    }

    private function addMethod(){
        #Responsavel para definir metodo no controler caso exista ou não e direciona para o local

        if(method_exists($this->Obj, $this->parseUrl()[1])){
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj,$this->getMethod()],$this->getParam());
        }else{
            return http_response_code(404);
        }
    }

    private function addParam(){

        $ContArray=count($this->parseUrl());

        if($ContArray > 2){
            foreach($this->parseUrl() as $Key => $Value){
                if($Key > 1){
                    $this->setParam($this->Param += [$Key => $Value]);
                }
            }

        }

    }

   

    

}