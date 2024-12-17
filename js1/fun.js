
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
    var enla1=document.querySelector("#enla1"),
        enla2=document.querySelector("#enla2"),
        enla3=document.querySelector("#enla3"),
        enla4=document.querySelector("#enla4"),
        enla5=document.querySelector("#enla5");

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
    enla4.addEventListener("click", function(){
        if (contador == 0){
            enlaces.className = ('enlaces dos');
            contador=1;
        }else{
            enlaces.classList.remove = ('dos');
            enlaces.className = ('enlaces uno');
            contador=0;
        }
    })
    enla5.addEventListener("click", function(){
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


    /* slider */
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const conteniti = document.querySelectorAll(".centenidito");
    let currentlin = 1;

    var sliderNav = function (manolo){
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        conteniti.forEach((contene) => {
            contene.classList.remove("active");
        });

        btns[manolo].classList.add("active");
        slides[manolo].classList.add("active");
        conteniti[manolo].classList.add("active");
    }

    btns.forEach((btn,i) => {
        btn.addEventListener("click", () =>{
            sliderNav(i);
        });
    });


    /* fin slider */


    // SCROLL TOP

    var btnTop = document.getElementById("btn-top");


    //DETECTAR EL SCROLL EN NUESTRA PAGINA WEB

    window.addEventListener("scroll", function(){
        var scroll = document.documentElement.scrollTop,
            fullSize = document.documentElement.offsetHeight,
            sizeVP = document.documentElement.clientHeight;

        if(scroll > 100){
            btnTop.classList.add("show");
        }else{
            btnTop.classList.remove("show");
        }
        
        //Modificar elemento cuando llegue a final de pagina

        if(fullSize == (scroll + sizeVP)) {
            btnTop.classList.add("scrollFinal");
        }else{
            btnTop.classList.remove("scrollFinal");
        }

    });

    //DETECTAMOS EVENTO CLICK EN EL BOTON

    btnTop.addEventListener("click", function(){
        window.scrollTo(0,0);
    })

    //formulario
    var formulario = document.getElementById("formulario");

    function validar(e) {
        var msj = document.getElementById("msj");
    
        if (msj.value == 0) {
            e.preventDefault();
            alert("Mensaje vacio, se requiere llenar el campo de mensaje para enviar la duda.")
        }
    }
    formulario.addEventListener("submit", validar);

    // fin formulario