<?php
session_start();
include('conexion.php');

class login_admin extends Controller {

    public function __invoke(Request $request): RedirectResponse|View {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {

            function validate($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $user = validate($_POST['username']); 
            $password = validate($_POST['password']);

            // Validar que los campos no estén vacíos
            if (empty($user)) {
                header("Location: Index.php?error=El Usuario Es Requerido");
                exit();
            } elseif (empty($password)) {
                header("Location: Index.php?error=La Contraseña Es Requerida");
                exit();
            } else {
                // Usuario y contraseña del administrador
                $admin = "Tobito28";
                $admin_password = "020710";

                $empleado = "chambeadora";
                $empleado_password = "megustalachamba123";

                // Comprobar que la contraseña ingresada sea igual a la contraseña proporcionada por la persona
                if ($user === $admin && $password === $admin_password) {
                    $_SESSION['user'] = $admin;
                    $_SESSION['password'] = $password;
                    header("Location: dashboard_admin_placeholder.php");
                    exit();
                } else {
                    header("Location: Index.php?error=Usuario o Contraseña incorrectos");
                    exit();
                }
            }
        } else {
            header("Location: Index.php");
            exit();
        }
    }
}
?>
