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
            info.innerHTML = "Adquirir habilidades en programación y electrónica es una inversión clave para el futuro. Estas competencias son esenciales en muchas industrias, desde la salud hasta el entretenimiento, y la demanda de profesionales en estas áreas sigue creciendo, lo que asegura oportunidades laborales atractivas y bien remuneradas. Más allá del ámbito laboral, aprender programación y electrónica desarrolla habilidades importantes como la creatividad y la resolución de problemas. Enfrentar desafíos técnicos potencia el pensamiento crítico y lógico, capacidades valiosas en cualquier campo."
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
            info.innerHTML = "3"  
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
            <div class="btn" id="3"> ¿Cuando abren?</div>
        </div>
        <div class="content-holder">
                <div class="content">
                <h1 id="title">¿POR QUÉ INSCRiBIRSE EN LA TÉCNICA?</h1>
                <p id="info">Adquirir habilidades en programación y electrónica es una inversión clave para el futuro. Estas competencias son esenciales en muchas industrias, desde la salud hasta el entretenimiento, y la demanda de profesionales en estas áreas sigue creciendo, lo que asegura oportunidades laborales atractivas y bien remuneradas. Más allá del ámbito laboral, aprender programación y electrónica desarrolla habilidades importantes como la creatividad y la resolución de problemas. Enfrentar desafíos técnicos potencia el pensamiento crítico y lógico, capacidades valiosas en cualquier campo.</p></div>
        </div>
    </main>
</body>
</html>