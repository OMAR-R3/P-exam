
<?php

if(isset($_POST["profe"])){
    include("veri_contra.php");
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto - Examen</title>
    <link rel="stylesheet" href="css1/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
            *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background: #513d98;
        font-size: 16px;
    }

     /*alumnos */
     .box-alumno{
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .box-alumno form{
            padding: 20px 0;
            width: 100%;
        }

        .box-alumno form .envio{
        background: rgb(76, 192, 212);
        color: rgb(73, 73, 73);
        width: 30%;
        height: 35px;
        cursor: pointer;
        border-radius: 5px;
        transition: all 1s;
        transform: scale(1.3);
        }
        .box-alumno form .envio:hover{
        background: rgb(42, 205, 234);
        color: rgb(0, 0, 0);
        transform: scale(1.1);
        }

        .box-alumno form input{
        display: block;
        margin: 0 auto;
        width: 70%;
        height: 30px;
        background-color: rgba(197, 197, 197, 0.6);
        border: 2px solid rgba(0, 0, 0, 0);
        padding: 0.5rem 1rem;
        outline: none;
        transition: all 0.5s;
        }

        /*profes */
        .box-prof{
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .box-prof form{
            padding: 20px 0;
            width: 100%;
        }
        .box-prof form input{
            margin: 10px 0;
        }

        .box-prof form .envio{
        background: rgb(76, 192, 212);
        color: rgb(73, 73, 73);
        width: 30%;
        height: 35px;
        cursor: pointer;
        border-radius: 5px;
        transition: all 1s;
        }
        .box-prof form .envio:hover{
        background: rgb(42, 205, 234);
        color: rgb(0, 0, 0);
        transform: scale(1.1);
        }

        .box-prof form input{
        display: block;
        margin: 5px auto;
        width: 70%;
        height: 30px;
        background-color: rgba(197, 197, 197, 0.6);
        border: 2px solid rgba(0, 0, 0, 0);
        padding: 0.5rem 1rem;
        outline: none;
        transition: all 0.5s;
        text-align: center;
        transform: scale(1.3);
        }


    /* MENUSITILLO */

    header{
        background: url(../img/feli.jpg);
        width: 100%;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 999;
    }
    header nav{
        height: 75px;
        background: #4d4d4d24;
        display: flex;
        justify-content: flex-start;
        width: 100%;
        z-index: 999;
        border-top: 2px solid rgb(92, 92, 92);
        border-bottom: 1px solid rgb(130, 130, 130);
        
    }
    .icono{
        display: none;
    }
    .enlaces{
        display: flex;
        height: 100%;
        width: 40%;
        justify-content: space-around;
        align-items: center;
    }
    .enlaces .enla{
        border-top: 1px solid transparent;
        border-bottom: 1px solid transparent;
        padding: 10px 0;
        transition: all 0.7s ease-out;
        color: #fff;
        text-decoration: none;
        margin: 0 10px;
    }
    .enlaces .enla:hover{
        border-top: 1px solid rgb(255, 255, 255);
        border-bottom: 1px solid rgb(255, 255, 255);
    }

    nav .logo{
        height: 100%;
        /*background: #fff;*/
        border-radius: 50%;
        margin-left: 40px;
    }

    nav .logo img{
        object-fit: cover;
        height: inherit;
        padding: 1px;
        margin: 0 10px;
    }


    .tilog{
        display: flex;
        align-items: center;
        color: #fff;
        left: 0;
        font-size: 27px;
    }
    .btn-secondary{
        --bs-btn-bg: transparent !important;
    }
    .dropdown-item {
        color: #000 !important;
        transition: all 0.5s !important;
    }
    /* FIN MENUSITILLO */


    /* slider */
    section{
        padding: 100px 100px;
    }

    .homelin{
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
        background: rgb(127, 127, 255);
    }
    .homelin:before{
        z-index: 777;
        content: '';
        position: absolute;
        background: rgba(175, 189, 214, 0.188);
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
    .homelin .centenidito{
        z-index: 888;
        color: #fff;
        width: 70%;
        margin-top: 50px;
        display: none;
    }
    .homelin .centenidito.active{
        display: block;
    }
    .homelin .centenidito h1{
        font-size: 3em;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 5px;
        line-height: 75px;
        margin-bottom: 40px;
    }

    .homelin .centenidito p{
        margin-bottom: 50px;
    }
    .homelin .centenidito a{
        background: #fff;
        padding: 10px 30px;
        color: rgb(91, 91, 255);
        font-size: 1.1em;
        font-weight: 500;
        text-decoration: none;
        border-radius: 15px;
        transition: all 0.5s ease;
    }
    .homelin .centenidito a:hover{
        padding: 10px 35px;
        background: rgb(224, 224, 224);
    }
    .homelin .media-icons{
        z-index: 888;
        position: absolute;
        right: 30px;
        display: flex;
        flex-direction: column;
        transition: all 0.5s ease;
    }
    .homelin .media-icons a{
        color: #fff;
        font-size: 1.6em;
        text-decoration: none;
        transition: all 0.5s ease;
    }
    .homelin .media-icons a:not(:last-child){
        margin-bottom: 20px;
    }
    .homelin .media-icons a:hover{
        transform: scale(1.3);
    }

    .homelin video{
        z-index: 000;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }



    

    /* especialidades */

    .contenidoter h2{
        font-size: 22px;
    }
    .mens{
        display: flex;
        justify-content: center;
        align-items: center;
        background: #ffffff;
    }
    .contenidoter{
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        padding: 30px;
    }
    .contenidoter .tarje{
        position: relative;
        max-width: 300px;
        height: 215px;
        background: #fff;
        margin: 30px 10px;
        padding: 20px 15px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        transition: all 0.5s ease-in-out;
    }
    .contenidoter .tarje:hover{
        height: 420px;
    }
    .contenidoter .tarje .tarjeimg{
        position: relative;
        width: 260px;
        /*height: 260px;*/
        top: -60px;
        left: 8px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }
    .contenidoter .tarje .tarjeimg img{
        max-width: 100%;
        max-height: 100%;
        border-radius: 4px;
    }
    .contenidoter .tarje .textin{
        position: relative;
        margin-top: -140px;
        padding: 10px 0px;
        text-align: center;
        color: #111;
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s ease-in-out;
    }
    .contenidoter .tarje:hover .textin{
        visibility: visible;
        opacity: 1;
        margin-top: -40px;
        transition-delay: 0.3s;
    }



    /*  anima-burbi */

    .burbi-amimedin{
        width: 100%;
        background: #fff;
        position: relative;
        overflow: hidden;
    }
    .burbuja{
        border-radius: 50%;

        opacity: .3;

        position: absolute;
        bottom: -150;
        
        animation: burbujas 3s linear infinite ;
    }
    .burbuja1{
        background: rgb(75, 100, 243);
    }
    .burbuja2{
        background: rgb(255, 255, 255);
    }

    .burbuja:nth-child(1){
        width: 80px;
        height: 80px;
        left: 5%;
        animation-duration: 3s;
        animation-delay: 1s;
    }

    .burbuja:nth-child(2){
        width: 100px;
        height: 100px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 1.2s;
    }

    .burbuja:nth-child(3){
        width: 20px;
        height: 20px;
        left: 15%;
        animation-duration: 1.5s;
        animation-delay: 1.3s;
    }

    .burbuja:nth-child(4){
        width: 50px;
        height: 50px;
        left: 90%;
        animation-duration: 6s;
        animation-delay: 1.4s;
    }

    .burbuja:nth-child(5){
        width: 70px;
        height: 70px;
        left: 65%;
        animation-duration: 3s;
        animation-delay: 1.5s;
    }

    .burbuja:nth-child(6){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 0.5s;
    }

    .burbuja:nth-child(7){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 0.9s;
    }

    .burbuja:nth-child(8){
        width: 100px;
        height: 100px;
        left: 52%;
        animation-duration: 5s;
        animation-delay: 1.3s;
    }

    .burbuja:nth-child(9){
        width: 65px;
        height: 65px;
        left: 51%;
        animation-duration: 3s;
        animation-delay: 1.3s;
    }

    .burbuja:nth-child(10){
        width: 40px;
        height: 40px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 1.2s;
    }


    @keyframes burbujas{
        0%{
            bottom: 0;
            opacity: 0;
        }
        30%{
            transform: translateX(30px);
        }
        50%{
            opacity: .4;
        }
        100%{
            bottom: 100%;
            opacity: 0;
        }
    }
    /* fin anima-burbi */
    /* fin especialidades */

    /* fin contactinili */

    /* futerino */

    .lol{
        width: 100%;
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
    }

    footer{
        position: relative;
        width: 100%;
        background: #3f48cc;
        min-height: 100px;
        padding: 20px 58px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 150px;
    }
    .conetnidofooterino{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: auto;
    }
    
    .cajifooterini{
        display: flex;
        flex-direction: column;
        padding: 40px;
    }
    
    .cajifooterini .logolini img{
        width: 180px;
    }
    
    
    .cajifooterini h2{
        margin-bottom: 10px;
        color: #ffffff;
        font-weight: 700;
        /*text-align: center;*/
        font-size: 25px;
    }
    
    .cajifooterini a{
        margin-top: 10px;
        color: #ffffff;
        font-weight: 600;
        text-decoration: none;
        font-size: 15px;
        /*text-align: center;*/
        transition: all 0.3s;
    }
    
    .cajifooterini a:hover{
        opacity: 0.5;
        transform: scale(1.1);
        color: #fff;
    }
    
    .cajifooterini a .fab{
        font-size: 20px;
    }
    .cajifooterini a i{
        margin-right: 5px;
    }
    
    .nocopie{
        max-width: 1200px;
        margin: auto;
        text-align: center;
        padding: 0px 40px;
    }
    
    .nocopie p{
        margin-top: 20px;
        color: #ffffff;
    }
    
    .nocopie hr{
        border: none;
        height: 1px;
        background-color: #ffffff;
    }
    footer .girito{
        position: absolute;
        top: -100px;
        left: 0;
        width: 100%;
        height: 100px;
        background: url(img/wave.png);
        background-size: 1000px 100px;
    }
    footer .girito#vueltita1{
        z-index: 1000;
        opacity: 1;
        bottom: 0;
        animation: tonanimation 4s linear infinite;
    
    }
    footer .girito#vueltita2{
        z-index: 999;
        opacity: 0.5;
        bottom: 10px;
        animation: tonanimation_2 4s linear infinite;
    
    }
    footer .girito#vueltita3{
        z-index: 1000;
        opacity: 0.2;
        bottom: 15px;
        animation: tonanimation 3s linear infinite;
    
    }
    footer .girito#vueltita4{
        z-index: 999;
        opacity: 0.7;
        bottom: 20px;
        animation: tonanimation_2 3s linear infinite;
    
    }
    @keyframes tonanimation{
        0%{
            background-position-x: 1000px;
        }
        100%{
            background-position-x: 0px;
        }
    }
    @keyframes tonanimation_2{
        0%{
            background-position-x: 0px;
        }
        100%{
            background-position-x: 1000px;
        }
    }
    @keyframes tonanimation_3{
        0%{
            background-position-x: 1000px;
        }
        100%{
            background-position-x: 0px;
        }
    }
    @keyframes tonanimation_4{
        0%{
            background-position-x: 0px;
        }
        100%{
            background-position-x: 1000px;
        }
    }
    
    @media screen and (max-width: 1150px) {
        .cajifooterini{
            padding: 20px;
        }
    }
    @media screen and (max-width: 700px) {
        .cajifooterini{
            padding: 0px;
        }
    }

    /* fin futerino */
    @media screen and (max-width:1090px){
        /* MENUSITILLO */
        .enlaces{

            width: 55%;

        }
        /* FIN MENUSITILLO */
    }

    @media screen and (max-width: 1040px){
        /* slider */
        section{
            padding: 100px 50px;
        }
        .homelin .media-icons{
            right: 15px;
        }
        /* fin slider */
        .textos h1{
            font-size: 40px;
        }
        .textos2 h1{
            font-size: 40px;
        }
        .contenelo img{
            width: 380px;
        }
        .contenelo2 img{
            width: 380px;
        }
    }
    @media screen and (max-width: 991px){
        .tacos{
            grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));
            grid-template-rows: minmax(auto, auto);
        }  
        .tacos .tortilla{
            grid-column: unset !important;
            grid-row: unset !important;
        }    
    }

    @media screen and (max-width: 950px){

        .bolillo{
            width: 200px;/*pal responsive*/
            height: 200px;/*pal responsive*/
        }
        
        
        .bolillo span{
            transform: rotateY(calc(var(--i) * 45deg)) translateZ(300px);/*pal responsive*/
        }
    }

    @media screen and (max-width:885px){
        /* MENUSITILLO */
        .enlaces{

            width: 65%;

        }
        /* FIN MENUSITILLO */
    }


    @media screen and (max-width:850px){
        /* MENUSITILLO */
        .icono{
            display: flex;
            justify-content: center;
            height: 70px;
            align-items: center;
            color: #fff;
            background: transparent;
            padding: 20px;
            z-index: 100;
            cursor: pointer;
            margin-right: 10px;
        }
        header .textos h1{
            font-size: 70px;
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
    }

    @media screen and (max-width: 500px){
            /*Boton de ir arriba*/
            #btn-top{
                display: none;
            }
        /* slider */
        section{
            padding: 100px 20px;
        }
        .homelin .centenidito h1{
            font-size: 2em;
            margin-bottom: 15px;
        }
        .homelin .centenidito p{
            margin-bottom: 40px;
            font-size: 15px;
        }
        .homelin .centenidito{
            margin-top: 20px;
        }
        /* fin slider */
        .caja-comentario{
            padding: 20px 15px;
        }
        .la2 {
            padding: 25px 15px;
        }

    }


    @media screen and (max-width:400px){
        /* MENUSITILLO */
        nav .logo{
            margin-left: 20px;
        }
        .icono{
            margin-right: 20px;
        }
        header .textos h1{
            font-size: 65px;
        }
        .tilog{
            font-size: 23px;
        }
        /* FIN MENUSITILLO */
    }

    </style>
