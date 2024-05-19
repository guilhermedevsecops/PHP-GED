<?php
namespace App\Model;

use App\Controller\ControllerContabilidade;

#Classe responsavel por efetuar o Upload dos arquivos de Contabilidade em seus respectivos diretórios
class ClassAdministrativo{


    public function NFE()
    {
        $redirecionamento = DIRPAGE."administrativo";
        $dir = UPLOADNFE;
        $file = $_FILES["nfe"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }

    public function DANFE()
    {
        $redirecionamento = DIRPAGE."administrativo";
        $dir = UPLOADDANFE;
        $file = $_FILES["danfe"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }

    public function Planilhas()
    {
        $redirecionamento = DIRPAGE."administrativo";
        $dir = UPLOADPLANILHASADM;
        $file = $_FILES["planilhas"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }

}