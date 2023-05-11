<?php

function allParkings()
{
    require 'model/parking_model.php';
    $parkings = getParkings();
    include('view/listParking.php');
}