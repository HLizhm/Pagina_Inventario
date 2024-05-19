<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="formulario">
            <h1>Inicio de sesión</h1>
            <form method="post">
                <div class="username">
                    <input type="text" required>
                    <label>Nombre de usuario</label>
                </div>
                <div class="username">
                    <input type="password" required>
                    <label>Contraseña</label>
                </div>
                <div class="recordar">¿Olvidó su contraseña?</div>
                <input type="submit" value="Iniciar">
                <div class="registrarse">
                    <a href="#">Registrarse aquí</a>
                </div>
            </form>
        </div>
    </body>
</html>
