<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_nosotro.css">
    <title>Escuela de Educación Secundaria Nro1</title>
</head>

<body>
    <?php include_once("./navbar.php"); ?>

    <main id="sobre_nosotros">
        <div id="cont_img">
            <img id="img_prin" src="./img/tecnica.jpg" alt="">
            <div class="cont_text_img">
                <h3 class="tit_item"></h3>
                <span class="text"></span>
            </div>
        </div>
        <div id="cont_text">
            <h2>Quienes somos?</h2>
            <ul id="cont_items">
                <li class="item focus" data-index="0">Historia de la Escuela</li>
                <li class="item" data-index="1">Fundación y Crecimiento</li>
                <li class="item" data-index="2">Valores de la escuela</li>
                <li class="item" data-index="3">Actualidad</li>
                <li class="item" data-index="4">Personal y Asociación Cooperadora</li>
                <li class="item" data-index="5">Código de Conducta</li>
            </ul>
        </div>
    </main>

    <script>
        const text_img = [
            "El edificio se construyó sobre los terrenos donados por la Sra. Elisa Schulze de Ader y Ana Elisa Ader de Grümbaum, esposa e hija de don Bernardo Ader, ya fallecido, y que fueron aceptados por la Municipalidad mediante la Ordenanza N°644 del año 1934.",
            "La idea de la construcción de una escuela industrial surgió del integrante del Club de Leones, Ceferino Fernández, al comprobar la necesidad de un establecimiento de este tipo en la zona de Villa Adelina. Así, a fines del año 1983, el Club de Leones de Villa Adelina hizo entrega de la escuela a las autoridades Municipales. La escuela abrió sus puertas el 16 de abril de 1984 en un predio de 800 m², con un total de 72 alumnos.",
            'La escuela de Educación Técnica N°1 "Eduardo Ader" sostiene como ideario la formación en valores, el crecimiento como ciudadanos y, a partir de esa base, acompañar a los alumnos para que logren construir un proyecto de vida personal y profesional.',
            "Con el correr de los años, la escuela fue creciendo y, en la actualidad, la matrícula es aproximadamente de 700 alumnos que cursan en turno mañana, tarde y noche, distribuidos en catorce divisiones de ciclo básico y once divisiones de ciclo superior secundario. La escuela cuenta, hoy en día, con 20 aulas, de las cuales 9 son para realizar los talleres y las materias de laboratorio.",
            "La Asociación Cooperadora, que funciona desde la fundación de la escuela, ha sido de gran ayuda para el mantenimiento edilicio y la provisión de todos los insumos necesarios. El director de la escuela es el Lic. Omar Brandan y los vicedirectores son los Prof. Ezequiel Torres y Prof. Daniel Segnini.",
            "El Código de Conducta de la escuela define las normas y expectativas para los estudiantes en cuanto al comportamiento, respeto y cumplimiento de las reglas dentro y fuera del establecimiento."
        ];

        const titulos_Imgs = [
            "Historia de la Escuela",
            "Fundación y Crecimiento",
            "Valores de la escuela",
            "Actualidad",
            "Personal y Asociación Cooperadora",
            "Código de Conducta"
        ];
        const img_srcs = [
            "./img/historia.jpg", 
            "./img/fundacion.jpg",
            "./img/valores.jpg",  
            "./img/actualidad.jpg", 
            "./img/personal.jpg",   
            "./img/codigo.jpg"     
        ];
        const items = document.querySelectorAll(".item");
        const text_dom = document.querySelector(".text");
        const tit_item = document.querySelector(".tit_item");
        const img_prin = document.getElementById("img_prin");
        // Función para actualizar el texto y el título
        function elegir_text(index) {
            text_dom.textContent = text_img[index];
            tit_item.textContent = titulos_Imgs[index];
            //img_prin.src = img_srcs[index];
            img_prin.src = "./img/tecnica.jpg"
        }

        // Agregar el evento click a cada item
        items.forEach((item, index) => {
            item.addEventListener("click", () => {
                // Eliminar  clase 'focus' de todos los items
                items.forEach(i => i.classList.remove("focus"));
                // Agregar la clase 'focus' al item del click
                item.classList.add("focus");
                // Llamar a la función para actualizar el texto y título
                elegir_text(index);
            });
        });

        elegir_text(0);
    </script>
</body>

</html>
