<?php

if($_POST){
    $valorA=$_POST['ValorA'] ;
    $valorB=$_POST['ValorB'];
  
 $suma = $valorA + $valorB;
 echo "La suma es: ".$suma;
    $resta = $valorA - $valorB;
    $multiplicacion = $valorA * $valorB;
    $division = $valorA / $valorB;

    echo "La resta es: ".$resta;
    echo "La multiplicacion es: ".$multiplicacion;
    echo "La division es: ".$division;
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
    <form action="ejercicio8.php" method="post">
        Valor A:
        <input type="text" nombre="ValorA" id="">
        <br>
        Valor B:
        <input type="text" nombre="ValorB" id="">
        <br>
        <input type="submit" value="Calcular">

    </form>
</body>
</html>