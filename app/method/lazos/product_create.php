<?php

    header('Content-Type: application/json');

    $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_STRING);
    $state = ($_POST['state'] == "Visible") ? '1' : '0';
    $name_es = filter_var(trim($_POST['name_es']), FILTER_SANITIZE_STRING);
    $name_en = filter_var(trim($_POST['name_en']), FILTER_SANITIZE_STRING);
    $description_es = filter_var(trim($_POST['description_es']), FILTER_SANITIZE_STRING);
    $description_en = filter_var(trim($_POST['description_en']), FILTER_SANITIZE_STRING);
    $size_es = filter_var(trim($_POST['size_es']), FILTER_SANITIZE_STRING);
    $size_en = filter_var(trim($_POST['size_en']), FILTER_SANITIZE_STRING);
    $material_es = filter_var(trim($_POST['material_es']), FILTER_SANITIZE_STRING);
    $material_en = filter_var(trim($_POST['material_en']), FILTER_SANITIZE_STRING);
    $color_es = filter_var(trim($_POST['color_es']), FILTER_SANITIZE_STRING);
    $color_en = filter_var(trim($_POST['color_en']), FILTER_SANITIZE_STRING);
    $collection_es = filter_var(trim($_POST['collection_es']), FILTER_SANITIZE_STRING);
    $collection_en = filter_var(trim($_POST['collection_en']), FILTER_SANITIZE_STRING);

    $img = time();
    if($_FILES['image']['size'] > 512000){
        return  print(json_encode("img-size"));
    }

    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION) ;
    if($ext == 'png' || $ext == 'jpg' || $ext == 'PNG' || $ext == 'JPG'){
        $img = $img . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'],
            __DIR__ . '/../../../public/lazosPublic/img/products/'. $img);
    }
    else{
        return print(json_encode("img-ext"));
    }

    $pl = new Products_lazos();
    if($pl->createProduct($code, $state, $img, $name_es, $name_en, $description_es, $description_en,
        $size_es, $size_en, $material_es, $material_en, $color_es, $color_en, $collection_es, $collection_en)){
        return print (json_encode("true"));
    }
    else{
        return print (json_encode("false"));
    }
