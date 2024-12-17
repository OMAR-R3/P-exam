<?php

$contProfe=$_REQUEST['contraprof'];

$conexion = mysqli_connect("localhost", "root", "", "examen") or die("Problemas con la conexion");

if(!evitarrepetidos($contProfe,$conexion)==1){
    header("location:alum_profe.php");

}else{

    header("location:sesion_prof.php");
}



    function evitarrepetidos($cont,$conexion){
        $checar="SELECT * FROM contradocente where contraDocente='$cont'";

        $resultado=mysqli_query($conexion,$checar);

        if(mysqli_num_rows($resultado) > 0){
            return 1;
        }else{
            return 0;
        }
        
    }

?>