<?php
/*
- Escribir código PHP que inicialice un arreglo con los números del 1 al 365. 
Determine a que mes pertenece cada día del año (suponiendo un año no bisiesto) y 
muestre por pantalla la lista con el mes como encabezado seguido de la lista de los días que pertenecen a ese mes. 
- Utilizar HTML y CSS para dar estilo a la lista. 
Cada mes debe mostrarse de diferente color junto con la lista de días. 
Los meses deben aparecer con negrita. Pista: se puede utilizar elementos ul y li para mostrar la lista.
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    $Dias = 360;
    $mes ='';
    $filas = 5;
    $comp = 0;
    for($c=1;$c<=12;$c++){
        if($Dias<=$arr[$c][1]){
            $mes= ($arr[$c][0]);
            $comp = $c;
            break;
        }else{
            $Dias = $Dias - $arr[$c][1];
        } 
    }
    ?>
    <div class="container calendario">
        <br>
        <div class="col-sm-12">
            <center>
                <h1 class=" <?php echo "$mes";?>"><b><?php echo "$mes";?></b></h1>
            </center> 
        <div> 
        <table class="table table-striped">   
            <thead>
                        <tr>
                        <th scope="col">D</th>
                        <th scope="col">L</th>
                        <th scope="col">M</th>
                        <th scope="col">X</th>
                        <th scope="col">J</th>
                        <th scope="col">V</th>
                        <th scope="col">S</th>
                        </tr>
            </thead>
            <tbody>
                <?php
                    if($mes=='Febrero'){
                        $filas = 4;
                    }
                    for($c=1;$c<=$filas;$c++){
                        echo "<tr>";
                        for($i=(7*($c-1)+1);$i<=(7*$c);$i++){  
                            echo "<td> $i </td>";
                            if($i==$arr[$comp][1]){
                                break;
                            }
                        }
                        echo "</tr>";
                    }
                ?>         
            </tbody>
        </table>
        <br>
    </div>   
</body>
</html>