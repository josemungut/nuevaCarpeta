<x-app-layout>

    <style>
        body {
            font-family: sans-serif;
        }

        .hero1 {
            background-image: url("https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80");
            /*photo by okeykat for Unsplash */
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 200px 0;
            color: hotpink;

        }

        .hero1 h1,
        .hero2 h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        .hero1 h1 {
            -webkit-text-stroke: 1px white;
            text-stroke: 1px hotpink;
        }

        .hero1 p {
            font-size: 1.5rem;
            color: #7A6174;
            font-weight: bold;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;

        }

        .testimonials {
            text-align: center;
            background-color: #8e9eb8;
            color: white;
            padding: 3rem;
        }

        .container {
            margin: auto;
            display: flex;
            gap: 1.5rem;
            padding: 2rem;
        }



        .testimonial {
            text-align: center;
            flex: 1;
            padding: 2rem 1rem;
            border-radius: 1rem;
            background-color: #7A6174;
            position: relative;
            text-align: center;
            font-weight: bold;


        }

        .testimonial h3 {
            margin-bottom: 1rem;
            font-style: italic;
        }

        .testimonial h3:before {
            font-family: Georgia, serif;
            content: "“";
            font-size: 10rem;
            position: absolute;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            color: white;
            opacity: 0;

        }

        .testimonial p {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .hero2 {
            background-color: #7A6174;
            background-image:
                /* photo by Michael G for Unsplash */
                url("https://images.unsplash.com/photo-1649923625228-3d2c89437a6e?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ1MTk2ODh8&ixlib=rb-4.0.3&q=85"),
                url("https://images.unsplash.com/photo-1582798358481-d199fb7347bb?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ1MjQxMjJ8&ixlib=rb-4.0.3&q=85");
            /* photo by Susan Q Yin for Unsplash */
            background-position: left, right;
            background-size: contain;
            background-blend-mode: hard-light;
            background-repeat: no-repeat;
            text-align: center;
            padding: 150px 0;
            color: white;
        }



        @media all AND (max-width: 500px) {
            .hero2 {
                background-image: url("https://images.unsplash.com/photo-1649923625228-3d2c89437a6e?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ1MTk2ODh8&ixlib=rb-4.0.3&q=85");
                /* photo by Michael G for Unsplash */
                background-position: center;
                background-size: cover;
                background-blend-mode: hard-light;
                background-repeat: no-repeat;
            }


            .container {
                flex-direction: column;
            }



        }
    </style>
    <section class="hero1">
        <h1>Bienvenido a tus reservas</h1>
        <p style="color: orange">Aquí podrás ver las reservas que has solicitado en Perfect Body Lucena</p>
    </section>

    <section class="testimonials">
        <h2>TUS RESERVAS</h2>
        <div class="container">
            @foreach ($reserva as $clase)
                <div class="testimonial">
                    <h3>{{ Auth::user()->name }}</h3>
                    <h3>{{ $clase->nombre }}</h3>
                    <h3>{{$clase->actividad->nombre}}</h3>
                    <p> {{ $clase->fecha_reserva }}</p>
                    <form class="inline-block" action={{ route('reserva.destroy', ['reserva' => $clase->id]) }}
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Borrar</button>
                    </form>
                </div>
            @endforeach
        </div>
    </section>

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


</x-app-layout>
