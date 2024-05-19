<?php
namespace App\Model;

class ClassEstoque {

    public function Balanco()
    {
        $redirecionamento = DIRPAGE."estoque";
        $dir = UPLOADBALANCO;
        $file = $_FILES["balanco"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }

    public function NotaEntrada()
    {
        $redirecionamento = DIRPAGE."estoque";
        $dir = UPLOADNOTAENTRADA;
        $file = $_FILES["nota_entrada"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }

    public function NotaSaida()
    {
        $redirecionamento = DIRPAGE."estoque";
        $dir = UPLOADNOTASAIDA;
        $file = $_FILES["nota_saida"];
        if(move_uploaded_file($file['tmp_name'], $dir.$file['name'])){
            header("Location: $redirecionamento");
        }else{
            die();
        }
        
    }
}