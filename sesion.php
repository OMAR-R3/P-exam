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

        /*- login*/

        label{
            position: absolute;
            top: 5px;
            right: 5px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        .cer{
            color: rgb(0, 77, 186);
            width: 40px;
            height: 40px;
        }
        .contenido{
            margin: 50px auto;
            text-align: center;
        }

        /*login*/

        .contenido form input{
        display: block;
        margin: 15px auto;
        width: 70%;
        height: 30px;
        background-color: rgba(197, 197, 197, 0.6);
        border: 2px solid rgba(0, 0, 0, 0);
        padding: 0.5rem 1rem;
        outline: none;
        transition: all 0.5s;
        }

        .contenido form select{
        display: block;
        margin: 15px auto;
        width: 70%;
        height: 50px;
        background-color: rgba(197, 197, 197, 0.6);
        border: 2px solid rgba(0, 0, 0, 0);
        padding: 0.5rem 1rem;
        outline: none;
        transition: all 0.5s;
        cursor: pointer;
        }

        .contenido form input:focus ,select:focus{
        background-color: #fff;
        border: 2px solid rgba(30, 85, 250, 0.47);
        }

        .contenido form .envio{
        background: rgb(76, 192, 212);
        color: rgb(73, 73, 73);
        width: 60%;
        height: 35px;
        cursor: pointer;
        border-radius: 5px;
        transition: all 1s;
        }
        .contenido form .envio:hover{
        background: rgb(42, 205, 234);
        color: rgb(0, 0, 0);
        transform: scale(0.8);
        }

        .active{
        display: none;
        visibility: hidden;
        }

        .contenido .opciones{
        font-size: 13px;
        }

        .oplo{
        background-color: transparent;
        border-style: none;
        cursor: pointer;
        color: rgb(0, 8, 255);
        font-size: 13px;
        transition: all 0.5s;
        }

        .oplo:hover{
        background-color: transparent;
        border-style: none;
        cursor: pointer;
        color: rgb(255, 0, 0);
        transform: scale(1.1);
        }

        /*fin login*/

        .creado{
            color: blue;
            text-align: center;
        }

        .repe{
            color: red;
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
    var enla1=document.querySelector("#enla1");

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
    /* FIN MENUSITILLO */
</script>

    <section id="global">

        <!-- Cabecera -->
        <header>
            <div id="logo" style="width: 100%; height: 100%;">
                <h1>LOGIN - ALUMNOS</h1>
            </div>

            <div class="clearfix"></div>

        </header>

        <!-- Contenido -->
<div class="contenedor" id="contenedor">
    <div class="contenido">

        <div class="regis active" id="reg">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
                <h3>REGISTRARSE</h3>
                <input type="text" required placeholder="Nombre:" name="nombre" id="Nombre">
                <select placeholder="Grado:" name="grado" id="grado" required>
                    <option value="1">1 - Primer Semestre</option>
                    <option value="2">2 - Segundo Semestre</option>
                    <option value="3">3 - Tercer Semestre</option>
                    <option value="4">4 - Cuarto Semestre</option>
                    <option value="5">5 - Quinto Semestre</option>
                    <option value="6">6 - Sexto Semestre</option>
                </select>


                <input type="text" maxlength="1" required placeholder="Grupo:" name="grupo" id="grupo">

                <select name="turno" id="turno" placeholder="Turno" required>
                        <option value="Matutino"  style="color: black;"> Turno Matutino</option>
                        <option value="Vespertino"  style="color: black;">Turno Vespertino</option>
                </select>


                <input type="email" required placeholder="Correo:" name="correo" id="Correo">
                <input type="text" required placeholder="Crea un id de usuario:" name="usuario" id="Usuario">
                <input type="text" required placeholder="Crea una contraseña, con 10 caracteres" minlength="10" maxlength="10"  name="contra" id="Contraseña">
                <input class="envio" type="submit" name="enviando" value="Registrarse">
            </form>
            <p class="opciones">Si ya estas registrado <button class="oplo" id="btn_registro">Inicia Sesion.</button></p>
        </div>

        <div class="inicia" id="ini">
            <form action="formularioestilo.php"  method="post">
                <h3>INICIAR SESION</h3>
                <input type="text" required placeholder="Usuario:" name="login">
                <input type="password" required placeholder="Contraseña:"  minlength="10" maxlength="10" name="password">
                <input class="envio" type="submit" value="Iniciar Sesion" name="enviarsesion">
            </form>
            <p class="opciones">Crea una <button class="oplo" id="btn_sesion">Cuenta nueva.</button></p>
        </div>

    </div>
</div>


<?php

    if(isset($_POST["enviando"])){
        include("alta.php");
    }
?>


<script>
/*cambio de login */
var btn_registro=document.getElementById('btn_registro'); 
var btn_sesion=document.getElementById('btn_sesion'); 
var registro=document.getElementById('reg'); 
var sesion=document.getElementById('ini'); 


btn_registro.addEventListener('click',function(){
sesion.classList.remove("active");
registro.classList.add("active");
});

btn_sesion.addEventListener('click',function(){
sesion.classList.add("active");
registro.classList.remove("active");
});





/*fin cambio de login */

</script>

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