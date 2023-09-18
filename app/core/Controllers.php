<?php


class Controllers {
    public function loadViews($name){
        $fileName = __DIR__ . "/../views/" . $name . ".view.php";


        if(file_exists($fileName)){
            require_once $fileName;
        }
        else{
            require_once "../app/views/404.view.php";
        }
    }
}