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
            background: url("https://imgs.search.brave.com/2W2VxQ_rnWhfHcEH3yl-yOt3IC28Y1zQWo-O3T_ZHgI/rs:fit:626:417:1/g:ce/aHR0cHM6Ly9pbWFn/ZS5mcmVlcGlrLmNv/bS92ZWN0b3ItZ3Jh/dGlzL2ZvbmRvLW1h/dGVtYXRpY2FzXzIz/LTIxNDgxNDY5NDEu/anBn");
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
        height: 75px;
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
        justify-content: space-around;
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
            height: 70px;
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
            document.body.style.backgroundImage = "url('https://imgs.search.brave.com/2W2VxQ_rnWhfHcEH3yl-yOt3IC28Y1zQWo-O3T_ZHgI/rs:fit:626:417:1/g:ce/aHR0cHM6Ly9pbWFn/ZS5mcmVlcGlrLmNv/bS92ZWN0b3ItZ3Jh/dGlzL2ZvbmRvLW1h/dGVtYXRpY2FzXzIz/LTIxNDgxNDY5NDEu/anBn')";
        });

        verde.addEventListener('click',function(){
            document.body.style.backgroundImage = "url('https://imgs.search.brave.com/CNyi8ZM8H_OB9fDUasWyLp1rWVI6BJFsiChOqBOb4jw/rs:fit:800:800:1/g:ce/aHR0cHM6Ly90aHVt/YnMuZHJlYW1zdGlt/ZS5jb20vYi9mb25k/by1pbmNvbnMlQzMl/QkF0aWwtZGVsLW1v/ZGVsby1kZS1sYS1l/ZHVjYWNpJUMzJUIz/bi1tYXRlbSVDMyVB/MXRpY2EtNzQ5MzQ0/MjMuanBn')";
        });

        azul.addEventListener('click',function(){
            document.body.style.backgroundImage = "url('https://imgs.search.brave.com/1dha0B86cOOaPVqPZb-enausId22PiPYKeS5WULB_yw/rs:fit:1024:1024:1/g:ce/aHR0cHM6Ly9zdDIu/ZGVwb3NpdHBob3Rv/cy5jb20vMzU4MDcx/OS8xMTc3OS92Lzk1/MC9kZXBvc2l0cGhv/dG9zXzExNzc5NTQ4/Mi1zdG9jay1pbGx1/c3RyYXRpb24tc2Vh/bWxlc3MtYmFja2dy/b3VuZC13aXRoLXNp/bXBsZS1pY29ucy5q/cGc')";
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
            <div id="logo" style="width: 100%; height: 100%;">
                <h1>Consulta alumnos</h1>
            </div>

            <div class="clearfix"></div>

        </header>

        <!-- Contenido -->
        <h1>Consulte por mail</h1>
        <form action="consulta.php" method="post">
            Ingrese el mail del alumno a consultar:
            <input type="text" name="correo" required placeholder="---@gmail.com">
            <br>
            <input type="submit" value="buscar">
        </form>

        <footer>
            Derechos Reservados &copy;

            <a href="#" class="subir">Ir arriba</a>
        </footer>
    </section>
    
</body>
</html>