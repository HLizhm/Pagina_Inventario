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
    // aqui se valida que los campos no esten vacios
    if (empty($user)){
        header("Location: Index.php?error=El Usuario Es Requerido");
        exit();
    } elseif (empty($password)){
        header("Location: Index.php?error=La Contraseña Es Requerida");
        exit();
    }else{
        // usuario y contrasena del administrador, falta algun tipo de seguridad extra
        // El usuario y la contraseña es definitivo
        $admin = "Tobito28";
        $admin_password = "020710";

        $empleado = "chambeadora";
        $empleado_password= "megustalachamba123";
        // Aqui se comprueba que la contraseña ingresada sea igual a la contraseña proporcionada por la persona
        if ($user === $admin && $password === $admin_password){
            $_SESSION['user'] = $admin;
            $_SESSION['password'] = $password;
            header("Location: dashboard_admin_placeholder.php");
            exit();
        } else {
            header("Location: Index.php?error=Usuario o Contraseña incorrectos");
            exit();
        }
    }
}
?>
