<?php
require './db/db_connect.php';
function getParkings()
{
    $db = getConnection();
    $result = $db->query('SELECT id, name, city, open, close, isFull FROM parking');
    $result->execute();
    return $bikes = $result->fetchAll(PDO::FETCH_ASSOC);
}
