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

        .titulo1 {
        margin-left: 700px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans';
        font-size: 40px;
    }

    .titulo {
        margin-left: 100px;
        margin-right: 100px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans';
        font-size: 30px;

    }

    .titulo2 {
        margin-left: 100px;
        margin-right: 100px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 20px;
    }
    </style>


    <h1 class="titulo1">Aviso Legal</h1>
    <h2 class="titulo">Objeto Y Aceptación</h2>
    <p class="titulo2">El presente aviso legal regula el uso del sitio web (en adelante, LA WEB), del que es titular
        <b>Perfect Body Lucena</b> (en adelante, EL PROPIETARIO DE LA WEB).<br>
        La navegación por el sitio web de EL PROPIETARIO DE LA WEB atribuye la condición de usuario del mismo e
        implica
        la
        aceptación plena y sin reservas de todas y cada una de las disposiciones incluidas en este Aviso Legal, que
        pueden
        sufrir modificaciones.<br>

        El usuario se obliga a hacer un uso correcto del sitio web de conformidad con las leyes, la buena fe, el
        orden
        público, los usos del tráfico y el presente Aviso Legal.<br>

        El usuario responderá frente a EL PROPIETARIO DE LA WEB o frente a terceros, de cualesquiera daños y
        perjuicios
        que
        pudieran causarse como consecuencia del incumplimiento de dicha obligación.<br>
    </p>
    <h2 class="titulo">Datos Del Propietario</h2>
    <p class="titulo2">EL PROPIETARIO DE LA WEB, en cumplimiento de la Ley 34/2002, de 11 de julio, de servicios de
        la
        sociedad de la
        información y de comercio electrónico, le informa de que:
        <br><br>

        <b>Perfect Body Lucena</b><br><br>

        <b>-Su CIF es:</b> 34027237W<br>

        <b>-Su domicilio social está en:</b> Calle Cabrillana, 1 1ª-2ª Lucena (Córdoba)<br>

        -Para comunicarse con nuestra empresa, ponemos a su disposición diferentes medios de contacto que detallamos
        a
        continuación:<br>

        <b>-Tfno:</b> (+34) 957510475<br>

        <b>-Email:</b> enviar mail<br>

        Todas las notificaciones y comunicaciones entre los usuarios y EL PROPIETARIO DE LA WEB se considerarán
        eficaces, a
        todos los efectos, cuando se realicen a través de correo postal, electrónico o a través de vía telefónica.
    </p>
    <h2 class="titulo">Datos Profesionales</h2>
    <p class="titulo2">Siendo la actividad principal desarrollada por EL PROPIETARIO DE LA WEB profesionales de la
        psicología.</p>
    <h2 class="titulo">Condiciones De Acceso Y Utilización</h2>
    <p class="titulo2">Las presentes Condiciones Generales regulan el uso (incluyendo el mero acceso) de las páginas
        integrantes de LA WEB,
        incluidos los contenidos y servicios puestos a disposición en ellas (Sesiones privada de terapia y talleres
        de
        mindfulness). Toda persona que acceda a LA WEB acepta someterse a las Condiciones Generales vigentes en cada
        momento
        en
        ella.
    </p>
    <h2 class="titulo">Datos Personales Que Recabamos Y Como Lo Hacemos</h2>
    <p class="titulo2">Lee la <a style="color: orange" href="politicas-de-privacidad">Política de Privacidad</a></p>
    <h2 class="titulo">Compromisos Y Obligaciones</h2>
    <p class="titulo2">El usuario de esta página web de servicios legales queda informado, y acepta, que el acceso a
        la
        misma no supone, en
        modo alguno, el inicio de una prestación de servicios con <b>Perfect Body Lucena</b>. De esta forma, el
        usuario
        se
        compromete a utilizar LA WEB, sus servicios y contenidos sin contravenir la legislación vigente, la buena fe
        y
        el
        orden
        público.<br>

        Queda prohibido el uso de LA WEB, con fines ilícitos o lesivos, o que, de cualquier forma, puedan causar
        perjuicio o
        impedir el normal funcionamiento de la misma. Respecto de los contenidos, se prohíbe:<br>

        -Su reproducción, distribución o modificación, total o parcial, a menos que se cuente con la autorización de
        sus
        legítimos titulares.<br>
        -Cualquier vulneración de los derechos del prestador o de los legítimos titulares.
        -Su utilización para fines comerciales o publicitarios.<br>
        -Difundir contenidos, delictivos, violentos, pornográficos, racistas, xenófobo, ofensivos, de apología del
        terrorismo
        o, en general, contrarios a la ley o al orden público.<br>
        -Introducir en la red virus informáticos o realizar actuaciones susceptibles de alterar, estropear,
        interrumpir
        o
        generar
        errores o daños en los documentos electrónicos, datos o sistemas físicos y lógicos de EL PROPIETARIO DE LA
        WEB o
        de
        terceras personas; así como obstaculizar el acceso de otros usuarios al sitio web y a sus servicios mediante
        el
        consumo masivo de los recursos informáticos a través de los cuales EL PROPIETARIO DE LA WEB presta sus
        servicios.<br>
        -Intentar acceder a las cuentas de correo electrónico de otros usuarios o a áreas restringidas de los
        sistemas
        informáticos de EL PROPIETARIO DE LA WEB o de terceros y, en su caso, extraer información.
    </p>
    <h2 class="titulo">Medidas De Seguridad</h2>
    <p class="titulo2">Los datos personales comunicados por el usuario a <b>Perfect Body Lucena</b> pueden ser
        almacenados
        en bases de datos
        automatizadas o no, cuya titularidad corresponde en exclusiva a <b>Perfect Body Lucena</b>, asumiendo ésta
        todas
        las
        medidas de índole técnica, organizativa y de seguridad que garantizan la confidencialidad, integridad y
        calidad
        de
        la información contenida en las mismas de acuerdo con lo establecido en la normativa vigente en protección
        de
        datos.<br>

        La comunicación entre los usuarios y utiliza un canal seguro, y los datos transmitidos son cifrados gracias
        a
        protocolos
        a HTTPS. Por tanto, garantizamos las mejores condiciones de seguridad para que la confidencialidad de los
        usuarios
        esté
        garantizada.
    </p>
    <h2 class="titulo">Reclamaciones</h2>
    <p class="titulo2">El usuario podrá realizar reclamaciones remitiendo un correo electrónico a
        info@perfectbodylucena.com
        indican su nombre y
        apellidos, el servicio legal adquirido y exponiendo los motivos de su reclamación.
    </p>
    <h2 class="titulo">Derechos De Propiedad Intelectual E Industria</h2>
    <p class="titulo2">En virtud de lo dispuesto en la Ley de Propiedad Intelectual, quedan expresamente prohibidas
        la
        reproducción, la
        distribución y la comunicación pública, incluida su modalidad de puesta a disposición, de la totalidad o
        parte
        de
        los
        contenidos de LA WEB, con fines comerciales, en cualquier soporte y por cualquier medio técnico, sin la
        autorización
        de
        . El usuario se compromete a respetar los derechos de Propiedad Intelectual e Industrial titularidad de
        <b>Perfect
            Body Lucena</b><br>

        El usuario conoce y acepta que la totalidad de LA WEB, conteniendo sin carácter exhaustivo el texto,
        software,
        contenidos (incluyendo la estructura de los servicios legales, selección, ordenación y presentación de los
        mismos)
        diseños, fotografías, material audiovisual y gráficos, está protegida por marcas, derechos de autor y otros
        derechos
        legítimos, de acuerdo con los tratados internacionales en los que España es parte y otros derechos de
        propiedad
        y
        leyes
        de España.<br>

        En el caso de que un usuario o un tercero consideren que se ha producido una violación de sus legítimos
        derechos
        de
        propiedad intelectual por la introducción de un determinado contenido en LA WEB, deberá notificar dicha
        circunstancia a
        <b>Perfect Body Lucena</b> indicando:<br>

        -Datos personales del interesado titular de los derechos presuntamente infringidos, o indicar la
        representación
        con
        la
        que actúa en caso de que la reclamación la presente un tercero distinto del interesado.<br>
        -Señalar los contenidos protegidos por los derechos de propiedad intelectual y su ubicación en LA WEB, la
        acreditación de
        los derechos de propiedad intelectual señalados y declaración expresa en la que el interesado se
        responsabiliza
        de
        la
        veracidad de las informaciones facilitadas en la notificación.
    </p>
    <h2 class="titulo">Política De Comentarios</h2>
    <p class="titulo2">En LA WEB de nuestra firma legal se permiten realizar comentarios para enriquecer los
        contenidos
        y
        realizar consultas.<br>

        No se admitirán comentarios que no estén relacionados con la temática legal o consultas jurídicas de LA WEB,
        que
        incluyan difamaciones, agravios, insultos, ataques personales o faltas de respeto en general hacia el autor
        o
        hacia
        otros miembros.<br>

        También serán suprimidos los comentarios que contengan información que sea obviamente engañosa, falsa y
        difamatoria,
        siendo perjudicial para los intereses de nuestra firmal legal, así como los comentarios que contengan
        información
        personal, como, por ejemplo, domicilios privados o teléfonos y que vulneren nuestra política de protección
        de
        datos.

        Se desestimará, igualmente, aquellos comentarios creados sólo con fines promocionales de LA WEB, persona o
        colectivo
        y
        todo lo que pueda ser considerado SPAM en general.<br>

        No se permiten comentarios anónimos, así como aquellos realizados por una misma persona con distintos
        apodos. No
        se
        permitirán tampoco aquellos comentarios que intenten forzar un debate o una toma de postura por otro usuario
        respecto a
        los servicios prestados por nuestra firma legal.

    <h2 class="titulo">Exclusión De Garantías Y Responsabilidades</h2>
    <p class="titulo2"><b>Perfect Body Lucena</b> no otorga ninguna garantía ni se hace responsable, en ningún caso,
        de
        los
        daños y
        perjuicios
        de cualquier naturaleza que pudieran traer causa de:<br>

        -La falta de disponibilidad, mantenimiento y efectivo funcionamiento de LA WEB, o de sus servicios y
        contenidos.<br>
        -La existencia de virus, programas maliciosos o lesivos en los contenidos.<br>
        -El uso ilícito, negligente, fraudulento o contrario a este Aviso Legal.<br>
        -La falta de licitud, calidad, fiabilidad, utilidad y disponibilidad de los servicios prestados por terceros
        y
        puestos a
        disposición de los usuarios en LA WEB.<br>
        -Los daños que pudieran dimanar del uso ilegal o indebido de LA WEB.
    </p>
    <h2 class="titulo">Ley Aplicable Y Jurisdicción</h2>
    <p class="titulo2">Con carácter general las relaciones entre <b>Perfect Body Lucena</b> con los usuarios de sus
        servicios
        telemáticos,
        presentes en LA WEB se encuentran sometidas a la legislación y jurisdicción españolas y a los tribunales de
        Córdoba
        (España).
    </p>
    <h2 class="titulo">Contacto</h2>
    <p class="titulo2">En caso de que cualquier usuario tuviese alguna duda acerca de estas Condiciones Legales o
        cualquier comentario sobre LA
        WEB, por favor diríjase a info@marlinares.com
    </p>
    </body>
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
