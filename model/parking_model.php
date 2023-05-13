<?php
require './db/db_connect.php';
function getParkings()
{
    $db = getConnection();
    $result = $db->query('SELECT id, name, city, open, close, is_full FROM parking');
    $result->execute();
    return $bikes = $result->fetchAll(PDO::FETCH_ASSOC);
}

function addParking($name, $city, $open, $close, $is_full)
{
    $db = getConnection();
    $query = ('INSERT INTO parking (name, city, open, close, is_full) VALUES (:name, :city, :open, :close, :is_full)');
    $stmt = $db->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':open', $open);
    $stmt->bindParam(':close', $close);
    $stmt->bindParam(':is_full', $is_full);
    $stmt->execute();
}

function delete($id)
{
    $db = getConnection();
    $result = $db->prepare('DELETE FROM parking WHERE id=:id');
    $result->bindParam(':id', $_GET['id']);
    $result->execute();
}


