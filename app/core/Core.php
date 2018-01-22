<?php

require_once __DIR__ . '/Controller.php';

class Core{

    protected $controller = 'Vilarthe';
    protected $method = 'index';
    protected $parameter = [];

    public function __construct(){
        $url = $this->getUrl();
        if(isset($url[0])){

            if(file_exists("../app/controller/" . ucwords($url[0]) . "Controller.php")){
                $this->controller = ucwords($url[0]);
                unset($url[0]);
            }
        }

        $this->controller = $this->controller . 'Controller';
        require_once __DIR__ . '/../controller/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
            else{
                $this->method = 'es';
            }
        }


        $this->parameter = $url ? array_values($url) : [];

        if($this->parameter != []){
            header("location:/lazos");
        }

        call_user_func_array([$this->controller, $this->method], []);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
        return '';
    }

    function getUserLanguage() {
       $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
       return $idioma;
    }

}