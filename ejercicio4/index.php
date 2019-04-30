<?php
/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
$uri .= $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejercicio 4</title>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-sm-12">
            <div class="jumbotron">
                <center>
                <h1>Login</h1>
                </center>
                <form  action="php/validarRegistro.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="formGroupExampleInput">Usuario</label>
                    <input type="text" class="form-control" name="txtusuario" 
                    placeholder="Ingrese su usuario" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Password</label>
                    <input type="password" class="form-control" name="txtpassword" 
                    placeholder="Ingrese su contraseña" required>
                </div>
                <input type="hidden" name="variable1" value="<?php echo "$uri";?>" />
                <center>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </center>
                </form>
            </div>            
        </div>
    </div>
</div> 
</body>
</html>