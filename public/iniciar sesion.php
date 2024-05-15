<?php

    include('conexion.php');

if (isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $datadata = htmlspecialchars_decode($data);
        return $data;
    }





    $usuario = validate($_POST($usuario)); 
    $contrasena = validate(($_POST($contrasena)));

}

