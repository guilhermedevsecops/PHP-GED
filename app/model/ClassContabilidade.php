<?php
namespace App\Model;

use App\Controller\ControllerContabilidade;

#Classe responsavel por efetuar o Upload dos arquivos de Contabilidade em seus respectivos diretórios
class ClassContabilidade{

    public function Demonstrativo()
    {
        $redirecionamento = DIRPAGE."contabilidade";
        $dir = UPLOADDEMONSTRATIVO;
        $file = $_FILES["demonstrativo"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }

    public function MovimentosContabeis()
    {
        $redirecionamento = DIRPAGE."contabilidade";
        $dir = UPLOADMOVCONTABEIS;
        $file = $_FILES["mov_contabeis"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }

    public function Fiscal()
    {
        $redirecionamento = DIRPAGE."contabilidade";
        $dir = UPLOADFISCAL;
        $file = $_FILES["fiscal"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }

}