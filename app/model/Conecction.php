<?php

require_once __DIR__ . '/../config/env.php';

class Conecction  {


    public static function connect(){

        try{
            $conecction = new PDO(DATABASE['driver'] . ':host=' . DATABASE['host'] . ';dbname=' . DATABASE['database'],
                DATABASE['user'],DATABASE['pass']);

            $conecction->exec('SET CHARACTER SET utf8');
            $conecction->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conecction;

        }catch (Exception $e){
            die("no se puede conectar a la base de datos" . $e);
        }

    }

}