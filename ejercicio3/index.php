<?php
/*
  Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */
$arr = array(
   'Anthony' => '12345',
   'Pablo' => 'qwerty',
   'Steven' => 'abcd',
   'Markley' => 'aeiou',
   'Elvis' => 'qwerty');
   $usuario ='';
   $password='';
   if($_SERVER['REQUEST_METHOD']=='POST'){
       $usuario=$_POST['txtusuario'];
       $password=$_POST['txtpassword']; 
       
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="jumbotron">
            <center>
              <h1>Login</h1>
            </center>
            <form  method="POST" enctype="multipart/form-data">
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
              <center>
                  <button type="submit" class="btn btn-primary">Ingresar</button>
              </center>
            </form>
            <?php
            
                    if($usuario != ''){
                        if(array_key_exists($usuario, $arr)){
                            if($password == $arr[$usuario]){
                                echo "Bienvenido " . strtoupper ($usuario);
                            }else{
                                echo "Contrasena incorrecta";
                            }
                          }else{
                              echo "El usuario no existe por favor intentelo de nuevo";
                          }  
                    }

                                   
      ?>
        </div>
          
      </div>
    </div>

  </div>
  
</body>
</html>