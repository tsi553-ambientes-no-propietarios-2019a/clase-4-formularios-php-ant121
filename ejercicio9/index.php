<?php
/*
- Escribir una página en PHP que presente un calendario del mes actual.
- Utlizar HTML y CSS para darle color y estilo al calendario. El día actual debe ser resaltado en negrita y con la celda de diferente color.
- Pista: utilizar la función date(). Entre otros parámetros la función date puede recibir: ‘Y’, ‘m’, ‘d’, ‘N’. 
Investigar sobre la función date si es necesario utilizar otros parámetros (http://php.net/manual/es/function.date.php).
- Pista: Utilizar tablas HTML para presentar el calendario.
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
    <title>Ejercicio 9</title>
</head>
<body>
<?php
    $Dia = date("d");
    $mes =($arr[(int)date("m")][0]);
    $filas = 5; 
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
                        <th scope="col">L</th>
                        <th scope="col">M</th>
                        <th scope="col">X</th>
                        <th scope="col">J</th>
                        <th scope="col">V</th>
                        <th scope="col">S</th>
                        <th scope="col">D</th>
                        </tr>
            </thead>
            <tbody>
                <?php
                    if($mes=='Febrero'){
                        $filas = 4;
                    }
                    $clasedia = 'class= "diaActual"';
                    for($c=1;$c<=$filas;$c++){
                        echo "<tr>";
                        for($i=(7*($c-1)+1);$i<=(7*$c);$i++){ 
                            if((int)date("d")==$i){
                                echo "<td $clasedia><b> $i</b> </td>";
                            }else{
                                echo "<td> $i </td>";
                            }
                            if($i==$arr[(int)date("m")][1]){
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