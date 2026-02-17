<?php

function conexion(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="prueba";

    $connect= mysqli_connect("localhost","root","","prueba");
    mysqli_select_db($connect,$bd);

    return $connect;
}

?>