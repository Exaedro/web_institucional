<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replica del Boceto</title>
    <link rel="stylesheet" href="css/especialidades.css">
</head>
<body>
    <div class="wrapper-inicio">
		<?php include_once("navbar.php"); ?>
        <div class="info">
        <p>Para inscribirte, haz clic <a href="inscrip.php">aquí</a></p>
    </div>

    <div class="container">
        <div class="tabs">
            <button id="electronica" class="tab active">Electrónica</button>
            <button id="programacion" class="tab">Programación</button>
        </div>

        <div class="content text-electronica">
            <div class="sidebar">
                <ul>
                    <li><a href="#" class="section-link" data-section="info-electronica">Información Básica</a></li>
                    <li><a href="#" class="section-link" data-section="objetivo-electronica">Objetivo</a></li>
                    <li><a href="#" class="section-link" data-section="materias-electronica">Materias</a></li>
                    <li><a href="#" class="section-link" data-section="bimodalidad-electronica">Bimodalidad</a></li>
                    <li><a href="#" class="section-link" data-section="perfil-electronica">Perfil Académico</a></li>
                    <li><a href="#" class="section-link" data-section="curricular-electronica">Diseño Curricular</a></li>
                    <li><a href="#" class="section-link" data-section="proyectos-electronica">Proyectos de la Especialidad</a></li>
                </ul>
            </div>

            <div id="Bloque" class="main-content">
                <div id="info-electronica" class="section-content">
                    <h2>Información Básica de Electrónica</h2>
                    <p>a</p>
                    <div class="image-container">
                        <img src="img.png" alt="Imagen de Electrónica">
                    </div>
                </div>

                <div id="objetivo-electronica" class="section-content hidden">
                    <h2>Objetivo de Electrónica</h2>
                    <p>El objetivo de la carrera de electrónica es formar profesionales capaces de diseñar, analizar, y mantener sistemas electrónicos avanzados.</p>
                    <div class="image-container">
                        <img src="img.png" alt="Imagen de Electrónica">
                    </div>
                </div>

                <div id="materias-electronica" class="section-content hidden">
                    <h2>Materias</h2>
                    <div class="Materias">
                            <div>
                                <h3>4to Año:</h3>
                                    <ul>
                                        <li>Educación Física</li>
                                        <li>Física</li>
                                        <li>Geografía</li>
                                        <li>Historia</li>
                                        <li>Inglés</li>
                                        <li>Laboratorio de Aplicaciones</li>
                                        <li>Laboratorio de Hardware</li>
                                        <li>Laboratorio de Programación</li>
                                        <li>Laboratorio de Sistemas operativos</li>
                                        <li>Literatura</li>
                                        <li>Matemática</li>
                                        <li>Química</li>
                                        <li>Salud y Adolescencia</li>
                                        <li>Tecnología Electrónica</li>
                                    </ul>
                            </div>
                            <div>
                                <h3>5to Año:</h3>
                                    <ul>
                                        <li>Bases de Datos</li>
                                        <li>Educación Física</li>
                                        <li>Geografía</li>
                                        <li>Historia</li>
                                        <li>Inglés</li>
                                        <li>Laboratorio de Aplicaciones</li>
                                        <li>Laboratorio de Hardware</li>
                                        <li>Laboratorio de Programación</li>
                                        <li>Laboratorio de Sistemas Operativos</li>
                                        <li>Literatura</li>
                                        <li>Matemática</li>
                                        <li>Química</li>
                                        <li>Salud y Adolescencia</li>
                                        <li>Tecnología Electrónica</li>
                                    </ul>
                            </div>
                            <div>
                                <h3>6to Año:</h3>
                                    <ul>
                                        <li>Arte (Bimodal)</li>
                                        <li>Derecho del Trabajo (Bimodal)</li>
                                        <li>Educación Física</li>
                                        <li>Filosofía (Bimodal)</li>
                                        <li>Inglés</li>
                                        <li>Laboratorio de Diseño Web Dinámico</li>
                                        <li>Laboratorio de Diseño Web Estático</li>
                                        <li>Laboratorio de Procesos Industriales</li>
                                        <li>Laboratorio de Programación</li>
                                        <li>Literatura</li>
                                        <li>Matemática Discreta</li>
                                        <li>Seguridad Informática (Parcialmente Bimodal)</li>
                                        <li>Sistema de Gestión y Autogestión (Bimodal)</li>
                                        <li>Sistemas Digitales II</li>
                                    </ul>
                            </div>
                            <div>
                                <h3>7mo Año:</h3>
                                    <ul>
                                        <li>Emprendimientos, Producción y Desarrollo Local (Bimodal)</li>
                                        <li>Evaluación de Proyectos</li>
                                        <li>Modelos y Sistemas II</li>
                                        <li>Organización y Métodos (Bimodal)</li>
                                        <li>Proyecto de Desarrollo de Software para Plataforma</li>
                                        <li>Proyecto de Implementación de Sitios Web Dinámicos</li>
                                        <li>Proyecto, Diseño e Implementación de Sistemas Comp</li>
                                    </ul>
                            </div>
                    </div>
                </div>

                <div id="bimodalidad-electronica" class="section-content hidden">
                    <h2>Bimodalidad</h2>
                    <p>La modalidad de estudios incluye clases presenciales y virtuales, con prácticas en laboratorios electrónicos.</p>
                    <div class="image-container">
                        <img src="img.png" alt="Bimodalidad Electrónica">
                    </div>
                </div>

                <div id="perfil-electronica" class="section-content hidden">
                    <h2>Perfil Académico</h2>
                    <p>El perfil académico de un ingeniero electrónico abarca conocimientos en diseño de hardware, programación de microcontroladores, y sistemas automatizados.</p>
                    <div class="image-container">
                        <img src="img.png" alt="Perfil Académico de Electrónica">
                    </div>
                </div>

                <div id="curricular-electronica" class="section-content hidden">
                    <h2>Diseño Curricular</h2>
                    <p>El diseño curricular se basa en competencias técnicas y prácticas en el campo de la electrónica.</p>
                    <div class="image-container">
                        <img src="img.png" alt="Diseño Curricular de Electrónica">
                    </div>
                </div>

                <div id="proyectos-electronica" class="section-content hidden">
                    <h2>Proyectos de la Especialidad</h2>
                    <p>Los estudiantes desarrollan proyectos de sistemas embebidos y dispositivos electrónicos innovadores.</p>
                    <div class="image-container">
                        <img src="img.png" alt="Proyectos de Electrónica">
                    </div>
                </div>
            </div>
        </div>

        <div class="content text-programacion hidden">
            <div class="sidebar">
                <ul>
                    <li><a href="#" class="section-link" data-section="info-programacion">Información Básica</a></li>
                    <li><a href="#" class="section-link" data-section="objetivo-programacion">Objetivo</a></li>
                    <li><a href="#" class="section-link" data-section="materias-programacion">Materias</a></li>
                    <li><a href="#" class="section-link" data-section="bimodalidad-programacion">Bimodalidad</a></li>
                    <li><a href="#" class="section-link" data-section="perfil-programacion">Perfil Académico</a></li>
                    <li><a href="#" class="section-link" data-section="curricular-programacion">Diseño Curricular</a></li>
                    <li><a href="#" class="section-link" data-section="proyectos-programacion">Proyectos de la Especialidad</a></li>
                </ul>
            </div>

            <div id="Bloque" class="main-content">
                <div id="info-programacion" class="section-content">
                    <h2>Información Básica de Programación</h2>
                    <p>a</p>
                    <div class="image-container">
                        <img src="img.png" alt="Imagen de Programación">
                    </div>
                </div>

                <div id="objetivo-programacion" class="section-content hidden">
                    <h2>Objetivo de Programación</h2>
                    <p>La carrera de programación se centra en el desarrollo de habilidades necesarias para crear software y aplicaciones informáticas. Los estudiantes aprenden a programar en diversos lenguajes, como JavaScript, Python, C++, entre otros. Se enfatiza la resolución de problemas, la lógica de programación y el diseño de algoritmos, lo que permite a los graduados abordar desafíos complejos de manera efectiva.</p>
                    <br>
                    <p>Al finalizar sus estudios, los graduados están capacitados para desempeñarse como programadores, desarrolladores de software y en otros roles relacionados dentro de la industria tecnológica. Además, adquieren una comprensión sólida de los principios fundamentales de la informática, lo que les permite adaptarse a las cambiantes necesidades del sector y continuar su desarrollo profesional a lo largo de sus carreras.</p>
                </div>

                <div id="materias-programacion" class="section-content hidden">
                    <h2>Materias</h2>
                    <div class="Materias">
                            <div>
                                <h3>4to Año:</h3>
                                    <ul>
                                        <li>Educación Física</li>
                                        <li>Física</li>
                                        <li>Geografía</li>
                                        <li>Historia</li>
                                        <li>Inglés</li>
                                        <li>Laboratorio de Aplicaciones</li>
                                        <li>Laboratorio de Hardware</li>
                                        <li>Laboratorio de Programación</li>
                                        <li>Laboratorio de Sistemas operativos</li>
                                        <li>Literatura</li>
                                        <li>Matemática</li>
                                        <li>Química</li>
                                        <li>Salud y Adolescencia</li>
                                        <li>Tecnología Electrónica</li>
                                    </ul>
                            </div>
                            <div>
                                <h3>5to Año:</h3>
                                    <ul>
                                        <li>Bases de Datos</li>
                                        <li>Educación Física</li>
                                        <li>Geografía</li>
                                        <li>Historia</li>
                                        <li>Inglés</li>
                                        <li>Laboratorio de Aplicaciones</li>
                                        <li>Laboratorio de Hardware</li>
                                        <li>Laboratorio de Programación</li>
                                        <li>Laboratorio de Sistemas Operativos</li>
                                        <li>Literatura</li>
                                        <li>Matemática</li>
                                        <li>Química</li>
                                        <li>Salud y Adolescencia</li>
                                        <li>Tecnología Electrónica</li>
                                    </ul>
                            </div>
                            <div>
                                <h3>6to Año:</h3>
                                    <ul>
                                        <li>Arte (Bimodal)</li>
                                        <li>Derecho del Trabajo (Bimodal)</li>
                                        <li>Educación Física</li>
                                        <li>Filosofía (Bimodal)</li>
                                        <li>Inglés</li>
                                        <li>Laboratorio de Diseño Web Dinámico</li>
                                        <li>Laboratorio de Diseño Web Estático</li>
                                        <li>Laboratorio de Procesos Industriales</li>
                                        <li>Laboratorio de Programación</li>
                                        <li>Literatura</li>
                                        <li>Matemática Discreta</li>
                                        <li>Seguridad Informática (Parcialmente Bimodal)</li>
                                        <li>Sistema de Gestión y Autogestión (Bimodal)</li>
                                        <li>Sistemas Digitales II</li>
                                    </ul>
                            </div>
                            <div>
                                <h3>7mo Año:</h3>
                                    <ul>
                                        <li>Emprendimientos, Producción y Desarrollo Local (Bimodal)</li>
                                        <li>Evaluación de Proyectos</li>
                                        <li>Modelos y Sistemas II</li>
                                        <li>Organización y Métodos (Bimodal)</li>
                                        <li>Proyecto de Desarrollo de Software para Plataforma</li>
                                        <li>Proyecto de Implementación de Sitios Web Dinámicos</li>
                                        <li>Proyecto, Diseño e Implementación de Sistemas Comp</li>
                                    </ul>
                            </div>
                    </div>
                </div>

                <div id="bimodalidad-programacion" class="section-content hidden">
                    <h2>Bimodalidad</h2>
                    <p>La bimodalidad en el contexto del diseño curricular se refiere a una metodología que combina dos modalidades de enseñanza: presencial y virtual. Este modelo busca proporcionar flexibilidad en el proceso educativo, permitiendo que los estudiantes puedan participar en actividades tanto de manera presencial en la institución educativa como a través de plataformas digitales.</p>
                    <br>
                    <h3>Funcionamiento de la Bimodalidad</h3>
                    <div class="Bimodalidad">
                        <ul>
                            <li>
                                <h4>Flexibilidad de Acceso:</h4>
                                <p>Los estudiantes pueden acceder a los contenidos y actividades educativas en persona o desde ubicaciones remotas, utilizando herramientas en línea.</p>
                            </li>
                            <li>
                                <h4>Complemento de Recursos:</h4>
                                <p>La educación presencial se complementa con recursos digitales, como plataformas de aprendizaje, donde se cargan materiales adicionales, guías de estudio y ejercicios.</p>
                            </li>
                            <li>
                                <h4>Adaptabilidad del Aprendizaje:</h4>
                                <p>Los estudiantes pueden avanzar a su propio ritmo en la modalidad virtual, revisando contenidos y reforzando temas según sus necesidades.</p>
                            </li>
                            <li>
                                <h4>Interacción en Doble Modalidad:</h4>
                                <p>Se mantiene la interacción entre estudiantes y docentes en ambas modalidades, utilizando foros, chats y sesiones en vivo para asegurar la comunicación y el soporte necesarios.</p>
                            </li>
                            <li>
                                <h4>Evaluación y Seguimiento:</h4>
                                <p>Las evaluaciones pueden realizarse en cualquiera de las modalidades, con herramientas que permiten a los docentes monitorear el progreso y ajustar el apoyo educativo.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="perfil-programacion" class="section-content hidden">
                    <h2>Perfil Académico</h2>
                    <p>El perfil académico de un programador abarca conocimientos en programación, resolución de problemas, y manejo de bases de datos.</p>
                </div>

                <div id="curricular-programacion" class="section-content hidden">
                    <h2>Diseño Curricular</h2>
                    <p>El diseño curricular se enfoca en el desarrollo de competencias en el ámbito de la programación y la ingeniería del software.</p>
                    <div class="image-container">
                        <img src="img.png" alt="Diseño Curricular de Programación">
                    </div>
                </div>

                <div id="proyectos-programacion" class="section-content hidden">
                    <h2>Proyectos de la Especialidad</h2>
                    <p>Los estudiantes desarrollan proyectos de software, aplicaciones móviles, y sitios web interactivos.</p>
                    <div class="image-container">
                        <img src="img.png" alt="Proyectos de Programación">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/especialidades.js"></script>
	</div>
</body>
</html>
