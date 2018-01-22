<?php

class CpanelController extends Controller {

    public function __construct(){
        //echo "controlador pagina cargando";
    }

    public function index(){
        $this->validate();
        $this->view("cpanel/cpanel");
    }

    public function products(){
        $this->validate();
        $this->view("cpanel/products");
    }

    public function products_operations(){
        $this->validate();
        $this->view("cpanel/products_operations");
    }

    public function projects(){
        $this->validate();
        $this->view("cpanel/projects");
    }

    public function projects_operations(){
        $this->validate();
        $this->view("cpanel/projects_operations");
    }

    public function validate(){
        session_start();
        if(!isset($_SESSION['user'])){
            header('location:/login');
        }
        if(isset($_SESSION['user']) && $_SESSION['user'] != 'true'){
            header('location:/login');
        }
    }

}