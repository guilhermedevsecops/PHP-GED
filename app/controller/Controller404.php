<?php
namespace App\Controller;

class Controller404{

    public function __construct(){

        http_response_code(404);
    }
}