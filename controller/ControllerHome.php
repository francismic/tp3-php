<?php

class ControllerHome{

    public function index(){

      $data =['name' =>'Francis', 
              'welcome' => 'Welcome'];
      twig::render("home-index.php", $data);

    }

    public function error(){
        twig::render("home-error.php");
    }
}