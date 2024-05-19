<?php
namespace Src\Classes;


class classBreadCrumb{

    use \Src\Traits\TraitUrlParser;

    public function addBreadcrumb(){

        $Contador = count($this->ParseUrl());
        $ArrayLink[0]='';

        echo "<a href=".DIRPAGE.">home</a> >";

        for($I=0; $I < $Contador; $I++){
            $ArrayLink[0].=$this->ParseUrl()[$I].'/';
            echo "<a href=".DIRPAGE.$ArrayLink[0].">".$this->ParseUrl()[$I]."</a>";
            

            if ($I < $Contador -1){
                echo ">";
            }
        }

    }

}