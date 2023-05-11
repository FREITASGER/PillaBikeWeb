<?php

function allBikes()
{
    require 'model/bike_model.php';
    //Asks the model for all bikes
    $bikes = getBikes(); //function created within bike_model
    include('view/listBike.php');
}