<?php

//We create a function to connect to the database with the parameters and return the connection
function getConnection() {

    $dbname = "pillaBikeWeb";
    $user = "root";
    $password = "";
    $server = 'localhost';
    $dbh ="";

    try {
        $dsn = "mysql:host=$server;dbname=$dbname;charset=UTF8";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $dbh;
}
