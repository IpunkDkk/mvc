<?php

class App {
    protected $controler = 'Home';
    protected $method = 'index';
    protected $params = [];


    public function __construct(){
        $url = $this->ambilURL();
        
        if ($url[0] == null){
            $url[0] = $this->controler;
        }

        if (file_exists('../app/controllers/' . $url[0] . '.php' ) ){
            $this->controler = $url[0];
            unset($url[0]);
        }
        require_once '../app/controlers/' . $this->controler . '.php';
        $this->controler = new $this->controler;
    }


    public function ambilURL(){
        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/' , $url);
            return $url;
        }
    }
}