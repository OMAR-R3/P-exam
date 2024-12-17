
<?php

$usuario=$_POST['login'];
$clave=$_POST['password'];

$conexion = mysqli_connect("localhost", "root", "", "examen") or die("Problemas con la conexion");

$consulta="SELECT * FROM loginprofes WHERE usuario='$usuario' AND contraProfe='$clave'";

$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado); //va a delver un valor sea cierto o falso 1,0

if($filas==0){

    header('Location: sesion_prof.php');

}else{
    header('Location: consulta.php');
}

?>