<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/inscrip.css">
    <title>Inscripciones</title>
    <script type="module">
        var porque = document.getElementById("1")
        var que = document.getElementById("2")
        var cuando = document.getElementById("3")

        var title = document.getElementById("title")
        var info = document.getElementById("info")

        porque.classList.add("active")   
        porque.addEventListener("click", textPorque)
        que.addEventListener("click", textQue)
        cuando.addEventListener("click", textCuando)


        function textPorque() {
            title.innerHTML = "¿POR QUÉ INSCRiBIRSE EN LA TÉCNICA?"    
            info.innerHTML = "¿Te gusta resolver problemas y crear soluciones innovadoras? En nuestra escuela, contamos con los recursos necesarios para que puedas expresar tu creatividad. Tendrás acceso a computadoras, netbooks y herramientas de trabajo. Desde el primer día, estarás trabajando en proyectos, desde la creación de un horno solar, un semáforo con leds y de forma más avanzada la producción de circuitos electrónicos simples hasta aplicaciones web complejas. Esta experiencia te permitirá desarrollar habilidades clave como el pensamiento crítico, la resolución de problemas y el trabajo en equipo, preparándote para los desafíos del mundo profesional."
            porque.classList.add("active")   
            que.classList.remove("active") 
            cuando.classList.remove("active")        
       
        }    
        function textQue() {
            title.innerHTML = "¿Qué hay que traer?"    
            info.innerHTML = "2" 
            porque.classList.remove("active")   
            que.classList.add("active") 
            cuando.classList.remove("active")              
        }  
        function textCuando() {
            title.innerHTML = "¿Cuándo se abren las inscripciones?"    
            info.innerHTML = "Las inscripciones se abren en el mes de Noviembre. Si le gustaria ver que proyectos fueron trabajados durante el año vengase a la Expotecnica de la escuela, en el cual, se muestran todos los proyectos de todos los cursos."  
            function changeImage(){ 
                const image = document.getElementById('myImage');
                image.src = './img/mes.png';
            }
            porque.classList.remove("active")   
            que.classList.remove("active") 
            cuando.classList.add("active")             
        }  
        </script>

</head>
<?php include_once("navbar.php"); ?>
<body>
    
    <main>
        <h1 class="ins-title">Incripciones 2025</h1>
        <div class="btn-holder">
            <div class="btn" id="1">¿Por qué inscribirse?</div>
            <div class="btn" id="2">¿Que traer?</div>
            <div class="btn" id="3" onclick="changeImage()"> ¿Cuando abren?</div>
        </div>
        <div class="content-holder">
                <div class="content">
                <h1 id="title">¿POR QUÉ INSCRiBIRSE EN LA TÉCNICA?</h1>
                <p id="info">¿Te gusta resolver problemas y crear soluciones innovadoras? En nuestra escuela, contamos con los recursos necesarios para que puedas expresar tu creatividad. Tendrás acceso a computadoras, netbooks y herramientas de trabajo. Desde el primer día, estarás trabajando en proyectos, desde la creación de un horno solar, un semáforo con leds y de forma más avanzada la producción de circuitos electrónicos simples hasta aplicaciones web complejas. Esta experiencia te permitirá desarrollar habilidades clave como el pensamiento crítico, la resolución de problemas y el trabajo en equipo, preparándote para los desafíos del mundo profesional.
                </p>
                <img id="myImage" src="" alt="">
            </div>
        </div>
    </main>
</body>
</html>