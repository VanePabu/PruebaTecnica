<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuestros Servicios</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">

    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
        }

        .bg-blur {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 800px;
            background: linear-gradient(rgba(0, 0, 0, 0.322), rgb(10, 10, 10)), url('img/fondoDeServicios.png');
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        .main-content {
            padding-top: 50vh;
            padding-left: 20vh;
            color: white;
        }

        .servicio {
            display: none;
            max-width: 70%;
            margin: auto;
        }

        .servicio.active {
            display: block;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        .btn-service {
            background-color: white;
            color: black;
            border-radius: 999px;
            padding: 8px 24px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-service:hover {
            background-color: #E5E7EB;
        }

        .btn-service.active {
            background-color: red;
        }
    </style>
</head>

<body class="bg-black relative">
    <!-- Fondo difuminado -->
    <div class="bg-blur"></div>

    <!-- Navbar -->
    <nav class="px-4 py-5">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="flex items-center">
                <img src="{{ asset('img/logoPT.png') }}" alt="Logo" class="w-40 h-20 mr-2">
            </a>

            <!-- Secciones -->
            <div class="flex gap-4 text-white">
                <a href="{{ route('servicios') }}">Nuestros servicios</a>
                <a href="#">Portafolio</a>
                <a href="#">Acerca de</a>
                <a href="#">Blog</a>
                <a href="#" class="bg-red-500 rounded-full px-3 py-1">Contactanos</a>
            </div>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container mx-auto py-60 px-4 text-white relative z-10">
        <h1 class="text-4xl font-bold mb-4">Nuestros Servicios</h1>
        <br />
        <div class="w-1/3">
            <h3 class="text-lg">En PDT, fusionamos la creatividad con la tecnología para llevar tus proyectos al
                siguiente nivel. Desde el desarrollo de software a medida hasta la creación de identidades visuales
                impactantes, diseño de aplicaciones intuitivas, y producciones audiovisuales de calidad cinematográfica,
                somos una agencia de medios completa que trabaja incansablemente para dar vida a tus visiones.</h3>
        </div>
    </div>

    <!-- Botones de servicios -->
    <div class="btn-container">
        <button id="btn-programacion" class="btn-service" onclick="mostrarServicio(this, 'programacion')"
            class="bg-white text-black rounded-full px-6 py-2 hover:bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z"
                    clip-rule="evenodd" />
            </svg><span class="circulo-indicador"></span></button>
        <button id="btn-diseno" class="btn-service" onclick="mostrarServicio(this, 'diseno')"
            class="bg-white text-black rounded-full px-6 py-2 hover:bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M20.599 1.5c-.376 0-.743.111-1.055.32l-5.08 3.385a18.747 18.747 0 0 0-3.471 2.987 10.04 10.04 0 0 1 4.815 4.815 18.748 18.748 0 0 0 2.987-3.472l3.386-5.079A1.902 1.902 0 0 0 20.599 1.5Zm-8.3 14.025a18.76 18.76 0 0 0 1.896-1.207 8.026 8.026 0 0 0-4.513-4.513A18.75 18.75 0 0 0 8.475 11.7l-.278.5a5.26 5.26 0 0 1 3.601 3.602l.502-.278ZM6.75 13.5A3.75 3.75 0 0 0 3 17.25a1.5 1.5 0 0 1-1.601 1.497.75.75 0 0 0-.7 1.123 5.25 5.25 0 0 0 9.8-2.62 3.75 3.75 0 0 0-3.75-3.75Z"
                    clip-rule="evenodd" />
            </svg><span class="circulo-indicador"></span></button>
        <button id="btn-aplicaciones" class="btn-service" onclick="mostrarServicio(this, 'aplicaciones')"
            class="bg-white text-black rounded-full px-6 py-2 hover:bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                    clip-rule="evenodd" />
            </svg><span class="circulo-indicador"></span></button>
        <button id="btn-fotografia" class="btn-service" onclick="mostrarServicio(this, 'fotografia')"
            class="bg-white text-black rounded-full px-6 py-2 hover:bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path d="M12 9a3.75 3.75 0 1 0 0 7.5A3.75 3.75 0 0 0 12 9Z" />
                <path fill-rule="evenodd"
                    d="M9.344 3.071a49.52 49.52 0 0 1 5.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 0 1-3 3h-15a3 3 0 0 1-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 0 0 1.11-.71l.822-1.315a2.942 2.942 0 0 1 2.332-1.39ZM6.75 12.75a5.25 5.25 0 1 1 10.5 0 5.25 5.25 0 0 1-10.5 0Zm12-1.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                    clip-rule="evenodd" />
            </svg><span class="circulo-indicador"></span></button>
    </div>

    <!-- Contenedor de los servicios -->
    <div id="servicios-container" class="text-white pt-20">
        <!-- Programacion -->
        <div id="programacion" class="servicio gap-4">
            <div class="relative rounded-xl overflow-hidden shadow-md w-200">
                <img src="{{ asset('img/programacionS.png') }}" alt="programacion" class=" object-cover object-center ">
                <div class="flex items-end pl-4 pb-4 absolute bottom-0 left-0 text-white text-4xl">
                    <!-- Texto -->
                    <div>
                        <h3 class="font-bold">Desarrollo de software</h3>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 pt-24 pb-20 gap-40">
                <div>
                    <h1 class="font-bold">Aplicaciones a Medida:</h1>
                    <br />
                    <h3>En PDT, no solo creamos aplicaciones,
                        construimos soluciones personalizadas para
                        tus necesidades específicas. Desde concepto
                        hasta desarrollo, cada línea de código está
                        diseñada para potenciar tu visión.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Experiencias Interactivas:</h1>
                    <br />
                    <h3>Más allá de la funcionalidad, nos enfocamos
                        en la interactividad. Desarrollamos aplicaciones
                        que no solo resuelven problemas, sino que
                        también crean experiencias inmersivas y
                        memorables para tus usuarios.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Chatbots Inteligentes:</h1>
                    <br />
                    <h3>La comunicación 24/7 está a solo un clic de
                        distancia. Nuestros chatbots inteligentes
                        están diseñados para brindar respuestas
                        rápidas y precisas, mejorando la experiencia
                        del usuario y optimizando la eficiencia.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Automatización Empresarial:</h1>
                    <br />
                    <h3>Optimizamos tus procesos con soluciones
                        CRM y aplicaciones empresariales. Desde
                        la gestión de clientes hasta la automatización
                        de tareas, nuestro enfoque es mejorar la
                        eficiencia y hacer crecer tu negocio.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Integración Perfecta:</h1>
                    <br />
                    <h3>Tu ecosistema digital merece coherencia.
                        Desarrollamos aplicaciones y chatbots que se
                        integran sin esfuerzo con tus sistemas
                        existentes, asegurando una experiencia de
                        usuario fluida y eficiente.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Análisis y Mejora Continua:</h1>
                    <br />
                    <h3>El desarrollo no se detiene en el lanzamiento.
                        Implementamos análisis detallados para
                        comprender el rendimiento de tus aplicaciones
                        y chatbots, asegurando mejoras continuas
                        para mantener tu negocio en la cima.</h3>
                </div>
            </div>
        </div>

        <!-- Diseño -->
        <div id="diseno" class="servicio grid grid-cols-3 gap-4">
            <div class="relative rounded-xl overflow-hidden shadow-md w-200">
                <img src="{{ asset('img/DiseñoS.png') }}" alt="programacion" class=" object-cover object-center ">
                <div class="flex items-end pl-4 pb-4 absolute bottom-0 left-0 text-white text-4xl">
                    <!-- Texto -->
                    <div>
                        <h3 class="font-bold">Diseño grafico</h3>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 pt-24 pb-20 gap-40">
                <div>
                    <h1 class="font-bold">Identidad Visual Impactante:</h1>
                    <br />
                    <h3>En PDT, creamos más que simples diseños;
                        construimos identidades visuales
                        impactantes. Desde logotipos hasta
                        materiales de marketing, nuestro equipo
                        de diseñadores gráficos da vida a tu marca
                        de una manera que resuena y perdura.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Creatividad sin Límites:</h1>
                    <br />
                    <h3>Imágenes que cuentan historias y capturan
                        la esencia de tu mensaje. Nuestros diseñadores
                        exploran límites creativos para darle a tu
                        proyecto una apariencia única y memorable./h3>
                </div>
                <div>
                    <h1 class="font-bold">Diseño Responsivo:</h1>
                    <br />
                    <h3>La estética no se trata solo de lo visual, sino
                        también de la adaptabilidad. Creamos
                        diseños que se adaptan a diferentes
                        plataformas y dispositivos, asegurando
                        una experiencia coherente y atractiva en
                        cualquier pantalla.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Comunicación Visual Efectiva:</h1>
                    <br />
                    <h3>Cada diseño tiene un propósito. Nuestro
                        enfoque se centra en comunicar tu mensaje
                        de manera efectiva, utilizando elementos
                        visuales que conectan y resuenan
                        con tu audiencia.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Colaboración Creativa:</h1>
                    <br />
                    <h3>Tu visión se une a nuestra creatividad.
                        Colaboramos estrechamente contigo
                        para entender tus metas y valores,
                        creando diseños que no solo se ven bien,
                        sino que también comunican la esencia
                        de tu proyecto.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Evolución Estética Continua:</h1>
                    <br />
                    <h3>El diseño no es estático, y tampoco lo es
                        nuestro enfoque. Estamos comprometidos
                        con la evolución constante de tus elementos
                        visuales para mantener tu presencia fresca
                        y relevante en un mundo en constante cambio.</h3>
                </div>
            </div>
        </div>

        <!-- Aplicaciones -->
        <div id="aplicaciones" class="servicio grid grid-cols-3 gap-4">
            <div class="relative rounded-xl overflow-hidden shadow-md w-200">
                <img src="{{ asset('img/aplicacionesS.png') }}" alt="programacion"
                    class=" object-cover object-center ">
                <div class="flex items-end pl-4 pb-4 absolute bottom-0 left-0 text-white text-4xl">
                    <!-- Texto -->
                    <div>
                        <h3 class="font-bold">Desarrollo de aplicaciones</h3>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 pt-24 pb-20 gap-40">
                <div>
                    <h1 class="font-bold">Aplicaciones a Medida:</h1>
                    <br />
                    <h3>En PDT, no solo creamos aplicaciones,
                        construimos soluciones personalizadas para
                        tus necesidades específicas. Desde concepto
                        hasta desarrollo, cada línea de código está
                        diseñada para potenciar tu visión.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Experiencias Interactivas:</h1>
                    <br />
                    <h3>Más allá de la funcionalidad, nos enfocamos
                        en la interactividad. Desarrollamos aplicaciones
                        que no solo resuelven problemas, sino que
                        también crean experiencias inmersivas y
                        memorables para tus usuarios.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Chatbots Inteligentes:</h1>
                    <br />
                    <h3>La comunicación 24/7 está a solo un clic de
                        distancia. Nuestros chatbots inteligentes
                        están diseñados para brindar respuestas
                        rápidas y precisas, mejorando la experiencia
                        del usuario y optimizando la eficiencia.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Automatización Empresarial:</h1>
                    <br />
                    <h3>Optimizamos tus procesos con soluciones
                        CRM y aplicaciones empresariales. Desde
                        la gestión de clientes hasta la automatización
                        de tareas, nuestro enfoque es mejorar la
                        eficiencia y hacer crecer tu negocio.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Integración Perfecta:</h1>
                    <br />
                    <h3>Tu ecosistema digital merece coherencia.
                        Desarrollamos aplicaciones y chatbots que se
                        integran sin esfuerzo con tus sistemas
                        existentes, asegurando una experiencia de
                        usuario fluida y eficiente.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Análisis y Mejora Continua:</h1>
                    <br />
                    <h3>El desarrollo no se detiene en el lanzamiento.
                        Implementamos análisis detallados para
                        comprender el rendimiento de tus aplicaciones
                        y chatbots, asegurando mejoras continuas
                        para mantener tu negocio en la cima.</h3>
                </div>
            </div>
        </div>

        <!-- Fotografia -->
        <div id="fotografia" class="servicio grid grid-cols-3 gap-4">
            <div class="relative rounded-xl overflow-hidden shadow-md w-200">
                <img src="{{ asset('img/fotografiaS.png') }}" alt="programacion"
                    class=" object-cover object-center ">
                <div class="flex items-end pl-4 pb-4 absolute bottom-0 left-0 text-white text-4xl">
                    <!-- Texto -->
                    <div>
                        <h3 class="font-bold">Produccion audiovisual</h3>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 pt-24 pb-20 gap-40">
                <div>
                    <h1 class="font-bold">Narrativas Visuales Inolvidables:</h1>
                    <br />
                    <h3>En PDT, transformamos ideas en experiencias
                        visuales cautivadoras. Desde videos
                        promocionales hasta contenido multimedia,
                        nuestro equipo de producción audiovisual da
                        vida a tus historias de una manera que deja
                        una impresión duradera.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Calidad Cinematográfica:</h1>
                    <br />
                    <h3>Utilizamos equipos de última generación y
                        técnicas cinematográficas para asegurar que
                        cada producción alcance estándares visuales
                        y auditivos excepcionales.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Creatividad en Movimiento:</h1>
                    <br />
                    <h3>La creatividad no tiene límites. Nuestros
                        productores audiovisuales trabajan en estrecha
                        colaboración contigo para dar vida a tus ideas,
                        creando contenido que va más allá de lo
                        estándar y deja una marca única.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Efectividad Emocional:</h1>
                    <br />
                    <h3>Cada producción tiene el poder de evocar
                        emociones. Nos esforzamos por crear
                        contenido que no solo se ve y suena bien,
                        sino que también conecta emocionalmente
                        con tu audiencia, dejando una impresión
                        duradera.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Producción Eficiente:</h1>
                    <br />
                    <h3>El tiempo es esencial. Nuestro equipo de
                        producción se compromete a entregar
                        resultados de manera eficiente sin
                        comprometer la excelencia, garantizando
                        que tu mensaje llegue en el momento
                        adecuado.</h3>
                </div>
                <div>
                    <h1 class="font-bold">Historias que Resonan:</h1>
                    <br />
                    <h3>Más allá de la imagen y el sonido, contamos
                        historias. Nuestra producción audiovisual se
                        centra en crear narrativas visuales que resuenan
                        con tu audiencia, generando un impacto
                        significativo en tu marca.</h3>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('btn-programacion').addEventListener('click', function() {
            toggleServicio('programacion');
        });

        document.getElementById('btn-diseno').addEventListener('click', function() {
            toggleServicio('diseno');
        });

        document.getElementById('btn-aplicaciones').addEventListener('click', function() {
            toggleServicio('aplicaciones');
        });

        document.getElementById('btn-fotografia').addEventListener('click', function() {
            toggleServicio('fotografia');
        });

        function toggleServicio(servicio) {
            var servicios = document.querySelectorAll('.servicio');
            servicios.forEach(function(item) {
                if (item.id === servicio) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
        }


        const btnsService = document.querySelectorAll('.btn-service');

        function mostrarContenido(btn, contenido) {

            const contenidosService = document.querySelectorAll('.contenido-service');

            contenidosService.forEach(contenido => {
                contenido.style.display = 'none';
            });

            const contenidoMostrar = document.getElementById(contenido);


            if (contenidoMostrar) {
                contenidoMostrar.style.display = 'block';
            }

            btnsService.forEach(btn => {
                btn.classList.remove('active');
            });

            btn.classList.add('active');
        }

        btnsService.forEach(btn => {
            btn.addEventListener('click', function() {
                const contenido = this.getAttribute('data-contenido');
                mostrarContenido(this, contenido);
            });
        });
    </script>
</body>

</html>
