<x-app-layout>

    <style>
        * {
            margin: 0;
            padding: 0;

        }

        .row {
            max-width: 1140px;
            margin: 0 auto;
        }


        body {

            font-family: tahoma;


        }

        .hero {
            position: absolute;
            width: 1140px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("http://bg.mealtrip.com/00_upbank/bb_fblogb_img_rs/2017/aID35/pam-smith-salmon-0928-15-008.jpg");
            height: 100vh;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        h1 {
            color: white;
        }

        .main-nav {
            list-style: none;
            float: right;
            margin-top: 60px;
        }

        .main-nav li {
            display: inline-block;
            margin-left: 20px;
        }

        .main-nav li a {
            color: white;
            text-decoration: none;
            font-size: 90%;
            font-weight: bold;
        }

        .main-nav li a:hover {
            color: #e67e22;
            border-bottom: 2px solid #e67e22;
            transition: all 0.5s ease-in;
            padding: 15px 0;

        }

        .logo img {
            height: 100px;
            float: left;
            margin-top: 30px;

        }


        .btn {
            border: 1px solid #e67e22;
            padding: 10px 30px;
            color: #e67e22;
            text-decoration: none;
            border-radius: 12px;
            margin-right: 15px;
        }

        .button-awesome {
            margin-top: 40px;
        }

        .btn-half:hover {
            background-color: #e67e22;
            color: white;
            transition: all 0.5s ease-in;
        }

        .btn-full:hover {
            background-color: #e67e22;
            color: white;
            transition: all 0.5s ease-in;
        }

        .copy {
            width: 70%;
            margin-left: 15%;
            margin-bottom: 20px;
        }

        h3:after {
            width: 100px;
            height: 2px;
            background-color: #e67e22;
            display: block;
            content: " ";
            margin: 0 auto;
            margin-top: 30px;

        }

        .features h3 {
            margin-top: 50px;
            margin-bottom: 30px;


        }

        .arranging {
            text-align: justify;
        }

        .features i {
            font-size: 40px;
            color: #e67e22;
            margin-left: 40%;
            margin-bottom: 20px;
        }

        .features h4 {
            margin-left: 55px;
        }

        .meal-showcase {
            list-style: none;
            width: 100%;
        }

        .meal-showcase li {
            display: block;
            width: 25%;
            float: left;
        }

        .meal-photo {
            width: 100%;
            margin: 0;
            overflow: hidden;
        }

        .meal-photo img {
            width: 100%;
            height: auto;
            transform: scale(1.15);
            transition: all 0.5s;


        }

        .meal-photo img:hover {
            transform: scale(1.05);
        }

        .meal {
            margin-top: 80px;
        }

        .pic img {
            width: 80%;
            margin-left: 20%;
            margin-top: 80px;
        }

        .works-step {
            margin-top: 50px;
        }

        .works-step div {
            border: 1px solid #e67e22;
            display: inline-block;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
        }

        .works-step img {
            height: 40px;
            margin-top: 20px;
            margin-right: 20px;
        }

        .clear-fix {
            zoom: 1;
        }

        .clear-fix:after {
            visibility: hidden;
            content: ".";
            height: 0;
            display: block;
            clear: both;
        }

        .mobile {
            margin-top: 60px;
        }

        .cities {
            margin-top: 100px;
        }

        .cities img {
            width: 100%;
            margin-top: 50px;
        }

        .cities i {
            color: #e67e22;
        }

        .testimonials {
            margin-top: 80px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.contentful.com/lufu0clouua1/2C9nEg49acWyc4W8I4QkYm/54eab24194bc714b1863c5ce09abc3fd/PLATTER_WEB__fresh-fruit_6899_V2_rfc.jpg");
            padding-top: 80px;
            padding-bottom: 80px;
            color: white;
            background-attachment: fixed;

        }

        .testimonials p {
            color: white;
            line-height: 25px;
            text-align: justify;
            margin-top: 40px;
        }

        .testimonials cite img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .btn-block {
            background-color: #e67e22;
            color: #fff;
            border-radius: 4px;
            margin-top: 15px;
        }

        .gap {
            margin-top: 40px;
        }

        .form {
            margin-top: 40px;
        }
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
    </style>


    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
            integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Healthy Eating and Living</title>
    </head>

    <body>
        <header>
            <div class="row">
                <div class="hero">
                    <h1> GOODBYE JUNK FOOD <br> HELLO HEALTHY FOOD </h1>
                    <div class="button-awesome">
                        <a href=""class="btn btn-half">Show me more</a>
                        <a href=""class="btn btn-full">I'm hungry</a>
                    </div>
        </header>

        <section class="features">
            <h3 class="text-center"> GET FOOD FAST NOT FAST FOOD <br> PLAN HEALTHY MEALS </h3>
            <p class="copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Non blandit massa enim nec dui nunc mattis enim ut. Turpis in eu mi
                bibendum neque egestas congue quisque. Vivamus at augue eget arcu dictum varius.</p>

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <i class="fa fa-certificate"></i>

                        <h4>Reward Success</h4>

                        <p class="arranging">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec dui nunc
                            mattis enim ut. Turpis in eu mi bibendum neque egestas congue quisque. Vivamus at augue eget
                            arcu dictum varius.</p>
                    </div>

                    <div class="col-md-3">
                        <i class="fa fa-camera"></i>

                        <h4>Take Photos</h4>

                        <p class-"arranging">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec dui nunc
                            mattis enim ut. Turpis in eu mi bibendum neque egestas congue quisque. Vivamus at augue eget
                            arcu dictum varius. </p>
                    </div>

                    <div class="col-md-3">
                        <i class="fa fa-envelope"></i>

                        <h4>Be Social</h4>

                        <p class="arranging">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec dui nunc
                            mattis enim ut. Turpis in eu mi bibendum neque egestas congue quisque. Vivamus at augue eget
                            arcu dictum varius. </p>
                    </div>

                    <div class="col-md-3">
                        <i class="fa fa-cog"></i>

                        <h4>Set Goals</h4>

                        <p class="arranging">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec dui nunc
                            mattis enim ut. Turpis in eu mi bibendum neque egestas congue quisque. Vivamus at augue eget
                            arcu dictum varius. </p>



                    </div>
                </div>
            </div>

        </section>

        <section class="meal">
            <ul class="meal-showcase clear-fix">
                <li>
                    <figure class="meal-photo">
                        <img src="http://lorempixel.com/200/200/food/">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="http://lorempixel.com/200/200/food/">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="http://lorempixel.com/200/200/food/">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="http://lorempixel.com/200/200/food/">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="http://lorempixel.com/200/200/food/">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="http://lorempixel.com/200/200/food/">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="http://lorempixel.com/200/200/food/">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="http://lorempixel.com/200/200/food/">
                    </figure>
                </li>


            </ul>
        </section>




        <section class="testimonials">
            <h3 class="text-center">OUR CUSTOMERS CAN'T LIVE WITHOUT US</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">


                        <p>
                            <!--The best preparation for tomorrow is doing your best today.<br>
                H. Jackson Brown, Jr. <br>-->
                            The meal plan resulted in a 12 lb weight loss for me.
                            That was a terrific result, but more than that it took care of skin problems I
                            didn't realize were allergic reactions to food. Another healthy change was I feel
                            more mentally alert- being a full time student I need all of the focus I can get!

                        </p>


                        <cite><img src="http://lorempixel.com/50/50/people/"> Chris P. Bacon</cite>



                    </div>

                    <div class="col-md-4">


                        <p>

                            Loved the meal plan, it really educated me on the importance
                            of organic foods, and baking clean. I feel 100% better day to day, and have way more energy.
                            I would tell anyone who struggles with weight, energy or even just poor diet just how much
                            this program has motivated me


                        </p>


                        <cite><img src="http://lorempixel.com/50/50/people/"> Eden Ham</cite>



                    </div>

                    <div class="col-md-4">


                        <p>

                            Enjoyed the team support, it definitely helped me to acheive my goals.
                            I lost 20 lbs. total, 3 inches off
                            my belly and 2.5 inches off my waist! I feel great.

                        </p>


                        <cite><img src="http://lorempixel.com/50/50/people/"> Al Dente</cite>

                    </div>

                </div>

            </div>

        </section>

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
    </body>

    </html>
</x-app-layout>
