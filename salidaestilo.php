<?php 
if(!isset($_POST['Confirmar'])){
    header('Location: alum_profe.php');
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto - Examen</title>
    <!--Estilos CSS-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link id="theme" rel="stylesheet" type="text/css" href="css/green.css">

    <style>
        #logo{
            font-size: 20px;
        }
        /*corectas */
            /*parte1 */
            .numpre{
                padding: 25% 5px;
                color: white;
            }
            .cajanum{
                background: #00c431;
                width: 20%;
                text-align: center;
                margin: 3px 3px;

            }

            /*parte2 */
            .corre{
                padding: 5px 5px;
                color: black;
            }
            .cajacorre{
                background: #c0c0c0;
                width: 100%;
                margin: 1% 1%;
                    height: 46%;
                text-align: center;

            }

            /*parte3 */
            .corre{
                padding: 5px 5px;
                color: black;

            }
            .cajaimcorrect{
                background: #ffff80;
                width: 100%;
                text-align: center;
                margin: 1% 1%;
            }

        /*central */
            .todo{
                display: flex;
                width: 100%;
                margin: 2% 0;

            }

            .boxto{
                margin: 5px 25% ;
            }

            .dosop{
                display: block;
                width: 100%;
                height: 100%;
                margin: auto;

            }
        /*central */

        /*Incorrectas */

            .cajanumincorre{
                    background: #ff3333;
                    width: 20%;
                    text-align: center;
                    margin: 3px 3px;
                    

                }

        /*aciertos y errores */
            .acier{
                padding: 10px 5px;
                color: black;
                font-size: 22px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .cajaaciertos{
                background: #BBB385;
                width: 25%;
                height: 100%;
                text-align: center;
                margin: 3px 3px ;
                border-radius: 2px;
                
            }

            .cajaerrores{
                background: #FA8A5A;
                width: 25%;
                height: 100%;
                text-align: center;
                margin: 3px 3px ;
                border-radius: 2px;
            }

            .lup{
                margin: 5px 25%;
            }

        /*calificacion final */
            .cajacali{
                background: #F2A057;
                width: 40%;
                text-align: center;
                margin: 3px 3px ;
                border-radius: 2px;
                text-transform: uppercase;
            }

            .cajacalifinal{
                margin: 5px 35%;
                width: 80%;
            }

        /*btn reintentar */

            .btn-inten{
                margin: 5px 70%;
                width: 50%;
                margin-top: 20px;
            }

            .btn-inten .btnrein{
                text-transform: uppercase;
                background: #FDBDA1;
                border-radius: 5px;
                padding: 5px;
                color: #000;
                border: 1px solid #800000;
                width: 20%;
                cursor: pointer;
            }

            .nombre{
                text-align: center;
                font-size: 20px;
            }

            @media (max-width:1300px){

            .boxto{
                margin: 5px 20% ;
            }

            }

            @media (max-width:1100px){

            .boxto{
                margin: 5px 15% ;
            }
            .acier{
                font-size: 18px;
            }

            }

            @media screen and (max-width:1000px){

            .boxto{
                margin: 5px 10% ;
            }
            .acier{
                font-size: 15px;
            }

            }

            #logo{
                font-size: 20px;
                background: #44a2ff;
            }

            body{
                background: url("img/1.jpg");
                background-attachment: fixed;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }

            #to-red{
                background: #fd7e00;
            }

            #to-green{
                background: #00ff80;
            }

            #to-blue{
                background: #00ffff;
            }

            .realizado{
                color: #808080;
                text-align: center;
            }
            .regis{
                color: blue;
                text-align: center;
            }

                                /* MENUSITILLO */

        .menu{
        background: #3aad9a74;
        width: 100%;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        left: 0;
        top: 0;
        z-index: 999;
    }
    .menu nav{
        height: 50px;
        display: flex;
        justify-content: flex-end;
        width: 100%;
        z-index: 999;
        border-top: 2px solid rgb(92, 92, 92);
        border-bottom: 1px solid transparent;
        
    }
    .icono{
        display: none;
    }
    .enlaces{
        display: flex;
        height: 100%;
        width: 20%;
        justify-content: flex-end;
        align-items: center;
    }
    .enlaces .enla{
        padding: 10px 15px;
        transition: all 0.7s ease-out;
        color: #fff;
        text-decoration: none;
        margin: 0 10px;
        text-align: center;
    }
    .enlaces .enla:hover{
        transform: scale(.9);
        color: #000;
        background: #fff;
        border-radius: 25px;
    }

    /* FIN MENUSITILLO */


    @media (max-width:1000px){
        /* MENUSITILLO */
        .icono{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            background: transparent;
            z-index: 100;
            cursor: pointer;
            margin-right: 10px;
        }
        .menu .textos h1{
            font-size: 70px;
        }
        .menu nav{

            justify-content: end;
            
        }
        .men{
            height: 50px;
            width: 50px;
        }

        .enlaces{
            position: fixed;
            height: 100vh;
            right: 0;
            width: 100%;
            flex-direction: column;
            transition: all 1s ease;
            background: #0575E6;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #021B79, #0575E6);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2f4ec0, #0575E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            font-size: 25px;

            justify-content: center;
        }
        .uno{
            clip-path: circle(0% at 100% 0%);
        }
        .dos{
            clip-path: circle(150% at 100% 0%);
        }
        .enlaces a{

            margin: 20px 0;
        }
        /* FIN MENUSITILLO */
    }

    </style>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <!-- Moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.0/locale/es.js"></script>

    <!-- Mis Scripts -->
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div id="selector-theme">
        <div id="to-red"></div>
        <div id="to-green"></div>
        <div id="to-blue"></div>
    </div>

    <script>
        var naranja=document.getElementById('to-red'); 

        var verde=document.getElementById('to-green'); 

        var azul=document.getElementById('to-blue'); 

        var logo=document.getElementById('logo'); 

        naranja.addEventListener('click',function(){
            document.body.style.backgroundImage = "url('img/1.jpg')";
        });

        verde.addEventListener('click',function(){
            document.body.style.backgroundImage = "url('img/2.jpg')";
        });

        azul.addEventListener('click',function(){
            document.body.style.backgroundImage = "url('img/3.jpg')";
        });



    </script>

