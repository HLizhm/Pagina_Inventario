<?php
session_start();
include('conexion.php');

if (isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user = validate($_POST['username']); 
    $password = validate($_POST['password']);

    if (empty($user)){
        header("Location: Index.php?error=El Usuario Es Requerido");
        exit();
    } elseif (empty($password)){
        header("Location: Index.php?error=La Contraseña Es Requerida");
        exit();
    }else{

        $admin = "moleconpollo1234";
        $admin_password = "franciscomememe123";

        if ($user === $admin && $password === $admin_password){
            $_SESSION['user'] = $admin;
            $_SESSION['password'] = $password;
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: Index.php?error=Usuario o Contraseña incorrectos");
            exit();
        }
    }
}
?>
