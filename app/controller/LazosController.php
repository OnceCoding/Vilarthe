<?php

class LazosController extends Controller {

    public function __construct(){}

    public function index(){
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $language = $this->getUserLanguage();

        #echo $actual_link ; die();

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

    public function email($parameter = ''){
        echo "Correo de mensaje";
    }

    /*public function login($parameter = ''){
        $this->view("login/login");
    }*/

    function getUserLanguage() {
        $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        return $idioma;
    }

}