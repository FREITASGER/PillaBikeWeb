<?php

function allBikes()
{
    require 'model/bike_model.php';
    //Asks the model for all bikes
    $bikes = getBikes(); //function created within bike_model
    include('view/bikesList.php');
}

function newBike()
{
    //include ("view/header.php");
    require_once 'view/new_bike.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //verificamos que se ha enviado la solicitud de POST
        //obtenemos los datos
        $buy_date = $_POST["buy_date"];
        $description = $_POST["description"];
        $electric = isset($_POST['electric']) && $_POST['electric'] == 'on' ? 1 : 0;
//        if(isset($_POST['electric']) && $_POST['electric'] == 'on'){
//            $electric = 1;
//        } else {
//            $electric = 0;
//        }
        $price = $_POST["price"];
        $parking_id = $_POST["parking_id"];

        //Incluimos el modelo correspondiente
        require 'model/bike_model.php';
        $bike = addBike($buy_date, $description, $electric, $price, $parking_id);
        header("Location: index_bikes_list.php");
    }
}

function deleteBike() {
    if(isset($_GET['id']) && is_numeric($_GET['id']))
        $id = $_GET['id'];
    require 'model/bike_model.php';
    $parking = delete($id);
    header("Location: pillaBikePhp/index_bikes_list.php");
}