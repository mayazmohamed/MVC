<?php

class App {

    private $controller = "home";
    private $method = "index";

    private function splitURL(){
        $URL = $_GET['url'];
        if (!$URL){
            $URL = "home";
        }
        $URL = explode("/", $URL);
        return $URL;
    }

    public function loadController(){
        $URL = $this->splitURL();
        $fileName = __DIR__ . "/../controllers/" . ucfirst($URL[0]) . ".php";
        if(file_exists($fileName)){
            require_once $fileName;
            $this->controller = $URL[0];
        }
        else{
            require_once "../app/controllers/_404.php";
            $this->controller = "_404";
        }
        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], []);
    }
}