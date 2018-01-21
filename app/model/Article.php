<?php

require_once 'Conecction.php';

class Article{

    public function getData($language){
        if($language == 'es'){
            return $this->getDataSpanish();
        }
        else if($language == 'en'){
            return $this->getDataEnglish();
        }
    }

    public function getDataSpanish(){
        $query = "select title_1_spanish, title_2_spanish, description_1_spanish, description_2_spanish from articulos_vilarthe WHERE id = 1";
        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute();
        $resultSet = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

    public function getDataEnglish(){
        $query = "select title_1_english, title_2_english, description_1_english, description_2_english from articulos_vilarthe WHERE id = 1";
        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute();
        $resultSet = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

}