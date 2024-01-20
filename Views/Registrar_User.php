<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE USUARIO</title>
</head>
<body>
    <h3>REGISTRO DE USUARIO</h3>
    <form method="post" action="../Backend/control_Registro.php">
        <label for="user_name">Nombre de usuario: </label>
        <input type="text" name="user_name" required value="" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d){5,10}" tittle="De 5 a 10 caracteres."><br>
        <label for="user_email">Correo: </label>
        <input type="email" name="user_email" required value=""><br>
        <label for="user_pass1">Contraseña:</label>
        <!--[A-Za-z\d@$!%*?&]-->
        <input type="password" name="user_pass1" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]){8,10}"  title="De 8 a 10 caracteres." required value=""><br>
        <label for="user_pass2">Confirmar Contraseña: </label>
        <input type="password" name="user_pass2" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]){8,10}$" title="De 8 a 10 caracteres." required value=""><br>
        <button type="submit" name="botonReg">Registrar</button>
        

    </form>
    
</body>
</html>