<?php
$usuario ='';
$password='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario=$_POST['txtusuario'];
    $password=$_POST['txtpassword']; 
    $uri = $_POST['variable1']; 
}
$arr = array(
    'Anthony' => '12345',
    'Pablo' => 'qwerty',
    'Steven' => 'abcd',
    'Markley' => 'aeiou',
    'Elvis' => 'qwerty'); 
    if(array_key_exists($usuario, $arr)){
        if($comp<2){
            if($password == $arr[$usuario]){
                $datos = '/registroCorrecto.php/';
                $uri .= 'php';
                header('Location: '.$uri.$datos);
                exit;
            }else{
                $comp++;
                echo '<script type="text/javascript">
                        alert("Las contrseñas no coinciden");
                        window.location.assign("'.$uri.'");
                        </script>';
                exit;
            }
        }else{
            echo '<script type="text/javascript">
                        alert("Cuenta Bloqueada");
                        window.location.assign("'.$uri.'");
                        </script>';
        }
      }else{
        echo '<script type="text/javascript">
                        alert("El usuario no existe por favor intentelo de nuevo");
                        window.location.assign("'.$uri.'");
                        </script>';
        exit;
      }
         
?>



