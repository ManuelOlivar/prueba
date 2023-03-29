<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h2>La sesión fue creada correctamente</h2>
    <p>
        <?php 
            if(isset($_POST['name'])){
                $_SESSION['name'] = $_POST['name'] . "";
                echo "Bienvenido! Has iniciado sesión como:<p>".$_POST ['name'] , "</p>";
            }else {
                if(isset($_SESSION['name'])){
                    echo "Has iniciado sesión como: ".$_SESSION['name'];
                }else {
                    //Si lasesión expiro o no se creó mostraremos elsiguiente mensaje 
                    echo "Acceso restringido";
                }
            }
        ?></p>
        <br>
        <p><a href="Login.php">Ir a la pagina inicial</a></p>
        <p><a href="CerrarSesion.php">Cerar Sesión</a></p>
</body>
</html>
