<?php

class CpanelController extends Controller {

    public function __construct(){
        //echo "controlador pagina cargando";
    }

    public function index(){
        $this->view("cpanel/cpanel");
    }

    public function products(){
        $this->view("cpanel/products");
    }

    public function products_operations(){
        $this->view("cpanel/products_operations");
    }

    public function projects(){
        $this->view("cpanel/projects");
    }

    public function projects_operations(){
        $this->view("cpanel/projects_operations");
    }

}