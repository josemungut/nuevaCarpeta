<x-app-layout>

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
                {{-- @php
                    $imagenes = ["https://marketplace.canva.com/EAFWkcfbgcM/1/0/1067w/canva-p%C3%B3ster-torneo-de-f%C3%BAtbol-profesional-verde-VqANHXmyvPQ.jpg","https://img.freepik.com/vector-premium/cartel-campeonato-tenis_73621-899.jpg?w=2000","data:image/jpeg;base64,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","https://img.freepik.com/vector-premium/cartel-promocion-clases-natacion_281653-5263.jpg?w=2000"];
({{$imagenes[rand(0,count($imagenes)-1)]}}
                @endphp --}}
                @foreach ($hola as $landing)
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url({{ Storage::url($landing->imagen) }})">
                                <div class="inner">
                                    {{ $landing->nombre }}
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    {{ $landing->descripcion }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>


    <footer>
        <a href="http://www.freepik.com">Forest Graphics Designed by brgfx / Freepik</a>
    </footer>



</body>
</x-app-layout>
