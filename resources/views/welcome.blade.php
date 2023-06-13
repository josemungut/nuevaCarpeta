<x-app-layout>
    <style>
        #tarjeta {
            text-align: center;
            width: 100%;
        }

        .imagen {
            width: 100%;
            margin-left: 50px;
        }

        #nombre {
            padding-top: 25px;
            text-align: center;
            width: 100%;
        }

        #email {
            text-align: center;
            width: 100%;
            font-size: 15px;
        }

        /* REMOVE THIS, USE YOUR OWN  */
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, Sans-serif;
            background-color: #070617;
        }

        .dummy_page {
            height: 200px;
            width: 100%;
            background-color: #f0f0f0;
            text-align: center;
            box-sizing: border-box;
            padding: 60px 0px;
        }

        /* STYLES SPECIFIC TO FOOTER  */
        .titulo {
            margin-top: 15px;
        }

        .footer {
            width: 100%;
            position: relative;
            height: auto;
            background-color: black;
        }

        .footer .col {
            height: auto;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            padding: 0px 20px 20px 20px;
        }

        */ .footer .col h1 {
            margin: 0;
            padding: 0;
            font-family: inherit;
            font-size: 12px;
            line-height: 17px;
            padding: 20px 0px 5px 0px;
            color: orange;
            font-weight: normal;
            text-transform: uppercase;
            letter-spacing: 0.250em;
        }

        .footer .col ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .footer .col ul li {
            color: #999999;
            font-size: 14px;
            font-family: inherit;
            font-weight: bold;
            padding: 5px 0px 5px 0px;
            cursor: pointer;
            transition: .2s;
            -webkit-transition: .2s;
            -moz-transition: .2s;
        }

        .footer .col ul li:hover {
            color: #ffffff;
            transition: .1s;
            -webkit-transition: .1s;
            -moz-transition: .1s;
        }

        .clearfix {
            clear: both;
        }

        @media only screen and (min-width: 1280px) {
            .contain {
                width: 1200px;
                margin: 0 auto;
            }
        }

        @media only screen and (max-width: 1139px) {
            .contain .social {
                width: 1000px;
                display: block;
            }

            .social h1 {
                margin: 0px;
            }
        }

        @media only screen and (max-width: 950px) {


            .footer .col h1 {
                font-size: 14px;
            }

            .footer .col ul li {
                font-size: 13px;
            }
        }

        @media only screen and (max-width: 500px) {


            .footer .col h1 {
                font-size: 14px;
            }

            .footer .col ul li {
                font-size: 13px;
            }
        }

        @media only screen and (max-width: 340px) {}

        .titulo {
            color: orange !important;
        }
    </style>

    <style>
        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-size: 62.5%;
            font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
        }

        ul {
            list-style-type: none;
        }

        a {
            color: #e95846;
            text-decoration: none;
        }

        .pricing-table-title {
            text-transform: uppercase;
            font-weight: 700;
            font-size: 2.6em;
            color: #FFF;
            margin-top: 15px;
            text-align: left;
            margin-bottom: 25px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
        }

        .pricing-table-title a {
            font-size: 0.6em;
        }

        .clearfix:after {
            content: '';
            display: block;
            height: 0;
            width: 0;
            clear: both;
        }

        /** ========================
* Contenedor
============================*/
        .pricing-wrapper {
            width: 960px;
            margin: 40px auto 0;
        }

        .pricing-table {
            margin: 0 10px;
            text-align: center;
            width: 300px;
            float: left;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            -webkit-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }

        .pricing-table:hover {
            -webkit-transform: scale(1.06);
            -ms-transform: scale(1.06);
            -o-transform: scale(1.06);
            transform: scale(1.06);
        }

        .pricing-title {
            background: #e95846;
            padding: 20px 0;
            font-size: 2em;
            text-transform: uppercase;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
        }

        .pricing-table.recommended .pricing-title {
            background: #2db3cb;
        }

        .pricing-table.recommended .pricing-action {
            background: #2db3cb;
        }

        .pricing-table .price {
            background: #403e3d;
            font-size: 3.4em;
            font-weight: 700;
            padding: 20px 0;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
        }

        .pricing-table .price sup {
            font-size: 0.4em;
            position: relative;
            left: 5px;
        }

        .table-list {
            background: #FFF;
            color: #403d3a;
        }

        .table-list li {
            font-size: 1.4em;
            font-weight: 700;
            padding: 12px 8px;
        }

        .table-list li:before {
            content: "\f00c";
            font-family: 'FontAwesome';
            color: #3fab91;
            display: inline-block;
            position: relative;
            right: 5px;
            font-size: 16px;
        }

        .table-list li span {
            font-weight: 400;
        }

        .table-list li span.unlimited {
            color: #FFF;
            background: #e95846;
            font-size: 0.9em;
            padding: 5px 7px;
            display: inline-block;
            -webkit-border-radius: 38px;
            -moz-border-radius: 38px;
            border-radius: 38px;
        }


        .table-list li:nth-child(2n) {
            background: #F0F0F0;
        }

        .table-buy {
            background: #FFF;
            padding: 15px;
            text-align: left;
            overflow: hidden;
        }

        .table-buy p {
            float: left;
            color: #37353a;
            font-weight: 700;
            font-size: 2.4em;
        }

        .table-buy p sup {
            font-size: 0.5em;
            position: relative;
            left: 5px;
        }

        .table-buy .pricing-action {
            float: right;
            color: #FFF;
            background: #e95846;
            padding: 10px 16px;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-weight: 700;
            font-size: 1.4em;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
            -webkit-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }

        .table-buy .pricing-action:hover {
            background: #cf4f3e;
        }

        .recommended .table-buy .pricing-action:hover {
            background: #228799;
        }

        /** ================
* Responsive
===================*/
        @media only screen and (min-width: 768px) and (max-width: 959px) {
            .pricing-wrapper {
                width: 768px;
            }

            .pricing-table {
                width: 236px;
            }

            .table-list li {
                font-size: 1.3em;
            }

        }

        @media only screen and (max-width: 767px) {
            .pricing-wrapper {
                width: 420px;
            }

            .pricing-table {
                display: block;
                float: none;
                margin: 0 0 20px 0;
                width: 100%;
            }
        }

        @media only screen and (max-width: 479px) {
            .pricing-wrapper {
                width: 300px;
            }
        }
    </style>
    <!-- Navbar -->

    <!--<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-lg font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
                    href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation">The Power
                    Room</a><button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">

                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i class="text-orange-500 fab fa-facebook text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Share</span></a>
                    </li>

                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i class="text-orange-500 fab fa-twitter text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Tweet</span></a>
                    </li>

                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i class="text-orange-500 fab fa-linkedin text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Profile</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>-->
    <!-- Main Area -->
    <main>
        <!-- Hero -->
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 95vh">
            <div class="absolute top-0 w-full h-full bg-top bg-cover"
                style="
       background-image: url('https://img.freepik.com/fotos-premium/amigos-fitness-retrato-gimnasio-happy-relax-grupo-orgulloso-listo-entrenar-fitness-desafiar-equipo-entrenador-personal-mujer-hombres-centro-deportivo-entrenamiento-cruzado-ajuste_590464-101354.jpg');
