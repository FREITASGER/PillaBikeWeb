<?php

function allBikes()
{
    require 'model/bike_model.php';
    //Le pide al modelo todas las categorias
    $bikes = getBikes(); //funcion creada dentro de categoria_model
    //Pasa a la vista toda la informacion que se desea representar
    include('view/listBike.php'); //se lo pasamos a la vista especifica
}