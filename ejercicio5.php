<?php
if($_POST){
    $nombre = $_POST['txtnombre'];
    $apellido = $_POST['txtApellido'];
    echo"Hola: ".$nombre." ".$apellido;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        Nombre:
        <input type="text" name="txtnombre" id>
        <br>
        Apellido:
    <input type="text"  name="txtApellido" id>
    <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>