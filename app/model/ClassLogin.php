<?php
namespace App\Model;
use App\Dispatch;


class ClassLogin extends ClassConexao{

    protected function validarUsuario($Usuario, $Senha)
    {
        $BFetch=$this->conexaoDB()->prepare("select * from usuario where Usuario=:usuario and Senha=:senha ");
        $BFetch->bindParam(":usuario", $Usuario,\PDO::PARAM_STR);
        $BFetch->bindParam(":senha", $Senha,\PDO::PARAM_STR);
        $BFetch->execute();

        if($Row=$BFetch->rowCount()>0){
            return true;
        }else{
            return false;
        }

    }
}