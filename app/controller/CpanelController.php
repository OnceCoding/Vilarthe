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

    }

}