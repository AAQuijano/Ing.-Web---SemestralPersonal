<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Usuario</title>
</head>
<body>
    <h3>Home Usuario</h3>

    <?php echo $_SESSION['id']." ".$_SESSION['usuario']; ?>




</body>
</html>