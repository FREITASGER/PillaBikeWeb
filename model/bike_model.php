<?php
require './db/db_connect.php'; //conexión a BBDD

//Recoje la conexión lanzar un select a la BBDD para devolver un array de libros
function getBikes()
{
    $db = getConnection();
    $result = $db->query('SELECT id, buyDate, description, price, electric FROM bike');
    $result->execute();
    return $bikes = $result->fetchAll(PDO::FETCH_ASSOC); //fecthAll crea un array
}


