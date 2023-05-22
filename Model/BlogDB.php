<?php

abstract class BlogDB {

    private static $server = 'localhost';
    private static $db = 'blog';
    private static $user = 'root';
    private static $password = '';

    public static function connectDB(){
        try {
            $connection =  new PDO("mysql:host=" . self::$server . ";dbname=" . self::$db, self::$user, self::$password);
            //configurando el modo de error
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            echo "Conexión fallida a la base de datos: " . $e->getMessage();
        }
        return $connection;
    }

}
