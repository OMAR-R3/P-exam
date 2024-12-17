<?php
        $grad=$_POST['grado'];
        $grup=$_POST['grupo'];
        $tur=$_POST['turno'];


        $conexion = mysqli_connect("localhost", "root", "", "examen") or die("Problemas con la conexion");

            $registros = mysqli_query($conexion, "SELECT codigoAlumno,nombreAlumno,grado,grupo,turno,correo,aciertos,errores,calificacionAlumno,fecha,hora from calialum where grado='$grad' AND grupo='$grup' and turno='$tur'") or die("Problemas en el select:" . mysqli_error($conexion));

            $consulta="SELECT * FROM calialum where grado='$grad' AND grupo='$grup' and turno='$tur'";

            $resultado = mysqli_query($conexion,$consulta);
            
            $filas=mysqli_num_rows($resultado); //va a delver un valor sea cierto o falso 1,0
            
            if($filas==0){
            
                header('Location: consulta.php');
            
            }

            $promedio=0;
            $alum=0;

            

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

        /*forms */
        .box-busqueda .box-titulo{
            width: 100%;
            text-align: center;
            margin: 10px 0;
        }
        
        .box-busqueda .box-titulo label{
            font-size: 21px;
            text-align: center;
            color: #fd7e00;
            font-weight: 700;

        }

        .box-busqueda form input{
            width: 20%;
            height: 30px;
            background-color: rgba(197, 197, 197, 0.6);
            border: 2px solid rgba(0, 0, 0, 0);
            padding: 0.5rem 1rem;
            outline: none;
            transition: all 0.5s;
        }

        .box-busqueda form select{
            width: 30%;
            height: 50px;
            background-color: rgba(197, 197, 197, 0.6);
            border: 2px solid rgba(0, 0, 0, 0);
            padding: 0.5rem 1rem;
            outline: none;
            transition: all 0.5s;
            cursor: pointer;
        }

        .box-busqueda .box-correo form .correo{
            width: 40%;
            margin-bottom: 10px;
            margin-top: 5px;
        }

        .box-busqueda{
            width: 100%;
        }
        .box-gra,.box-correo {
            margin: 10px 15%;
            width: 70%;
            text-align: center;
        }

        .box-busqueda form input:focus ,select:focus{
            background-color: #fff;
            border: 2px solid rgba(30, 85, 250, 0.47);
        }

        .box-busqueda form .envio{
            background: rgb(76, 192, 212);
            color: #fff;
            width: 30%;
            height: 35px;
            cursor: pointer;
            border-radius: 5px;
            transition: all 1s;
        }
        .box-busqueda form .envio:hover{
            background: rgb(42, 205, 234);
            color: #dbdbdb;
            transform: scale(0.8);
        }


        /*fin forms */

        /* caja promedio */

        .box-prom{
            width: 100%;
        }
        .box-prom .promedio{
            margin: 10px 35%;
            width: 30%;
            height: 50px;
            background: rgb(28,220,255);
            background: linear-gradient(325deg, rgba(28,220,255,0.8438725832129726) 31%, rgba(32,241,143,0.9475140397956058) 78%);
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;

            border-radius: 25px;
        }

        /* fin caja promedio */

        /*consulta general */

        .box-consul{
            width: 100%;
        }

        .box-consul form{
            width: 100%;
        }

        .box-consul  .par-1{
            background: red;
            display: flex;
        }

        .box-consul  .par-1 div{
            background: yellow;
            width: 20%;
            border: 1px solid #000;
            text-align: center;
            display: table-cell; 
            vertical-align: middle;

        }

        .box-consul  .par-1 .uno{
            width: 15%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .dos{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .tres{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .cuatro{
            width: 20%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .cinco{
            width: 5%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .seis{
            width: 5%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .siete{
            width: 5%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .ocho{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .nueve{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .dies{
            width: 10%;
            border: 1px solid #000;
        }

        .box-consul form .par-2{
            display: flex;
        }

        /*.box-consul form .par-2 div{
            width: 20%;
            border: 1px solid #000;
        }*/
        .box-consul form .par-2 .uno{
            width: 15%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .dos{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .tres{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .cuatro{
            width: 20%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .cinco{
            width: 5%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .seis{
            width: 5%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .siete{
            width: 5%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .ocho{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .nueve{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .dies{
            width: 10%;
            border: 1px solid #000;
        }

        .box-consul form .par-2 .div{
            background: rgb(76, 192, 212);
            color: #fff;
            width: 100%;
            height: 100%;
            cursor: pointer;
            transition: all 1s;
        }
        .box-consul form .par-2 .div:hover{
            background: rgb(42, 205, 234);
            color: #dbdbdb;
            transform: scale(0.8);
            border-radius: 25px;
        }

        .box-consul form div{
            text-align: center;
            display: table-cell; 
            vertical-align: middle;
        }



        /*fin consulta general */

    

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
                <h1>Consulta</h1>
            </div>

            <div class="clearfix"></div>

        </header>
        

        <!-- Contenido -->


    
        <!-- consultas generales -->



        <div class="box-consul">
        <div class="par-1">
                    <div class="uno">Nombre Alumno</div>
                    <div class="dos">Grado - Grupo</div>
                    <div class="tres">Turno</div>
                    <div class="cuatro">Correo</div>
                    <div class="cinco">Aciertos</div>
                    <div class="seis">Errores</div>
                    <div class="siete">Calf</div>
                    <div class="ocho">Fecha</div>
                    <div class="nueve">Hora</div>
                    <div class="dies">Revisar</div>
                </div>
            <?php

                while($reg = mysqli_fetch_array($registros)){
            ?>
            <form action="consultaindividual.php" method="post">
                <!--parte 1-->


                <!--parte 2-->
                <div class="par-2">
                    <input name="codigo" type="text" value="<?php echo $reg['codigoAlumno'];?>" style="visibility: hiden; display:none;">
                    <div class="uno"><?php echo $reg['nombreAlumno'];?></div>
                    <div class="dos"><?php echo $reg['grado']." - ".$reg['grupo'];?></div>
                    <div class="tres"><?php echo $reg['turno']?></div>
                    <div class="cuatro"><input type="text" value="<?php echo $reg['correo'];?>"></div>
                    <div class="cinco"><?php echo $reg['aciertos'];?></div>
                    <div class="seis"><?php echo $reg['errores'];?></div>
                    <div class="siete"><?php echo $cal=$reg['calificacionAlumno'];?></div>
                    <div class="ocho"><?php echo $reg['fecha'];?></div>
                    <div class="nueve"><?php echo $reg['hora'];?></div>
                    <div class="dies"><input class="div" type="submit" value="REVISAR" name="revisar"></div>
                </div>
            </form>
            <?php
                    $alum++;
                    $promedio=$promedio+$cal;
               }
               
            $promescue=($promedio/($alum));
            $promescue = bcdiv($promescue, '1', 1);
            ?>
        </div>


        <!-- promedio escolar -->

        <div class="box-prom">
            <div class="promedio"><label>Promedio - Grupal: <?php echo $promescue;?></label></div>
        </div>

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