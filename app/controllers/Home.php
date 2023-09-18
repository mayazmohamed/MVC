<?php

class Home extends Controllers {
    public function index($a = "", $b = "", $c = ""){
        $this->loadViews("home");
    }
}

