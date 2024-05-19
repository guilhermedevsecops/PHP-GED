<?php
namespace Src\Classes;
use Src\Traits\TraitUrlParser;

#Classe responsavel pelas rotas

class ClassRoutes{

    use TraitUrlParser;

    #Variavel de array para utilizar na url amigavel
    private $Rota;
    
    #Metodo de Retorno da Rota

    public function getRota(){
        $Url = $this->ParseUrl();
        #Variavel do primeiro indicie do array
        $I=$Url[0]; 

        #Array das Páginas que terão no site
        $this->Rota=array(
            ""=>"ControllerHome",
            "home"=>"ControllerHome",
            "sitemap"=>"ControllerSiteMap",
            "erro"=>"Controller404",
            "financeiro"=>"ControllerFinanceiro",
            "contabilidade"=>"ControllerContabilidade",
            "administrativo"=>"ControllerAdministrativo",
            "estoque"=>"ControllerEstoque",
        );


        #Condição para direcionar usuário para rota pré programada
        if(array_key_exists($I,$this->Rota)){
            if(file_exists(DIRREQ."app/controller/{$this->Rota[$I]}.php")){ 

                return $this->Rota[$I];
            }else{
                return "ControllerHome";
            }
    
        }else{
            return "Controller404";
        }

    }

}