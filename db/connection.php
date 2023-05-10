<?php

class Connect{

    public static function Connection() {
        require_once 'db.php';

        try {
            $connection = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME, USER, PASS);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

