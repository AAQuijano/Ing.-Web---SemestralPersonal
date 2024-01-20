<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h3>Login</h3>
    <form method="post" action="../Backend/control_Login.php">
        <label for="user_name">Nombre de usuario: </label>
        <input type="text" name="user_name" required value=""><br>
        <label for="use">Contraseña: </label>
        <input type="password" name="user_pass" required value=""><br>
        <button type="submit" name="botonLogin">Iniciar Sesión</button>
        <button type="reset" name="Reg"><a href="../Views/Registrar_User.php">Registrar</a></button>
    </form>
    
</body>
</html>