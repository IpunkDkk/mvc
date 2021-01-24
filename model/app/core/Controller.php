<?php

class Controller {
    public function tampil($tampil , $data = []){
        require_once '../app/views/' . $tampil . '.php' ;
    } 
    public function model($model){
        require_once '../app/models/' .$model . '.php';
        return New $model ; 
    }
}