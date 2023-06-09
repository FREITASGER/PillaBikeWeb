<?php

function allParkings()
{
    require 'model/parking_model.php';
    $parkings = getParkings();
    include('view/parkingsList.php');
}

function newParking()
{
    //include ("view/header.php");
    require_once 'view/new_parking.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //verificamos que se ha enviado la solicitud de POST
        //obtenemos los datos
        $name = $_POST["name"];
        $city = $_POST["city"];
        $open = $_POST["open"];
        $close = $_POST["close"];
        $is_full = isset($_POST['is_full']) && $_POST['is_full'] == 'on' ? 1 : 0;

        //Incluimos el modelo correspondiente
        require 'model/parking_model.php';
        $parking = addParking($name, $city, $open, $close, $is_full);
        header("Location: index_parkings_list.php");
    }
}

function deleteParking() {
    if(isset($_GET['id']) && is_numeric($_GET['id']))
        $id = $_GET['id'];
    require 'model/parking_model.php';
    $parking = delete($id);
    header("Location: pillaBikePhp/index_parkings_list.php");
}