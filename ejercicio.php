<?php 
//Reciendo informacion del formulario html metodo post
$nombre = $_POST['txtnombre'];
   
echo"Hola: ".$nombre;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="ejercicio.php" method="post">
    Nombre:
    <input type="text" name="txtnombre" id>
    <input type="submit" value="Enviar">
</form>


</body>
</html>