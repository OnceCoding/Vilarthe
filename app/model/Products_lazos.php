<?php

require_once 'Conecction.php';

class Products_lazos{

    public function getProducts($language){
        $query = "";
        if($language == 'es'){
            $query = "select name_spanish, description_spanish, image from products_lazos WHERE state = '1'";
        }
        elseif ($language == 'en'){
            $query = "select name_english, description_english, image from products_lazos WHERE state = '1'";
        }

        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute();
        $resultSet = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;

    }

}