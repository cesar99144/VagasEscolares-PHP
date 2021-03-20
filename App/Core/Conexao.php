<?php

namespace App\Core;

class Conexao{

    private static $instance;

    public static function getConn(){

        if(!isset(self::$instance)):

            self::$instance = new \PDO('mysql:host=localhost;dbname=educacionalvagas;charset=utf8','root', '12345');

        endif;

        return self::$instance;
    }
}