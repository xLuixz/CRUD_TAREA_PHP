<?php
function conexion(){
    $connect= mysqli_connect("localhost","root","","prueba");
    return $connect;
}
?>