</head>
<body>
        
        <!-- MENUSITILIOL -->
    <header id="ilili">
        <nav>
            <div class="logo">
                <img src="img/1.png">
            </div>
            <h1 class="tilog">EXAMEN</h1>
            
        </nav>


    </header>

        <!-- slidercitocito -->
    
        <section class="homelin burbi-amimedin">

            <video class="video-slide active" src="video/5.mp4" autoplay muted loop></video>


            <div class="centenidito active">
                <h1>VAMOS A COMENZAR</h1>
                <p>Este es un examen de 20 preguntas que desbes contestar elgigiendo la opcion (respuestas) correctas, antes de ello debes registrarte con tus datos y
                    despues iniciar sesion para poder acceder al examen y que tus respuestas se guarden para que despues seas evaluado.
                </p>
                <a href="#sobre">Comenzemos</a>
            </div>

    
            <div class="media-icons">
                <a href="#" ><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#" ><ion-icon name="logo-twitter"></ion-icon></a>
            </div>

            <div class="burbujas">
                <div class="burbuja burbuja2"></div>
                <div class="burbuja burbuja2"></div>
                <div class="burbuja burbuja2"></div>
                <div class="burbuja burbuja2"></div>
                <div class="burbuja burbuja2"></div>
                <div class="burbuja burbuja2"></div>
                <div class="burbuja burbuja2"></div>
                <div class="burbuja burbuja2"></div>
                <div class="burbuja burbuja2"></div>
                <div class="burbuja burbuja2"></div>
            </div>
        </section>

        <!-- article -->
        <div class="contenelo" id="sobre">
            <div class="contenidin">
                <div class="textos">
                    <div class="box-alumno">
                        <form action="sesion.php" method="post">
                        <input type="submit" value="Alumnos" name="alum"  class="envio">
                        </form>
                    </div>
                    <hr>
                        <!--profesor-->
                    <div class="box-prof">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="password" maxlength="10" placeholder="Ingresa la contraseña para docentes:" name="contraprof">
                        <br>
                        <input type="submit" value="Docentes" name="profe" class="envio">
                        </form>
                    </div>
                </div>
                <div class="imagenli">
                    <img src="img/0.png" alt="">
                </div>
            </div>
            <div class="absolute"></div>
        </div>

        <!-- footeriniin -->

        <div class="lol">
            <footer id="footer">
                <div class="giritos">
                    <div class="girito" id="vueltita1"></div>
                    <div class="girito" id="vueltita2"></div>
                    <div class="girito" id="vueltita3"></div>
                    <div class="girito" id="vueltita4"></div>
                </div>
        
                <div class="nocopie">
                    <hr>
                    <p>Todos los derechos reservados © 2022 <b>a mi osea yo</b></p>
                </div>
        
            </footer></div>

        <!-- fin footeriniin -->


    <!-- JavaScript Bundle with Popper -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js1/fun.js"></script>
</body>
</html>