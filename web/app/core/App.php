<?php
class App {
    protected $controller = 'Home';
    protected $method = 'Index';
    protected $params = [];


        public function __construct(){
            $url = $this->parseURL();
            //var_dump($url);
            // if ($url[0] == ''){
            //     $url[0] = $this->controller;
            // }
            // if (file_exists('../app/controllers/' . $url[0] . '.php')){
            //     $this->controller = $url[0];
            //     unset($url[0]);
            // }
        }
        
        public function parseURL(){
            if (isset ($_GET['url'])){
                $url = rtrim($_GET['url'],'/');
                $url = filter_var($url , FILTER_SANITIZE_URL);
                $url = explode('/' , $url);
                var_dump($url);
                return $url;
            }
        }
        
}