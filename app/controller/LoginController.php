<?php

class LoginController extends Controller {

    public function __construct(){
        //echo "controlador pagina cargando";
    }

    public function index(){
        $this->view("login/login");
    }

    public function validate($parameter = ''){//print_r($_POST);
        $this->extras("validateLogin", $_POST);
    }

}