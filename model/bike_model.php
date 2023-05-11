<?php
require './db/db_connect.php';

function getBikes()
{
    $db = getConnection();
    $result = $db->query('SELECT id, buyDate, description, price, electric FROM bike');
    $result->execute();
    return $bikes = $result->fetchAll(PDO::FETCH_ASSOC); //fecthAll crea un array
}


