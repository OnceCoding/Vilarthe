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

    public function getAllArticles(){
        $query = "select id, title_es, title_en from articles_vilarthe";
        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute();
        $resultSet = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

    public function getArticle($id){
        $query = "select id, title_es, title_en, description_es, description_en, slider_1, slider_2, slider_3 from articles_vilarthe
                    WHERE id = :id";

        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute(array(
            ':id' => $id
        ));
        $resultSet = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

}