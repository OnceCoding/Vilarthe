<?php

class LazosController extends Controller {

    public function __construct(){}

    public function index(){
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $language = $this->getUserLanguage();

        if(substr($actual_link, -1, 1) == "/"){
            #echo "es igual"; die();
            header("location:" . $language);
        }
        else
            header("location:lazos/" . $language);
    }

    public function es($parameter = ''){
        $this->view("lazos/index" ,"es");
    }

    public function en($parameter = ''){
        $this->view("lazos/index", "en");
    }

    function getUserLanguage() {
        $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        return $idioma;
    }

}