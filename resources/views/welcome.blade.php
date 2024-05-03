<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Estilos para el navbar */
        nav {
            position: absolute;
            width: 100%;
            z-index: 10;
        }

        nav a {
            color: white;
            margin-right: 20px;
        }

        /* Estilos para las barras indicadoras */
        .bar-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            padding-bottom: 20px;
        }

        .bar {
            width: 320px;
            height: 7px;
            background-color: white;
            margin: 0 12px;
            cursor: pointer;
        }

        .active-bar {
            background-color: red;
        }

        .content {
            padding-top: 100px;
        }

        /* Estilos para los controles de video */
        .video-controls {
            position: absolute;
            bottom: 0;
            left: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
            margin-bottom: 250px;
        }

        .video-controls button {
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-black">

    <!-- Video de fondo -->
    <div class="video-container relative">
        <!-- Video 1 -->
        <video id="video1" autoplay muted loop>
            <source src="{{ asset('video/programacion.mp4') }}" type="video/mp4">
        </video>
        <!-- Video 2 -->
        <video id="video2" class="hidden" autoplay muted loop>
            <source src="{{ asset('video/diseno.mp4') }}" type="video/mp4">
        </video>

        <!-- Video 3 -->
        <video id="video3" class="hidden" autoplay muted loop>
            <source src="{{ asset('video/aplicaciones.mp4') }}" type="video/mp4">
        </video>

        <!-- Video 4 -->
        <video id="video4" class="hidden" autoplay muted loop>
            <source src="{{ asset('video/fotografia.mp4') }}" type="video/mp4">
        </video>

        <!-- Controles de video -->
        <div class="video-controls">
            <button id="pauseButton" class="bg-transparent text-white px-4 py-2 rounded-md flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path fill-rule="evenodd"
                        d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <button id="muteButton" class="bg-transparent text-white px-4 py-2 rounded-md flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path
                        d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 0 0 1.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06ZM18.584 5.106a.75.75 0 0 1 1.06 0c3.808 3.807 3.808 9.98 0 13.788a.75.75 0 0 1-1.06-1.06 8.25 8.25 0 0 0 0-11.668.75.75 0 0 1 0-1.06Z" />
                    <path
                        d="M15.932 7.757a.75.75 0 0 1 1.061 0 6 6 0 0 1 0 8.486.75.75 0 0 1-1.06-1.061 4.5 4.5 0 0 0 0-6.364.75.75 0 0 1 0-1.06Z" />
                </svg>
            </button>
        </div>



        <!-- Navbar -->
        <nav class="px-4 py-5">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo -->
                <a href="#" class="flex items-center">
                    <img src="{{ asset('img/logoPT.png') }}" alt="Logo" class="w-40 h-20 mr-2">
                </a>

                <!-- Secciones -->
                <div class="flex">
                    <a href="{{ route('servicios') }}" class="hover:text-gray-200">Nuestros servicios</a>
                    <a href="#" class="hover:text-gray-200">Portafolio</a>
                    <a href="#" class="hover:text-gray-200">Acerca de</a>
                    <a href="#" class="hover:text-gray-200">Blog</a>
                    <a href="#" class="hover:text-gray-200 bg-red-500 rounded-full px-3 py-1">Contactanos</a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Texto -->
    <div class="flex items-end pl-4 pb-4 absolute bottom-60 left-60 text-white text-4xl">
        <div class="h-20 w-4 border-l-4 border-red-500 mr-2 "></div>
        <div>
            <h3 class="font-bold"><span class="font-thin">Creamos</span> experiencias</h3>
            <h3 class="font-bold"><span class="font-thin">Consolidamos</span> sueños</h3>
        </div>
    </div>



    <!-- Indicadores de video -->
    <div class="mx-auto bar-container">
        <div id="bar1" class="bar active-bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>
        <div id="bar4" class="bar"></div>
    </div>


    <!-- Cards -->
    <div class="content relative pb-40">
        <div class="container mx-auto mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div class="relative bg-white rounded-lg overflow-hidden shadow-md">
                <img src="{{ asset('img/FtProgra.jpg') }}" alt="Card 1"
                    class="w-full h-100 object-cover object-center">
                <div class="flex items-end pl-4 pb-4 absolute bottom-0 left-0 text-white text-2xl">
                    <div class="h-16 w-4 border-l-4 border-white-500 mr-1 "></div>
                    <div>
                        <h3>Desarrollo</h3>
                        <h3 class="font-bold">Software</h3>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white rounded-lg overflow-hidden shadow-md">
                <img src="{{ asset('img/FtDise.jpg') }}" alt="Card 2" class="w-full h-100 object-cover object-center">
                <div class="flex items-end pl-4 pb-4 absolute bottom-0 left-0 text-white text-2xl">
                    <div class="h-16 w-4 border-l-4 border-white-500 mr-1 "></div>
                    <div>
                        <h3>Diseño</h3>
                        <h3 class="font-bold">Gráfico</h3>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-white rounded-lg overflow-hidden shadow-md">
                <img src="{{ asset('img/FtApli.jpg') }}" alt="Card 3" class="w-full h-100 object-cover object-center">
                <div class="flex items-end pl-4 pb-4 absolute bottom-0 left-0 text-white text-2xl">
                    <div class="h-16 w-4 border-l-4 border-white-500 mr-1 "></div>
                    <div>
                        <h3>Diseño</h3>
                        <h3 class="font-bold">Aplicaciones</h3>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="relative bg-white rounded-lg overflow-hidden shadow-md">
                <img src="{{ asset('img/FtAudi.jpg') }}" alt="Card 4"
                    class="w-full h-100 object-cover object-center">
                <div class="flex items-end pl-4 pb-4 absolute bottom-0 left-0 text-white text-2xl">
                    <div class="h-16 w-4 border-l-4 border-white-500 mr-1 "></div>
                    <div>
                        <h3>Producción</h3>
                        <h3 class="font-bold">Audiovisual</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sobrenostros -->
    <div id="sobrenostros" class="relative h-screen pt-50 flex justify-center items-center bg-cover bg-center"
        style="background-image: url('{{ asset('img/sobrenosotros.jpg') }}');">
        <div class="absolute left-60 bottom-10 transform -translate-y-1/2 text-white text-2xl gap-4">
            <div class="flex items-center gap-4">
                <div class="w-6 h-6 ml-20 mb-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm6-2.438c0-.724.588-1.312 1.313-1.312h4.874c.725 0 1.313.588 1.313 1.313v4.874c0 .725-.588 1.313-1.313 1.313H9.564a1.312 1.312 0 0 1-1.313-1.313V9.564Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="mb-20">Más de 300 sitios web</h3>
            </div>
            <div class="flex items-center mt-4 gap-4">
                <div class="w-6 h-6 mr-2 mb-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm6-2.438c0-.724.588-1.312 1.313-1.312h4.874c.725 0 1.313.588 1.313 1.313v4.874c0 .725-.588 1.313-1.313 1.313H9.564a1.312 1.312 0 0 1-1.313-1.313V9.564Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="mb-20">Más de 30 aplicaciones</h3>
            </div>
            <div class="flex items-center mt-4 gap-4">
                <div class="w-6 h-6 ml-20 mb-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm6-2.438c0-.724.588-1.312 1.313-1.312h4.874c.725 0 1.313.588 1.313 1.313v4.874c0 .725-.588 1.313-1.313 1.313H9.564a1.312 1.312 0 0 1-1.313-1.313V9.564Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h3 class="mb-2">Creación de contenido</h3>
                    <h3 class="mb-2">y manejo de redes</h3>
                </div>
            </div>
        </div>
        <div class="absolute right-40 bottom-8 transform -translate-y-1/2 text-white text-2xl gap-4">
            <div class="flex items-center">
                <div class="w-6 h-6 mr-2 mb-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm6-2.438c0-.724.588-1.312 1.313-1.312h4.874c.725 0 1.313.588 1.313 1.313v4.874c0 .725-.588 1.313-1.313 1.313H9.564a1.312 1.312 0 0 1-1.313-1.313V9.564Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="mb-20">Realización de contenido audiovisual</h3>
            </div>
            <div class="flex items-center mt-4 gap-4">
                <div class="w-6 h-6 ml-20 mb-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm6-2.438c0-.724.588-1.312 1.313-1.312h4.874c.725 0 1.313.588 1.313 1.313v4.874c0 .725-.588 1.313-1.313 1.313H9.564a1.312 1.312 0 0 1-1.313-1.313V9.564Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="mb-20">Más de 300 piezas creadas</h3>
            </div>
            <div class="flex items-center mt-4 gap-4">
                <div class="w-6 h-6 mr-2 mb-20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm6-2.438c0-.724.588-1.312 1.313-1.312h4.874c.725 0 1.313.588 1.313 1.313v4.874c0 .725-.588 1.313-1.313 1.313H9.564a1.312 1.312 0 0 1-1.313-1.313V9.564Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="mb-20">Más de 8 años de experiencia</h3>
            </div>
        </div>
    </div>

    <!-- linea -->
    <div class="h-screen flex flex-col justify-center"
        style="background: linear-gradient(180deg, #000000 50%, #ffffff 50%);">
        <div class="relative flex items-center justify-center h-full">
            <div
                class="w-80 h-80 rounded-full overflow-hidden border-4 border-gray-200 bg-white flex items-center justify-center">
                <img src="{{ asset('img/Logo2.png') }}" alt="Imagen"
                    class="w-3/4 h-1/4 object-cover object-center">
            </div>
        </div>
    </div>

    <!-- clientes-->
    <div id="Clientes" class="flex items-center justify-center  bg-white">
        <img src="{{ asset('img/clientes.png') }}" alt="Sobre Nosotros" class="w-full h-100">
    </div>

    <div class="bg-white pt-20">
        <div class="flex">
            <div class="w-1/2 p-40 pt-40">
                <h1 class="font-bold text-4xl">HACEMOS REALIDAD TUS IDEAS</h1>
                <br />
                <h2 class="font-bold">AIOP</h2>
                <br />
                <h3>Somos desarrolladores del primer GDS para agencias de viajes con el enfoque de turismo en salud.
                    <br />
                    <br />
                    Dando soluciones tecnológicas para agilizar procesos y en un solo lugar poder encontrar, todos los
                    servicios de salud y bienestar para que las agencias de viaje puedan entrar en una nueva era del
                    turismo, con más alcance, muchos más servicios y claro, aumentando sus ganancias
                </h3>
            </div>
            <!-- Contenedor para los videos y controles -->
            <div class="relative w-1/2 pr-10  pb-10 pt-40">
                <!-- Video 1 -->
                <video id="vide1" class="left-50" autoplay muted loop>
                    <source src="{{ asset('video/diseno.mp4') }}" type="video/mp4">
                </video>
                <!-- Video 2 -->
                <video id="vide2" class="hidden" autoplay muted loop>
                    <source src="{{ asset('video/programacion.mp4') }}" type="video/mp4">
                </video>
                <!-- Botones de control -->
                <div class="absolute bottom-10 left-0 p-4  flex gap-4">
                    <!-- Botones de navegación -->
                    <div class="flex gap-4">
                        <button id="prevVideoBtn"
                            class="bg-white text-black font-bold py-2 px-4 rounded-full" >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button id="nextVideoBtn"
                            class="bg-white text-black font-bold py-2 px-4 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>
                    </div>
                    <!-- Botón de reproducción/pausa -->
                    <div class="flex gap-4 right-0">
                        <button id="playPauseBtn"
                            class=" text-white font-bold py-2 px-4 rounded ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-8 h-8">
                                <path fill-rule="evenodd"
                                    d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- Botón de silencio -->
                        <button id="muteBtn"
                            class=" text-white font-bold py-2 px-4 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-8 h-8">
                                <path
                                    d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 0 0 1.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06ZM18.584 5.106a.75.75 0 0 1 1.06 0c3.808 3.807 3.808 9.98 0 13.788a.75.75 0 0 1-1.06-1.06 8.25 8.25 0 0 0 0-11.668.75.75 0 0 1 0-1.06Z" />
                                <path
                                    d="M15.932 7.757a.75.75 0 0 1 1.061 0 6 6 0 0 1 0 8.486.75.75 0 0 1-1.06-1.061 4.5 4.5 0 0 0 0-6.364.75.75 0 0 1 0-1.06Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Formulario---------------------------------------------------------------------------------------------------->
    <div id="Formulario" class="flex items-center justify-center pt-40 pb-40 bg-white">
        <img src="{{ asset('img/formulario.png') }}" alt="Sobre Nosotros" class="w-50 h-100">
    </div>

    <!-- footer---------------------------------------------------------------------------------------------------->
    <div id="Footer" class="flex items-center justify-center pt-10">
        <img src="{{ asset('img/footer.png') }}" alt="Sobre Nosotros" class="w-100 h-100">
    </div>


    <script>
        const videos = [
            document.getElementById('video1'),
            document.getElementById('video2'),
            document.getElementById('video3'),
            document.getElementById('video4')
        ];
        const pauseButton = document.getElementById('pauseButton');
        const muteButton = document.getElementById('muteButton');
        const bars = [
            document.getElementById('bar1'),
            document.getElementById('bar2'),
            document.getElementById('bar3'),
            document.getElementById('bar4')
        ];

        function handlePausePlay(video) {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        function handleMuteUnmute(video) {
            video.muted = !video.muted;
        }

        videos.forEach((video, index) => {
            pauseButton.addEventListener('click', () => handlePausePlay(video));
            muteButton.addEventListener('click', () => handleMuteUnmute(video));
            bars[index].addEventListener('click', () => {
                videos.forEach((vid) => vid.classList.add('hidden'));
                video.classList.remove('hidden');
                bars.forEach((bar) => bar.classList.remove('active-bar'));
                bars[index].classList.add('active-bar');
            });
        });

        const vide1 = document.getElementById('vide1');
        const vide2 = document.getElementById('vide2');
        const playPauseBtn = document.getElementById('playPauseBtn');
        const muteBtn = document.getElementById('muteBtn');
        const prevVideoBtn = document.getElementById('prevVideoBtn');
        const nextVideoBtn = document.getElementById('nextVideoBtn');

        let currentVideo = vide1;

        playPauseBtn.addEventListener('click', () => {
            if (currentVideo.paused) {
                currentVideo.play();
            } else {
                currentVideo.pause();
            }
        });

        muteBtn.addEventListener('click', () => {
            currentVideo.muted = !currentVideo.muted;
        });

        prevVideoBtn.addEventListener('click', () => {
            currentVideo.pause();
            currentVideo.currentTime = 0;
            currentVideo.classList.add('hidden');

            if (currentVideo === vide1) {
                currentVideo = vide2;
            } else {
                currentVideo = vide1;
            }

            currentVideo.classList.remove('hidden');
            currentVideo.play();
        });

        nextVideoBtn.addEventListener('click', () => {
            currentVideo.pause();
            currentVideo.currentTime = 0;
            currentVideo.classList.add('hidden');

            if (currentVideo === vide1) {
                currentVideo = vide2;
            } else {
                currentVideo = vide1;
            }

            currentVideo.classList.remove('hidden');
            currentVideo.play();
        });
    </script>

</body>

</html>
