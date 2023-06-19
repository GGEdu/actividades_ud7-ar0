<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Actividad A1
        DB::table('activities')->insert([
            'code' => 'A1',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-mug-hot',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'World Café sobre autenticación y opciones en Laravel',
            'type' => 'Conceptual',
            'phase' => 'Introducción',
            'sessions' => '2 sessiones',
            'estimated_time' => '110 minutos',
            'contents' =>       '<ul><li>Conceptos básicos de autenticación y autorización en Laravel.</li>
                                <li>Configuración del sistema de autenticación en Laravel.</li>
                                <li>Registro de usuarios y gestión de contraseñas.</li>
                                <li>Uso de JWS, "cookies" y sessiones.</li></ul>',
            'resources' => '<ul><li>Acceso a internet para buscar información.</li>
            <li>Documentación oficial de Laravel.</li>
            <li>Tutoriales, ejemplos de código y recursos relacionados.</li></ul>',
            'education_metodologies' => 'Aprendizaje basado en experiencia: Permite a los participantes compartir conocimientos y experiencias prácticas sobre un tema que se conozca o se investigue.',
            'evaluation_criteria' => 'RA4-d: Se identificarán y caracterizarán los mecanismos disponibles para la autenticación de usuarios en Laravel.</li>
                                    RA4-e: Se han escrito aplicaciones que integren mecanismos de autentificación de usuarios con las diferentes opciones de Laravel.</li>',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad, los estudiantes se dividirán en 4 grupos para explorar diferentes aspectos de la autenticación y las opciones disponibles en Laravel. Utilizando un enfoque de aprendizaje cooperativo, cada grupo se encargará de investigar y discutir sobre un tema específico durante un tiempo determinado, relacionado con la autenticación en Laravel. Luego, los miembros de cada grupo rotarán, mientras que el anfitrión permanece, recopilando las ideas claves de la discusión anterior y ayudando a los nuevos miembros a profundizar más en su investigación.',
            'statement' => '',
            'steps' => 'Sesión 1:</h3>
                        - Presentación de los conceptos, explicación de la tarea y asignación de roles de anfitriones. (15 minutos).</li>
                        - Primera ronda de debate en los grupos. (20 minutos).</li>
                        - Segunda ronda de debate en los grupos, rotación de los miembros de cada grupo (20 minutos).</li>
                        
                        Sesión 2:</h3>
                        - Tercera ronda de debate en los grupos, rotación de los miembros de cada grupo (20 minutos).</li>
                        - Cuarta ronda de debate en los grupos, rotación de los miembros de cada grupo (20 minutos).</li>
                        - Plenaria final donde cada anfitrión presenta las conclusiones (15 minutos).</li>',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '
            <div class="accordion" id="accordionBasic">
                 <div class="accordion-item">
                    <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Grupo 1 - Conceptos b&aacute;sicos de autenticaci&oacute;n y autorizaci&oacute;n:
                        </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
                        <div class="accordion-body">
                            <ul>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se relacionan la autenticaci&oacute;n y la autorizaci&oacute;n en un sistema seguro?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se reflejan la autenticaci&oacute;n y la autorizaci&oacute;n en el flujo de una aplicaci&oacute;n web?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; tipos de autenticaci&oacute;n se pueden encontrar com&uacute;nmente en aplicaciones web?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; es un sistema basado en roles y c&oacute;mo se relaciona con la autorizaci&oacute;n?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se podr&iacute;a abusar de un sistema si no se implementa correctamente la autenticaci&oacute;n?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se podr&iacute;a abusar de un sistema si no se implementa correctamente la autorizaci&oacute;n?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; implicaciones de privacidad tienen la autenticaci&oacute;n y la autorizaci&oacute;n?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; es un middleware de autenticaci&oacute;n en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo contribuye Laravel a simplificar la implementaci&oacute;n de autenticaci&oacute;n y autorizaci&oacute;n?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; se debe considerar al implementar autenticaci&oacute;n y autorizaci&oacute;n en una aplicaci&oacute;n Laravel a gran escala?</span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Grupo 2 - Configuraci&oacute;n del sistema de autenticaci&oacute;n en Laravel:
                        </button>
                    </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionBasic">
                        <div class="accordion-body">
                            <ul>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede configurar Laravel para soportar m&uacute;ltiples m&eacute;todos de autenticaci&oacute;n?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; implica la configuraci&oacute;n del &quot;guard&quot; en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se pueden configurar los proveedores de usuarios en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo interact&uacute;an los &quot;guards&quot; y los proveedores de usuarios en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede habilitar el recuerdo de usuarios en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; implicaciones de seguridad tiene la personalizaci&oacute;n de la configuraci&oacute;n de autenticaci&oacute;n?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo afecta la configuraci&oacute;n de la autenticaci&oacute;n a las capacidades de autorizaci&oacute;n en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; herramientas de depuraci&oacute;n est&aacute;n disponibles para la configuraci&oacute;n de autenticaci&oacute;n en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede migrar de un sistema de autenticaci&oacute;n a otro en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se podr&iacute;a implementar un sistema de autenticaci&oacute;n de dos factores en Laravel?</span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingTree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
                            Grupo 3 - Registro de usuarios y gesti&oacute;n de contrase&ntilde;as:
                        </button>
                    </h3>
                    <div id="collapseTree" class="accordion-collapse collapse show" aria-labelledby="headingTree" data-bs-parent="#accordionBasic">
                        <div class="accordion-body">
                            <ul>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede validar la informaci&oacute;n de registro del usuario en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se pueden manejar las contrase&ntilde;as olvidadas en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se pueden actualizar las contrase&ntilde;as de los usuarios en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; precauciones se deben tomar al almacenar contrase&ntilde;as en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se pueden implementar pol&iacute;ticas de contrase&ntilde;as en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede asegurar el proceso de registro en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede prevenir el ataque de fuerza bruta en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede permitir el registro de usuarios a trav&eacute;s de terceros (por ejemplo, Google, Facebook) en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede habilitar la confirmaci&oacute;n de correo electr&oacute;nico durante el registro en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se pueden realizar auditor&iacute;as de seguridad en el proceso de registro y gesti&oacute;n de contrase&ntilde;as en Laravel?</span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingFour">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Grupo 4 - Uso de JWS, &quot;cookies&quot; y sesiones:
                        </button>
                    </h3>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionBasic">
                        <div class="accordion-body">
                            <ul>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se genera un JWT en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede validar un JWT en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se manejan las cookies seguras en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se configuran las sesiones en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede manejar la expiraci&oacute;n de JWT, cookies y sesiones en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede manejar la renovaci&oacute;n de JWT, cookies y sesiones en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se pueden prevenir los ataques de robo de sesiones en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se puede prevenir los ataques de CSRF en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;C&oacute;mo se pueden realizar auditor&iacute;as de seguridad en el uso de JWT, cookies y sesiones en Laravel?</span></span></li>
                                <li><span style="font-size:12pt"><span style="font-family:Arial,sans-serif">&iquest;Qu&eacute; consideraciones se deben tener en cuenta al decidir entre JWT, cookies y sesiones en Laravel?</span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A2
        DB::table('activities')->insert([
            'code' => 'A2',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-user-shield',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Laboratorio de registro y autenticación con cookies y sessiones',
            'type' => 'Procedimental',
            'phase' => 'Desarrollo',
            'sessions' => '2 sessiones',
            'estimated_time' => '110 minutos',
            'contents' => 'Configuración del sistema de autenticación en Laravel.
                            Registro de usuarios y gestión de contraseñas.
                            Uso de "cookies" y sessiones.',
            'resources' => 'Acceso a internet para buscar información.
                            Documentación oficial de Laravel. https://laravel.com/docs/10.x/authentication
                            Tutoriales, ejemplos de código y recursos relacionados.',
            'education_metodologies' => 'Aprendizaje basado en proyectos: Realizarás un laboratorio práctico en el cual aplicarás los conceptos teóricos sobre autenticación en Laravel en un entorno de desarrollo real.',
            'evaluation_criteria' => 'RA4-b: Se usarán sessiones para mantener al usuario autenticado.
                                    RA4-e: Se utilizarán "cookies" para mantener cierta información del usuario autenticado.
                                    RA4-e: Se escribirá una aplicación que integre mecanismos de autenticación de usuarios utilizando Laravel.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad, los estudiantes realizarán un laboratorio de codificación práctica donde configurarán el registro de usuarios y configurarán el sistema de autenticación basada en sessiones en una aplicación Laravel.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Preparación del entorno: Asegúrate de tener un entorno de desarrollo Laravel configurado y funcionando correctamente con acceso a la base de datos.
                            2. Configuración de la tabla de la base de datos: Asegúrate de tener las migraciones de usuarios y ejecútala para preparar la tabla de usuarios en la base de datos.
                            3. Asegúrate de tener el modelo User que se crea al realizar la instalación de Laravel.
                            4. Crea un controlador llamado AuthController que tenga los métodos login(), procesar(), logout() y register() e importa el modelo User.
                            5. Crea las rutas de tipo POST para poder enviar datos a estos métodos del controlador. Además, asegúrate de que la ruta de tipo GET raíz (/) te cargue la vista login y que la ruta de tipo GET "register" te cargue la vista de registro.
                            6. Crea un formulario de registro que tenga al menos los campos: nombre, email, contraseña y confirmar contraseña.
                            7. Crea un formulario de login que tenga los campos: email y contraseña.
                            8. Implementa la funcionalidad de registro de usuarios en tu aplicación que al terminar redirija al Login.
                            9. Implementa la funcionalidad de autenticación de usuarios en tu aplicación donde guardes el nombre del usuario en una "cookie" y lo rediriges a la página de inicio donde se mostrará su nombre.
                            10. Realiza pruebas exhaustivas para asegurarte de que la autenticación se ha configurado correctamente. Verifica que los usuarios puedan registrarse e iniciar sesión.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A3
        DB::table('activities')->insert([
            'code' => 'A3',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-bridge-lock',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Flipped Classroom sobre los middlewares',
            'type' => 'Conceptual',
            'phase' => 'Introducción',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Concepto de middleware y su uso en Laravel.
                            Creación y configuración de middleware en Laravel.',
            'resources' => 'Video educativo de 5 a 10 minutos sobre Middleware en Laravel.
                            Video educativo de 5 a 10 minutos sobre los COORS.
                            Documentación oficial de Laravel sobre Middleware.
                            PC con Laravel instalado y acceso a Internet.',
            'education_metodologies' => 'Aprendizaje inverso: Los participantes estudian los conceptos de middlewares de forma independiente antes de la clase, y luego en el aula se centran en actividades prácticas para profundizar en su comprensión.',
            'evaluation_criteria' => 'RA4-d: Se han identificado y caracterizado los middlewares en Laravel para gestionar el flujo de peticiones para la autenticación de usuarios.
                                    RA4-g: Se ha empleado la documentación oficial de Laravel y las herramientas del framework para resolver dudas y problemas en la configuración e implementación de los middlewares.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad, los estudiantes emplearán el método de Aprendizaje Invertido (Flipped Classroom) para aprender acerca de los Middlewares en Laravel. Antes de la sesión, los estudiantes deben ver un video educativo sobre Middleware en Laravel y un video educativo sobre CORS (Cross-Origin Resource Sharing). Si siguen teniendo dudas podrán leer la documentación oficial de Laravel. Durante la sesión, implementarán el middleware de autenticación y un middleware para manejar el CORS en una aplicación Laravel.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Los estudiantes deberán ver un video educativo sobre Middleware en Laravel y leer la documentación oficial de Laravel sobre Middleware antes de la sesión.
                            2. Durante la sesión, cada estudiante tendrá que implementar el middleware de autenticación en una aplicación Laravel existente.
                            3. Además, deberán implementar un middleware para manejar el CORS. Esto permitirá a la aplicación aceptar solicitudes de diferentes orígenes, lo que es común en las aplicaciones modernas de desarrollo web.
                            4. Una vez que hayan implementado los middlewares, deberán probar su funcionalidad.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A4
        DB::table('activities')->insert([
            'code' => 'A4',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-bridge-water',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Taller de middleware personalizado',
            'type' => 'Procedimental',
            'phase' => 'Desarrollo',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Configuración del sistema de autenticación en Laravel.',
            'resources' => 'Proyecto Laravel en curso donde se puede aplicar el middleware personalizado.
                            Documentación oficial de Laravel sobre Middleware.
                            https://laravel.com/docs/10.x/middleware
                            PC con Laravel instalado y acceso a Internet.',
            'education_metodologies' => 'Aprendizaje basado en proyectos y colaborativo: Los participantes diseñan y desarrollan sus propios middlewares, lo que les brinda una experiencia práctica y les permite aplicar los conceptos teóricos de manera creativa. Además, comentan sus resultados en foros dándose retroalimentación entre sí.',
            'evaluation_criteria' => 'RA4-g: Se ha empleado la documentación oficial de Laravel y las herramientas del framework para resolver dudas y problemas en la configuración e implementación del middleware personalizado.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En este taller, los estudiantes crearán y configurarán un middleware personalizado para sus proyectos Laravel. Cada estudiante elegirá una temática distinta y a partir de ella implementará una funcionalidad específica para su middleware personalizado.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Al inicio de la sesión, los estudiantes deben seleccionar una temática para su proyecto y deben considerar cómo podrían incorporar su tema en la funcionalidad de su middleware.
                            2. Posteriormente, los estudiantes implementarán el middleware personalizado en sus respectivos proyectos Laravel.
                            3. Después de implementar el middleware, los estudiantes deben probar su funcionalidad y asegurarse de que se está ejecutando correctamente.
                            4. Al final de la sesión, los estudiantes subirán el código de su middleware personalizado a un foro de clase. Cada estudiante deberá explicar brevemente cómo su middleware refleja su temática y cómo funciona.
                            5. Todos los estudiantes deberán revisar al menos las 2 publicaciones del foro que tengan menor números de comentarios de sus compañeros y proporcionar retroalimentación constructiva sobre el código y la funcionalidad implementada.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A5
        DB::table('activities')->insert([
            'code' => 'A5',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-puzzle-piece',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Map Scramble sobre servicios web',
            'type' => 'Conceptual',
            'phase' => 'Introducción',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Concepto y uso de los servicios web.
                            Tipos de servicios web: REST, SOAP, GraphQL, etc.
                            Interacción entre cliente y servidor a través de servicios web.
                            Formatos de datos utilizados en servicios web: JSON, XML, etc.
                            Códigos de estado HTTP y su significado en el contexto de servicios web.',
            'resources' => 'Documentación y material de lectura sobre servicios web.
                            Software de creación de mapas mentales (en línea o offline).
                            Un proyector o pantalla compartida para mostrar el mapa mental en tiempo real.',
            'education_metodologies' => 'Gamificación: A través de un juego de Mapa Mental en tiempo real.',
            'evaluation_criteria' => 'RA7-a: El estudiante podrá comprender y describir los conceptos básicos relacionados con los servicios web.
                                    RA7-c: El estudiante podrá reconocer los elementos fundamentales que conforman un servicio web y su interacción.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'Esta actividad es un juego de construcción colaborativa de un mapa mental sobre servicios web. Después de leer sobre el tema en casa, los estudiantes se dividirán en equipos en clase y participarán en un juego de "Scramble" de mapa mental. Cada concepto o elemento relacionado con los servicios web que se añade al mapa mental vale puntos, y los estudiantes pueden "tomar" los conceptos añadidos por otros equipos conectándolos correctamente con otros nodos en el mapa. Deberán contestar por turnos y explicar la definición del concepto o porque el cambio de relación en un minuto.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Antes de la clase, los estudiantes deberán leer sobre servicios web.
                            2. Los equipos competirán para añadir conceptos al mapa mental. Cada concepto que se añade al mapa mental vale un cierto número de puntos.
                            3. Los conceptos pueden ser "tomados" por otros equipos si conectan correctamente el concepto con otro nodo en el mapa mental. Si lo hacen, pueden cambiar el color del concepto a su color de equipo y ganar los puntos para su equipo.
                            4. Añadirán los conceptos por turnos. Cuando les toque el turno, tendrán que decir el concepto y explicar la definición del concepto o porque el cambio de relación en un minuto.
                            5. Los conceptos no se pueden repetir. Si un equipo intenta añadir un concepto que ya está en el mapa mental, se les restarán puntos.
                            6. Al final de la actividad, el equipo con más puntos gana.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A6
        DB::table('activities')->insert([
            'code' => 'A6',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-trowel',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Taller de creación de APIs',
            'type' => 'Procedimental',
            'phase' => 'Desarrollo',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Uso y configuración de las rutas de Laravel para APIs.
                            Creación y configuración de controladores de tipo API en Laravel.
                            Creación de modelos y migraciones en Laravel.',
            'resources' => 'Proyecto Laravel en curso donde se puede crear la API.
                            Documentación oficial de Laravel sobre APIs.
                            https://laravel.com/docs/10.x/eloquent-resources
                            PC con Laravel instalado y acceso a Internet.',
            'education_metodologies' => 'Aprendizaje basado en proyectos: cada estudiante implementa una API basada en la temática elegida durante la actividad de middleware personalizado.',
            'evaluation_criteria' => 'RA7-d: El estudiante podrá crear y configurar controladores de tipo API, así como sus respectivas rutas en Laravel.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En este taller, los estudiantes trabajarán de manera individual o en grupos para iniciar la creación de una API en Laravel basada en la temática elegida durante la actividad de middleware personalizado. Deberán implementar las migraciones, el modelo, y un controlador de tipo API para su tema, así como las rutas necesarias. Esta actividad permite a los estudiantes poner en práctica sus habilidades de inicio de la creación de APIs en Laravel, así como personalizar su trabajo para que se adapte a sus intereses y proyectos personales.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Basándose en la temática elegida durante la actividad de middleware personalizado, cada estudiante comenzará la creación de una API en Laravel.
                            2. Crearán las migraciones necesarias para su tema, definiendo las tablas y relaciones que sean necesarias en su base de datos.
                            3. Crearán el modelo para su tema, definiendo los atributos y las relaciones que sean necesarias.
                            4. Crearán un controlador de tipo API para su tema. En esta fase, solo se creará el controlador sin implementar los métodos CRUD.
                            5. Configurarán las rutas de su API en Laravel, asegurándose de que las rutas correspondan correctamente a los métodos en su controlador API, aunque aún no se implementen.
                            6. Al final de la actividad, los estudiantes compartirán sus experiencias y dificultades, y podrán discutir cómo han personalizado su API basándose en su temática.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A7
        DB::table('activities')->insert([
            'code' => 'A7',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-user-check',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Laboratorio TDD de verificación de métodos CRUD',
            'type' => 'Procedimental',
            'phase' => 'Desarrollo',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Creación de tests unitarios en Laravel.
                            Uso de TDD (Test-Driven Development) para la implementación de métodos CRUD en controladores de API en Laravel.',
            'resources' => 'Proyecto Laravel en curso donde implementar y testear la API.
                            Documentación oficial de Laravel sobre HTTP tests.
                            https://laravel.com/docs/10.x/http-tests
                            PC con Laravel instalado y acceso a Internet.',
            'education_metodologies' => 'Aprendizaje basado en pruebas (TDD, Test-Driven Development): Los estudiantes primero escriben pruebas para los resultados que esperan de los métodos CRUD de sus controladores de API, y luego implementan la funcionalidad para hacer que esas pruebas pasen.',
            'evaluation_criteria' => 'RA7-f: El estudiante será capaz de implementar métodos CRUD en los controladores de la API, guiados por pruebas unitarias escritas previamente.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En este laboratorio de TDD, los estudiantes continuarán el trabajo de su API personalizada, implementando los métodos CRUD de su controlador de API. Sin embargo, antes de implementar los métodos, primero deben escribir pruebas unitarias que describan el comportamiento esperado de estos métodos. Solo después de que las pruebas estén escritas, implementarán la funcionalidad necesaria para hacer que esas pruebas pasen. Este enfoque garantiza que las funciones se estén construyendo de acuerdo con las expectativas especificadas y ayuda a prevenir la introducción de errores.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Para cada uno de los métodos CRUD que se deben implementar en su controlador de API, los estudiantes primero deben escribir pruebas unitarias que describan lo que se espera que devuelvan estos métodos.
                            2. Una vez que las pruebas estén escritas, deben ejecutarlas usando PHPUnit para verificar que actualmente fallan (ya que aún no han implementado la funcionalidad).
                            3. A continuación, deben implementar la funcionalidad necesaria en sus métodos CRUD para hacer que las pruebas pasen.
                            4. Una vez implementada la funcionalidad, deben volver a ejecutar sus pruebas para verificar que ahora pasan.
                            5. Este ciclo de "red, green, refactor" (fallar, pasar, refactorizar) se debe repetir hasta que todos los métodos CRUD estén implementados y todas las pruebas pasen.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A8
        DB::table('activities')->insert([
            'code' => 'A8',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-arrow-down-up-lock',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Práctica de autenticación en la API con JWS',
            'type' => 'Procedimental',
            'phase' => 'Consolidación',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Autenticación y autorización en APIs utilizando tokens de acceso (JWS).
                            Configuración y uso de JWS en Laravel.',
            'resources' => 'Entorno de desarrollo Laravel.
                            Documentación de Laravel y JWT.
                            https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/
                            Videos introductorios y tutoriales de Postman
                            https://www.youtube.com/watch?v=TxcsU3CZQ10',
            'education_metodologies' => 'Aprendizaje basado en proyectos: Los estudiantes deben integrar la autenticación JWS en su API existente, lo que les permite poner en práctica los conceptos aprendidos en un contexto realista y funcional.',
            'evaluation_criteria' => 'RA4-e: El estudiante será capaz de implementar la autenticación en la API utilizando tokens de acceso.
                                    RA4-g: El estudiante será capaz de utilizar JWS para la autenticación y la autorización en la API.
                                    RA7-d: El estudiante podrá aplicar técnicas de seguridad en el desarrollo de la API.
                                    RA7-f: El estudiante será capaz de probar la seguridad de la API.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad práctica, los estudiantes tendrán que implementar la autenticación JWS en su API Laravel existente. Esta es una actividad importante que les permitirá validar el acceso a la API y garantizar que solo los usuarios autenticados puedan hacer ciertas operaciones. Al final de la sesión, los estudiantes tendrán una API con autenticación JWS que formará la primera etapa de desarrollo de su tema.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Los estudiantes deben revisar su API Laravel y el modelo de autenticación que ya tienen implementado.
                            2. Deben investigar e implementar el paquete JWT-Auth de Laravel para permitir la autenticación JWS.
                            3. Deben configurar la autenticación JWS en su API. Esto implica configurar el middleware de autenticación para usar JWS y modificar la lógica de inicio de sesión para devolver un token JWS.
                            4. Deben probar su implementación realizando varias solicitudes a la API utilizando un cliente HTTP y verificar que la autenticación JWS funcione correctamente.
                            5. Finalmente, la tarea será evaluada como la primera etapa del desarrollo del tema del proyecto.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A9
        DB::table('activities')->insert([
            'code' => 'A9',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-book-open-reader',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Flipped Classroom sobre documentación de la API',
            'type' => 'Conceptual',
            'phase' => 'Introducción',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Importancia y beneficios de una buena documentación de API.
                            Estructura básica y elementos de la documentación de API.
                            Herramientas para la documentación de la API (Swagger, Postman).',
            'resources' => 'Documentación oficial de Swagger y Postman.
                            Videos introductorios y tutoriales de Swagger y Postman.
                            https://www.youtube.com/watch?v=PP1vxV0IGVM
                            https://www.youtube.com/watch?v=kUCT88EJuCU
                            PC con Laravel instalado y acceso a Internet.',
            'education_metodologies' => 'Aprendizaje inverso: los estudiantes aprenderán la teoría en casa a través de recursos digitales y aplicarán estos conocimientos en clase al documentar su propio proyecto de API.',
            'evaluation_criteria' => 'RA7-e: El estudiante será capaz de documentar adecuadamente la API utilizando las herramientas adecuadas.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En casa, los estudiantes se familiarizarán con la teoría de la documentación de API y las herramientas como Swagger y Postman. En la clase siguiente, tendrán la oportunidad de aplicar lo que han aprendido documentando la API de su propio proyecto. Esta es una gran oportunidad para los estudiantes de trabajar de forma autónoma y a su propio ritmo, pero con la orientación y apoyo del profesor.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Proporcionar a los estudiantes recursos online sobre documentación de API y el uso de Swagger y Postman, pidiéndoles que los estudien en casa.
                            2. En la próxima clase, proporcionar a los estudiantes tiempo y espacio para trabajar de forma autónoma en la documentación de la API de su propio proyecto.
                            3. Durante este tiempo, el profesor estará disponible para responder preguntas, proporcionar orientación y ofrecer retroalimentación en tiempo real.
                            4. Al final de la clase, se animará a los estudiantes a reflexionar sobre lo que han aprendido y cómo lo han aplicado a su propio proyecto.
                            5. Los estudiantes deberán documentar los métodos de su API.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A10
        DB::table('activities')->insert([
            'code' => 'A10',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-users-line',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Wiki APIDoc Colaborativa',
            'type' => 'Procedimental',
            'phase' => 'Desarrollo',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Creación de métodos en API para devolver la documentación.
                            Comunicación y colaboración a través de la API.
                            Uso de la aplicación APIDoc para la documentación de la API.
                            Creación de un objeto JSON para la documentación de la API.',
            'resources' => 'Proyecto APIDoc proporcionado por el profesor.
                            Proyecto Laravel en curso donde implementar el método nuevo.
                            PC con Laravel instalado y acceso a Internet.
                            Ejemplo del patrón JSON para la documentación de la API.',
            'education_metodologies' => 'Aprendizaje orientado a proyectos: Esta actividad está basada en un enfoque de aprendizaje orientado a proyectos, donde los estudiantes aplican los conocimientos y habilidades que han adquirido para resolver problemas del mundo real. En este caso, deben diseñar y desarrollar un método para documentar su API de manera efectiva y compatible con la herramienta de documentación APIDoc.',
            'evaluation_criteria' => 'RA7-d: Elabora la documentación técnica y de usuario de servicios web.
                                    RA7-e: Utiliza herramientas colaborativas para compartir la documentación de la API.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'Esta actividad tiene como objetivo la creación de un método en la API de cada estudiante que devuelva la documentación de sus métodos. Esta se almacenará en un proyecto de clases colaborativo todas las APIs creadas en clase y su documentación de modo que toda la clase pueda acceder a ella.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Los estudiantes deberán familiarizarse con el proyecto APIDoc proporcionado por el profesor.
                            2. A continuación, deberán crear un nuevo método en su propia API que devuelva la documentación de todos sus métodos, siguiendo el patrón proporcionado.
                            3. Después de que se haya creado este método, los estudiantes deberán conectar su API al proyecto APIDoc, proporcionando la dirección IP un usuario y contraseña necesaria para que APIDoc pueda recoger la información.
                            4. APIDoc proporcionará a los estudiantes un listado de las APIs de toda la clase, junto con la documentación de sus métodos.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Actividad A11
        DB::table('activities')->insert([
            'code' => 'A11',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-dice',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'API Battle',
            'type' => 'Procedimental',
            'phase' => 'Consolidación',
            'sessions' => '2 sessiones',
            'estimated_time' => '110 minutos',
            'contents' => 'Métodos CRUD y su documentación.
                            Estrategias de juego y toma de decisiones.
                            Construcción de API y su documentación.',
            'resources' => 'Cartas de Método CRUD, cartas de Acción, y cartas de Documentación.',
            'education_metodologies' => 'Gamificación: se utilizan elementos de diseño de juegos en este caso cartas, con contenidos educativos (métodos, acciones y documentación de una API) para aumentar el compromiso y motivación de los estudiantes.',
            'evaluation_criteria' => 'RA4-d: Aplica técnicas de desarrollo de servicios web.
                                    RA7-a: Documenta adecuadamente los servicios web.
                                    RA7-c: Selecciona las técnicas adecuadas para la implementación de los servicios web.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'API Battle" es un juego estratégico de construcción y documentación de APIs. Los estudiantes utilizan cartas de Método CRUD para desarrollar su propia API, añadiendo cartas de Documentación para describir sus funciones y ganar más puntos. También disponen de cartas de Acción, que permiten interactuar con otros jugadores, modificar su propia API, o cambiar la dinámica del juego. El objetivo final es construir y documentar la API más completa y funcional posible. El juego termina cuando se agoten las cartas o no se puedan jugar más, siendo ganador quien haya acumulado más puntos a través de la construcción efectiva de su API y su correcta documentación.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                            1. Cada juego de "API Battle" consta de 100 cartas en total: 25 cartas de Método CRUD (5 para cada operación CRUD), 50 cartas de Acción y 25 cartas de Documentación.
                            2. Cada API representada en el juego se compone de un máximo de 10 cartas, que incluyen cartas de Método CRUD y cartas de Documentación.
                            3. Las cartas de Acción incluyen:
                            • "Error 404": Elige un oponente. Ese jugador debe descartar una carta de Método CRUD de su mano.
                            • "Bug": Elige un oponente. Ese jugador debe descartar una carta de Acción de su mano.
                            • "Method GET": Te permite robar una carta de Método CRUD del tablero de tu oponente.
                            • "Cache Hit": Te permite reutilizar una carta de Acción de la pila de descarte.
                            • " Update Version": Elige una carta de Método CRUD en juego. Esta carta vale el doble de puntos.
                            • "DDoS Attack": Todos los oponentes no pueden jugar cartas de Acción en su próximo turno.
                            • "Firewall": Bloquea una carta de Acción que haya sido jugada contra ti.
                            • "Method POST": Te permite redirigir una carta de Acción jugada por un oponente hacia otro jugador.
                            • "Endpoint Deprecation": Elige una carta de Método CRUD en juego de un oponente. Ese jugador debe descartarla y devolverla al mazo.
                            • "OAuth Token": Protege al jugador de cualquier carta de Acción jugada contra él en el próximo turno.
                            • "API Gateway": Te permite jugar dos cartas CRUD en tu turno.
                            • "Refactor": Te permite intercambiar todas las cartas CRUD en el tablero de tu oponente por las que tienes en tu tablero. Para poder utilizar esta carta, debes tener al menos una carta de Método CRUD en tu tablero.
                            4. Cada jugador recibe al inicio del juego un total de 7 cartas, las cuales pueden ser una combinación de cartas de Método CRUD, de Acción y de Documentación.
                            5. Las cartas de documentación no se pueden jugas por separado y siempre van ligadas a las cartas CRUD, por lo que si una carta CRUD se ve afectada por una carta de Acción la carta de documentación también se verá afectada. 
                            6. Durante su turno, cada jugador puede jugar una carta de Método CRUD de su mano y, si lo desea, complementarla con una carta de Documentación. Esto representa la documentación de un método de la API. También pueden jugar una carta de Acción para influir en el juego.
                            7. Los jugadores toman cartas del mazo hasta que éste se agote.
                            8. El juego termina cuando se agota el mazo o cuando un jugador consigue formar una API CRUD documentada.
                            9. Cada carta CRUD jugada vale 2 punto, y cada carta de Documentación jugada con una carta CRUD vale 1 punto adicional. Las cartas de Acción no otorgan puntos.
                            10. El jugador con más puntos al final del juego, gana el juego.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // A12: Investigación sobre las APIs externas
        DB::table('activities')->insert([
            'code' => 'A12',
            'subject' => 'DWES',
            'icon' => 'fa-brands fa-searchengin',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Investigación sobre las APIs externas',
            'type' => 'Procedimental',
            'phase' => 'Consolidación',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Integración de servicios web en aplicaciones.',
            'resources' => 'Proyecto Laravel en curso donde consumir la API externa.
                            PC con Laravel instalado y acceso a Internet.',
            'education_metodologies' => 'Aprendizaje Basado en Problemas: Realizarás',
            'evaluation_criteria' => 'RA7-f: Se ha verificado el funcionamiento del servicio Web.
                                    RA7-g: Se ha consumido el servicio Web.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'Esta actividad individual tiene como objetivo que los estudiantes busquen y elijan un servicio web, investiguen su documentación, lo integren en su propio proyecto y verifiquen su funcionamiento. A través de esta actividad, los estudiantes tendrán la oportunidad de explorar diferentes servicios web y aprender cómo implementarlos en sus propios proyectos.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. Cada estudiante seleccionará un servicio web de una lista proporcionada por el profesor o puede seleccionar uno de su interés.
                        2. Los estudiantes deben estudiar la documentación del servicio web seleccionado y entender cómo funciona.
                        3. Los estudiantes integrarán el servicio web seleccionado en su propio proyecto.
                        4. Los estudiantes verificarán el correcto funcionamiento del servicio web en su proyecto.
                        5. Cada estudiante creará un documento describiendo el servicio web, su funcionalidad, cómo fue integrado y cómo funciona dentro de su proyecto.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // A13: Laboratorio de integración de servicios web
        DB::table('activities')->insert([
            'code' => 'A13',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-person-arrow-down-to-line',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Laboratorio de integración de servicios web',
            'type' => 'Procemimental',
            'phase' => 'Desarrollo',
            'sessions' => '1 sesión',
            'estimated_time' => '55 minutos',
            'contents' => 'Integración de servicios web
                            Consumo de servicios web a través de CRUD (Crear, Leer, Actualizar, Eliminar)',
            'resources' => 'Proyecto APIDOC de la clase
                            Proyecto Laravel en curso donde consumir la API de los compañeros.
                            PC con Laravel instalado y acceso a Internet.',
            'education_metodologies' => 'Aprendizaje basado en proyectos:',
            'evaluation_criteria' => 'RA7-f: Se ha verificado el funcionamiento del servicio Web.
                                    RA7-g: Se ha consumido el servicio Web.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad de laboratorio, los estudiantes tienen la tarea de integrar en su propio proyecto la API de un compañero de clase, proporcionada a través de la plataforma APIDoc. Los estudiantes crearán un conjunto de operaciones CRUD que consuman esta API. Además, deberán documentar y verificar la funcionalidad del servicio web en su propio proyecto.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. Cada estudiante seleccionará una API de un compañero de clase de la plataforma APIDoc.
                        2. Los estudiantes deben estudiar la documentación de la API seleccionada y entender cómo funciona.
                        3. Los estudiantes integrarán la API seleccionada en su propio proyecto, creando operaciones CRUD que consuman dicha API.
                        4. Los estudiantes verificarán el correcto funcionamiento de las operaciones CRUD y, por ende, del consumo de la API en su proyecto.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // A14: API Caza Tesoros
        DB::table('activities')->insert([
            'code' => 'A14',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-skull-crossbones',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'API Caza Tesoros',
            'type' => 'Procemimental',
            'phase' => 'Consolidación',
            'sessions' => '2 sessiones',
            'estimated_time' => '110 minutos',
            'contents' => 'Integración de servicios web
                            Consumo de servicios web.',
            'resources' => 'Proyecto APIDOC de la clase
                            Proyecto Laravel en curso donde consumir la API de los compañeros.
                            PC con Laravel instalado y acceso a Internet.',
            'education_metodologies' => 'Gamificación: Realizarás',
            'evaluation_criteria' => 'RA7-f) Se ha verificado el funcionamiento del servicio Web.
                                    RA7-g) Se ha consumido el servicio Web.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En el API Caza tesoros, los estudiantes se dividirán en equipos quienes deberán buscar una lista de "tesoros". Cada "tesoro" es realmente un conjunto de datos que deben recuperar utilizando una API específica.
                            Por ejemplo, en una API meteorológica un "tesoro" puede ser "la temperatura actual en Denia" y los estudiantes deberán utilizar una API para encontrar esa información.
                            Los equipos tendrán que leer y entender la documentación de cada API para determinar cómo hacer las solicitudes correctas para obtener los datos que necesitan. El primer equipo que recoja todos los "tesoros" gana.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. El profesor prepara una lista de "tesoros" o datos a buscar. Cada "tesoro" tiene asignado un valor en puntos. Además, un bonus de 3 puntos se otorgará al equipo que recupere el "tesoro" primero. El profesor también proporcionará APIs adicionales a través de APIDOC.
                        2. Los estudiantes se dividen en equipos y se les entrega la lista de "tesoros". Cada equipo tendrá acceso a la APIDOC para explorar las APIs disponibles, incluyendo las adicionales proporcionadas por el profesor.
                        3. Se otorgará a los equipos un periodo de preparación de 15 minutos. Durante este tiempo, los estudiantes deben diseñar su estrategia para la caza del tesoro, lo que incluye la preparación de su controlador y vista para mostrar los "tesoros" que obtengan.
                        4. Al finalizar el tiempo de preparación, cada equipo debe trabajar en conjunto para leer y entender la documentación de las diferentes APIs para determinar cómo hacer las solicitudes correctas para obtener los datos. Los equipos pueden optar por dividirse para trabajar en diferentes "tesoros" al mismo tiempo.
                        5. Los equipos implementarán en su controlador el método para realizar las solicitudes a las APIs y recuperar los "tesoros". Este método debe estar diseñado para interactuar con una vista que mostrará los datos recuperados.
                        6. Una vez que un equipo recupera un "tesoro", avisar al profesor, quien les otorgará la cantidad correspondiente de puntos.
                        7. La caza del tesoro continúa hasta que todos los "tesoros" hayan sido recuperados o hasta que se agote el tiempo del juego. El equipo con más puntos al final del juego es el ganador.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // AA1: Laboratorio de registro y autenticación con roles y permisos
        DB::table('activities')->insert([
            'code' => 'AA1',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-user-lock',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Laboratorio de registro y autenticación con roles y permisos',
            'estimated_time' => null,
            'type' => 'Procemimental',
            'phase' => 'Ampliación',
            'sessions' => null,
            'contents' => 'Autenticación y autorización en aplicaciones web con Laravel.
                            Implementación de roles y permisos en un sistema de autenticación y autorización.
                            Uso de sessiones y cookies para mantener al usuario autenticado.
                            Codificación segura y prácticas de programación defensiva.',
            'resources' => 'Solución de la Actividad 2
                            Documentación y tutoriales sobre autenticación y autorización en Laravel
                            Herramientas de desarrollo de software para la implementación y prueba de aplicaciones web',
            'education_metodologies' => 'Aprendizaje Basado en Problemas: Trabajarán en un problema realista que requiere la implementación de un sistema de autenticación y autorización con roles y permisos en la aplicación desarrollada en la Actividad 2.',
            'evaluation_criteria' => 'RA4-b: Se espera que los estudiantes utilicen sessiones para mantener al usuario autenticado en la aplicación.
                                    RA4-e: Deberán implementar el uso de cookies para mantener cierta información del usuario autenticado.
                                    RA4-f: Se escribirá una aplicación que integre mecanismos de autenticación de usuarios utilizando Laravel.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad, los estudiantes ampliarán la aplicación web desarrollada en la Actividad 2, agregando un sistema de autenticación y autorización que soporte roles y permisos. Diferentes usuarios tendrán diferentes niveles de acceso a la aplicación dependiendo de su rol.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. Tomar como base la solución de la Actividad 2.
                        2. Diseñar un sistema de autenticación y autorización que soporte roles y permisos.
                        3. Implementar el sistema de autenticación y autorización en la aplicación existente utilizando Laravel. Asegurarse de que los usuarios puedan registrarse, iniciar sesión y cerrar sesión, y que los usuarios con diferentes roles tengan diferentes niveles de acceso.
                        4. Utilizar sessiones y cookies para mantener al usuario autenticado y guardar cierta información de él.
                        5. Probar el sistema para asegurarse de que funciona correctamente y de que es seguro.
                        6. Reflexionar sobre lo que han aprendido y cómo podrían mejorar su sistema.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // AA2: Análisis de un caso de estudio de una aplicación con necesidad de middleware avanzado y propuesta de solución
        DB::table('activities')->insert([
            'code' => 'AA2',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-microscope',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Análisis de un caso de estudio de una aplicación con necesidad de middleware avanzado y propuesta de solución',
            'estimated_time' => null,
            'type' => 'Procemimental',
            'phase' => 'Ampliación',
            'sessions' => null,
            'contents' => 'Comprender la función y necesidad de un middleware avanzado en una aplicación.
                            Identificar y analizar problemas en una aplicación que necesita middleware avanzado.
                            Propuesta de solución usando middleware avanzado.',
            'resources' => 'Caso de estudio proporcionado por el profesor.
                            PC con acceso a internet.
                            Entorno de desarrollo Laravel instalado.
                            Recursos de aprendizaje y documentación sobre middleware avanzado en Laravel.',
            'education_metodologies' => 'Aprendizaje basado en problemas: Los estudiantes, mediante el análisis de un caso de estudio real, identificarán los problemas y buscarán soluciones adecuadas utilizando middleware avanzado. Esta metodología fomenta el pensamiento crítico, la toma de decisiones y la habilidad para resolver problemas.',
            'evaluation_criteria' => 'RA4-d: Analiza y compara distintos frameworks para desarrollar servicios web.
                                    RA4-g: Desarrolla un servicio web completo que integre todos los conceptos y tecnologías estudiadas en el curso.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad, los estudiantes analizarán un caso de estudio proporcionado por el profesor de una aplicación existente que tiene problemas que podrían ser solucionados con la implementación de un middleware avanzado. Los estudiantes deben analizar el caso, identificar los problemas y proponer una solución adecuada que incluya la utilización de middleware avanzado.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. Los estudiantes deberán leer y entender el caso de estudio proporcionado por el profesor.
                        2. Identificar los problemas existentes en la aplicación presentada en el caso de estudio.
                        3. Realizar una investigación sobre cómo el middleware avanzado podría resolver los problemas identificados.
                        4. Formular una propuesta de solución detallada que incluya la implementación de middleware avanzado en la aplicación.
                        5. Presentar la propuesta de solución al profesor y a la clase para su discusión y evaluación.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // AA3: Integración de OpenWeatherMap API con Chat GPT
        DB::table('activities')->insert([
            'code' => 'AA3',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-cloud-sun',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Integración de OpenWeatherMap API con Chat GPT',
            'estimated_time' => null,
            'type' => 'Procemimental',
            'phase' => 'Ampliación',
            'sessions' => null,
            'contents' => 'Creación y manejo de formularios en Laravel.
                            Integración y consumo de la API de OpenWeatherMap.
                            Integración y uso de la API de ChatGPT de OpenAI.
                            Generación de recomendaciones de actividades con base en las condiciones climáticas.',
            'resources' => 'Entorno de desarrollo PHP con Laravel instalado.
                            Cuentas en OpenWeatherMap y OpenAI para obtener las claves de las APIs.
                            Documentación de las APIs de OpenWeatherMap y ChatGPT.',
            'education_metodologies' => 'Aprendizaje basado en proyectos: Los estudiantes aplicarán los conceptos aprendidos para construir un proyecto del mundo real.',
            'evaluation_criteria' => 'RA7-f: Se ha verificado el funcionamiento del servicio Web.
                                    RA7-g: Se ha consumido el servicio Web.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad, se integrará la aplicación Laravel con la API de OpenWeatherMap para obtener el pronóstico del clima de una ciudad en específico ingresada a través de un formulario. Posteriormente, se utilizará la API de ChatGPT de OpenAI para generar recomendaciones de actividades basadas en las condiciones climáticas obtenidas.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. Crea un nuevo proyecto en Laravel o utiliza un proyecto existente.
                        2. Desarrolla un formulario que permita a los usuarios ingresar el nombre de una ciudad.
                        3. Implementa la funcionalidad en el backend para tomar el input del formulario y realizar una consulta a la API de OpenWeatherMap para obtener el pronóstico del clima para esa ciudad.
                        4. Con el pronóstico del clima obtenido, genera una consulta a la API de ChatGPT para pedir recomendaciones de actividades basadas en las condiciones climáticas de la ciudad.
                        5. Muestra la respuesta de ChatGPT en una vista, junto con la información del clima de la ciudad.
                        6. Asegúrate de manejar posibles errores, como entradas inválidas de ciudad o problemas de conexión con las APIs.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // AR0: Glosario Automático de Conceptos
        DB::table('activities')->insert([
            'code' => 'AR0',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-book-atlas',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Glosario Automático de Conceptos',
            'estimated_time' => null,
            'type' => 'Procemimental',
            'phase' => 'Refuerzo',
            'sessions' => null,
            'contents' => 'Comprensión de la funcionalidad de middleware en Laravel.
                            Creación de middleware personalizado en Laravel.
                            Implementación de la gestión de logs utilizando middleware.
                            Escritura y lectura de logs en Laravel.',
            'resources' => 'Entorno de desarrollo PHP con Laravel instalado.
                            Acceso a la línea de comandos y a un editor de texto.',
            'education_metodologies' => 'Aprendizaje activo: Los estudiantes participan activamente en la creación del glosario, lo que les permite entender mejor y recordar estos conceptos.',
            'evaluation_criteria' => 'RA4-d) Se han identificado y caracterizado los mecanismos disponibles para la autentificación de usuarios.
                                    RA7-a) Se han reconocido las características propias y el ámbito de aplicación de los servicios Web.
                                    RA7-c) Se han identificado las tecnologías y los protocolos implicados en la publicación y utilización de servicios Web.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad, los estudiantes trabajarán en sus proyectos Laravel individuales para crear un glosario automatizado de conceptos de API. Esto proporcionará una manera práctica de revisar y comprender los conceptos clave que han aprendido a lo largo del curso.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. Los estudiantes deben revisar los conceptos de API que han aprendido a lo largo del curso, seleccionando los que consideren más importantes.
                        2. Cada estudiante debe implementar un formulario en su proyecto Laravel donde se pueda ingresar el concepto, una definición y las imágenes correspondientes del código.
                        3. Los estudiantes deben utilizar este formulario para agregar todos los conceptos clave de API a su glosario.
                        4. El glosario se genera automáticamente en el proyecto Laravel, permitiendo a los estudiantes ver todos los conceptos que han añadido en un solo lugar.
                        5. Finalmente, cada estudiante puede presentar su glosario a la clase, explicando los conceptos y mostrando cómo se han aplicado en su proyecto.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // AR1: Implementación de un middleware para gestión de logs
        DB::table('activities')->insert([
            'code' => 'AR1',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-bridge-circle-exclamation',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Implementación de un middleware para gestión de logs',
            'estimated_time' => null,
            'type' => 'Procemimental',
            'phase' => 'Refuerzo',
            'sessions' => null,
            'contents' => 'Comprensión de la funcionalidad de middleware en Laravel.
                            Creación de middleware personalizado en Laravel.
                            Implementación de la gestión de logs utilizando middleware.
                            Escritura y lectura de logs en Laravel.',
            'resources' => 'Entorno de desarrollo PHP con Laravel instalado.
                            Acceso a la línea de comandos y a un editor de texto.',
            'education_metodologies' => 'Aprendizaje basado en proyectos: Los estudiantes aplicarán los conceptos aprendidos para construir un componente real en una aplicación de Laravel.',
            'evaluation_criteria' => 'RA4-d) Se han identificado y caracterizado los mecanismos disponibles para la autentificación de usuarios.
                                    RA4-g) Se han utilizado herramientas y entornos para facilitar la programación, prueba y depuración del código.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'Esta actividad tiene como objetivo la creación de un middleware personalizado en Laravel para manejar el registro de logs. A través de este middleware, se registrarán las solicitudes entrantes y las respuestas salientes de la aplicación. Esta actividad ayudará a los estudiantes a entender la funcionalidad de los middleware en Laravel y cómo se pueden utilizar para implementar la gestión de logs.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. Crea un nuevo proyecto en Laravel o utiliza un proyecto existente.
                        2. Utiliza la línea de comandos para crear un middleware personalizado utilizando el comando de Artisan.
                        3. Dentro de tu middleware personalizado, implementa la funcionalidad para registrar las solicitudes entrantes y las respuestas salientes utilizando la funcionalidad de registro de Laravel.
                        4. Registra tu middleware personalizado en el kernel de tu aplicación Laravel.
                        5. Realiza varias solicitudes a tu aplicación y verifica que las solicitudes y las respuestas se estén registrando correctamente.
                        6. Explora los logs generados y comprende su estructura y cómo proporcionan información sobre las interacciones con tu aplicación.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // AR2: Videotutorial sobre cómo se documenta una API
        DB::table('activities')->insert([
            'code' => 'AR2',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-photo-film',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Videotutorial sobre cómo se documenta una API',
            'estimated_time' => null,
            'type' => 'Procemimental',
            'phase' => 'Refuerzo',
            'sessions' => null,
            'contents' => 'Detalles sobre la documentación de tu API personal.
                            Uso de herramientas de documentación de API.
                            Creación de un videotutorial utilizando Flipgrid.',
            'resources' => 'Tu API personal creada en la Actividad 9.
                            Herramienta de documentación de API (Postman, Swagger, etc.).
                            Cuenta de Flip para la creación del videotutorial.',
            'education_metodologies' => 'Aprendizaje basado en proyectos: Los estudiantes crearán un proyecto práctico - un videotutorial - que les permitirá aplicar y demostrar lo que han aprendido.',
            'evaluation_criteria' => 'RA7-e) Se ha creado el documento de descripción del servicio Web.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'En esta actividad, los estudiantes crearán un videotutorial sobre cómo documentar su API personal que fue creada en la Actividad 9 utilizando la herramienta Flip. Este videotutorial servirá como un recurso de aprendizaje para otros estudiantes y también permitirá al estudiante demostrar su comprensión y habilidad en la documentación de una API.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. Planea tu videotutorial. Define los puntos clave que deseas cubrir sobre cómo documentaste tu API personal. Asegúrate de incluir detalles específicos sobre tu API, y también de demostrar cómo se usó una herramienta específica para documentar la API.
                        2. Crea tu videotutorial utilizando Flip. Asegúrate de hablar claramente, de seguir el plan que creaste y de mostrar todos los pasos necesarios en la pantalla.
                        3. Una vez que hayas terminado de crear el videotutorial, revísalo para asegurarte de que es claro y fácil de seguir.
                        4. Comparte tu videotutorial con tus compañeros de clase o profesor para recibir retroalimentación. Utiliza esta retroalimentación para mejorar tu videotutorial si es necesario.',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // AR3: Integración de servicios web en una aplicación existente con seguimiento de un tutorial
        DB::table('activities')->insert([
            'code' => 'AR3',
            'subject' => 'DWES',
            'icon' => 'fa-solid fa-tv',
            'subject_name' => 'Desarrollo Web en Entorno Servidor',
            'unit' => '7',
            'unit_name' => 'Autenticación, Middleware y Servicios Web',
            'name' => 'Integración de servicios web en una aplicación existente con seguimiento de un tutorial',
            'estimated_time' => null,
            'type' => 'Procemimental',
            'phase' => 'Refuerzo',
            'sessions' => null,
            'contents' => 'Entendimiento de los servicios web y su uso.
                            Integración de servicios web en una aplicación existente.
                            Seguimiento de un tutorial en línea para la integración de servicios web.',
            'resources' => 'Un proyecto de aplicación existente en Laravel.
                            Acceso a la web para seguir un tutorial en línea.
                            Un servicio web a integrar (ej. Google Maps API, Stripe API, etc.).',
            'education_metodologies' => 'Aprendizaje autodirigido basado en proyectos: Los estudiantes aplicarán los conceptos aprendidos para construir un componente real en una aplicación de Laravel.',
            'evaluation_criteria' => 'RA7-f) Se ha verificado el funcionamiento del servicio Web.
                                    RA7-g) Se ha consumido el servicio Web.',
            'learning_results' => '',
            'didactic_objectives' => '',
            'description' => 'Esta actividad busca fortalecer las habilidades de los estudiantes en la integración de servicios web en aplicaciones existentes. Los estudiantes seleccionarán un servicio web a integrar, como una API de mapas o una API de pago, y seguirán un tutorial en línea para realizar la integración en una aplicación Laravel existente.',
            'statement' => '',
            'steps' => 'Pasos a seguir:
                        1. Selecciona un servicio web para integrar en tu aplicación existente. Puedes seleccionar una API de mapas, una API de pago, una API de clima, etc.
                        2. Busca un tutorial en línea que te guíe en la integración de este servicio web en una aplicación Laravel. Asegúrate de que el tutorial esté actualizado y sea relevante para tu versión de Laravel.
                        3. Sigue el tutorial paso a paso, asegurándote de entender cada paso antes de avanzar al siguiente.
                        4. Una vez que hayas completado la integración, prueba la funcionalidad en tu aplicación para asegurarte de que funciona correctamente.
                        5. Reflexiona sobre el proceso y lo que has aprendido. ¿Qué partes del tutorial encontraste más desafiantes? ¿Qué nuevas habilidades o conocimientos has adquirido?',
            'evaluation' => '',
            'author' => 'Guillermo Garrido Portes',
            'solution_url' => '',
            'solution' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
