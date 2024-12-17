<?php

$usuario=$_POST['login'];
$clave=$_POST['password'];

$conexion = mysqli_connect("localhost", "root", "", "examen") or die("Problemas con la conexion");

$consulta="SELECT * FROM calificaciones WHERE usuarioalumno='$usuario' AND contraalumno='$clave'";

$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado); //va a delver un valor sea cierto o falso 1,0

if($filas==1){

    header('Location: formularioestilo.php');
    
}else{
    header('Location: sesion.php');
    
}

//mysqli_free_result($resultado);

//mysqli_close($conexion);

?>