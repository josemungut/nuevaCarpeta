<x-app-layout>

    <style>
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

        .titulo3 {
            color: #ffa500 !important;
        }

        #politicas {
            margin-left: 300px !important;
        }



        .titulo1 {
            margin-left: 700px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 35px;
        }

        .titulo {
            margin-left: 100px;
            margin-right: 100px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 30px;

        }

        .titulo2 {
            margin-left: 100px;
            margin-right: 100px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
    </style>

    <h1 class="titulo1">POLÍTICAS DE COOKIES</h1>
    <h2 class="titulo">1. Definición Y Función Genérica De Las Cookies.</h2>
    <p class="titulo2"><b>Perfect Body Lucena</b> titular de este sitio web informa que se utilizan cookies y/o
        tecnologías
        similares que almacenan y recuperan información cuando navegas. En general, estas tecnologías pueden servir para
        finalidades muy diversas, como, por ejemplo, reconocerte como usuario, obtener información sobre tus hábitos de
        navegación, o personalizar la forma en que se muestra el contenido. Los usos concretos que hacemos de estas
        tecnologías se describen a continuación</p>
    <h2 class="titulo">2. Información Sobre El Tipo De Cookies Que Se Utilizan Y Su Finalidad.</h2>
    <p class="titulo2"><b>-De personalización:</b> Son aquéllas que permiten al Usuario acceder al servicio con unas
        características
        predefinidas en función de una serie de criterios, como por ejemplo el idioma, el tipo de navegador a través del
        cual se accede al servicio, la configuración regional desde donde se accede al servicio, etc.<br>
    <p class="titulo2"><b>-Técnicas:</b> Son aquellas necesarias para la navegación y el buen funcionamiento de nuestro
        website.
        Permiten, por ejemplo, controlar el tráfico y la comunicación de datos, acceder a partes de acceso restringido,
        realizar el proceso de compra de un pedido, utilizar elementos de seguridad, almacenar contenidos para poder
        difundir vídeos o compartir contenidos a través de redes sociales.
        <br>
    <p class="titulo2"><b>-De análisis:</b> Son aquellas que, tratadas por nosotros o por terceros, nos permiten
        cuantificar
        el
        número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios
        del
        servicio ofertado. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de
        productos o servicios que le ofrecemos.
        <br>
    <p class="titulo2"><b>-Publicitarias:</b> Son aquéllas que permiten la gestión, de la forma más eficaz posible, de
        los
        espacios
        publicitarios que se pudieran incluir en nuestro website.
        <br>
    <p class="titulo2"><b>-Publicitarias comportamentales:</b> Son aquellas que, tratadas por nosotros o por terceros,
        nos
        permiten
        analizar sus hábitos de navegación en Internet para que podamos mostrarle publicidad relacionada con su perfil
        de
        navegación.</p>
    <h2 class="titulo">3. Identificación De Quién Utiliza Las Cookies.</h2>
    <p class="titulo2">La información obtenida por las cookies es tratada solo por nuestro editor y/o también por
        terceros
        con
        el nuestro editor haya contratado la prestación de un servicio para el cual se requiera el uso de cookies.

    <p class="titulo2"><b>-Cookies propias:</b> Son aquellas que se envían a su equipo desde nuestros propios equipos o
        dominios y
        desde el que prestamos el servicio que nos solicita.
    <p class="titulo2"><b>-Cookies de terceros:</b> Son aquellas que se envían a su equipo desde un equipo o dominio que
        no
        es
        gestionado por nosotros, sino por otra entidad colaboradora. Como, por ejemplo, las usadas por redes sociales, o
        por
        contenido externo como Google Maps.
    <h2 class="titulo">4. Puede Usted Permitir O Bloquear Las Cookies, Así Como Borrar Sus Datos De Navegación
        (Incluidas
        Las Cookies)</h2>
    <p class="titulo2">Desde el navegador que usted utiliza. Consulte las opciones e instrucciones que ofrece su
        navegador
        para ello. Tenga en cuenta que, si acepta las cookies de terceros, deberá eliminarlas desde las opciones del
        navegador. Para cambiar ajustes de privacidad y cookies: Haz click aquí

    <h2 class="titulo">5. No Realizamos Transferencias De Datos A Terceros Países Realizadas Por El Editor.</h2>
    <p class="titulo2">Puedes informarte de las transferencias a terceros países que, en su caso, realizan los terceros
        identificados en esta política de cookies en sus correspondientes políticas (ver los enlaces facilitados en el
        apartado “Cookies de terceros”).

    <h2 class="titulo">6. La Elaboración De Perfiles Que Realizamos Implica La Toma De Decisiones Automatizadas Con
        Efectos
        Jurídicos Para El Usuario O Que Le Afectan Significativamente De Modo Similar</h2>
    <h2 class="titulo">7. Periodo De Conservación De Los Datos Para Los Diferentes Fines En Los Términos Establecidos En
        El
        Artículo 13.2 A) Del RGPD:</h2>
    <p class="titulo2"><b>-Cookies de sesión:</b> Son cookies temporales que permanecen en el archivo de cookies de su
        navegador
        hasta que el Usuario abandona la página web, por lo que ninguna queda registrada en el disco duro de su
        ordenador.
        La información obtenida por medio de estas cookies, sirven para analizar pautas de tráfico en el website. A la
        larga, esto nos permite proporcionar una mejor experiencia para mejorar el contenido y facilitar su uso.
    <p class="titulo2"><b>-Cookies persistentes:</b> Son almacenadas en el disco duro y nuestra web las lee cada vez que
        el
        Usuario
        realiza una nueva visita. Una cookie permanente posee una fecha de expiración determinada. La cookie dejará de
        funcionar después de esa fecha. Estas cookies las utilizamos, generalmente, para facilitar los servicios de
        compra y
        registro.
    <h2 class="titulo">8. En Relación Con El Resto De Información Exigida Por El Artículo 13 RGPD</h2>
    <h2 class="titulo">¿Cómo puede el Usuario configurar o deshabilitar las cookies?</h2>
    <p class="titulo2">Puede permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración
        de
        las opciones de su navegador de Internet. En caso de que no permita la instalación de cookies en su navegador es
        posible que no pueda acceder a algunos de los servicios y que su experiencia en el website pueda resultar menos
        satisfactoria.

    <p class="titulo2"><b>-Firefox:</b> <a style="color: orange"
            href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias?redirectslug=habilitar-y-deshabilitar-cookies-que-los-sitios-we&redirectlocale=es">Enlace
            Web</a>
    <p class="titulo2"><b>-Chrome:</b> <a style="color: orange"
            href="https://support.google.com/chrome/answer/95647?hl=es">Enlace Web</a>
    <p class="titulo2"><b>-Explorer:</b> <a style="color: orange"
            href="https://support.microsoft.com/es-es/windows/eliminar-y-administrar-cookies-168dab11-0753-043d-7c16-ede5947fc64d">Enlace
            Web</a>
    <p class="titulo2"><b>-Safari:</b> <a style="color: orange"
            href="https://support.apple.com/es-es/guide/safari/sfri11471/mac">Enlace Web</a>
    <p class="titulo2"><b>-Opera:</b> <a style="color: orange"
            href="https://help.opera.com/en/latest/web-preferences/#cookies">Enlace Web</a>
    <p class="titulo2"><b>-Otros navegadores:</b> Consulte la documentación del navegador que tenga instalado.
    <h2 class="titulo">Notas Adicionales</h2>
    <p class="titulo2">Ni esta web ni sus representantes legales se hacen responsables ni del contenido ni de la
        veracidad
        de
        las políticas de privacidad que puedan tener los terceros mencionados en la Aviso Legal.
        Los navegadores web son las herramientas encargadas de almacenar las cookies y desde este lugar debes efectuar
        tu
        derecho a eliminación o desactivación de las mismas.
        Ni esta web ni sus representantes legales pueden garantizar la correcta o incorrecta manipulación de las cookies
        por
        parte de los mencionados navegadores. En algunos casos es necesario instalar cookies para que el navegador no
        olvide
        tu decisión de no aceptación de las mismas.
        En el caso de las cookies de Google Analytics, esta empresa almacena las cookies en servidores ubicados en
        Estados
        Unidos y se compromete a no compartirla con terceros, excepto en los casos en los que sea necesario para el
        funcionamiento del sistema o cuando la ley obligue a tal efecto. Según Google no guarda tu dirección IP. Google
        Inc.
        es una compañía adherida al Acuerdo de Puerto Seguro que garantiza que todos los datos transferidos serán
        tratados
        con un nivel de protección acorde a la normativa europea. Si deseas información sobre el uso que Google da a las
        cookies te adjuntamos este enlace
    </p>
    </body>
    <div class="footer flex lg:flex-row flex-col lg:justify-between justify-center text-center">
        <div class="col lg:w-1/3 w-full" id="politicas">
            <h1 class="titulo3">POLÍTICAS</h1>
            <ul>
                <li><a href="aviso-legal" style="color: white">Aviso Legal</a></li>
                <li><a href="politicas-de-cookies" style="color: white">Política de cookies</a></li>
                <li><a href="politicas-de-privacidad" style="color: white">Política de privacidad</a></li>
            </ul>
        </div>
        <div class="col lg:w-1/3 w-full">
            <h1 class="titulo3">DESCUBRE</h1>
            <ul>
                <li><a href="/" style="color: white">Inicio</a></li>
                <li><a href="instalaciones" style="color: white">Instalaciones</a></li>
                <li><a href="actividades" style="color: white">Actividades</a></li>
            </ul>
        </div>
        <div class="col lg:w-1/3 w-full">
            <h1 class="titulo3">CONTACTA</h1>
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
</x-app-layout>
