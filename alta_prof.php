<?php

    
$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$usuario = $_REQUEST['usuario'];
$contraseña = $_REQUEST['contra'];
$conexion = mysqli_connect("localhost", "root", "", "examen") or die("Problemas con la conexion");

if(evitarrepetidos($nombre,$correo,$usuario,$contraseña,$conexion)==1){
    echo "<div class='repe'>Usuario en existencia</div>";
}else{

    mysqli_query($conexion, "INSERT into loginprofes(nombreprofe,correo,usuario,contraProfe) values ('$nombre','$correo','$usuario','$contraseña')") or die("Problemas en el insert" . mysqli_error($conexion));
    echo"<div class='creado'>Usuario creado</div>";
}



    function evitarrepetidos($nom,$corr,$usuars,$cont,$conexion){
        $checar="SELECT * FROM loginprofes where nombreprofe='$nom' and correo='$corr' and usuario='$usuars' and contraProfe='$cont'";

        $resultado=mysqli_query($conexion,$checar);

        if(mysqli_num_rows($resultado) > 0){
            return 1;
        }else{
            return 0;
        }
        
    }



?>