<div class="menu" id="ilili">
        <nav>
            <div class="icono" id="icono">
                <ion-icon class="men" name="menu-outline"></ion-icon>
            </div>
            
            <div class="enlaces uno" id="enlaces">
                <a href="alum_profe.php" class="enla" id="enla1">INICIO</a>
                <a href="sesion.php" class="enla" id="enla2">LOGIN</a>
            </div>
        </nav>


    </div>

<script>
    /*MENUSITILLO */

    let boton = document.getElementById("icono");
    let enlaces = document.getElementById("enlaces");
    let contador = 0;

    boton.addEventListener("click", function(){
        if (contador == 0){
            enlaces.className = ('enlaces dos');
            contador=1;
        }else{
            enlaces.classList.remove = ('dos');
            enlaces.className = ('enlaces uno');
            contador=0;
        }
    })

    window.addEventListener("resize", function(){
        if (screen.width > 750) {
            contador = 0;
            enlaces.classList.remove = ('dos');
            enlaces.className = ('enlaces uno');
        }
    })
    var enla1=document.querySelector("#enla1")
        enla2=document.querySelector("#enla2");

    enla1.addEventListener("click", function(){
        if (contador == 0){
            enlaces.className = ('enlaces dos');
            contador=1;
        }else{
            enlaces.classList.remove = ('dos');
            enlaces.className = ('enlaces uno');
            contador=0;
        }
    })
    enla2.addEventListener("click", function(){
        if (contador == 0){
            enlaces.className = ('enlaces dos');
            contador=1;
        }else{
            enlaces.classList.remove = ('dos');
            enlaces.className = ('enlaces uno');
            contador=0;
        }
    })
    /* FIN MENUSITILLO */
