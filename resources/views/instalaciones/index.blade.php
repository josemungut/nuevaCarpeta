<x-app-layout>

    <!-- <style>
        .banner {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        .banner h1 {
            font-size: 24px;
            color: #333;
        }

        .banner p {
            font-size: 16px;
            color: #666;
        }

        #imagen {
            max-width: 350px;
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
            background-color: black;
            text-align: center;
            box-sizing: border-box;
            padding: 60px 0px;
        }

        /* STYLES SPECIFIC TO FOOTER  */
        .footer {
            width: 100%;
            position: relative;
            height: auto;
            background-color: black;
        }

        .footer .col {
            width: 190px;
            height: auto;
            float: left;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            padding: 0px 20px 20px 20px;
        }

        .footer .col h1 {
            margin: 0;
            padding: 0;
            font-family: inherit;
            font-size: 12px;
            line-height: 17px;
            padding: 20px 0px 5px 0px;
            color: rgba(255, 255, 255, 0.2);
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

        .social ul li {
            display: inline-block;
            padding-right: 5px !important;
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
            .footer .col {
                width: 33%;
            }

            .footer .col h1 {
                font-size: 14px;
            }

            .footer .col ul li {
                font-size: 13px;
            }
        }

        @media only screen and (max-width: 500px) {
            .footer .col {
                width: 50%;
            }

            .footer .col h1 {
                font-size: 14px;
            }

            .footer .col ul li {
                font-size: 13px;
            }
        }

        @media only screen and (max-width: 340px) {
            .footer .col {
                width: 100%;
            }
        }

        .titulo {
            color: orange !important;
        }

        #politicas {
            margin-left: 300px !important;
        }



        #boton {
            margin-left: 60%;
        }

    </style> -->

    <body>

        <div class="text-center w-full">
            <h1 class="text-xl font-bold" style="color: orange">Bienvenido al sitio web </h1>
            <p class="text-lg font-semibold">¡Descubre nuestras últimas ofertas!</p>

        </div>


        <div class="my-12" id="tarjeta">
            <div id="container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full lg:w-5/6 ml-2 mr-2 lg:mx-auto">
                    @foreach ($hola as $profesor)
                        <div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow"
                            style="background-color: black" id="tarjeta">

                                <img id="imagen" src="{{ asset($url . $profesor->imagen) }}" class="w-full h-56">

                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                                    style="color: white">
                                    {{ $profesor->nombre }}</h5>

                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400" style="color: white">
                                    {{ $profesor->descripcion }}
                                </p>
                                <a href={{ route('instalaciones.show', ['instalacione' => $profesor->id]) }}>
                                    <button type="button"
                                        class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Ver
                                        con mas detalle</button></a>
                                @if (Auth::user()->tipo == 'admin')
                                    <a href="{{ route('instalaciones.edit', ['instalacione' => $profesor->id]) }}"><button
                                            type="button"
                                            class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Editar</button></a>
                                    <form class="inline-block"
                                        action={{ route('instalaciones.destroy', ['instalacione' => $profesor->id]) }}
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Borrar</button>
                                    </form>
                                @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            @if (Auth::user()->tipo == 'admin')
                <a href="{{ route('instalaciones.create') }}"><button type="button" id="boton"
                        class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Añañdir instalaciones</button></a>
            @endif
        </div>
    </body>

    <!-- <div class="footer">
        <div class="contain">
            <div class="col" id="politicas">
                <h1 class="titulo">POLÍTICAS</h1>
                <ul>
                    <li><a href="aviso-legal">Aviso Legal</li>
                    <li><a href="politicas-de-cookies">Política de cookies</li>
                    <li><a href="politicas-de-privacidad">Política de privacidad</li>
                </ul>
            </div>
            <div class="col">
                <h1 class="titulo">DESCUBRE</h1>
                <ul>
                    <li><a href="/">Inicio</li>
                    <li><a href="instalaciones">Instalaciones</li>
                    <li>Actividades</li>>
                </ul>
            </div>
            <div class="col">
                <h1 class="titulo">CONTACTA</h1>
                <ul>
                    <li>649 14 36 97</li>
                    <li>Calle Falsa nº123</li>
                    <li>info@perfectbodylucena.com</li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    <div class="boton_whatsapp">
        <a href="https://wa.me/649143697"><img
                src="http://agromc.es/wp-content/uploads/2023/03/icono_whatsapp.svg" alt="WhatsApp" /></a>
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
    </style> -->
</x-app-layout>
