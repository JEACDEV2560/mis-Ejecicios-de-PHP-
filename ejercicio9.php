<?php

if($_POST){
    $valorA=$_POST['ValorA'] ;
    $valorB=$_POST['ValorB'];
    
    if($valorA > $valorB) {
        echo "El valor A es mayor que el valor B";

} else if($valorA != $valorB){
    echo "El valor A es menor que el valor B";
} else {
    echo "El valor A es igual al valor B";
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
  <form action="ejercicio9.php" method="post">

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