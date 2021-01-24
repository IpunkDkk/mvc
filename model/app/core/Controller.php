<?php

class Controller {
    public function tampil($tampil , $data = []){
        require_once '../app/views/' . $tampil . '.php' ;
    } 
}