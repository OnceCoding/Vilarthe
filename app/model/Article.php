<?php

require_once 'Conecction.php';

class Article{

    public function getData($language){
        $query = "";
        if($language == 'es'){
            $query = "select title_es, description_es, slider_1, slider_2, slider_3 from articles_vilarthe ";

        }
        else if($language == 'en'){
            $query = "select title_en, description_en, slider_1, slider_2, slider_3  from articles_vilarthe ";
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

    public function updateArticle($id, $tile_es, $title_en, $des_es, $des_en, $slide1, $slide2, $slide3){
        $query = "update articles_vilarthe set title_es = :t1 , title_en = :t2 , description_es = :des1, description_en = :des2,
                    slider_1 = :s1, slider_2 = :s2, slider_3 = :s3 WHERE id = :id";

        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        return $ps->execute(array(
            ':t1' => $tile_es,
            ':t2' => $title_en,
            ':des1' => $des_es,
            ':des2' => $des_en,
            ':s1' => $slide1,
            ':s2' => $slide2,
            ':s3' => $slide3,
            ':id' => $id
        ));
    }
}