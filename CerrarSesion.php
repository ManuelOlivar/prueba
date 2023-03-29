<?php 
//Mostarmos la sessión
session_start();
//Destruimos la sesión
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h2>Has cerradosesión correctamente</h2>
    <br/>
    <p><a href='Login.php'>Ir a login</a></p>
</body>
</html>