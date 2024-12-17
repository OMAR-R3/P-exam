

<?php

$res = mysqli_query($conexion, "SELECT nombreAlumno,grado,grupo,turno,correo,aciertos,errores,calificacionAlumno,r1, r2, r3, r4, r5, r6, r7, r8, r9, r10, r11, r12, r13, r14, r15, r16, r17, r18, r19, r20 from calialum where nombreAlumno='$nombre' and grado='$grado' and grupo='$grupo' and turno='$turno' and correo='$correo'") or die("Problemas en el select:" . mysqli_error($conexion));


while($regl = mysqli_fetch_array($res)){

    $nombre=$regl['nombreAlumno'];
    $grado=$regl['grado'];
    $grupo=$regl['grupo'];
    $turno=$regl['turno'];
    $correo=$regl['correo'];
    $aciertos=$regl['aciertos'];
    $errores=$regl['errores'];
    $calificacionfn=$regl['calificacionAlumno'];

    $opl1=$regl['r1'];
    $opl2=$regl['r2'];
    $opl3=$regl['r3'];
    $opl4=$regl['r4'];
    $opl5=$regl['r5'];
    $opl6=$regl['r6'];
    $opl7=$regl['r7'];
    $opl8=$regl['r8'];
    $opl9=$regl['r9'];
    $opl10=$regl['r10'];
    $opl11=$regl['r11'];
    $opl12=$regl['r12'];
    $opl13=$regl['r13'];
    $opl14=$regl['r14'];
    $opl15=$regl['r15'];
    $opl16=$regl['r16'];
    $opl17=$regl['r17'];
    $opl18=$regl['r18'];
    $opl19=$regl['r19'];
    $opl20=$regl['r20'];
}

?>