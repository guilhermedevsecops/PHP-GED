<?php
namespace App\Model;

use Exception;

abstract class ClassConexao{

    public function conexaoDB(){

        try{

            $Con= new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
            return $Con;

        }catch(Exception $e){
            return $e->getMessage();
        }
    }
}