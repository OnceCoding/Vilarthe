<?php

class Controller{

    /*
    public function model($model){
        require_once '../model/' . $model . '.php';
        return new $model();
    }
    */

    public function view($view, $data = ''){
        if(file_exists(__DIR__ . '/../view/' . $view . '.php')){
            require_once __DIR__ . '/../view/' . $view . '.php';
        }
        else{
            die("La vista no existe");
        }

    }

    public function method($method){
        //print_r($_POST);
        if(file_exists(__DIR__ . '/../method/' . $method . '.php')){
            require_once __DIR__ . '/../method/' . $method . '.php';
        }
        else{
            die("el metodo no existe");
        }

    }

    public function model($model, $data = ''){

        if(file_exists(__DIR__ . '/../model/' . $model . '.php')){
            require_once __DIR__ . '/../model/' . $model . '.php';
        }
        else{
            die("La vista no existe");
        }

    }

    public function extras($extra, $data = ''){

        if(file_exists(__DIR__ . '/../extras/' . $extra . '.php')){
            require_once __DIR__ . '/../extras/' . $extra . '.php';
        }
        else{
            die("El extra no existe");
        }

    }


}