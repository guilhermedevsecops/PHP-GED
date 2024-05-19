<?php
namespace SRC\Traits;

#codigo auxiliar responsavel por partir a url
trait TraitUrlParser{

    #dividir url em array

    public function ParseUrl(){
        return explode("/", rtrim($_GET['url']),FILTER_SANITIZE_URL);
    }

}

