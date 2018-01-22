<?php

require_once  __DIR__ . '/Conecction.php';

class Login{

    public static function connect($user, $pass){
        $query = "select user from login WHERE user = :user AND pass = :pass ";
        $conecction = Conecction::connect();
        $ps = $conecction->prepare($query);
        $ps->execute(array(
            ":user" => $user,
            ":pass" => $pass
        ));

        $count = $ps->rowCount();
        return ($count >= 1);

    }

}