">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto" data-aos="fade-in">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div>
                            <h1 class="text-white font-semibold text-5xl">
                                PERFECT BODY <span class="text-orange-500">LUCENA</span>
                            </h1>
                            <p class="mt-4 text-lg text-gray-300">
                                Bienvenidos a Perfect Body Lucena. Somos un centro de acondicionamiento físico y
                                entrenamiento que se enfoca en llevarte a tu límite absoluto.
                                <a href="/actividades"
                                    class="bg-transparent hover:bg-orange-500 text-orange-500 font-semibold hover:text-white p-4 border border-orange-500 hover:border-transparent rounded inline-block mt-5 cursor-pointer">Visitar
                                    nuestras actividades</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px; transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>

        <!-- About Section -->
        <section id="about" class="relative py-20 bg-black text-white">
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4" data-aos="fade-right">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1550345332-09e3ac987658?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4" data-aos="fade-left">
                        <div class="md:pr-12">
                            <small class="text-orange-500 mb-20" style="font-size: 15px">Sobre nuestro centro deportivo</small>
                            <h3 class="text-4xl uppercase font-bold">CONSTRUCCIÓN DEL CUERPO SEGURO</h3>
                            <p class="mt-4 text-lg leading-relaxed">

                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="font-semibold inline-block py-3 mr-3 text-orange-500"><i
                                                    class="fas fa-dumbbell fa-2x"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-xl">
                                                Tenemos el último y mejor equipamiento
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="font-semibold inline-block py-3 mr-3 text-orange-500"><i
                                                    class="fas fa-hard-hat fa-2x"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-xl">
                                                Las mejores instalaciones para que puedas disfrutar de tu deporte
                                                favorito
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="font-semibold inline-block py-3 mr-3 text-orange-500"><i
                                                    class="fas fa-users fa-2x"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-xl">Los mejores profesionales para tu centro deportivo</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trainers Section -->
        <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold uppercase">
                            Conoce nuestros entrenadores
                        </h2>
                        <p class="text-lg leading-relaxed m-4">
                            Nuestros entrenadores están comprometidos con tu éxito y te brindarán un entrenamiento
                            personalizado y adaptado a tus necesidades individuales. Ya sea que estés buscando perder
                            peso, mejorar tu condición física, desarrollar habilidades deportivas específicas o
                            simplemente mantenerte en forma, nuestros entrenadores están aquí para guiarte en cada paso
                            del camino.
                        </p>
                    </div>
                </div>
                <!-- Trainer Card Wrapper -->

            </div>
            <!-- Card 2 -->

            <div class="my-12" id="tarjeta">
                <div id="container">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full lg:w-5/6 lg:mx-auto">
                        @foreach ($profesores as $profesor)
                            <div class="max-w-sm" style="margin-top: -50px">
                                <div class="p-5 lg:grid-cols-3 gap-8 w-full lg:w-5/6 lg:mx-auto">
                                    <img class="imagen" style="margin-left: -2px"
                                        src="{{ asset($url . $profesor->imagen) }}">
                                    <a href="#">
                                        <h5 id="nombre"
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                            {{ $profesor->nombre }} {{ $profesor->apellidos }}</h5>
                                    </a>
                                    <p id="email" class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ $profesor->email }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Header Section -->
        <section class="pb-20 relative block bg-black text-white">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px; transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64 pb-20 pt-20">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-50 lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white uppercase">
                            Ventajas de acceder identificado
                        </h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4">
                            Disfruta de todas sus ventajas: reserva en nombre de tus beneficiarios, puedes conocer cada
                            parte de nuestras instalaciones, puedes ser uno mas de nosotros, avonando mensualmente la
                            matricula reglamentaria, consiguiendo así poder sacar el máximo partido a tu cuerpo
                            alcanzando el máximo nivel y un largo etc.
                        </p>
                    </div>
                    <div class="w-50 lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white uppercase">
                            Nuestro horario
                        </h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4">
                            - Lunes a Viernes: de 9.00h a 23.00 h<br>
                            - Sábado: de 10.30h a 21.00h<br>
                            - Domingo: cerrado
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="pricing-wrapper clearfix" style="margin-bottom: 2%">
            <!-- Titulo -->
            <div class="pricing-table">
                <h3 class="pricing-title">Basico</h3>
                <div class="price" style="background-color: #F4F4F4">30€<sup>/ meses</sup></div>
                <!-- Lista de Caracteristicas / Propiedades -->
                <ul class="table-list">
                    <li>Duración <span>de un mes</span></li>
                    <li>Supervisión <span>de un monitor especializdo</span></li>
                    <li>Poder reservar <span>solo una instalación al día</span></li>
                </ul>
                <!-- Contratar / Comprar -->
                <div class="table-buy">
                    <p>30€<sup>/ mes</sup></p>
                    <a href="/matricula/create?price=30" class="pricing-action">Comprar</a>
                </div>
            </div>

            <div class="pricing-table recommended">
                <h3 class="pricing-title">Premium</h3>
                <div class="price" style="background-color: #F4F4F4">180€<sup>/ 6 meses</sup></div>
                <!-- Lista de Caracteristicas / Propiedades -->
                <ul class="table-list">
                    <li>Duración <span>de seis mes</span></li>
                    <li>Supervisión <span>de un monitor especializdo </span></li>
                    <li>Poder reservar <span>tres instalación al día</span></li>
                </ul>
                <!-- Contratar / Comprar -->
                <div class="table-buy">
                    <p>180€<sup>/ 6 mes</sup></p>
                    <a href="/matricula/create?price=180" class="pricing-action">Comprar</a>
                </div>
            </div>

            <div class="pricing-table">
                <h3 class="pricing-title">Ultimate</h3>
                <div class="price" style="background-color: #F4F4F4">360€<sup>/ 12mes</sup></div>
                <!-- Lista de Caracteristicas / Propiedades -->
                <ul class="table-list">
                    <li>Duración <span>de 12 mes</span></li>
                    <li>Supervisión <span>de un monitor y clases online</span></li>
                    <li>Reservar <span>instalaciones ilimitadas al día</span></li>
                </ul>
                <!-- Contratar / Comprar -->
                <div class="table-buy">
                    <p>360€<sup>/ 12 mes</sup></p>
                    <a href="/matricula/create?price=360" class="pricing-action">Comprar</a>
                </div>
            </div>
        </div>

        <!-- Contact Form -->


        <div class="boton_whatsapp">
            <a href="https://wa.me/649143697"><img
                    src="http://agromc.es/wp-content/uploads/2023/03/icono_whatsapp.svg" alt="WhatsApp" /></a>
        </div>
        <div class="footer flex lg:flex-row flex-col lg:justify-between justify-center text-center">
            <div class="col lg:w-1/3 w-full" id="politicas">
                <h1 class="titulo">POLÍTICAS</h1>
                <ul>
                    <li><a href="aviso-legal" style="color: white">Aviso Legal</a></li>
                    <li><a href="politicas-de-cookies" style="color: white">Política de cookies</a></li>
                    <li><a href="politicas-de-privacidad" style="color: white">Política de privacidad</a></li>
                </ul>
            </div>
            <div class="col lg:w-1/3 w-full">
                <h1 class="titulo">DESCUBRE</h1>
                <ul>
                    <li><a href="/" style="color: white">Inicio</a></li>
                    <li><a href="instalaciones" style="color: white">Instalaciones</a></li>
                    <li><a href="actividades" style="color: white">Actividades</a></li>
                </ul>
            </div>
            <div class="col lg:w-1/3 w-full">
                <h1 class="titulo">CONTACTA</h1>
                <ul class="w-full">
                    <li style="color: white">649 14 36 97</li>
                    <li style="color: white">Calle Falsa nº123</li>
                    <li style="color: white">info@perfectbodylucena.com</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>

        <style>
            .boton_whatsapp {
                transition-duration: 0.2s;
                transform: scale(1);
                position: fixed;
                bottom: 0;
                right: 0;
                border-style: solid;
                border-radius: 50%;
                border-color: #000000;
                border-width: 1px;
                margin: 13px;
                z-index: 999;
                background-color: #FFFFFF;
            }

            .boton_whatsapp:hover {
                transition-duration: 0.2s;
                transform: scale(0.9);
            }

            .boton_whatsapp img {
                width: 55px;
                height: 55px;
                padding: 10px;
                text-align: center;
                vertical-align: middle;
            }
        </style>
    </main>



    <!-- FOOTER START -->

</x-app-layout>
