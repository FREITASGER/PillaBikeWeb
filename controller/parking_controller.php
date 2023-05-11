<?php

function allParkings()
{
    require 'model/parking_model.php';
    //Le pide al modelo todas las categorias
    $parkings = getParkings(); //funcion creada dentro de categoria_model
    //Pasa a la vista toda la informacion que se desea representar
    include('view/listParking.php'); //se lo pasamos a la vista especifica
}