<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replica del Boceto</title>
    <link rel="stylesheet" href="css/especialidades.css?v=1.0">
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
                    <p>La carrera de Técnico en Electrónica, a nivel secundario, tiene como propósito formar profesionales capaces de adaptarse a cambios tecnológicos en un entorno laboral dinámico. El programa ofrece una sólida base en la teoría y la práctica de sistemas electrónicos, cubriendo desde fundamentos en circuitos hasta aplicaciones avanzadas en telecomunicaciones, electrónica industrial y control automático.</p>
                    <br>
                    <p>El estudiante adquiere competencias en el diseño, montaje, operación y mantenimiento de sistemas electrónicos tanto analógicos como digitales. Al finalizar sus estudios, estará calificado para desempeñarse en diversos sectores, como telecomunicaciones, energía, empresas industriales, y laboratorios de reparación y mantenimiento de equipos electrónicos.</p>
                </div>

                <div id="objetivo-electronica" class="section-content hidden">
                    <h2>Objetivo de Electrónica</h2>
                    <p>La carrera de Técnico en Electrónica tiene como objetivo formar egresados con habilidades prácticas y teóricas para diseñar, analizar, instalar y mantener sistemas electrónicos que respondan a las demandas de la industria moderna. El enfoque está en la resolución de problemas técnicos y la innovación en tecnologías aplicadas en telecomunicaciones, sistemas de control y electrónica industrial.</p>
                    <br>
                    <p>Además, se busca que los estudiantes desarrollen una conciencia ética y ambiental, así como competencias para emprender proyectos tecnológicos, adaptarse a nuevos desafíos y trabajar en equipos multidisciplinarios.</p>
                </div>

                <div id="materias-electronica" class="section-content hidden">
                    <h2>Materias de Ciclo Superior</h2>
                    <div class="Materias">
                        <div>
                            <h3>4to Año:</h3>
                            <ul>
                                <li>Aplicaciones de electronica analogica</li>
                                <li>Aplicaciones de electrónica digital</li>
                                <li>Educación física</li>
                                <li>Fundamentos de los modelos circuitales</li>
                                <li>Física</li>
                                <li>Geografía</li>
                                <li>Historia</li>
                                <li>Inglés</li>
                                <li>Literatura</li>
                                <li>Matemática</li>
                                <li>Montaje de proyectos electrónicos</li>
                                <li>Química</li>
                                <li>Salud y adolescencia</li>
                                <li>Tecnología electrónica</li>
                            </ul>
                        </div>
                        <div>
                            <h3>5to Año:</h3>
                            <ul>
                                <li>Aplicaciones de electronica analogica</li>
                                <li>Aplicaciones de electrónica digital</li>
                                <li>Diseños asistidos y simulación electrónica</li>
                                <li>Educación física</li>
                                <li>Geografía</li>
                                <li>Historia (Bimodal)</li>
                                <li>Inglés</li>
                                <li>Lenguajes electrónicos</li>
                                <li>Literatura</li>
                                <li>Matemática</li>
                                <li>Montaje de proyectos electrónicos</li>
                                <li>Análisis de los modelos circuitales</li>
                                <li>Politica y ciudadania (Bimodal)</li>
                            </ul>
                        </div>
                        <div>
                            <h3>6to Año:</h3>
                            <ul>
                                <li>Aplicaciones de electronica analogica</li>
                                <li>Aplicaciones de electrónica digital</li>
                                <li>Arte (Bimodal)</li>
                                <li>Derecho del trabajo (Bimodal)</li>
                                <li>Educación física</li>
                                <li>Filosofía (Bimodal)</li>
                                <li>Inglés</li>
                                <li>Instalaciones industriales</li>
                                <li>Lenguajes electrónicos</li>
                                <li>Literatura (Bimodal)</li>
                                <li>Matemática aplicada</li>
                                <li>Montaje de proyectos electrónicos</li>
                                <li>Sistemas de Comunicaciones</li>
                                <li>Sistemas Productivos (Bimodal)</li>
                            </ul>
                        </div>
                        <div>
                            <h3>7mo Año:</h3>
                            <ul>
                                <li>- Emprendimientos, productivos y desarrollo Local (Bimodal)</li>
                                <li>Instalaciones industriales</li>
                                <li>Proyecto y diseño electrónico</li>
                                <li>Sistemas de Comunicaciones</li>
                                <li>Sistemas de control</li>
                                <li>Practicas Profesionalizantes</li>
                                <li>Seguridad, Higiene y Protección ambiental (Bimodal)</li>
                                <li>Electrónica aplicada.</li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <p class="LinkProyectos">Para ver los horarios de Ciclo Superior, haga clic <a href="https://docs.google.com/spreadsheets/d/1AFgWqZLsRZDaatKxRZh1GZzBkg34PU5N/edit?usp=sharing&ouid=104523949302020779981&rtpof=true&sd=true">aquí</a>.</p>
                    <br>
                </div>

                <div id="bimodalidad-electronica" class="section-content hidden">
                <h2>Bimodalidad</h2>
                    <p>La bimodalidad en el diseño curricular combina enseñanza presencial y virtual, ofreciendo flexibilidad para que los estudiantes participen tanto en persona como en línea. Este modelo permite acceso remoto a contenidos, complementa la educación presencial con recursos digitales, y facilita el aprendizaje a ritmo propio en la modalidad virtual. Además, promueve la interacción continua entre estudiantes y docentes y permite evaluaciones y seguimiento en ambas modalidades.</p>
                    <br>
                    <img src="img/Bimodalidad.webp">
                </div>

                <div id="perfil-electronica" class="section-content hidden">
                    <h2>Perfil Académico de Electrónica</h2>
                    <p>El título de Técnico en Electrónica habilita a los egresados para proyectar y diseñar componentes electrónicos, realizar ensayos y mediciones, realizar mantenimiento, montar e instalar equipos, seleccionar y comercializar productos, y desarrollar emprendimientos relacionados con la electrónica.</p>
                    <br>
                    <p>Estos profesionales pueden desempeñarse en diversos ámbitos como la electrónica industrial, telecomunicaciones, instrumentación electrónica e informática.</p>
                </div>


                <div id="curricular-electronica" class="section-content hidden">
                    <h2>Diseño Curricular de Electrónica</h2>
                    <p>La formación del Técnico en Electrónica abarca áreas como matemática, física, química, tecnología y economía, junto con conocimientos específicos en electrónica como el uso de materiales y herramientas, montaje de circuitos, dispositivos electrónicos, máquinas e instalaciones eléctricas, instrumentación, control electrónico, sistemas de telecomunicaciones y electrónica industrial.<p>
                    <p>Además, incluye prácticas profesionalizantes que permiten aplicar los conocimientos teóricos en entornos reales.</p>
                    <br>
                    <p>La carga horaria mínima total de la carrera es de 6480 horas, distribuidas en formación general, científico-tecnológica (1700 horas), técnica específica (2000 horas) y prácticas profesionalizantes (mínimo 200 horas).</p>
                </div>

                <div id="proyectos-electronica" class="section-content hidden">
                    <h2>Proyectos de la Especialidad</h2>
                    <p>Presentamos los proyectos de los alumnos de 7mo año, de las carreras programación y electrónica. Estos proyectos son el resultado de su aprendizaje y creatividad, mostrando cómo aplican sus conocimientos para resolver problemas reales. Cada uno de ellos refleja el esfuerzo y la pasión de los estudiantes, y queremos de compartir sus logros y contribuciones a la comunidad.</p>
                    <br>
                    <p class="LinkProyectos">Para ver los proyectos de 7mo, haga clic <a href="https://drive.google.com/drive/folders/1LVf-bgoH9n6DCn356pVyjmbVRcr_9bIu?usp=sharing">aquí</a>.</p>
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
                    <p>La carrera de programación se centra en desarrollar las habilidades necesarias para crear software y aplicaciones informáticas. Los estudiantes aprenden a programar en diversos lenguajes como JavaScript, Python y C++, con énfasis en la resolución de problemas, la lógica de programación y el diseño de algoritmos. Al finalizar sus estudios, los graduados están capacitados para desempeñarse como programadores, desarrolladores de software y en otros roles relacionados dentro de la industria tecnológica. Además, adquieren una sólida comprensión de los principios fundamentales de la informática, lo que les permite adaptarse a las cambiantes necesidades del sector y continuar su desarrollo profesional a lo largo de sus carreras.</p>
                </div>

                <div id="objetivo-programacion" class="section-content hidden">
                    <h2>Objetivo de Programación</h2>
                    <p>La carrera de programación se centra en el desarrollo de habilidades necesarias para crear software y aplicaciones informáticas. Los estudiantes aprenden a programar en diversos lenguajes, como JavaScript, Python, C++, entre otros. Se enfatiza la resolución de problemas, la lógica de programación y el diseño de algoritmos, lo que permite a los graduados abordar desafíos complejos de manera efectiva.</p>
                    <br>
                    <p>Al finalizar sus estudios, los graduados están capacitados para desempeñarse como programadores, desarrolladores de software y en otros roles relacionados dentro de la industria tecnológica. Además, adquieren una comprensión sólida de los principios fundamentales de la informática, lo que les permite adaptarse a las cambiantes necesidades del sector y continuar su desarrollo profesional a lo largo de sus carreras.</p>
                </div>

                <div id="materias-programacion" class="section-content hidden">
                    <h2>Materias de Ciclo Superior</h2>
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
                    <br>
                    <p class="LinkProyectos">Para ver los horarios de Ciclo Superior, haga clic <a href="https://docs.google.com/spreadsheets/d/1AFgWqZLsRZDaatKxRZh1GZzBkg34PU5N/edit?usp=sharing&ouid=104523949302020779981&rtpof=true&sd=true">aquí</a>.</p>
                    <br>
                </div>

                <div id="bimodalidad-programacion" class="section-content hidden">
                    <h2>Bimodalidad</h2>
                    <p>La bimodalidad en el diseño curricular combina enseñanza presencial y virtual, ofreciendo flexibilidad para que los estudiantes participen tanto en persona como en línea. Este modelo permite acceso remoto a contenidos, complementa la educación presencial con recursos digitales, y facilita el aprendizaje a ritmo propio en la modalidad virtual. Además, promueve la interacción continua entre estudiantes y docentes y permite evaluaciones y seguimiento en ambas modalidades.</p>
                    <br>
                    <img src="img/Bimodalidad.webp">
                    <br>
                <p class="LinkProyectos">Para más información, haga clic <a href="https://docs.google.com/document/d/15nm4FT8ioTXl-xg_fNKMyM1bZ5JyI0-Th8KQx1H3XHs/edit?usp=sharing">aquí</a>.</p>
                <br>
                </div>

                <div id="perfil-programacion" class="section-content hidden">
                    <h2>Perfil Académico de Programación</h2>
                    <p>El Técnico en Programación desarrolla programas, interpreta y documenta especificaciones, verifica y ajusta software, y trabaja en equipo. Sus habilidades incluyen planificación, producción y depuración de software, y documentación técnica. Entre sus competencias destacan la abstracción, el pensamiento combinatorio, la autorregulación y la comunicación técnica. Sus funciones abarcan análisis de requisitos, desarrollo y verificación de componentes, revisiones de código y gestión de recursos informáticos para asegurar la calidad del software.</p>
                    <br>
                    <img src="img/PerfilAcademico.webp">
                    <br>
                    <br>
                    <p class="LinkProyectos">Para más información, haga clic <a href="https://docs.google.com/document/d/15nm4FT8ioTXl-xg_fNKMyM1bZ5JyI0-Th8KQx1H3XHs/edit?usp=sharing">aquí</a>.</p>
                    <br>
                </div>

                <div id="curricular-programacion" class="section-content hidden">
                <h2>Diseño Curricular de Programación</h2>
                <p>El Diseño Curricular para el Técnico en Programación se estructura en formación general, científico-tecnológica y técnico-específica, con énfasis en programación, diseño de software, bases de datos e interfaces. Incluye prácticas profesionalizantes que vinculan a los estudiantes con el entorno laboral. Con 6480 horas de formación, el perfil profesional permite a los graduados trabajar en empresas de software, organizaciones públicas y privadas, y en emprendimientos propios, con competencias en desarrollo, depuración y documentación de software.</p>
                <br>
                <img src="img/DiseñoCurricular.webp">
                <br>
                <br>    
                <p class="LinkProyectos">Para más información, haga clic <a href="https://docs.google.com/document/d/15nm4FT8ioTXl-xg_fNKMyM1bZ5JyI0-Th8KQx1H3XHs/edit?usp=sharing">aquí</a>.</p>
                <br>
                </div>


                <div id="proyectos-programacion" class="section-content hidden">
                    <h2>Proyectos de la Especialidad</h2>
                    <p>Presentamos los proyectos de los alumnos de 7mo año, de las carreras programación y electrónica. Estos proyectos son el resultado de su aprendizaje y creatividad, mostrando cómo aplican sus conocimientos para resolver problemas reales. Cada uno de ellos refleja el esfuerzo y la pasión de los estudiantes, y queremos de compartir sus logros y contribuciones a la comunidad.</p>
                    <br>
                    <p class="LinkProyectos">Para ver los proyectos de 7mo, haga clic <a href="https://drive.google.com/drive/folders/1LVf-bgoH9n6DCn356pVyjmbVRcr_9bIu?usp=sharing">aquí</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/especialidades.js"></script>
	</div>
</body>
</html>
