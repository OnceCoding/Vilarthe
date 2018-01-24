<?php

require_once 'Conecction.php';

class Products_lazos{

    public function getProductsAvailables($language){
        $query = "";
        if($language == 'es'){
            $query = "select id, code, state, image, name_es, description_es, size_es, material_es, color_es, collection_es 
                        from products_lazos WHERE state = '1'";
        }
        elseif ($language == 'en'){
            $query = "select id, code, state, image, name_en, description_en, size_en, material_en, color_en, collection_en 
                        from products_lazos WHERE state = '1'";
        }

        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute();
        $resultSet = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;

    }

    public function getAllProducts(){
        $query = "select id, name_es, code , state from products_lazos";
        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute();
        $resultSet = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

    public function getProduct($param){
        $query = "select id, code, state, image, name_es, name_en, description_es, description_en, size_es, size_en, material_es,
                    material_en, color_es, color_en, collection_es, collection_en from products_lazos WHERE id = $param";
        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute();
        if($ps->rowCount() == 0){
            return [];
        }
        $resultSet = $ps->fetchAll(PDO::FETCH_ASSOC);
        return $resultSet;
    }

    public function deleteProduct($id){
        $query = "delete from products_lazos WHERE $id = id";
        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        return $ps->execute();
    }

    public function updateProduct($id,$code, $state, $image, $name_es, $name_en, $des_es, $des_en, $size_es, $size_en,
        $material_es, $material_en, $color_es, $color_en, $col_es, $col_en){

        $query = "update products_lazos set code = :code, state = :state, image = :image, name_es = :name_es, name_en = :name_en,
                    description_es = :des_es, description_en = :des_en, size_es = :size_es, size_en = :size_en,
                    material_es = :material_es, material_en = :material_en, color_es = :color_es, color_en = :color_en,
                    collection_es = :col_es, collection_en = :col_en WHERE id = :id";
        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        return $ps->execute(array(
            ':code' => $code,
            ':state' => $state,
            ':image' => $image,
            ':name_es' => $name_es,
            ':name_en' => $name_en,
            ':des_es' => $des_es,
            ':des_en' => $des_en,
            ':size_es' => $size_es,
            ':size_en' => $size_en,
            ':material_es' => $material_es,
            ':material_en' => $material_en,
            ':color_es' => $color_es,
            ':color_en' => $color_en,
            ':col_es' => $col_es,
            ':col_en' => $col_en,
            ':id' => $id
        ));

    }

}