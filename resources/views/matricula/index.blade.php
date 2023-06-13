<x-app-layout>
    <style>
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

    <section class="flex flex-col md:flex-row  md:h-[32rem]">
        <div class=" md:w-1/2 h-52 md:h-full p-4 flex flex-col xl:py-5 justify-between ">

            <div class="hidden md:flex flex flex-col gap-4" style="margin-top: 150px">
                <p class="text-2xl lg:text-4xl font-bold " style="text-align: center">PERFECT BODY LUCENA
                </p>
                <p class="text-lg lg:pr-20" style="margin-top: 10px">Estamos encantados de que hayas decidido unirte a
                    nuestra familia fitness y
                    comenzar tu viaje hacia un estilo de vida saludable. Aquí en Perfect Body Lucena, nos enorgullece
                    ofrecerte las instalaciones más modernas, un equipo de entrenadores profesionales y una amplia gama
                    de clases y programas de ejercicios para ayudarte a alcanzar tus objetivos de acondicionamiento
                    físico.</p>
                <div class="flex flex-row w-full" style="margin-top: 50px">
                    <div class="lg:w-1/3 w-full">
                        <a href="matricula/create?price=30"
                            class="w-full shadow-indigo-500/40 rounded-full bg-orange-500 px-7 py-4 text-md font-semibold text-white shadow-sm ring-1 ring-inset ring-orange-500 hover:text-gray-500 hover:bg-gray-50 "><button
                                type="button">MATRÍCULA 30€ </button></a>
                    </div>
                    <div class="lg:w-1/3 w-full">
                        <a href="matricula/create?price=180"
                            class="w-full shadow-indigo-500/40 rounded-full bg-orange-500 px-7 py-4 text-md font-semibold text-white shadow-sm ring-1 ring-inset ring-orange-500 hover:text-gray-500 hover:bg-gray-50 "><button
                                type="button">MATRÍCULA 180€</button></a>
                    </div>
                    <div class="lg:w-1/3 w-full">
                        <a href="matricula/create?price=360"
                            class="w-full shadow-indigo-500/40 rounded-full bg-orange-500 px-7 py-4 text-md font-semibold text-white shadow-sm ring-1 ring-inset ring-orange-500 hover:text-gray-500 hover:bg-gray-50 "><button
                                type="button">MATRÍCULA 360€</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" md:w-1/2 order-4 md:order-none">
            <div class="h-[32rem]" style="margin-top: 5%">
                <img src="https://images.unsplash.com/photo-1593079831268-3381b0db4a77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGdpbW5hc2lvfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                    alt="logo-universidad" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>

            <div class="md:hidden flex flex-col gap-4 p-4">
                <p class="text-lg pr-20 ">Estamos encantados de que hayas decidido unirte a nuestra familia fitness y
                    comenzar tu viaje hacia un estilo de vida saludable. Aquí en Perfect Body Lucena, nos enorgullece
                    ofrecerte las instalaciones más modernas, un equipo de entrenadores profesionales y una amplia gama
                    de clases y programas de ejercicios para ayudarte a alcanzar tus objetivos de acondicionamiento
                    físico.
                </p>
                <div class="flex lg:flex-row flex-col gap-10 w-full" style="margin-top: 50px">
                    <div class="lg:w-1/3 w-full" style="margin-left: 20%">
                        <a href="matricula/create?price=30"
                            class="w-full shadow-indigo-500/40 rounded-full bg-orange-500 px-7 py-4 text-md font-semibold text-white shadow-sm ring-1 ring-orange-500 hover:text-gray-500 hover:bg-gray-50 "><button
                                type="button">MATRÍCULA 30€</button></a>
                    </div>
                    <div class="lg:w-1/3 w-full" style="margin-left: 20%">
                        <a href="matricula/create?price=180"
                            class="w-full shadow-indigo-500/40 rounded-full bg-orange-500 px-7 py-4 text-md font-semibold text-white shadow-sm ring-1 ring-inset ring-orange-500 hover:text-gray-500 hover:bg-gray-50 "><button
                                type="button">MATRÍCULA 180€</button></a>
                    </div>
                    <div class="lg:w-1/3 w-full" style="margin-left: 20%">
                        <a href="matricula/create?price=360"
                            class="w-full shadow-indigo-500/40 rounded-full bg-orange-500 px-7 py-4 text-md font-semibold text-white shadow-sm ring-1 ring-inset ring-orange-500 hover:text-gray-500 hover:bg-gray-50 "><button
                                type="button">MATRÍCULA 360€</button></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Fin información ingenieria-->
    <!--Inicio titulaciones de ingenieria-->
    <section class=" xl:px-16 mt-20">
        <div class="flex justify-center mb-10">
            <h1 class="font-bold text-4xl">MATRICULACIONES</h1>
        </div>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Pricing Table | Tabla de Precios</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>

            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


            <link rel="stylesheet" href="css/style.css">


        </head>

        <body>

            <!-- Contenedor -->




        </body>

        </html>

    </section>
    <!--Fin titulaciones de ingenieria-->
    <!--Inicio campo laboral-->
    <section class=" xl:px-16 mt-20">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 px-8 lg:px-0">
            <div class="h-80 flex  flex-col items-start">
                <p class="text-4xl font-bold mb-6">ACTIVIDADES</p>
                En Perect Body Lucena, nos enorgullece ofrecer una amplia gama de actividades deportivas
                diseñadas para satisfacer todos los gustos e intereses. Ya seas un apasionado del fitness, un entusiasta
                de los deportes acuáticos o alguien que disfruta de los deportes de equipo, tenemos algo para ti. ¡Echa
                un vistazo a nuestras emocionantes opciones de actividades a continuación!<br><br>
                <ul class="px-5 gap-2 flex flex-col">
                    <li type="disc" class="hover:text-orange-500  cursor-pointer">
                        <p class="font-sans text-sm xl:text-lg ">Fútbol.</p>
                    </li>
                    <li type="disc" class="hover:text-orange-500  cursor-pointer">
                        <p class="font-sans text-sm xl:text-lg ">Padel.</p>
                    </li>
                    <li type="disc" class="hover:text-orange-500  cursor-pointer">
                        <p class="font-sans text-sm xl:text-lg ">Tenis.</p>
                    </li>
                    <li type="disc" class="hover:text-orange-500  cursor-pointer">
                        <p class="font-sans text-sm xl:text-lg ">Natación.</p>
                    </li>
                    <li type="disc" class="hover:text-orange-500  cursor-pointer">
                        <p class="font-sans text-sm xl:text-lg ">Atletismo.</p>
                    </li>
                </ul>

            </div>

            <div class="  h-96 ">
                <img src="https://images.unsplash.com/photo-1566932769119-7a1fb6d7ce23?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                    alt="logo-universidad"
                    class="rounded-lg h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class=" h-96 ">
                <img src="https://images.unsplash.com/photo-1613870930431-a09c7139eb33?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                    alt="logo-universidad"
                    class="rounded-lg h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>


        </div>
    </section>
    <!--Fin campo laboral-->
    <!--Inicio Matriculas abiertas-->
    <section class=" xl:px-16 my-20">


    </section>
    <!--Fin Matriculas abiertas-->
    <!--Inicio sé un experto en:-->
    <section class="flex flex-col md:flex-row  h-[35rem]  xl:px-16 ">
        <div class="hidden md:flex md:w-1/2 h-25 md:h-full  flex flex-col xl:py-5 justify-between xl:pr-10">
            <div class="h-[30rem] ">
                <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=775&q=80"
                    alt="logo-universidad" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
        </div>
        <div class="px-30 lg:px-16 md:w-1/2" style="margin-top: 3%">
            <p class="text-4xl font-bold mb-12">INSTALACIONES</p>
            En Perfect Body Lucena, nos enorgullece brindar un entorno excepcional para que puedas disfrutar
            al máximo de tus actividades deportivas. Nuestras instalaciones de primera clase están diseñadas pensando en
            tu comodidad y seguridad.
            <ul class="px-5 gap-5 flex flex-col mb-6">
                <li type="disc" class="hover:text-orange-500  cursor-pointer">
                    <p class="font-sans text-sm xl:text-lg ">Gimnasio.</p>
                </li>
                <li type="disc" class="hover:text-orange-500  cursor-pointer">
                    <p class="font-sans text-sm xl:text-lg ">Pista de fútbol sala o fútbol 11.</p>
                </li>
                <li type="disc" class="hover:text-orange-500  cursor-pointer">
                    <p class="font-sans text-sm xl:text-lg ">Pista de tenis.</p>
                </li>
                <li type="disc" class="hover:text-orange-500  cursor-pointer">
                    <p class="font-sans text-sm xl:text-lg ">Piscinas cubiertas y al aire libre.</p>
                </li>
                <li type="disc" class="hover:text-orange-500  cursor-pointer">
                    <p class="font-sans text-sm xl:text-lg ">Pistas de atletismo.</p>
                </li>
            </ul>
        </div>
    </section>
    <!--Fin sé un experto en:-->
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
    </body>

    </html>





    <div class="boton_whatsapp">
        <a href="https://wa.me/649143697"><img src="http://agromc.es/wp-content/uploads/2023/03/icono_whatsapp.svg"
                alt="WhatsApp" /></a>
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



</x-app-layout>
