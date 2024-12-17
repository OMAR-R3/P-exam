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

        .tablin{
            text-align: center;
        }

        .tablin td{
            padding: 10px;
        }

        .cajatab{

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cajatab table{
            width: 80%;
        }

        #global {
            width: 80%;
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

    .instruct{
        text-align: center;
        width: 70%;
        margin: 10px 15%;
    }
    .correct{
        color: green;
    }

    .inco{
        color: red;
    }
    .mandar input{
        text-align: center;
        width: 30%;
        margin: 10px 35%;

    }
    form input[type="submit"] {
        padding: 10px;
        border: 2px solid transparent;
        color: #333;
        cursor: pointer;
        background: #80ffff;
        transition: all 1s;
    }
    form input[type="submit"]:hover{
        transform: scale(.8);
        border-radius: 10px;
    }

    .infsub{
        color: #0f87ff;
        text-align: center;
    }

    .selectexam{
        width: 20%;
        margin: 10px 40%;
        border: 2px solid transparent;
        cursor: pointer;
        background: #ffffa2;
        text-align: center;
    }

    @media (max-width:1000px){
        .box-prom .promedio{
            margin: 10px 30%;
            width: 40%;
        }
        /* MENUSITILLO */
        .icono{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            background: transparent;
            z-index: 999;
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
            z-index: 998;
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
                <h1>Modificacion Examen</h1>
            </div>

            <div class="clearfix"></div>

        </header>

        <div class="instruct">
            <p>Bienvenido profesor o profesora en este apartado puede hacer la modificacion del examen, debe ingresar las preguntas y respuestas a modificar, como tambien debe elegir cual respuesta(s) estan correctas o incorrectas selecionando el radio de <label class="correct">✔</label> o <label class="inco">✖</label>.</p>
            <br><p>Escoja el examen a modificar.</p>
        </div>

        <!-- Contenido -->
        <div class="caja-mod-form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
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
                <label>Preguna #1: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr1" placeholder="Ingrese la pregunta #1"></label>
                <br>
                <label class="inco"><input type="radio" name="co1r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co1r1" value="2">✔</label> <label class="respuesta"><input type="text" name="1r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co1r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co1r2" value="2">✔</label> <label class="respuesta"><input type="text" name="1r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co1r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co1r3" value="2">✔</label> <label class="respuesta"><input type="text" name="1r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co1r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co1r4" value="2">✔</label> <label class="respuesta"><input type="text" name="1r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #2: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr2" placeholder="Ingrese la pregunta #2"></label>
                <br>
                <label class="inco"><input type="radio" name="co2r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co2r1" value="2">✔</label> <label class="respuesta"><input type="text" name="2r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co2r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co2r2" value="2">✔</label> <label class="respuesta"><input type="text" name="2r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co2r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co2r3" value="2">✔</label> <label class="respuesta"><input type="text" name="2r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co2r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co2r4" value="2">✔</label> <label class="respuesta"><input type="text" name="2r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #3: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr3" placeholder="Ingrese la pregunta #3"></label>
                <br>
                <label class="inco"><input type="radio" name="co3r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co3r1" value="2">✔</label> <label class="respuesta"><input type="text" name="3r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co3r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co3r2" value="2">✔</label> <label class="respuesta"><input type="text" name="3r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co3r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co3r3" value="2">✔</label> <label class="respuesta"><input type="text" name="3r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co3r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co3r4" value="2">✔</label> <label class="respuesta"><input type="text" name="3r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #4: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr4" placeholder="Ingrese la pregunta #4"></label>
                <br>
                <label class="inco"><input type="radio" name="co4r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co4r1" value="2">✔</label> <label class="respuesta"><input type="text" name="4r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co4r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co4r2" value="2">✔</label> <label class="respuesta"><input type="text" name="4r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co4r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co4r3" value="2">✔</label> <label class="respuesta"><input type="text" name="4r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co4r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co4r4" value="2">✔</label> <label class="respuesta"><input type="text" name="4r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #5: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr5" placeholder="Ingrese la pregunta #5"></label>
                <br>
                <label class="inco"><input type="radio" name="co5r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co5r1" value="2">✔</label> <label class="respuesta"><input type="text" name="5r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co5r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co5r2" value="2">✔</label> <label class="respuesta"><input type="text" name="5r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co5r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co5r3" value="2">✔</label> <label class="respuesta"><input type="text" name="5r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co5r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co5r4" value="2">✔</label> <label class="respuesta"><input type="text" name="5r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #6: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr6" placeholder="Ingrese la pregunta #6"></label>
                <br>
                <label class="inco"><input type="radio" name="co6r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co6r1" value="2">✔</label> <label class="respuesta"><input type="text" name="6r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co6r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co6r2" value="2">✔</label> <label class="respuesta"><input type="text" name="6r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co6r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co6r3" value="2">✔</label> <label class="respuesta"><input type="text" name="6r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co6r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co6r4" value="2">✔</label> <label class="respuesta"><input type="text" name="6r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #7: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr7" placeholder="Ingrese la pregunta #7"></label>
                <br>
                <label class="inco"><input type="radio" name="co7r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co7r1" value="2">✔</label> <label class="respuesta"><input type="text" name="7r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co7r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co7r2" value="2">✔</label> <label class="respuesta"><input type="text" name="7r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co7r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co7r3" value="2">✔</label> <label class="respuesta"><input type="text" name="7r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co7r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co7r4" value="2">✔</label> <label class="respuesta"><input type="text" name="7r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #8: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr8" placeholder="Ingrese la pregunta #8"></label>
                <br>
                <label class="inco"><input type="radio" name="co8r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co8r1" value="2">✔</label> <label class="respuesta"><input type="text" name="8r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co8r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co8r2" value="2">✔</label> <label class="respuesta"><input type="text" name="8r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co8r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co8r3" value="2">✔</label> <label class="respuesta"><input type="text" name="8r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co8r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co8r4" value="2">✔</label> <label class="respuesta"><input type="text" name="8r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #9: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr9" placeholder="Ingrese la pregunta #9"></label>
                <br>
                <label class="inco"><input type="radio" name="co9r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co9r1" value="2">✔</label> <label class="respuesta"><input type="text" name="9r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co9r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co9r2" value="2">✔</label> <label class="respuesta"><input type="text" name="9r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co9r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co9r3" value="2">✔</label> <label class="respuesta"><input type="text" name="9r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co9r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co9r4" value="2">✔</label> <label class="respuesta"><input type="text" name="9r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #10: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr10" placeholder="Ingrese la pregunta #10"></label>
                <br>
                <label class="inco"><input type="radio" name="co10r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co10r1" value="2">✔</label> <label class="respuesta"><input type="text" name="10r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co10r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co10r2" value="2">✔</label> <label class="respuesta"><input type="text" name="10r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co10r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co10r3" value="2">✔</label> <label class="respuesta"><input type="text" name="10r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co10r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co10r4" value="2">✔</label> <label class="respuesta"><input type="text" name="10r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #11: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr11" placeholder="Ingrese la pregunta #11"></label>
                <br>
                <label class="inco"><input type="radio" name="co11r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co11r1" value="2">✔</label> <label class="respuesta"><input type="text" name="11r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co11r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co11r2" value="2">✔</label> <label class="respuesta"><input type="text" name="11r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co11r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co11r3" value="2">✔</label> <label class="respuesta"><input type="text" name="11r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co11r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co11r4" value="2">✔</label> <label class="respuesta"><input type="text" name="11r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #12: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr12" placeholder="Ingrese la pregunta #12"></label>
                <br>
                <label class="inco"><input type="radio" name="co12r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co12r1" value="2">✔</label> <label class="respuesta"><input type="text" name="12r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co12r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co12r2" value="2">✔</label> <label class="respuesta"><input type="text" name="12r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co12r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co12r3" value="2">✔</label> <label class="respuesta"><input type="text" name="12r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co12r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co12r4" value="2">✔</label> <label class="respuesta"><input type="text" name="12r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #13: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr13" placeholder="Ingrese la pregunta #13"></label>
                <br>
                <label class="inco"><input type="radio" name="co13r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co13r1" value="2">✔</label> <label class="respuesta"><input type="text" name="13r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co13r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co13r2" value="2">✔</label> <label class="respuesta"><input type="text" name="13r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co13r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co13r3" value="2">✔</label> <label class="respuesta"><input type="text" name="13r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co13r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co13r4" value="2">✔</label> <label class="respuesta"><input type="text" name="13r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #14: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr14" placeholder="Ingrese la pregunta #14"></label>
                <br>
                <label class="inco"><input type="radio" name="co14r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co14r1" value="2">✔</label> <label class="respuesta"><input type="text" name="14r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co14r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co14r2" value="2">✔</label> <label class="respuesta"><input type="text" name="14r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co14r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co14r3" value="2">✔</label> <label class="respuesta"><input type="text" name="14r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co14r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co14r4" value="2">✔</label> <label class="respuesta"><input type="text" name="14r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #15: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr15" placeholder="Ingrese la pregunta #15"></label>
                <br>
                <label class="inco"><input type="radio" name="co15r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co15r1" value="2">✔</label> <label class="respuesta"><input type="text" name="15r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co15r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co15r2" value="2">✔</label> <label class="respuesta"><input type="text" name="15r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co15r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co15r3" value="2">✔</label> <label class="respuesta"><input type="text" name="15r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co15r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co15r4" value="2">✔</label> <label class="respuesta"><input type="text" name="15r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #16: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr16" placeholder="Ingrese la pregunta #16"></label>
                <br>
                <label class="inco"><input type="radio" name="co16r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co16r1" value="2">✔</label> <label class="respuesta"><input type="text" name="16r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co16r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co16r2" value="2">✔</label> <label class="respuesta"><input type="text" name="16r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co16r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co16r3" value="2">✔</label> <label class="respuesta"><input type="text" name="16r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co16r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co16r4" value="2">✔</label> <label class="respuesta"><input type="text" name="16r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #17: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr17" placeholder="Ingrese la pregunta #17"></label>
                <br>
                <label class="inco"><input type="radio" name="co17r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co17r1" value="2">✔</label> <label class="respuesta"><input type="text" name="17r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co17r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co17r2" value="2">✔</label> <label class="respuesta"><input type="text" name="17r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co17r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co17r3" value="2">✔</label> <label class="respuesta"><input type="text" name="17r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co17r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co17r4" value="2">✔</label> <label class="respuesta"><input type="text" name="17r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #18: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr18" placeholder="Ingrese la pregunta #18"></label>
                <br>
                <label class="inco"><input type="radio" name="co18r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co18r1" value="2">✔</label> <label class="respuesta"><input type="text" name="18r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co18r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co18r2" value="2">✔</label> <label class="respuesta"><input type="text" name="18r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co18r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co18r3" value="2">✔</label> <label class="respuesta"><input type="text" name="18r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co18r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co18r4" value="2">✔</label> <label class="respuesta"><input type="text" name="18r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #19: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr19" placeholder="Ingrese la pregunta #19"></label>
                <br>
                <label class="inco"><input type="radio" name="co19r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co19r1" value="2">✔</label> <label class="respuesta"><input type="text" name="19r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co19r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co19r2" value="2">✔</label> <label class="respuesta"><input type="text" name="19r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co19r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co19r3" value="2">✔</label> <label class="respuesta"><input type="text" name="19r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co19r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co19r4" value="2">✔</label> <label class="respuesta"><input type="text" name="19r4" placeholder="Ingrese la respuesta #4"></label><br>

                <label>Preguna #20: </label>
                <br>
                <label class="pregunta"><input type="text" name="pr20" placeholder="Ingrese la pregunta #20"></label>
                <br>
                <label class="inco"><input type="radio" name="co20r1" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co20r1" value="2">✔</label> <label class="respuesta"><input type="text" name="20r1" placeholder="Ingrese la respuesta #1"></label><br>
                <label class="inco"><input type="radio" name="co20r2" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co20r2" value="2">✔</label> <label class="respuesta"><input type="text" name="20r2" placeholder="Ingrese la respuesta #2"></label><br>
                <label class="inco"><input type="radio" name="co20r3" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co20r3" value="2">✔</label> <label class="respuesta"><input type="text" name="20r3" placeholder="Ingrese la respuesta #3"></label><br>
                <label class="inco"><input type="radio" name="co20r4" value="1" checked>✖</label> <label class="correct"><input type="radio" name="co20r4" value="2">✔</label> <label class="respuesta"><input type="text" name="20r4" placeholder="Ingrese la respuesta #4"></label><br>

                <br>
                <div class="mandar"><input type="submit" value="SUBIR EXAMEN" name="envioexam"></div>
            </form>
        </div>

        <?php

            if(isset($_POST["envioexam"])){
                include("procesar_modificacion_exam.php");
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