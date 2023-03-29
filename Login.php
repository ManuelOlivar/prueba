<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login.php</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php 
if(isset($_SESSION['nombre'])){
    echo "<p>Has iniciado sesión como: </p>" . $_SESSION ['nombre'] . "";
    echo "<p><a href='CerrarSesion.php'>Cerar Sesión</a></p>";
    echo "<br>";
    echo "<p><a href='PanelControl.php'>Ir alpaneldecontrol</a></p>";
} else {
?>
<h2>Creandola sesión</h2>
<form class="formulario" action="PanelControl.php" method="POST">

<label for="name" class="labelName" id="name">Ingrese su nombre:</label>
<input class="inputName" type="text" name="name" placeholder="Nombre" required id="name"/>
<br>
<label for="password" class="labelPassword" id="password">Ingrese su contraseña:</label>
<input class="inputPassword" type="password" name="password" placeholder="Contraseña" required id="password"/>

<p><input type="submit" class="submitLogin" value="Ingresar"/></p>
</form>
<?php }?>
</body>
</html>