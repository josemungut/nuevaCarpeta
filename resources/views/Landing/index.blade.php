    <style>
        .titulo {
            margin-top: 50px;
            margin-left: 750px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 20px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Rancho&display=swap');

        :root {
            --primary: #094b65;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            overflow-x: hidden;
            background: #fff;
            min-height: 100vh;
        }

        #header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 30px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        #header .logo {
            color: var(--primary);
            font-weight: 700;
            font-size: 2em;
            text-decoration: none;
        }

        #header ul {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #header ul li {
            list-style: none;
            margin-left: 20px;
        }

        #header ul li a {
            text-decoration: none;
            padding: 6px 15px;
            color: var(--primary);
            border-radius: 20px;
        }

        #header ul li a:hover,
        #header ul li a.active {
            background: var(--primary);
            color: #fff;
        }

        section {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, var(--primary), transparent);
            z-index: 10;
        }

        section img {
            position: absolute;
            top: 0px;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            pointer-events: none;
        }

        section #text {
            position: absolute;
            color: var(--primary);
            font-size: 10vw;
            text-align: center;
            line-height: .55em;
            font-family: 'Rancho', cursive;
            transform: translatey(-50%);
        }

        section #text span {
            font-size: .20em;
            letter-spacing: 2px;
            font-weight: 400;
        }

        #btn {
            text-decoration: none;
            display: inline-block;
            padding: 8px 30px;
            background: #fff;
            color: var(--primary);
            font-size: 1.2em;
            font-weight: 500;
            letter-spacing: 2px;
            border-radius: 40px;
            transform: translatey(100px);
        }

        .sec {
            position: relative;
            padding: 100px;
            background: var(--primary);
        }

        .sec h2 {
            font-size: 3.5em;
            color: #fff;
            margin-bottom: 10px;
        }

        .sec p {
            font-size: 1em;
            color: #fff;
        }

        footer {
            position: relative;
            padding: 0px 100px;
            background: var(--primary);
        }

        footer a {
            text-decoration: none;
            color: #fff;
        }




        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        h1 {
            font-size: 2.5rem;
            font-family: 'Montserrat';
            font-weight: normal;
            color: #444;
            text-align: center;
            margin: 2rem 0;
        }

        .wrapper {
            width: 90%;
            margin: 0 auto;
            max-width: 80rem;
        }

        .cols {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .col {
            width: calc(25% - 2rem);
            margin: 1rem;
            cursor: pointer;
        }

        .container {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-perspective: 1000px;
            perspective: 1000px;
        }

        .front,
        .back {
            background-size: cover;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            background-position: center;
            -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            text-align: center;
            min-height: 280px;
            height: auto;
            border-radius: 10px;
            color: #fff;
            font-size: 1.5rem;
        }

        .back {
            background: #cedce7;
            background: -webkit-linear-gradient(45deg, #cedce7 0%, #596a72 100%);
            background: -o-linear-gradient(45deg, #cedce7 0%, #596a72 100%);
            background: linear-gradient(45deg, #cedce7 0%, #596a72 100%);
        }

        .front:after {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100%;
            height: 100%;
            content: '';
            display: block;
            opacity: .6;
            background-color: #000;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 10px;
        }

        .container:hover .front,
        .container:hover .back {
            -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
            transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        }

        .back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .inner {
            -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
            top: 50%;
            position: absolute;
            left: 0;
            width: 100%;
            padding: 2rem;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            outline: 1px solid transparent;
            -webkit-perspective: inherit;
            perspective: inherit;
            z-index: 2;
        }

        .container .back {
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .container .front {
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .container:hover .back {
            -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .container:hover .front {
            -webkit-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .front .inner p {
            font-size: 2rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .front .inner p:after {
            content: '';
            width: 4rem;
            height: 2px;
            position: absolute;
            background: #C6D4DF;
            display: block;
            left: 0;
            right: 0;
            margin: 0 auto;
            bottom: -.75rem;
        }

        .front .inner span {
            color: rgba(255, 255, 255, 0.7);
            font-family: 'Montserrat';
            font-weight: 300;
        }

        @media screen and (max-width: 64rem) {
            .col {
                width: calc(33.333333% - 2rem);
            }
        }

        @media screen and (max-width: 48rem) {
            .col {
                width: calc(50% - 2rem);
            }
        }

        @media screen and (max-width: 32rem) {
            .col {
                width: 100%;
                margin: 0 0 2rem 0;
            }
        }
    </style>

    <head>
    </head>

    <body>
        <!--<header id="header">
            <a href="#" class="logo">Forest</a>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </header>-->

        <Section>
            <h2 id="text"><span></span><br>PERFECT BODY <br><br> LUCENA</h2>

            <img src="https://user-images.githubusercontent.com/65358991/170092504-132fa547-5ced-40e5-ab64-ded61518fac2.png"
                id="bird1">
            <img src="https://user-images.githubusercontent.com/65358991/170092542-9747edcc-fb51-4e21-aaf5-a61119393618.png"
                id="bird2">
            <img src="https://user-images.githubusercontent.com/65358991/170092559-883fe071-eb4f-4610-8c8b-a037d061c617.png"
                id="forest">

            <a href="#" id="btn">Explore</a>

            <img src="https://user-images.githubusercontent.com/65358991/170092605-eada6510-d556-45cc-b7fa-9e4d1d258d26.png"
                id="rocks">
            <img src="https://user-images.githubusercontent.com/65358991/170092616-5a70c4af-2eed-496f-bde9-b5fcc7142a31.png"
                id="water">
        </Section>

        <div class="sec">
            <div class="wrapper">
                <div class="cols">
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(https://unsplash.it/500/500/)">
                                <div class="inner">
                                    @foreach ($hola as $profesor)
                                        <div
                                            class="max-w-sm bg-white border border-gray-200 ml-15 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                            <div class="p-5">
                                                <a href="#">
                                                    <h5
                                                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                        {{ $profesor->nombre }}</h5>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    @foreach ($hola as $profesor)
                                    <div
                                        class="max-w-sm bg-white border border-gray-200 ml-15 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                    {{ $profesor->descripcion }}</h5>
                                            </a>
                                            </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="url(https://unsplash.it/511/511/)">
                                <div class="inner">
                                    <p>Rocogged</p>
                                    <span>Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat
                                        velit quae suscipit c.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(https://unsplash.it/502/502/)">
                                <div class="inner">
                                    <p>Strizzes</p>
                                    <span>Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat
                                        velit quae suscipit c.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(https://unsplash.it/503/503/)">
                                <div class="inner">
                                    <p>Clossyo</p>
                                    <span>Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat
                                        velit quae suscipit c.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(https://unsplash.it/504/504/">
                                <div class="inner">
                                    <p>Rendann</p>
                                    <span>Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat
                                        velit quae suscipit c.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(https://unsplash.it/505/505/)">
                                <div class="inner">
                                    <p>Reflupper</p>
                                    <span>Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat
                                        velit quae suscipit c.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(https://unsplash.it/506/506/)">
                                <div class="inner">
                                    <p>Acirassi</p>
                                    <span>Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat
                                        velit quae suscipit c.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(https://unsplash.it/508/508/)">
                                <div class="inner">
                                    <p>Sohanidd</p>
                                    <span>Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat
                                        velit quae suscipit c.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <a href="http://www.freepik.com">Forest Graphics Designed by brgfx / Freepik</a>
        </footer>



    </body>



