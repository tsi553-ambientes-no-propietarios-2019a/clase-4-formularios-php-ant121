<?php
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece el día del año. 
Y luego calcule cuántos días faltan para que se acabe el año con cada día del año, y muestre el mensaje 
“Falta poco para el año nuevo” solo si faltan menos de 5 días.
*/
$arr = array(
    1 => array('Enero',31),
    2 => array('Febrero',28),
    3 => array('Marzo',31),
    4 => array('Abril',30),
    5 => array('Mayo',31),
    6 => array('Junio',30),
    7 => array('Julio',31),
    8 => array('Agosto',31),
    9 => array('Septiembre',30),
    10 => array('Octubre',31),
    11 => array('Noviembre',30),
    12 => array('Diciembre',31));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
    $Dias = 364;
    $comp =$Dias;
    for($c=1;$c<=12;$c++){
        $comp= $comp-$arr[$c][1];
        if($comp<0){
            echo "Es el mes ";
            print_r($arr[$c][0]);
            echo ".<br>";
            break;
        }  
    }
    
    if($Dias>360 && $Dias<=365){
        echo "Falta poco para el año nuevo.<br>";
        echo "Solo " . (365-$Dias) . " dias mas.<br>";
    }else{
        echo "Faltan " . (365-$Dias) . " dias para que se acabe el año.<br>";
    }
    

    ?>
</body>
</html>