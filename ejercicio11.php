<?php

if($_POST){
    $valorA=$_POST['ValorA'] ;
    $valorB=$_POST['ValorB'];
    // suma
   $suma = $valorA + $valorB;
    // resta
   $resta = $valorA - $valorB;
    // multiplicacion
    $multiplicacion = $valorA * $valorB;
    // division 
    $division = $valorA / $valorB;

    echo  "</br> La suma es: ".$suma;
    echo  "</br> La resta es: ".$resta;
    echo  "</br> La multiplicacion es: ".$multiplicacion;
    echo  "</br> La division es: ".$division;

    if($valorA==4){
        echo "</br> El valor A es igual a 4";
    } else {
        echo "</br> El valor A no es igual a 4";
    }

    if($valorA==$valorB) {
        echo "</br> El valor A es igual al valor B";
    } else {
        echo "</br> El valor A no es igual al valor B";
    }
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
    <form action="ejercicio11.php" method="post">
        Valor A:
        <input type="text" name="ValorA" id="">
        <br>
        Valor B:
        <input type="text" name="ValorB" id="">
        <br>
        <input type="submit" value="Calcular">
        
    </form>
</body>
</html>