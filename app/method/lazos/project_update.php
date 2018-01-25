<?php

    header('Content-Type: application/json');

    $title_es = filter_var(trim($_POST['title_es']), FILTER_SANITIZE_STRING);
    $title_en = filter_var(trim($_POST['title_en']), FILTER_SANITIZE_STRING);
    $des_es = trim($_POST['des_es']);
    $des_en = trim($_POST['des_en']);

    $img1 = $_POST['img-default-1'];
    $img2 = $_POST['img-default-2'];
    $img3 = $_POST['img-default-3'];

    if($_FILES['img-1']['name'] != ""){
        if($_FILES['img-1']['size'] > 512000){
            return  print(json_encode("img-size"));
        }
    }

    if($_FILES['img-2']['name'] != ""){
        if($_FILES['img-2']['size'] > 512000){
            return  print(json_encode("img-size"));
        }
    }

    if($_FILES['img-3']['name'] != ""){
        if($_FILES['img-3']['size'] > 512000){
            return  print(json_encode("img-size"));
        }
    }


    if($_FILES['img-1']['name'] != ""){

        $ext = pathinfo($_FILES['img-1']['name'], PATHINFO_EXTENSION) ;
        if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg'){
            $img1 = $id . '_' . '1' . time() . '.' . $ext;
            move_uploaded_file($_FILES['img-1']['tmp_name'], __DIR__ . '/../../../public/lazosPublic/img/articles/'. $img1);
        }
        else{
            return print(json_encode("img-ext"));
        }
    }


    if($_FILES['img-2']['name'] != ""){

        $ext = pathinfo($_FILES['img-2']['name'], PATHINFO_EXTENSION) ;
        if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg'){
            $img2 = $id . '_' . '2' . time() . '.' . $ext;
            move_uploaded_file($_FILES['img-2']['tmp_name'], __DIR__ . '/../../../public/lazosPublic/img/articles/'. $img2);
        }
        else{
            return print(json_encode("img-ext"));
        }
    }

    if($_FILES['img-3']['name'] != ""){

        $ext = pathinfo($_FILES['img-3']['name'], PATHINFO_EXTENSION) ;
        if($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg'){
            $img3 = $id . '_' . '3' . time() . '.' . $ext;
            move_uploaded_file($_FILES['img-3']['tmp_name'], __DIR__ . '/../../../public/lazosPublic/img/articles/'. $img3);
        }
        else{
            return print(json_encode("img-ext"));
        }
    }

    $a = new Article();
    if($a->updateArticle($id, $title_es, $title_en, $des_es, $des_en, $img1, $img2, $img3)){
        return print (json_encode("true"));
    }
    else{
        return print (json_encode("false"));
    }







