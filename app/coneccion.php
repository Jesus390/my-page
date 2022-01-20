<?php

$coneccion = new mysqli("localhost", "root", "", "blog");

if($coneccion->connect_errno) {
    die("Error al conectar la base de datos.");
}

?>