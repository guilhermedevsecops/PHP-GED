<?php
namespace App\Model;

use App\Controller\ControllerFinanceiro;


#Classe responsavel por efetuar o Upload dos arquivos de Contabilidade em seus respectivos diretórios
class ClassFinanceiro{


    public function boletos()
    {
        $redirecionamento = DIRPAGE."financeiro";
        $dir = UPLOADBOLETOS;
        $file = $_FILES["boletos"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }

    public function contasPagar()
    {   
        $redirecionamento = DIRPAGE."financeiro";
        $dir = UPLOADCONTASPAGAR;
        $file = $_FILES["conta"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            return header("Location: $redirecionamento");
        }else{
            die();
        }   
    }

    public function contasPagas(){
        $redirecionamento = DIRPAGE."financeiro";
        $dir = UPLOADCONTASPAGAS;
        $file = $_FILES["paga"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            return header("Location: $redirecionamento");
        }else{
            return header("Location: $redirecionamento");
        }   
    }

    public function planilhasFinanceiro(){
        $redirecionamento = DIRPAGE."financeiro";
        $dir = UPLOADCONTASPAGAS;
        $file = $_FILES["planilhas"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            return header("Location: $redirecionamento");
        }else{
            return header("Location: $redirecionamento");
        }   
    }
}