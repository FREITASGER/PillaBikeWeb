<?php
require './db/db_connect.php'; //conexión a BBDD

//Recoje la conexión lanzar un select a la BBDD para devolver un array de libros
function getParkings()
{
    $db = getConnection();
    $result = $db->query('SELECT id, name, city, open, close, isFull FROM parking');
    $result->execute();
    return $bikes = $result->fetchAll(PDO::FETCH_ASSOC); //fecthAll crea un array
}
