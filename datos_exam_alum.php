
<?php

$conexion = mysqli_connect("localhost", "root", "", "examen") or die("Problemas con la conexion");
include("conexion_result_exam.php");
echo"<div class='nombre'>";
echo"Nombre: $nombre" . "<br>";
echo"Grado y grupo: $grado - $grupo" . "<br>";
echo"Turno: $turno" . "<br>";
echo"Correo: $correo" . "<br>";
echo"</div>";



/* pregunta1 */
echo"<div class='boxto'>";
if($opl1==2){

  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 1</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  

}else{

  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 1</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}

/* pregunta2 */
if($opl2==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 2</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 2</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta3 */
if($opl3==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 3</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 3</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta4 */
if($opl4==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 4</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 4</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta5 */
if($opl5==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 5</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 5</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta6 */
if($opl6==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 6</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 6</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta7 */
if($opl7==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 7</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 7</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta8 */
if($opl8==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 8</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 8</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta9 */
if($opl9==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 9</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 9</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta10 */
if($opl10==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 10</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 10</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima. </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta11 */
if($opl11==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 11</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 11</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima. </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta12 */
if($opl12==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 12</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 12</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima. </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta13 */
if($opl13==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 13</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 13</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima. </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta14 */
if($opl14==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 14</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 14</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima. </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta15 */
if($opl15==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 15</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 15</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima. </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta16 */
if($opl16==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 16</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 16</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta17 */
if($opl17==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 17</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 17</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima. </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta18 */
if($opl18==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 18</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 18</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta19 */
if($opl19==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 19</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 19</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima. </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}
/* pregunta20 */
if($opl20==2){
  echo"<div class='todo'>";

  echo"<div class='cajanum'>";
      echo"<div class='numpre'>Pregunta 20</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Correcta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Felicidades </div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
  
}else{
  echo"<div class='todo'>";

  echo"<div class='cajanumincorre'>";
      echo"<div class='numpre'>Pregunta 20</div>";
  echo"</div>";

      echo"<div class='dosop'>";

          echo"<div class='cajacorre'>";
              echo "<div class='corre'>Incorrecta</div>";
          echo"</div>";

          echo"<div class='cajaimcorrect'>";
          echo "<div class='corre'>Buen intento, suerte para la proxima.</div>";
          echo"</div>";

      echo"</div>";

  echo"</div>";
}   
echo"</div>";

            echo"<div class='todo lup'>";
            
                echo"<div class='cajaaciertos'>";
                    echo"<div class='acier'>ACIERTOS: $aciertos</div>";
                echo"</div>";

                echo"<div class='cajaerrores'>";
                    echo"<div class='acier'>ERRORES: $errores</div>";
                echo"</div>";
        
            echo"</div>";

            echo"<div class='cajacalifinal'>";
            
                echo"<div class='cajacali'>";
                    echo"<div class='acier'>Tu calificación es: $calificacionfn/10</div>";
                echo"</div>";
    
            echo"</div>";


            echo"<div class='btn-inten'>";
                echo"<a href='alum_profe.php'><button class='btnrein'>SALIR</button></a>";
            echo"</div>";

?>
