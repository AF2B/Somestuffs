<?php

class Login{
    public static $user = "André";

    public static function verifyLogin(){
        echo "Usuário logado: " . self::$user;
    }
}

Login::verifyLogin();

echo PHP_EOL;

Login::$user = "Filipe";
Login::verifyLogin();