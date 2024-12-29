<?php

class Database
{

    public static $servername = "localhost";
    public static $dbname = "acount_db";
    public static $username = "root";
    public static $password = "";
    public static $pdo;

    public static function getConnextion(){
        try {
            self::$pdo = new PDO("mysql:host=". self::$servername ."; dbname=". self::$dbname , self::$username, self::$password);
            return self::$pdo;
        } catch (PDOException $e) {
            echo 'connection field';
        }
    }
}

