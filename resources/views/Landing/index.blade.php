<x-app-layout>
    <style>
        .banner {
            background-color: orange;
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

        /* REMOVE THIS, USE YOUR OWN  */
        html,
        body {
            margin: 0;
            padding: 0;
            background-color: black;
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

        /*--------------------------------------------------------------
Accessibility
--------------------------------------------------------------*/
        /* Text meant only for screen readers */
        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }

        .screen-reader-text:hover,
        .screen-reader-text:active,
        .screen-reader-text:focus {
            background-color: #f1f1f1;
            border-radius: 3px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
            clip: auto !important;
            color: #21759b;
            display: block;
            font-size: 14px;
            font-weight: bold;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000;
            /* Above WP toolbar */
        }

        /*--------------------------------------------------------------
General styling
--------------------------------------------------------------*/
        body {
            margin: 0;
            font-size: 100%;
            font-size: 1.2em;
        }

        img {
            display: block;
            border: 0;
            width: 100%;
            height: auto;
        }

        code {
            font: 15px Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
            font-weight: bold;
        }

        /* Header */

        .masthead {
            text-align: center;
            border-bottom: 1px solid hsl(0, 0%, 90%);
        }

        .intro {
            margin: 0 auto;
            padding: 1em 1em 2em;
            max-width: 50em;
            font-size: 90%;
            text-align: left;
            line-height: 1.4em;
            columns: 2;
            column-gap: 2em;
        }

        .intro p {
            margin: 0 0 1em;
        }

        /* Colophon section */
        .colophon {
            padding: 2em;
            background: hsl(0, 0%, 10%);
            color: white;
            font-size: 90%;
            text-align: center;
            line-height: 1.8em;
        }

        .colophon a {
            color: white;
        }

        .colophon a:hover,
        .colophon a:focus {
            border-bottom: 1px solid white;
        }

        /*--------------------------------------------------------------
Cards:
--------------------------------------------------------------*/

        .cards {
            max-width: 25em;
            margin: 1em auto;
            padding: 0;
            list-style-type: none;

        }

        .cards a {
            display: block;
            margin-bottom: 1em;
            text-decoration: none;
        }

        .caption {
            padding: 1em;
            font-size: 90%;
            color: black;
        }

        .caption-title {
            margin: 0;
            font-size: 1.4em;
            line-height: 1em;
        }

        .location {
            padding: .5em 0;
            color: hsl(0, 0%, 40%);
        }

        .caption p {
            margin-top: .5em;
            margin-bottom: 0;
            line-height: 1.3em;
        }

        .cards a:focus .caption,
        .cards a:hover .caption {
            background: hsl(0, 0%, 97%);
        }

        /*--------------------------------------------------------------
CSS Grid layout for wider screens, when browser supports grid:
--------------------------------------------------------------*/
        @supports (grid-area: auto) {

            @media screen and (min-width: 27em) {

                .cards {
                    margin: 0 auto;
                    padding: 1em;
                }

                .card-item,
                .card-item a {
                    display: flex;
                    align-items: stretch;
                    width: 100%;
                }

                .cards a:focus,
                .cards a:hover {
                    outline: 1px solid hsl(0, 0%, 80%);
                }

                .cards a:focus .caption,
                .cards a:hover .caption {
                    background: white;
                }

                .card {
                    margin: .5em;
                    display: grid;
                    grid-template-columns: 8em auto;
                    overflow: hidden;
                }

                .card img {
                    /*       height: 100%;
      width: auto; */
                }

                .caption {
                    background: white;
                }

            }

            @media screen and (min-width: 62em) {

                .cards {
                    max-width: none;
                    margin: 1em 0;
                    padding: 0 1em;
                    display: grid;
                    grid-template-columns: repeat(auto-fit, 25em);
                    grid-gap: 1em;
                    justify-content: center;
                }

                .double {
                    grid-row: span 3;
                }

                .double .card {
                    display: block;
                }

                .double img {
                    height: calc((100% / 3) * 2 + .5em);
                }

            }

            @import url('https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@300;400&display=swap');

            :root {
                --c1: #f0f8ff;
                --c2: #303030;
            }

            body {
                background:
                    repeating-linear-gradient(45deg, #fff0 0 1px, aliceblue 0 3px, #fff0 0 4px),
                    repeating-linear-gradient(-45deg, #fff 0 1px, aliceblue 0 3px, #fff0 0 4px);
            }

            body *,
            *:before,
            *:after {
                box-sizing: border-box;
            }

            article {
                max-width: 65%;
                margin: 0 auto;
                font-size: 1.2rem;
                padding: 1.5rem;
            }

            article p {
                max-width: 90%;
                margin: 0 auto;
                padding: .5rem 0;
                text-align: justify;
            }

            article>p {
                text-align: justify;
                color: var(--c2);
                text-shadow: 1px 1px 0px #fff6;
            }

            blockquote {
                position: relative;
                padding: 2.5rem 2rem 4rem;
                margin: 4rem 2rem;
                font-size: 2rem;
                color: var(--c2);
                background: conic-gradient(from 180deg at 100% calc(100% - 1rem), var(--c2) 0 25%, #fff0 0 100%), conic-gradient(from 180deg at 1rem 50%, var(--c2) 0 25%, #fff0 0 100%), conic-gradient(from 0deg at calc(100% - 1rem) 50%, var(--c2) 0 25%, #fff0 0 100%), conic-gradient(from 0deg at 0rem 1rem, var(--c2) 0 25%, #fff0 0 100%);
            }

            blockquote:before,
            blockquote:after {
                content: "";
                position: absolute;
                width: 3.5rem;
                height: 4.5rem;
                top: 3rem;
                left: -1rem;
                transform: rotate(5deg) scale(1.15);
                background:
                    radial-gradient(circle at 1.75rem 3rem, var(--c2) 1.5rem, #fff0 calc(1.5rem + 1px)),
                    radial-gradient(circle at 3.5rem 1.5rem, #fff0 2rem, var(--c2) calc(2rem + 1px) calc(4rem + 1px), #fff0 calc(4rem + 2px));
                filter: drop-shadow(3.5rem -0.5rem 0px var(--c2));
                border-radius: 100%;
            }

            blockquote:after {
                top: inherit;
                bottom: 3rem;
                transform: rotate(195deg) scale(1.15);
                right: -1rem;
                left: inherit;
            }

            blockquote p {
                font-weight: bold;
            }

            blockquote p:after {
                margin-right: 2rem;
                flex-direction: row;
                flex-wrap: nowrap;
                align-items: flex-start;
                content: " ";
                display: inline-flex;
                background: #f000;
                width: 8rem;
                height: 3rem;
            }

            blockquote p:first-letter {
                background: var(--c2);
                color: var(--c1);
                padding: 0 0.75rem;
                margin-top: 0;
                margin-left: 3.75rem;
                margin-right: 0.5rem;
                box-sizing: border-box;
                font-size: 4rem;
                float: left;
            }

            blockquote cite {
                font-weight: bold;
                position: absolute;
                bottom: 2.5rem;
                background: var(--c2);
                color: var(--c1);
                right: 8rem;
                padding: 0.5rem 1rem;
            }

            @media only screen and (max-width: 767px) {
                article {
                    max-width: 90%;
                }
            }

            #nombre {
                margin-top: 15px !important;
            }
        }
    </style>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>

        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 95vh">
            <div class="absolute top-0 w-full h-full bg-top bg-cover"
                style="
       background-image: url('https://images.unsplash.com/photo-1623874514711-0f321325f318?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="container relative mx-auto" data-aos="fade-in">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div>
                            <h1 class="text-white font-semibold text-5xl">
                                Bienvenido al Centro Deportivo <span class="text-orange-500" id="nombre">Perfect Body
                                    Lucena</span>
                            </h1>
                            <p class="mt-4 text-lg text-gray-300" style="color: orange">
                                En Perfect Body Lucena, nos apasiona el deporte y estamos comprometidos a brindarte una
                                experiencia excepcional. Nuestras instalaciones de primer nivel, un equipo dedicado de
                                profesionales y una amplia gama de actividades te esperan para ayudarte a alcanzar tus
                                metas de bienestar físico y mental.<br>
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

        <article>

            <p>Ya seas un atleta experimentado o estés dando tus primeros pasos en el mundo del deporte, aquí
                encontrarás todo lo que necesitas. Contamos con modernos espacios para el entrenamiento, equipamiento de
                última generación y una variedad de programas diseñados para todas las edades y niveles de condición
                física.</p>

            <blockquote>
                <p>“No ganan siempre los buenos, ganan los que luchan”.</p>
                <cite>Diego Pablo Simeone</cite>
            </blockquote>

            <p>En nuestro Centro Deportivo, podrás disfrutar de una amplia selección de actividades deportivas. Desde
                entrenamientos en grupo, como clases de aeróbicos, yoga y pilates, hasta programas individuales de
                entrenamiento personalizado, nuestro objetivo es brindarte opciones diversificadas para que encuentres
                la actividad que más te guste y se adapte a tus necesidades.</p>

            <blockquote>
                <p> “Si trabajas, los resultados vendrán solos"</p>
                <cite>Michael Jordan</cite>
            </blockquote>

            <p>Además de nuestras instalaciones de vanguardia, también ofrecemos servicios complementarios para mejorar
                tu experiencia. Contamos con áreas de relajación, servicios de masajes y tratamientos de spa, todo
                diseñado para ayudarte a recuperarte y revitalizarte después de tus sesiones de entrenamiento.</p>

            <p>Nuestro equipo de entrenadores altamente cualificados está aquí para guiarte y motivarte en cada paso de
                tu camino hacia la salud y el bienestar. Ya sea que estés buscando mejorar tu forma física, alcanzar
                metas específicas o simplemente mantener un estilo de vida activo, ellos estarán encantados de brindarte
                el apoyo necesario.</p>

            <blockquote>
                <p>“No importa lo bueno que seas, lo emocionante es que puedes ser todavía mejor.”</p>
                <cite>Tiger Woods</cite>
            </blockquote>

            <p>¡En Perfect Body Lucena, tu bienestar es nuestra prioridad! Estamos ansiosos por acompañarte en tu viaje
                hacia una vida más saludable y activa!</p>
            <p>¡Nos vemos pronto en el Centro Deportivo Perfect Body Lucena!




            </p>
        </article>





    </body>

    </html>

    <div class="footer">
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
