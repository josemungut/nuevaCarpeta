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
        .footer {
            width: 100%;
            position: relative;
            height: auto;
            background-color: #070617;
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
    </style>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>
        <div class="banner">
            <h1>Bienvenido a Perfect Body Lucena</h1>
            <p>¡Donde tu salud, nos importa!</p>
        </div>
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
</x-app-layout>
