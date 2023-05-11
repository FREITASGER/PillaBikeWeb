<?php
require './db/db_connect.php';

function getBikes()
{
    $db = getConnection();
    $result = $db->query('SELECT id, buy_date, description, electric, price, parking_id FROM bikes');
    $result->execute();
    return $bikes = $result->fetchAll(PDO::FETCH_ASSOC); //fecthAll crea un array
}

function addBike($buy_date, $description, $electric, $price, $parking_id)
{
    $db = getConnection();
    $query = ('INSERT INTO bikes (buy_date, description, electric, price, parking_id) VALUES (:buy_date, :description, :electric, :price, :parking_id)');
    $stmt = $db->prepare($query);
    $stmt->bindParam(':buy_date', $buy_date);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':electric', $electric);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':parking_id', $parking_id);
    $stmt->execute();
}

function delete($id)
{
    $db = getConnection();
    $result = $db->prepare('DELETE FROM bikes WHERE id=:id');
    $result->bindParam(':id', $_GET['id']);
    $result->execute();
}
