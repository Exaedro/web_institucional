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
                    <h2>Materias</h2>
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
                </div>

                <div id="bimodalidad-electronica" class="section-content hidden">
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

                <div id="perfil-electronica" class="section-content hidden">
                    <h2>Perfil Académico</h2>
                    <h3>El Técnico en Electrónica está capacitado para:</h3>
                    <div class="Bimodalidad">
                        <ul>
                            <li>
                                <p>Proyectar y diseñar componentes y equipos electrónicos de baja y mediana complejidad.</p>
                            </li>
                            <li>
                                <p>Realizar ensayos y mediciones en dispositivos y equipos electrónicos, verificando su funcionamiento y asegurando su calidad.</p>
                            </li>
                            <li>
                                <p>Operar y mantener sistemas electrónicos, implementando mantenimiento preventivo y correctivo en equipos analógicos y digitales.</p>
                            </li>
                            <li>
                                <p>Montar e instalar dispositivos electrónicos, cumpliendo con normas de seguridad y calidad en telecomunicaciones y control industrial.</p>
                            </li>
                        </ul>
                    </div>

                    <h3>Habilidades:</h3>
                    <div class="Bimodalidad">
                        <ul>
                            <li>
                                <p>Interpretación de especificaciones: Analiza y comprende requisitos técnicos para proyectos de sistemas electrónicos.</p>
                            </li>
                            <li>
                                <p>Planificación de trabajo: Organiza tareas y coordina actividades en equipos de trabajo, aplicando métodos de resolución de problemas.</p>
                            </li>
                            <li>
                                <p>Producción de sistemas electrónicos: Desarrolla y verifica circuitos y dispositivos electrónicos.</p>
                            </li>
                            <li>
                                <p>Documentación técnica: Realiza documentación detallada de sistemas electrónicos y manuales de uso y mantenimiento.</p>
                            </li>
                            <li>
                                <p>Explotación de recursos: Aprovecha recursos de hardware y software en la implementación de soluciones electrónicas.</p>
                            </li>
                        </ul>
                    </div>

                    <h3>Competencias Específicas:</h3>
                    <div class="Bimodalidad">
                        <ul>
                            <li>
                                <p>Abstracción: Simplifica problemas complejos en sistemas electrónicos para mejorar su diseño y mantenimiento.</p>
                            </li>
                            <li>
                                <p>Pensamiento lógico: Analiza alternativas de solución considerando las implicaciones técnicas y de costo.</p>
                            </li>
                            <li>
                                <p>Autorregulación: Se maneja en entornos técnicos cumpliendo normas de seguridad y orden en la gestión de proyectos.</p>
                            </li>
                            <li>
                                <p>Comunicación técnica: Transmite información de manera clara y efectiva, utilizando terminología técnica adecuada.</p>
                            </li>
                            <li>
                                <p>Trabajo en equipo: Colabora en proyectos multidisciplinarios, aportando su conocimiento y disposición para aprender y enseñar.</p>
                            </li>
                        </ul>
                    </div>

                    <h3>Funciones y Tareas Específicas:</h3>
                    <div class="Bimodalidad">
                        <ol>
                            <li>
                                <h4>Interpretación de especificaciones de diseño</h4>
                                <ul>
                                    <li>
                                        <p>Analizar el problema a resolver en términos técnicos y su alcance en la industria.</p>
                                    </li>
                                    <li>
                                        <p>Verificar la coherencia de las especificaciones para asegurar su factibilidad.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Planificación y estrategia de trabajo</h4>
                                <ul>
                                    <li>
                                        <p>Dividir el proyecto en subtareas y asignar prioridades en base a recursos y tiempo disponible.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Producción de circuitos y dispositivos electrónicos</h4>
                                <ul>
                                    <li>
                                        <p>Diseñar y construir circuitos electrónicos utilizando componentes adecuados para la aplicación.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Verificación y depuración de equipos electrónicos</h4>
                                <ul>
                                    <li>
                                        <p>Aplicar pruebas de funcionamiento, registrando resultados y ajustando el sistema según necesidad.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Documentación técnica y de usuario</h4>
                                <ul>
                                    <li>
                                        <p>Generar manuales de uso y mantenimiento detallando procedimientos y recomendaciones.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Explotación de recursos tecnológicos</h4>
                                <ul>
                                    <li>
                                        <p>Gestionar equipos e instrumentos para mantener la operatividad de los sistemas electrónicos en los que trabaja.</p>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>


                <div id="curricular-electronica" class="section-content hidden">
                    <div class="Bimodalidad">
                        <h2>Diseño Curricular</h2>
                        <p>El diseño curricular de la especialidad en electrónica está estructurado para proporcionar conocimientos en áreas clave que preparan al estudiante para desempeñarse en el sector técnico y profesional de la electrónica:</p>
                        <ol>
                            <li>
                                <h3>Trayectoria Formativa</h3>
                                <p>La formación para el Técnico en Electrónica se divide en varias áreas fundamentales que abarcan desde conocimientos generales hasta competencias técnicas específicas:</p>
                                <ul>
                                    <li><strong>Formación General:</strong> Proporciona habilidades para participar en la vida social, política y cultural, desarrollando una actitud ética frente a los cambios tecnológicos y sociales.</li>
                                    <li><strong>Formación Científico-Tecnológica:</strong>
                                        <ul>
                                            <li><strong>Matemática y Física Aplicada:</strong> Fundamentos en álgebra de Boole, electromagnetismo, circuitos eléctricos, sistemas de unidades y cinemática, que forman la base para el diseño y análisis en electrónica.</li>
                                            <li><strong>Química Aplicada:</strong> Conocimiento de materiales y procesos químicos esenciales en la electrónica.</li>
                                            <li><strong>Instrumentación y Control:</strong> Fundamentos en instrumentación y sistemas de control, incluyendo el uso de PLCs y controladores PID.</li>
                                            <li><strong>Computación y Tecnología Informática:</strong> Introducción al uso de herramientas de simulación y diseño asistido por computadora, así como lenguajes de programación aplicados al control electrónico.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Formación Técnica Específica:</strong>
                                        <ul>
                                            <li><strong>Componentes Electrónicos:</strong> Análisis y uso de dispositivos analógicos y digitales, incluyendo resistores, capacitores, transistores, y circuitos integrados.</li>
                                            <li><strong>Sistemas Electrónicos:</strong> Diseño y montaje de circuitos electrónicos, implementación de sistemas de telecomunicaciones y control de potencia.</li>
                                            <li><strong>Instrumentación y Medición:</strong> Uso de instrumentos de medición como osciloscopios y multímetros para pruebas y diagnósticos en dispositivos electrónicos.</li>
                                            <li><strong>Diseño de Prototipos:</strong> Desarrollo de prototipos y pruebas de circuitos en aplicaciones industriales y telecomunicaciones.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Prácticas Profesionalizantes</h3>
                                <p>Las prácticas profesionalizantes ofrecen a los estudiantes la oportunidad de aplicar los conocimientos teóricos en entornos laborales reales o simulados, como laboratorios y talleres. Durante estas prácticas, los estudiantes desarrollan habilidades en montaje, diagnóstico, y reparación de sistemas electrónicos, asegurando una preparación completa para su integración en el mundo laboral.</p>
                            </li>
                            <li>
                                <h3>Carga Horaria Mínima</h3>
                                <p>La formación técnica de nivel secundario en Electrónica requiere una carga horaria mínima de 6480 horas reloj, distribuidas de la siguiente forma:</p>
                                <ul>
                                    <li>Formación Científico-Tecnológica: 1700 horas reloj.</li>
                                    <li>Formación Técnica Específica: 2000 horas reloj.</li>
                                    <li>Prácticas Profesionalizantes: Mínimo de 200 horas reloj, representando al menos el 10% del total de horas de la formación técnica específica.</li>
                                </ul>
                                <p>Esta distribución garantiza una educación técnica profesional de calidad, combinando teoría y práctica en la formación del Técnico en Electrónica.</p>
                            </li>
                            <li>
                                <h3>Perfil Profesional del Técnico en Electrónica</h3>
                                <p>El perfil del Técnico en Electrónica abarca competencias para desempeñarse en el diseño, mantenimiento y operación de sistemas electrónicos. Sus habilidades incluyen:</p>
                                <ul>
                                    <li><strong>Diseño y Desarrollo:</strong> Capacidad para proyectar y diseñar componentes electrónicos de baja y mediana complejidad.</li>
                                    <li><strong>Mantenimiento y Diagnóstico:</strong> Realización de ensayos y mediciones, mantenimiento preventivo y correctivo en equipos electrónicos.</li>
                                    <li><strong>Montaje e Instalación:</strong> Habilidades para montar y configurar dispositivos y sistemas en telecomunicaciones, control industrial, y otras aplicaciones.</li>
                                    <li><strong>Gestión y Asesoría:</strong> Capacidades para asesorar en la selección de componentes y gestionar proyectos electrónicos.</li>
                                </ul>
                            </li>
                            <li>
                                <h3>Áreas de Desempeño Laboral</h3>
                                <p>El Técnico en Electrónica puede trabajar en múltiples áreas, como:</p>
                                <ul>
                                    <li>Industria electrónica y manufactura.</li>
                                    <li>Empresas de telecomunicaciones, radio y televisión.</li>
                                    <li>Laboratorios de mantenimiento y reparación de equipos electrónicos.</li>
                                    <li>Empresas de generación y distribución de energía eléctrica.</li>
                                    <li>Emprendimientos autónomos en electrónica industrial y de consumo.</li>
                                </ul>
                            </li>
                        </ol>
                        <div class="image-container">
                            <img src="img.png" alt="Diseño Curricular de Electrónica">
                        </div>
                    </div>
                </div>

                <div id="proyectos-electronica" class="section-content hidden">
                    <h2>Proyectos de la Especialidad</h2>
                    <p>Los estudiantes desarrollan proyectos de sistemas embebidos y dispositivos electrónicos innovadores, aplicando sus conocimientos en la creación de soluciones técnicas prácticas y evaluando su impacto en la industria.</p>
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
                    <h3>El Técnico en Programación está capacitado para:</h3>
                    <div class="Bimodalidad">
                        <ul>
                            <li>
                                <p> Realizar programas o componentes de sistemas de computación.</p>
                            </li>
                            <li>
                                <p>Interpretar especificaciones de diseño, documentar productos realizados, verificar los componentes programados, buscar causas de mal funcionamiento y corregir programas o adaptarlos a cambios en las especificaciones.</p>
                            </li>
                            <li>
                                <p>Desarrollar sus actividades en equipo, organizado por proyectos y cumpliendo con criterios de realización establecidos en el perfil profesional.</p>
                            </li>
                        </ul>
                    </div>
                    <h3>Habilidades:</h3>
                    <div class="Bimodalidad">
                        <ul>
                            <li>
                                <p>Interpretación de especificaciones: Comprende interpretar requisitos de asignaciones de programación.</p>
                            </li>
                            <li>
                                <p>Planificación de trabajo: Organiza sus tareas en equipo y según la tecnología a utilizar.</p>
                            </li>
                            <li>
                                <p>Producción de software: Desarrolla programas, módulos o componentes de sistemas de computación.</p>
                            </li>
                            <li>
                                <p>Verificación y depuración: Verifica y depura el producto desarrollado.</p>
                            </li>
                            <li>
                                <p>Revisiones cruzadas: Realiza revisiones de código o interfaces.</p>
                            </li>
                            <li>
                                <p>Documentación técnica y de usuario: Documenta técnica y funcionalmente aplicaciones y sistemas.</p>
                            </li>
                            <li>
                                <p>Explotación de recursos: Aprovecha funcionalidades de sistemas de información, hardware, software y redes.</p>
                            </li>
                        </ul>
                    </div>
                    <h3>Competencias Específicas:</h3>
                    <div class="Bimodalidad">
                        <ul>
                            <li>
                                <p>Abstracción: Se enfoca en reducir detalles irrelevantes, simplificando problemas complejos para facilitar su comprensión y solución.</p>
                            </li>
                            <li>
                                <p>Pensamiento combinatorio: Considera alternativas sistemáticamente, manejando múltiples variables sin perder el enfoque general de resolución.</p>
                            </li>
                            <li>
                                <p>Autorregulación: Se maneja bajo normas explícitas o implícitas, manteniendo un orden propio que facilita el acceso a la información necesaria.</p>
                            </li>
                            <li>
                                <p>Comunicación adecuada: Reconoce el aporte de los demás y transmite información en lenguaje técnico, incluso en inglés.</p>
                            </li>
                            <li>
                                <p>Trabajo en equipo: Comparte información y conocimientos, considera las necesidades de los usuarios y está dispuesto a colaborar y recibir ayuda.</p>
                            </li>
                        </ul>
                    </div>
                    <h3>Funciones y Tareas Específicas:</h3>
                    <div class="Bimodalidad">
                        <ol>
                            <li>
                                <h4>Interpretación de especificaciones de diseño</h4>
                                <ul>
                                    <li>
                                        <p>Analizar el problema a resolver y su alcance.</p>
                                    </li>
                                    <li>
                                        <p>Validar coherencia e integridad de especificaciones.</p>
                                    </li>
                                    <li>
                                        <p>Convalidar interpretaciones con quienes hayan diseñado o provisto especificaciones.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Planificación y estrategia de trabajo</h4>
                                <ul>
                                    <li>
                                        <p>Identificar aspectos críticos, dividir en subtareas, y establecer una secuencia de trabajo.</p>
                                    </li>
                                    <li>
                                        <p>Estimar tiempos, establecer prioridades y consultar aspectos ambiguos.</p>
                                    </li>
                                    <li>
                                        <p>Buscar información en fuentes confiables y aplicar metodologías de resolución de problemas.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Producción de programas y componentes</h4>
                                <ul>
                                    <li>
                                        <p>Desarrollar algoritmos para resolver problemas asignados.</p>
                                    </li>
                                    <li>
                                        <p>Definir código, estructuras de datos, clases y objetos necesarios.</p>
                                    </li>
                                    <li>
                                        <p>Diseñar interfaces de usuario acordes al contexto.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Verificación y depuración del producto</h4>
                                <ul>
                                    <li>
                                        <p>Analizar y registrar todos los procesos importantes.</p>
                                    </li>
                                    <li>
                                        <p>Procesar y registrar resultados, depurando códigos según sea necesario.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Revisiones cruzadas de código</h4>
                                <ul>
                                    <li>
                                        <p>Asegurar el cumplimiento de estándares y especificaciones.</p>
                                    </li>
                                    <li>
                                        <p>Revisar interfaces y evaluar el uso eficiente de recursos.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Documentación técnica y de usuario</h4>
                                <ul>
                                    <li>
                                        <p>Describir nuevas clases, registrar decisiones de diseño y resultados de pruebas.</p>
                                    </li>
                                    <li>
                                        <p>Documentar incidentes, errores y versiones del producto.</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>Desempeño de base</h4>
                                <ul>
                                    <li>
                                        <p>Conocer y usar recursos de hardware, software y redes para mantener ambientes de desarrollo y verificación.</p>
                                    </li>
                                    <li>
                                        <p>Gestionar repositorios de información y asegurar la confiabilidad de los productos generados.</p>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>

                <div id="curricular-programacion" class="section-content hidden">
                    <div class="Bimodalidad">
                        <h2>Diseño Curricular</h2>
                        <p>El diseño curricular se enfoca en el desarrollo de competencias en el ámbito de la programación y la ingeniería del software. La formación del Técnico en Programación está organizada en las siguientes áreas:</p>
                        <ol>
                            <li>
                                <h3>Trayectoria Formativa</h3>
                                <p>La estructura de formación para el Técnico en Programación se divide en varias áreas fundamentales que abarcan desde conocimientos generales hasta competencias técnicas específicas:</p>
                                <ul>
                                    <li><strong>Formación General:</strong> Fomenta habilidades para participar en la vida social, política, cultural y económica, con una actitud ética hacia los cambios tecnológicos y sociales.</li>
                                    <li><strong>Formación Científico-Tecnológica:</strong>
                                        <ul>
                                            <li><strong>Matemáticas y Lógica:</strong> Desarrollo del pensamiento abstracto, capacidad de resolver problemas y análisis combinatorio. Contenidos como conjuntos, sistemas de numeración, lógica simbólica, circuitos digitales, vectores, matrices, funciones, probabilidades, y estadística.</li>
                                            <li><strong>Física:</strong> Comprensión de conceptos como cinemática y dinámica, esenciales para la programación de animaciones y otras aplicaciones.</li>
                                            <li><strong>Computación:</strong> Introducción al mundo de la computación y pensamiento computacional, con énfasis en estructuras de datos, programación básica, y algoritmos.</li>
                                            <li><strong>Tecnología de la Información:</strong> Historia y evolución de la tecnología de la información, incluyendo hardware, software, y redes, así como conceptos básicos de sistemas de información.</li>
                                            <li><strong>Organización y Sistemas de Información:</strong> Teoría de sistemas, toma de decisiones organizacionales y contabilidad como sistema de información.</li>
                                            <li><strong>Ética y Derecho:</strong> Normativas sobre privacidad, propiedad intelectual, delitos informáticos, y la relevancia de la ética en la programación y uso de datos.</li>
                                            <li><strong>Idioma Inglés:</strong> Lectura y comprensión de textos técnicos en inglés, importante para la comunicación en el ámbito laboral y el entendimiento de materiales de estudio.</li>
                                        </ul>
                                    </li>    
                                    <li><strong>Formación Técnico-Específica:</strong>
                                        <ul>
                                            <li><strong>Interpretación de especificaciones:</strong> Comprensión de requisitos y validación de especificaciones técnicas para el desarrollo de software.</li>
                                            <li><strong>Planificación del trabajo:</strong> Organización y gestión del trabajo en equipo, anticipando posibles dificultades y subdividiendo tareas complejas en unidades manejables.</li>
                                            <li><strong>Diseño de software:</strong> Aplicación de principios de diseño estructurado y orientado a objetos, patrones de diseño, y desarrollo de prototipos para pruebas de concepto.</li>
                                            <li><strong>Producción de código:</strong> Creación y depuración de programas, módulos y clases; uso de estructuras de datos adecuadas y aplicación de buenas prácticas de programación y documentación.</li>
                                            <li><strong>Bases de datos:</strong> Diseño y manejo de bases de datos, lenguajes de consulta SQL y modelado de datos.</li>
                                            <li><strong>Interfaces de usuario:</strong> Diseño de interfaces, aplicando principios de interacción humano-computadora para mejorar la usabilidad y satisfacción del usuario final.</li>
                                            <li><strong>Ambientes distribuidos:</strong> Programación en entornos cliente-servidor, conocimiento de redes y protocolos de comunicación.</li>
                                            <li><strong>Verificación y depuración de software:</strong> Pruebas unitarias, integración, verificación de usabilidad y confiabilidad de software, y corrección de errores.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h3>Prácticas Profesionalizantes</h3>
                                <p>Las prácticas permiten a los estudiantes aplicar sus conocimientos en un entorno laboral real o simulado, como una "fábrica de software". A través de estas prácticas, los estudiantes desarrollan habilidades en interpretación de especificaciones, diseño, verificación y depuración de software, y trabajan en equipo en un entorno productivo.</p>
                            </li>
                            <li>            
                                <h3>Carga Horaria Mínima</h3>
                                <p>La carga horaria total requerida es de 6480 horas reloj, distribuidas de la siguiente forma:</p>
                                <ul>
                                    <li>Formación Científico-Tecnológica: 1700 horas reloj.</li>
                                    <li>Formación Técnica Específica: 2000 horas reloj.</li>
                                    <li>Prácticas Profesionalizantes: Al menos el 10% del total de horas de la formación técnica específica, equivalentes a un mínimo de 200 horas reloj.</li>
                                </ul>
                                <p>Esta distribución asegura una formación integral, combinando teoría y práctica para una educación técnica profesional de calidad.</p>
                            </li>
                            <li>
                                <h3>Perfil Profesional del Técnico en Programación</h3>
                                <p>El perfil profesional desarrollado abarca competencias necesarias para trabajar en proyectos de desarrollo de software, incluyendo:</p>
                                <ul>
                                    <li><strong>Interpretación y planificación:</strong> Comprensión de especificaciones, interpretación de diagramas, planificación de trabajo en equipo y estimación de tiempos.</li>
                                    <li><strong>Desarrollo y depuración de software:</strong> Creación de algoritmos, definición de estructuras de datos y programación de aplicaciones, con capacidad para depurar, optimizar y adaptar el código.</li>
                                    <li><strong>Documentación y pruebas:</strong> Documentación del código y ejecución de pruebas de funcionalidad, usabilidad y confiabilidad.</li>
                                </ul>
                            </li>
                            <li>
                                <h3>Áreas de Desempeño Laboral</h3>
                                <p>El Técnico en Programación puede desempeñarse en diversas áreas, como:</p>
                                <ul>
                                    <li>Servicios informáticos para pequeñas y medianas empresas.</li>
                                    <li>Empresas de desarrollo o mantenimiento de software, tanto nacionales como internacionales.</li>
                                    <li>Organizaciones públicas y privadas en mantenimiento, desarrollo y administración de sistemas.</li>
                                    <li>Emprendimientos independientes o asociados de desarrollo de software.</li>
                                    <li>Organizaciones no gubernamentales y administración pública.</li>
                                </ul>
                            </li>
                        </ol>
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