</script>

    <section id="global">

        <!-- Cabecera -->
        <header>
            <div id="logo" style="width: 100%; height: 100%; transform: uppercase;">
                <h1>REVICIÓN Y RESULTADOS</h1>
            </div>

            <div class="clearfix"></div>

        </header>

        <!-- Contenido -->



    <?php






              $op1 = $_REQUEST['pregunta1'];
              $op2 = $_REQUEST['pregunta2'];
              $op3 = $_REQUEST['pregunta3'];
              $op4 = $_REQUEST['pregunta4'];
              $op5 = $_REQUEST['pregunta5'];
              $op6 = $_REQUEST['pregunta6'];
              $op7 = $_REQUEST['pregunta7'];
              $op8 = $_REQUEST['pregunta8'];
              $op9 = $_REQUEST['pregunta9'];
              $op10 = $_REQUEST['pregunta10'];
              $op11 = $_REQUEST['pregunta11'];
              $op12 = $_REQUEST['pregunta12'];
              $op13 = $_REQUEST['pregunta13'];
              $op14 = $_REQUEST['pregunta14'];
              $op15 = $_REQUEST['pregunta15'];
              $op16 = $_REQUEST['pregunta16'];
              $op17 = $_REQUEST['pregunta17'];
              $op18 = $_REQUEST['pregunta18'];
              $op19 = $_REQUEST['pregunta19'];
              $op20 = $_REQUEST['pregunta20'];
              $nombre = $_REQUEST['nombre'];
              $grado = $_REQUEST['grado'];
              $grupo = $_REQUEST['grupo'];
              $turno = $_REQUEST['turno'];
              $correo = $_REQUEST['correo'];


              $conexion = mysqli_connect("localhost", "root", "", "examen") or die("Problemas con la conexion");


  
              if(evitarrepetidos($nombre,$grado,$grupo,$turno,$correo,$conexion)==1){
                echo "<div class='realizado'>Ya has realizado el examen, tus respuestas son:</div>";
                echo"<br>";

                include("datos_exam_alum.php");
            }else{

            echo"<div class='nombre'>";
                echo"Nombre: $nombre" . "<br>";
                echo"Grado y grupo: $grado - $grupo" . "<br>";
                echo"Turno: $turno" . "<br>";
                echo"Correo: $correo" . "<br>";
            echo"</div>";


            $cali=0;
            /* pregunta1 */
            echo"<div class='boxto'>";
            if($op1==2){

                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 1</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
            
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
            if($op2==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 2</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op3==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 3</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op4==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 4</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op5==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 5</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op6==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 6</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op7==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 7</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades/div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op8==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 8</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades/div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op9==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 9</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades/div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op10==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 10</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op11==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 11</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op12==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 12</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op13==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 13</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op14==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 14</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op15==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 15</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op16==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 16</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades/div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op17==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 17</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op18==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 18</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op19==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 19</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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
            if($op20==2){
                echo"<div class='todo'>";
            
                echo"<div class='cajanum'>";
                    echo"<div class='numpre'>Pregunta 20</div>";
                echo"</div>";
            
                    echo"<div class='dosop'>";
            
                        echo"<div class='cajacorre'>";
                            echo "<div class='corre'>Correcta + .5</div>";
                        echo"</div>";
            
                        echo"<div class='cajaimcorrect'>";
                        echo "<div class='corre'>Felicidades</div>";
                        echo"</div>";
            
                    echo"</div>";
            
                echo"</div>";
                $cali++;
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



            $calificacionfn=($cali/2);
            $aciertos=($cali);
            $errores=(20-$cali);

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


            date_default_timezone_set(timezoneId:"America/Monterrey");

            $fecha = date(format: 'Y-m-d');
            
            $hora=date(format: 'H:i:s');
            


            mysqli_query($conexion, "INSERT into calialum(nombreAlumno,grado,grupo,turno,correo,aciertos,errores,calificacionAlumno,fecha,hora,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16,r17,r18,r19,r20) values ('$nombre','$grado','$grupo','$turno','$correo','$aciertos','$errores','$calificacionfn','$fecha','$hora','$op1','$op2','$op3','$op4','$op5','$op6','$op7','$op8','$op9','$op10','$op11','$op12','$op13','$op14','$op15','$op16','$op17','$op18','$op19','$op20')") or die("Problemas en el insert" . mysqli_error($conexion));
            echo"<div class='regis'>Datos registrados</div>";


            


            }

            function evitarrepetidos($nom,$grad,$grup,$turn,$corr,$conexion){
                $checar="SELECT * FROM calialum where nombreAlumno='$nom' and grado='$grad' and grupo='$grup' and turno='$turn' and correo='$corr'";
        
                $resultado=mysqli_query($conexion,$checar);
        
                if(mysqli_num_rows($resultado) > 0){
                    return 1;
                }else{
                    return 0;
                }
                
            }


    ?>



        <footer>
            Derechos Reservados &copy;

            <a href="#" class="subir">Ir arriba</a>
        </footer>
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>