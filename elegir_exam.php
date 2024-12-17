<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto - Examen</title>
    <!--Estilos CSS-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link id="theme" rel="stylesheet" type="text/css" href="css/green.css">

    <style>
        label input{
            cursor: pointer;
        }
        #logo{
            font-size: 20px;
            background: #fd7e00;
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
        form input[type="submit"] {
            background: rgb(48, 170, 207);
            padding: 10px;
            border: 1px solid transparent;
            color: #ffff;
            cursor: pointer;
        }
        .elegir{
            width: 25%;
            margin: 10px 37%;
            border: 1px solid transparent;

            cursor: pointer;
            transition: all 0.5s;
            color: #000;
        }
        .elegir:hover{
            color: #f8f8f8;
            transform: scale(.8);
            border-radius: 10px;
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
        .selectexam{
        width: 20%;
        margin: 0px 40%;
        border: 2px solid transparent;
        cursor: pointer;
        background: #ffffa2;
        text-align: center;
    }


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
             .box-titulo{
            width: 100%;
            text-align: center;
            margin: 10px 0;
        }
         .box-titulo label{
            font-size: 21px;
            text-align: center;
            color: #fd7e00;
            font-weight: 700;

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
                <a href="sesion_prof.php" class="enla" id="enla2">LOGIN</a>
                <a href="consulta.php" class="enla" id="enla3">CONSULTA</a>
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
        enla2=document.querySelector("#enla2")
        enla3=document.querySelector("#enla3");

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
    enla3.addEventListener("click", function(){
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
            <div id="logo" style="width: 100%; height: 100%;">
                <h1>Elegir Examen</h1>
            </div>

            <div class="clearfix"></div>

        </header>

        <!-- Contenido -->
        <div class="box-titulo">
                <label>Elegir el examen a asignar:</label>
            </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <select name="coexam" class="selectexam">
            <?php 
                $conexion = mysqli_connect("localhost", "root", "", "examen") or die("Problemas con la conexion");

                $llamar = mysqli_query($conexion, "SELECT numeroexamen from cdgexam") or die("Problemas en el select:" . mysqli_error($conexion));
                while($reg = mysqli_fetch_array($llamar)){

            ?>
                    <option value="<?php echo $reg['numeroexamen'];?>"  style="color: black;">Examen - <?php echo $reg['numeroexamen'];?></option>

            <?php 
            
                }

            ?>
            </select><br>
                <input class="elegir" type="submit" name="elegir" value="Enviar para asignar">
        </form>

<?php


    $conexion = mysqli_connect("localhost", "root", "", "examen") or die("Problemas con la conexion");


    
    if (!isset($_POST['coexam'])) {
    }else{

    $coexam=$_REQUEST['coexam'];
    $modif = mysqli_query($conexion, "UPDATE codaelegir set cdgelegir='$coexam' where codg='1'") or die("Problemas en el update:" . mysqli_error($conexion));

    //#numero exmaen a llamar

    $lla= mysqli_query($conexion, "SELECT cdgelegir  from codaelegir where codg='1'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($lla)){
    $codg= $lib['cdgelegir'];
    } 

    $llamar1 = mysqli_query($conexion, "SELECT numeroexamen  from cdgexam where codigo='$codg'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar1)){
    $cdgexam= $lib['numeroexamen'];
    } 

    //preguntas
    $llamar2 = mysqli_query($conexion, "SELECT pre1,pre2,pre3,pre4,pre5,pre6,pre7,pre8,pre9,pre10,pre11,pre12,pre13,pre14,pre15,pre16,pre17,pre18,pre19,pre20 from preguntas where codigo='$cdgexam'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar2)){
    $pre1= $lib['pre1'];
    $pre2= $lib['pre2'];
    $pre3= $lib['pre3'];
    $pre4= $lib['pre4'];
    $pre5= $lib['pre5'];
    $pre6= $lib['pre6'];
    $pre7= $lib['pre7'];
    $pre8= $lib['pre8'];
    $pre9= $lib['pre9'];
    $pre10= $lib['pre10'];
    $pre11= $lib['pre11'];
    $pre12= $lib['pre12'];
    $pre13= $lib['pre13'];
    $pre14= $lib['pre14'];
    $pre15= $lib['pre15'];
    $pre16= $lib['pre16'];
    $pre17= $lib['pre17'];
    $pre18= $lib['pre18'];
    $pre19= $lib['pre19'];
    $pre20= $lib['pre20'];
    }
    //correctas
    $llamar3 = mysqli_query($conexion, "SELECT co1r1,
    co1r2,
    co1r3,
    co1r4,
    co2r1,
    co2r2,
    co2r3,
    co2r4,
    co3r1,
    co3r2,
    co3r3,
    co3r4,
    co4r1,
    co4r2,
    co4r3,
    co4r4,
    co5r1,
    co5r2,
    co5r3,
    co5r4 from  corryinco1 where codigo='$cdgexam'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar3)){
        $co1r1=$lib['co1r1'];
        $co1r2=$lib['co1r2'];
        $co1r3=$lib['co1r3'];
        $co1r4=$lib['co1r4'];
        $co2r1=$lib['co2r1'];
        $co2r2=$lib['co2r2'];
        $co2r3=$lib['co2r3'];
        $co2r4=$lib['co2r4'];
        $co3r1=$lib['co3r1'];
        $co3r2=$lib['co3r2'];
        $co3r3=$lib['co3r3'];
        $co3r4=$lib['co3r4'];
        $co4r1=$lib['co4r1'];
        $co4r2=$lib['co4r2'];
        $co4r3=$lib['co4r3'];
        $co4r4=$lib['co4r4'];
        $co5r1=$lib['co5r1'];
        $co5r2=$lib['co5r2'];
        $co5r3=$lib['co5r3'];
        $co5r4=$lib['co5r4'];
    } 
    $llamar4 = mysqli_query($conexion, "SELECT co6r1,
    co6r2,
    co6r3,
    co6r4,
    co7r1,
    co7r2,
    co7r3,
    co7r4,
    co8r1,
    co8r2,
    co8r3,
    co8r4,
    co9r1,
    co9r2,
    co9r3,
    co9r4,
    co10r1,
    co10r2,
    co10r3,
    co10r4 from  corryinco2 where codigo='$cdgexam'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar4)){
        $co6r1=$lib['co6r1'];
        $co6r2=$lib['co6r2'];
        $co6r3=$lib['co6r3'];
        $co6r4=$lib['co6r4'];
        $co7r1=$lib['co7r1'];
        $co7r2=$lib['co7r2'];
        $co7r3=$lib['co7r3'];
        $co7r4=$lib['co7r4'];
        $co8r1=$lib['co8r1'];
        $co8r2=$lib['co8r2'];
        $co8r3=$lib['co8r3'];
        $co8r4=$lib['co8r4'];
        $co9r1=$lib['co9r1'];
        $co9r2=$lib['co9r2'];
        $co9r3=$lib['co9r3'];
        $co9r4=$lib['co9r4'];
        $co10r1=$lib['co10r1'];
        $co10r2=$lib['co10r2'];
        $co10r3=$lib['co10r3'];
        $co10r4=$lib['co10r4'];
    }
    $llamar5 = mysqli_query($conexion, "SELECT co11r1,
    co11r2,
    co11r3,
    co11r4,
    co12r1,
    co12r2,
    co12r3,
    co12r4,
    co13r1,
    co13r2,
    co13r3,
    co13r4,
    co14r1,
    co14r2,
    co14r3,
    co14r4,
    co15r1,
    co15r2,
    co15r3,
    co15r4 from  corryinco3 where codigo='$cdgexam'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar5)){
        $co11r1=$lib['co11r1'];
        $co11r2=$lib['co11r2'];
        $co11r3=$lib['co11r3'];
        $co11r4=$lib['co11r4'];
        $co12r1=$lib['co12r1'];
        $co12r2=$lib['co12r2'];
        $co12r3=$lib['co12r3'];
        $co12r4=$lib['co12r4'];
        $co13r1=$lib['co13r1'];
        $co13r2=$lib['co13r2'];
        $co13r3=$lib['co13r3'];
        $co13r4=$lib['co13r4'];
        $co14r1=$lib['co14r1'];
        $co14r2=$lib['co14r2'];
        $co14r3=$lib['co14r3'];
        $co14r4=$lib['co14r4'];
        $co15r1=$lib['co15r1'];
        $co15r2=$lib['co15r2'];
        $co15r3=$lib['co15r3'];
        $co15r4=$lib['co15r4'];
    }      
    $llamar6 = mysqli_query($conexion, "SELECT co16r1,
    co16r2,
    co16r3,
    co16r4,
    co17r1,
    co17r2,
    co17r3,
    co17r4,
    co18r1,
    co18r2,
    co18r3,
    co18r4,
    co19r1,
    co19r2,
    co19r3,
    co19r4,
    co20r1,
    co20r2,
    co20r3,
    co20r4 from  corryinco4 where codigo='$cdgexam'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar6)){
        $co16r1=$lib['co16r1'];
        $co16r2=$lib['co16r2'];
        $co16r3=$lib['co16r3'];
        $co16r4=$lib['co16r4'];
        $co17r1=$lib['co17r1'];
        $co17r2=$lib['co17r2'];
        $co17r3=$lib['co17r3'];
        $co17r4=$lib['co17r4'];
        $co18r1=$lib['co18r1'];
        $co18r2=$lib['co18r2'];
        $co18r3=$lib['co18r3'];
        $co18r4=$lib['co18r4'];
        $co19r1=$lib['co19r1'];
        $co19r2=$lib['co19r2'];
        $co19r3=$lib['co19r3'];
        $co19r4=$lib['co19r4'];
        $co20r1=$lib['co20r1'];
        $co20r2=$lib['co20r2'];
        $co20r3=$lib['co20r3'];
        $co20r4=$lib['co20r4'];
    } 
    //preguntas
    $llamar7 = mysqli_query($conexion, "SELECT 1r1,
    1r2,
    1r3,
    1r4,
    2r1,
    2r2,
    2r3,
    2r4,
    3r1,
    3r2,
    3r3,
    3r4,
    4r1,
    4r2,
    4r3,
    4r4,
    5r1,
    5r2,
    5r3,
    5r4 from  respuestas1 where codigo='$cdgexam'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar7)){
        $r1r1=$lib['1r1'];
        $r1r2=$lib['1r2'];
        $r1r3=$lib['1r3'];
        $r1r4=$lib['1r4'];
        $r2r1=$lib['2r1'];
        $r2r2=$lib['2r2'];
        $r2r3=$lib['2r3'];
        $r2r4=$lib['2r4'];
        $r3r1=$lib['3r1'];
        $r3r2=$lib['3r2'];
        $r3r3=$lib['3r3'];
        $r3r4=$lib['3r4'];
        $r4r1=$lib['4r1'];
        $r4r2=$lib['4r2'];
        $r4r3=$lib['4r3'];
        $r4r4=$lib['4r4'];
        $r5r1=$lib['5r1'];
        $r5r2=$lib['5r2'];
        $r5r3=$lib['5r3'];
        $r5r4=$lib['5r4'];
    } 
    $llamar8 = mysqli_query($conexion, "SELECT 6r1,
    6r2,
    6r3,
    6r4,
    7r1,
    7r2,
    7r3,
    7r4,
    8r1,
    8r2,
    8r3,
    8r4,
    9r1,
    9r2,
    9r3,
    9r4,
    10r1,
    10r2,
    10r3,
    10r4 from  respuestas2 where codigo='$cdgexam'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar8)){
        $r6r1=$lib['6r1'];
        $r6r2=$lib['6r2'];
        $r6r3=$lib['6r3'];
        $r6r4=$lib['6r4'];
        $r7r1=$lib['7r1'];
        $r7r2=$lib['7r2'];
        $r7r3=$lib['7r3'];
        $r7r4=$lib['7r4'];
        $r8r1=$lib['8r1'];
        $r8r2=$lib['8r2'];
        $r8r3=$lib['8r3'];
        $r8r4=$lib['8r4'];
        $r9r1=$lib['9r1'];
        $r9r2=$lib['9r2'];
        $r9r3=$lib['9r3'];
        $r9r4=$lib['9r4'];
        $r10r1=$lib['10r1'];
        $r10r2=$lib['10r2'];
        $r10r3=$lib['10r3'];
        $r10r4=$lib['10r4'];
    } 
    $llamar9 = mysqli_query($conexion, "SELECT 11r1,
    11r2,
    11r3,
    11r4,
    12r1,
    12r2,
    12r3,
    12r4,
    13r1,
    13r2,
    13r3,
    13r4,
    14r1,
    14r2,
    14r3,
    14r4,
    15r1,
    15r2,
    15r3,
    15r4 from  respuestas3 where codigo='$cdgexam'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar9)){
        $r11r1=$lib['11r1'];
        $r11r2=$lib['11r2'];
        $r11r3=$lib['11r3'];
        $r11r4=$lib['11r4'];
        $r12r1=$lib['12r1'];
        $r12r2=$lib['12r2'];
        $r12r3=$lib['12r3'];
        $r12r4=$lib['12r4'];
        $r13r1=$lib['13r1'];
        $r13r2=$lib['13r2'];
        $r13r3=$lib['13r3'];
        $r13r4=$lib['13r4'];
        $r14r1=$lib['14r1'];
        $r14r2=$lib['14r2'];
        $r14r3=$lib['14r3'];
        $r14r4=$lib['14r4'];
        $r15r1=$lib['15r1'];
        $r15r2=$lib['15r2'];
        $r15r3=$lib['15r3'];
        $r15r4=$lib['15r4'];
    } 
    $llamar10 = mysqli_query($conexion, "SELECT 16r1,
    16r2,
    16r3,
    16r4,
    17r1,
    17r2,
    17r3,
    17r4,
    18r1,
    18r2,
    18r3,
    18r4,
    19r1,
    19r2,
    19r3,
    19r4,
    20r1,
    20r2,
    20r3,
    20r4 from  respuestas4 where codigo='$cdgexam'") or die("Problemas en el select:" . mysqli_error($conexion));

    if($lib = mysqli_fetch_array($llamar10)){
        $r16r1=$lib['16r1'];
        $r16r2=$lib['16r2'];
        $r16r3=$lib['16r3'];
        $r16r4=$lib['16r4'];
        $r17r1=$lib['17r1'];
        $r17r2=$lib['17r2'];
        $r17r3=$lib['17r3'];
        $r17r4=$lib['17r4'];
        $r18r1=$lib['18r1'];
        $r18r2=$lib['18r2'];
        $r18r3=$lib['18r3'];
        $r18r4=$lib['18r4'];
        $r19r1=$lib['19r1'];
        $r19r2=$lib['19r2'];
        $r19r3=$lib['19r3'];
        $r19r4=$lib['19r4'];
        $r20r1=$lib['20r1'];
        $r20r2=$lib['20r2'];
        $r20r3=$lib['20r3'];
        $r20r4=$lib['20r4'];
    } 
?>



            <div class="boxto" style="margin-left: 5%; margin-right: 5%;">
                <label>1.- <?php echo$pre1;?></label>
                <br>
                <select name="pregunta1" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co1r1;?>" style="color: black;">a) <?php echo$r1r1;?></option>
                    <option value="<?php echo$co1r2;?>" style="color: black;">b) <?php echo$r1r2;?></option>
                    <option value="<?php echo$co1r3;?>" style="color: black;">c) <?php echo$r1r3;?></option>
                    <option value="<?php echo$co1r4;?>" style="color: black;">d) <?php echo$r1r4;?></option>
                </select>
                <br>

                <label>2.- <?php echo$pre2;?></label>
                <br><br>

                <label><input type="radio" name="pregunta2" value="<?php echo$co2r1;?>"required> a) <?php echo$r2r1;?></label><br>
                <label><input type="radio" name="pregunta2" value="<?php echo$co2r2;?>"required> b) <?php echo$r2r2;?></label><br>
                <label><input type="radio" name="pregunta2" value="<?php echo$co2r3;?>"required> c) <?php echo$r2r3;?></label><br>
                <label><input type="radio" name="pregunta2" value="<?php echo$co2r4;?>"required> d) <?php echo$r2r4;?></label>

                <br>

                <br>
                <label>3.- <?php echo$pre3;?></label>
                <br>
                <select name="pregunta3" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co3r1;?>" style="color: black;">a) <?php echo$r3r1;?></option>
                    <option value="<?php echo$co3r2;?>" style="color: black;">b) <?php echo$r3r2;?></option>
                    <option value="<?php echo$co3r3;?>" style="color: black;">c) <?php echo$r3r3;?></option>
                    <option value="<?php echo$co3r4;?>" style="color: black;">d) <?php echo$r3r4;?></option>
                </select>
                <br>

                <label>4.- <?php echo$pre4;?></label>
                <br><br>

                <label><input type="radio" name="pregunta4" value="<?php echo$co4r1;?>"required> a) <?php echo$r4r1;?></label><br>
                <label><input type="radio" name="pregunta4" value="<?php echo$co4r2;?>"required> b) <?php echo$r4r2;?></label><br>
                <label><input type="radio" name="pregunta4" value="<?php echo$co4r3;?>"required> c) <?php echo$r4r3;?></label><br>
                <label><input type="radio" name="pregunta4" value="<?php echo$co4r4;?>"required> d) <?php echo$r4r4;?></label>

                <br>

                <br>
                <label>5.- <?php echo$pre5;?></label>
                <br>
                <select name="pregunta5" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co5r1;?>" style="color: black;">a) <?php echo$r5r1;?></option>
                    <option value="<?php echo$co5r2;?>" style="color: black;">b) <?php echo$r5r2;?></option>
                    <option value="<?php echo$co5r3;?>" style="color: black;">c) <?php echo$r5r3;?></option>
                    <option value="<?php echo$co5r4;?>" style="color: black;">d) <?php echo$r5r4;?></option>
                </select>
                <br>

                
                <label>6.- <?php echo$pre6;?></label>
                <br><br>

                <label><input type="radio" name="pregunta6" value="<?php echo$co6r1;?>"required> a) <?php echo$r6r1;?></label><br>
                <label><input type="radio" name="pregunta6" value="<?php echo$co6r2;?>"required> b) <?php echo$r6r2;?></label><br>
                <label><input type="radio" name="pregunta6" value="<?php echo$co6r3;?>"required> c) <?php echo$r6r3;?></label><br>
                <label><input type="radio" name="pregunta6" value="<?php echo$co6r4;?>"required> d) <?php echo$r6r4;?></label>

                <br><br>

                <label>7.- <?php echo$pre7;?></label>
                <br>
                <select name="pregunta7" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co7r1;?>" style="color: black;">a) <?php echo$r7r1;?></option>
                    <option value="<?php echo$co7r2;?>" style="color: black;">b) <?php echo$r7r2;?></option>
                    <option value="<?php echo$co7r3;?>" style="color: black;">c) <?php echo$r7r3;?></option>
                    <option value="<?php echo$co7r4;?>" style="color: black;">d) <?php echo$r7r4;?></option>
                </select>
                <br>

                <label>8.- <?php echo$pre8;?></label>
                <br>
                <select name="pregunta8" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co8r1;?>" style="color: black;">a) <?php echo$r8r1;?></option>
                    <option value="<?php echo$co8r2;?>" style="color: black;">b) <?php echo$r8r2;?></option>
                    <option value="<?php echo$co8r3;?>" style="color: black;">c) <?php echo$r8r3;?></option>
                    <option value="<?php echo$co8r4;?>" style="color: black;">d) <?php echo$r8r4;?></option>
                </select>
                <br>

                <label>9.- <?php echo$pre9;?></label>
                <br><br>

                <label><input type="radio" name="pregunta9" value="<?php echo$co9r1;?>"required> a) <?php echo$r9r1;?></label><br>
                <label><input type="radio" name="pregunta9" value="<?php echo$co9r2;?>"required> b) <?php echo$r9r2;?></label><br>
                <label><input type="radio" name="pregunta9" value="<?php echo$co9r3;?>"required> c) <?php echo$r9r3;?></label><br>
                <label><input type="radio" name="pregunta9" value="<?php echo$co9r4;?>"required> d) <?php echo$r9r4;?></label>

                <br><br>

                <label>10.- <?php echo$pre10;?></label>
                <br><br>

                <label><input type="radio" name="pregunta10" value="<?php echo$co10r1;?>"required> a) <?php echo$r10r1;?></label><br>
                <label><input type="radio" name="pregunta10" value="<?php echo$co10r2;?>"required> b) <?php echo$r10r2;?></label><br>
                <label><input type="radio" name="pregunta10" value="<?php echo$co10r3;?>"required> c) <?php echo$r10r3;?></label><br>
                <label><input type="radio" name="pregunta10" value="<?php echo$co10r4;?>"required> d) <?php echo$r10r4;?></label>

                <br><br>

                <label>11.- <?php echo$pre11;?></label>
                <br>
                <select name="pregunta11" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co11r1;?>" style="color: black;">a) <?php echo$r11r1;?></option>
                    <option value="<?php echo$co11r2;?>" style="color: black;">b) <?php echo$r11r2;?></option>
                    <option value="<?php echo$co11r3;?>" style="color: black;">c) <?php echo$r11r3;?></option>
                    <option value="<?php echo$co11r4;?>" style="color: black;">d) <?php echo$r11r4;?></option>
                </select>
                <br>

                <label>12.- <?php echo$pre12;?></label>
                <br>
                <select name="pregunta12" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co12r1;?>" style="color: black;">a) <?php echo$r12r1;?></option>
                    <option value="<?php echo$co12r2;?>" style="color: black;">b) <?php echo$r12r2;?></option>
                    <option value="<?php echo$co12r3;?>" style="color: black;">c) <?php echo$r12r3;?></option>
                    <option value="<?php echo$co12r4;?>" style="color: black;">d) <?php echo$r12r4;?></option>
                </select>
                <br>

                <label>13.- <?php echo$pre13;?></label>
                <br><br>

                <label><input type="radio" name="pregunta13" value="<?php echo$co13r1;?>"required> a) <?php echo$r13r1;?></label><br>
                <label><input type="radio" name="pregunta13" value="<?php echo$co13r2;?>"required> b) <?php echo$r13r2;?></label><br>
                <label><input type="radio" name="pregunta13" value="<?php echo$co13r3;?>"required> c) <?php echo$r13r3;?></label><br>
                <label><input type="radio" name="pregunta13" value="<?php echo$co13r4;?>"required> d) <?php echo$r13r4;?></label>

                <br><br>

                <label>14.- <?php echo$pre14;?></label>
                <br>
                <select name="pregunta14" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co14r1;?>" style="color: black;">a) <?php echo$r14r1;?></option>
                    <option value="<?php echo$co14r2;?>" style="color: black;">b) <?php echo$r14r2;?></option>
                    <option value="<?php echo$co14r3;?>" style="color: black;">c) <?php echo$r14r3;?></option>
                    <option value="<?php echo$co14r4;?>" style="color: black;">d) <?php echo$r14r4;?></option>
                </select>
                <br>

                <label>15.- <?php echo$pre15;?></label>
                <br>
                <select name="pregunta15" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co15r1;?>" style="color: black;">a) <?php echo$r15r1;?></option>
                    <option value="<?php echo$co15r2;?>" style="color: black;">b) <?php echo$r15r2;?></option>
                    <option value="<?php echo$co15r3;?>" style="color: black;">c) <?php echo$r15r3;?></option>
                    <option value="<?php echo$co15r4;?>" style="color: black;">d) <?php echo$r15r4;?></option>
                </select>
                <br>

                <label>16.- <?php echo$pre16;?></label>
                <br><br>

                <label><input type="radio" name="pregunta16" value="<?php echo$co16r1;?>"required> a) <?php echo$r16r1;?></label><br>
                <label><input type="radio" name="pregunta16" value="<?php echo$co16r2;?>"required> b) <?php echo$r16r2;?></label><br>
                <label><input type="radio" name="pregunta16" value="<?php echo$co16r3;?>"required> c) <?php echo$r16r3;?></label><br>
                <label><input type="radio" name="pregunta16" value="<?php echo$co16r4;?>"required> d) <?php echo$r16r4;?></label>

                <br><br>

                <label>17.- <?php echo$pre17;?></label>
                <br>
                <select name="pregunta17" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co17r1;?>" style="color: black;">a) <?php echo$r17r1;?></option>
                    <option value="<?php echo$co17r2;?>" style="color: black;">b) <?php echo$r17r2;?></option>
                    <option value="<?php echo$co17r3;?>" style="color: black;">c) <?php echo$r17r3;?></option>
                    <option value="<?php echo$co17r4;?>" style="color: black;">d) <?php echo$r17r4;?></option>
                </select>
                <br>

                <label>18.- <?php echo$pre18;?></label>
                <br>
                <select name="pregunta18" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co18r1;?>" style="color: black;">a) <?php echo$r18r1;?></option>
                    <option value="<?php echo$co18r2;?>" style="color: black;">b) <?php echo$r18r2;?></option>
                    <option value="<?php echo$co18r3;?>" style="color: black;">c) <?php echo$r18r3;?></option>
                    <option value="<?php echo$co18r4;?>" style="color: black;">d) <?php echo$r18r4;?></option>
                </select>
                <br>

                <label>19.- <?php echo$pre19;?></label>
                <br><br>

                <label><input type="radio" name="pregunta19" value="<?php echo$co19r1;?>"required> a) <?php echo$r19r1;?></label><br>
                <label><input type="radio" name="pregunta19" value="<?php echo$co19r2;?>"required> b) <?php echo$r19r2;?></label><br>
                <label><input type="radio" name="pregunta19" value="<?php echo$co19r3;?>"required> c) <?php echo$r19r3;?></label><br>
                <label><input type="radio" name="pregunta19" value="<?php echo$co19r4;?>"required> d) <?php echo$r19r4;?></label>

                <br><br>

                <label>20.- <?php echo$pre20;?></label>
                <br>
                <select name="pregunta20" id="" style="width: 200px;" value="Selecciona una opcion">
                    <option value="1" style="color: red;">Selecciona una opcion</option>
                    <option value="<?php echo$co20r1;?>" style="color: black;">a) <?php echo$r20r1;?></option>
                    <option value="<?php echo$co20r2;?>" style="color: black;">b) <?php echo$r20r2;?></option>
                    <option value="<?php echo$co20r3;?>" style="color: black;">c) <?php echo$r20r3;?></option>
                    <option value="<?php echo$co20r4;?>" style="color: black;">d) <?php echo$r20r4;?></option>
                </select>
                <br>
                <br>
            </div>
        <?php
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