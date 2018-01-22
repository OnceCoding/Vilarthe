<?php

require_once 'Conecction.php';

class Article{

    public function getData($language){
        $query = "";
        if($language == 'es'){
            $query = "select title_1_spanish, title_2_spanish, description_1_spanish, description_2_spanish from articulos_vilarthe WHERE id = 1";

        }
        else if($language == 'en'){
            $query = "select title_1_english, title_2_english, description_1_english, description_2_english from articulos_vilarthe WHERE id = 1";
        }

        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute();
        $resultSet = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

}