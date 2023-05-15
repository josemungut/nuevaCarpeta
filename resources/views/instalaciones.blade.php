<style>
    body {
        font-family: 'Poppins', Monospace, serif, sans-serif;
    }

    .btn-primary,
    .btn-success {
        background-color: #fd5f00;
        border-color: #fd5f00;
    }

    .btn-success {
        width: 50%;
    }

    .btn-primary:hover,
    .btn-success:hover,
    .btn-primary:active,
    .btn-success:active,
    .btn-success:visited,
    .btn-primary:focus,
    .btn-success:focus {
        background-color: #e35500;
        border-color: #e35500;
    }

    .navbar {
        margin-bottom: 0;
        height: 80px;
    }

    .nav.navbar-nav.navbar-right {
        margin-top: 16px;
        font-size: 1.25em;
    }

    .navbar-default .navbar-nav li:hover {
        border-bottom: 2px solid #fd5f00;
    }

    .navbar-toggle {
        margin-top: 22px;
    }

    .navbar-collapse {
        float: right;
        margin-top: -2px;
    }

    .navbar-collapse li {
        background-color: #f8f8f8;
    }

    .navbar img {
        height: 70px;
        width: auto;
        margin-top: -12px;
    }

    .jumbotron {
        background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("https://www.dropbox.com/s/odiuxllq94kwguk/hero1-min.png?raw=1");
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("https://www.dropbox.com/s/odiuxllq94kwguk/hero1-min.png?raw=1");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        margin: 0;
    }

    .header {
        margin-top: 200px;
        text-align: center;
    }

    .header h1 {
        color: #fff;
        font-size: 5em;
        z-index: 100;
    }

    h1 small {
        color: #fd5f00;
    }

    h2:after {
        display: block;
        height: 2px;
        background-color: #fd5f00;
        content: " ";
        width: 150px;
        margin: 0 auto;
        margin-top: 20px;
    }

    h2,
    h3,
    p {
        text-align: center;
    }

    h5 {
        font-size: 1.5em;
        margin-top: 25px;
    }

    p {
        font-size: 1.25em;
    }

    .space {
        margin-bottom: 30px;
    }

    .intro {
        margin: 0;
        padding: 50px;
        background-color: #efefef;
    }

    #services {
        padding: 50px;
    }

    #projects {
        padding: 50px;
        margin: 0;
        background-color: #f2f2f2;
    }

    .border {
        border-bottom: 2px solid #fd5f00;
    }

    .projects-img {
        height: 150px;
        width: auto;
        display: block;
        margin: auto;
    }

    .thumbs {
        margin: 50px;
    }

    .thumbnail {
        background-color: #e8e8e8;
    }

    .thumbnail img {
        height: auto;
        width: 550px;
    }

    .modal-title {
        text-align: center;
        font-size: 2em;
        font-weight: 700;
        margin-bottom: -10px;
    }

    .modal-header,
    .modal-body {
        border-bottom: 1px solid #fd5f00
    }

    .modal-body ul {
        margin-top: -10px;
        font-size: 1.15em;
    }

    .modal-body p {
        text-align: left;
    }

    #contact {
        padding: 50px;
    }

    .center-form {
        display: block;
        text-align: center;
    }

    form {
        margin: 30px;
        width: 60%;
        height: 550px;
        padding: 15px;
        background-color: #e8e8e8;
        display: inline-block;
    }
</style>

<x-app-layout>


    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 95vh">
        <div class="absolute top-0 w-full h-full bg-top bg-cover"
            style="
   background-image: url('https://img.freepik.com/fotos-premium/amigos-fitness-retrato-gimnasio-happy-relax-grupo-orgulloso-listo-entrenar-fitness-desafiar-equipo-entrenador-personal-mujer-hombres-centro-deportivo-entrenamiento-cruzado-ajuste_590464-101354.jpg');
">
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto" data-aos="fade-in">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div>
                        <h1 class="text-white font-semibold text-5xl">
                            NUESTRAS <span class="text-orange-500">INSTALACIONES</span>
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">
                            Aquí vas a poner encontrar un poco de informacion de las instalaciones que tenemos

                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px; transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>


    <div class="container-fluid intro" id="about">
        <div class="row">
            <div class="col-md-12">
                <h2 class="space">Where asthetics and functionality meet</h2>
                <p>Born out of a need for a career change, with the desire to do things right the first time, Three
                    Finger
                    Designs was formed with two major principles in mind: Asthetics and Functionality. When founder Nate
                    Zahn decided to make the move to web development,
                    he didn't know a single thing about coding, much less how to turn a bunch of letters on a computer
                    screen into something pleasing to look at and use. After many frustrating hours of scowering the
                    internet and watching online videos, things began
                    to click. One year later, Three Finger Designs was born and the rest is history!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="services">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="space">A small company doing big things in web development</h2>
                <p class="space">Need a personal blog or small business online store? No problem. Or, are you an
                    established corportation looking to upgrade your online presence? We have you covered!</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <img class="projects-img" src="http://oscardl.net/img/Html5css3jsbootstrap.png"
                alt="HTML5, CSS3, JavaScript, Bootstrap logo">
            <h3 class="border">Front End Development</h3>
            <p>From HTML5 and CSS3 to JavaScript and Bootstrap, we know how to make your products look good with the
                latest
                in web standards. No need to worry if it will work on your mobile device, because it will!</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <img class="projects-img"
                src="http://webalvestechnologies.com/wp-content/uploads/2015/08/ruby-on-rails-development.jpg"
                alt="Ruby on Rails logo">
            <h3 class="border">Back End Development</h3>
            <p>What you see on the surface is only part of the equation. The stuff that no one sees is what really makes
                it
                tick. With Ruby On Rails as our go to framework, you can rest assured your website is going to rock!</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <img class="projects-img" src="http://imagexmedia.com/sites/default/files/support_maintenance.png"
                alt="Content managment logo">
            <h3 class="border">Website Management</h3>
            <p>Do you already have a super awesome website, but don't have the time or resources to maintain it
                yourself?
                Let us take the weight off your shoulders so you can keep doing your thing, while we do ours!</p>
        </div>
    </div>
    </div>
    </div>
    <div class="container-fluid thumbs" id="projects">
        <div class="row">
            <div class="col-md-12">
                <h2 class="space">Our projects</h2>
                <p class="space">Feel free to check out our previous work to see the craftsmanship we strive for and
                    examples of what we can bring to you.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="https://www.dropbox.com/s/1z2yvrxn4ap8mcz/HITW_preview.png?raw=1"
                        alt="A preview of the Hole In The Wall XC Invitational website">
                    <div class="caption">
                        <h3>Hole In The Wall Invitational</h3>
                        <p>Washington state's largest cross country meet at any level</p>
                        <p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#modal1">View details</button>

                            <!-- Modal -->
                        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="#HITW">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="HITW">Nike - Hole In The Wall Invitational</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img class="img-responsive"
                                            src="https://www.dropbox.com/s/1z2yvrxn4ap8mcz/HITW_preview.png?raw=1"
                                            alt="A preview of the Hole In The Wall XC Invitational website">
                                        <h5 class="space">Features:</h5>
                                        <ul>
                                            <li>HTML4</li>
                                            <li>CSS3</li>
                                            <li>Skeleton: Responsive CSS Boilerplate</li>
                                            <li>JavaScript</li>
                                            <li>Google Maps</li>
                                            <li>Google Anylitics</li>
                                        </ul>
                                        <p>As Nate's first learning project, the result was rather encouraging for the
                                            future of Three Finger Designs.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive"
                        src="https://www.dropbox.com/s/rxp89d699ib80yv/Well_Run_preview.png?raw=1"
                        alt="A preview of the Snohomish Well Run website">
                    <div class="caption">
                        <h3>Snohomish Well Run</h3>
                        <p>A charity run/walk to raise funds for clean-water wells in Africa</p>
                        <p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#modal2">View details</button>

                            <!-- Modal -->
                        <div class="modal fade" id="modal2" tabindex="-1" role="dialog"
                            aria-labelledby="#wellRun">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="wellRun">Snohomish Well Run</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img class="img-responsive"
                                            src="https://www.dropbox.com/s/rxp89d699ib80yv/Well_Run_preview.png?raw=1"
                                            alt="A preview of the Snohomsih Well Run website">
                                        <h5 class="space">Features:</h5>
                                        <ul>
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>Custom CSS Boilerplate</li>
                                            <li>JavaScript</li>
                                            <li>jQuery</li>
                                            <li>Google Maps</li>
                                        </ul>
                                        <p>A quick project with emphasis on clean/minimal design, including an
                                            experimental
                                            custom boilerplate. This project is still under construction, but will be
                                            deployed very soon!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img class="img-responsive"
                        src="https://www.dropbox.com/s/jat322qn2aqu0qi/Excelerate_Sport_preview.png?raw=1"
                        alt="A preview of the Exclerate Sport website">
                    <div class="caption">
                        <h3>Excelerate Sport</h3>
                        <p>The premier strength and conditioning business in Snohomish, Washington.</p>
                        <p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#modal3">View details</button>

                            <!-- Modal -->
                        <div class="modal fade" id="modal3" tabindex="-1" role="dialog"
                            aria-labelledby="#excelerate">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="excelerate">Excelerate Sport</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img class="img-responsive"
                                            src="https://www.dropbox.com/s/jat322qn2aqu0qi/Excelerate_Sport_preview.png?raw=1"
                                            alt="A preview of the Excelerate Sport website">
                                        <h5 class="space">Features:</h5>
                                        <ul>
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>Twitter Bootstrap v3</li>
                                            <li>Ruby on Rails</li>
                                            <li>JavaScript</li>
                                            <li>jQuery</li>
                                            <li>Google Maps</li>
                                            <li>Google Anylitics</li>
                                        </ul>
                                        <p>Three Finger Designs' most ambitious project to date. This project is still
                                            under
                                            construction, but will be deployed in the near future. The second release
                                            planned for this website will be built on the Ruby on Rails framework to
                                            include
                                            user profiles, a blog, payment center, and online store.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="contact">
        <div class="row">
            <div class="col-md-12">
                <h2 class="space">We want to hear about your project</h2>
                <p>We're only an email away...</p>
                <div class="center-form">
                    <form>
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="name" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="url"></label>
                            <input type="url" class="form-control" id="url" placeholder="URL (optional)">
                        </div>
                        <div class="form-group">
                            <label for="message"></label>
                            <textarea class="form-control" rows="10" id="message" placeholder="Hello Three Finger Designs..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top"
                            title="Send it already!"><i class="fa fa-paper-plane fa-3x"
                                aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <p>&copy 2016 Three Finger Designs. All rights reserved</p>
            </div>
        </div>
    </div>
</x-app-layout>





<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese);

    @font-face {
        font-family: "demurecontrols";
        src: url("http://cssslider.com/sliders/pen/demurecontrols.eot?cssslidertheme=demure");
        src: url("http://cssslider.com/sliders/pen/demurecontrols.eot#iefix?cssslidertheme=demure") format("embedded-opentype"),
            url("http://cssslider.com/sliders/pen/demurecontrols.woff?cssslidertheme=demure") format("woff"),
            url("http://cssslider.com/sliders/pen/demurecontrols.ttf?cssslidertheme=demure") format("truetype"),
            url("http://cssslider.com/sliders/pen/demurecontrols.svg#demure?cssslidertheme=demure") format("svg");
        font-weight: normal;
        font-style: normal;
    }

    .text-1 {
        font-family: Roboto;
    }

    .text-1 a {
        color: #000000;
        text-decoration: none;
    }

    .csslider1 {
        display: inline-block;
        position: relative;
        max-width: 480px;

        width: 100%;
        margin-top: 10px;
    }

    .csslider1>.cs_anchor {
        display: none;
    }

    .csslider1>ul {
        position: relative;
        z-index: 1;
        font-size: 0;
        line-height: 0;
        margin: 0 auto;
        padding: 0;

        overflow: hidden;
        white-space: nowrap;
    }

    .csslider1>ul>li.img img {
        width: 100%;
    }

    .csslider1>ul>li.img {
        font-size: 0pt;

        -khtml-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .csslider1>ul>li {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 100%;
        overflow: hidden;
        font-size: 15px;
        font-size: initial;
        line-height: normal;
        white-space: normal;
        vertical-align: top;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;

        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .csslider1 .cs_lnk {
        position: absolute;
        top: -9999px;
        left: -9999px;
        font-size: 0pt;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .csslider1>.cs_arrowprev,
    .csslider1>.cs_arrownext {
        position: absolute;
        top: 50%;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;

        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        z-index: 5;
    }

    .csslider1>.cs_arrowprev>label,
    .csslider1>.cs_arrownext>label {
        position: absolute;

        text-decoration: none;
        cursor: pointer;
        opacity: 0;
        z-index: -1;
    }

    .csslider1>.cs_arrowprev {
        left: 0;
    }

    .csslider1>.cs_arrownext {
        right: 0;
    }

    .csslider1>.cs_arrowprev>label.num2,
    .csslider1>.cs_arrownext>label.num1 {
        opacity: 1;
        z-index: 5;
    }

    .csslider1>.slide:checked~.cs_arrowprev>label,
    .csslider1>.slide:checked~.cs_arrownext>label {
        opacity: 0;
        z-index: -1;
    }



    .csslider1>#cs_slide1_0:checked~.cs_arrowprev>label.num2,
    .csslider1>#cs_slide1_0:checked~.cs_arrownext>label.num1,
    .csslider1>#cs_slide1_1:checked~.cs_arrowprev>label.num0,
    .csslider1>#cs_slide1_1:checked~.cs_arrownext>label.num2,
    .csslider1>#cs_slide1_2:checked~.cs_arrowprev>label.num1,
    .csslider1>#cs_slide1_2:checked~.cs_arrownext>label.num0 {
        opacity: 1;
        z-index: 5;
    }

    /* calculate autoplay */
    @-webkit-keyframes arrow {

        0%,
        33.32333333333334% {
            opacity: 1;
            z-index: 5;
        }

        33.333333333333336%,
        100% {
            opacity: 0;
            z-index: -1;
        }
    }

    @-moz-keyframes arrow {

        0%,
        33.32333333333334% {
            opacity: 1;
            z-index: 5;
        }

        33.333333333333336%,
        100% {
            opacity: 0;
            z-index: -1;
        }
    }

    @-ms-keyframes arrow {

        0%,
        33.32333333333334% {
            opacity: 1;
            z-index: 5;
        }

        33.333333333333336%,
        100% {
            opacity: 0;
            z-index: -1;
        }
    }

    @-o-keyframes arrow {

        0%,
        33.32333333333334% {
            opacity: 1;
            z-index: 5;
        }

        33.333333333333336%,
        100% {
            opacity: 0;
            z-index: -1;
        }
    }

    @keyframes arrow {

        0%,
        33.32333333333334% {
            opacity: 1;
            z-index: 5;
        }

        33.333333333333336%,
        100% {
            opacity: 0;
            z-index: -1;
        }
    }


    .csslider1>#cs_play1:checked~.cs_arrowprev>label.num2,
    .csslider1>#cs_play1:checked~.cs_arrownext>label.num1,
    .csslider1>#cs_pause1:checked~.cs_arrowprev>label.num2,
    .csslider1>#cs_pause1:checked~.cs_arrownext>label.num1 {
        -webkit-animation: arrow 24000ms infinite -2000ms;
        -moz-animation: arrow 24000ms infinite -2000ms;
        -ms-animation: arrow 24000ms infinite -2000ms;
        -o-animation: arrow 24000ms infinite -2000ms;
        animation: arrow 24000ms infinite -2000ms;

    }

    .csslider1>#cs_play1:checked~.cs_arrowprev>label.num0,
    .csslider1>#cs_play1:checked~.cs_arrownext>label.num2,
    .csslider1>#cs_pause1:checked~.cs_arrowprev>label.num0,
    .csslider1>#cs_pause1:checked~.cs_arrownext>label.num2 {
        -webkit-animation: arrow 24000ms infinite 6000ms;
        -moz-animation: arrow 24000ms infinite 6000ms;
        -ms-animation: arrow 24000ms infinite 6000ms;
        -o-animation: arrow 24000ms infinite 6000ms;
        animation: arrow 24000ms infinite 6000ms;

    }

    .csslider1>#cs_play1:checked~.cs_arrowprev>label.num1,
    .csslider1>#cs_play1:checked~.cs_arrownext>label.num0,
    .csslider1>#cs_pause1:checked~.cs_arrowprev>label.num1,
    .csslider1>#cs_pause1:checked~.cs_arrownext>label.num0 {
        -webkit-animation: arrow 24000ms infinite 14000ms;
        -moz-animation: arrow 24000ms infinite 14000ms;
        -ms-animation: arrow 24000ms infinite 14000ms;
        -o-animation: arrow 24000ms infinite 14000ms;
        animation: arrow 24000ms infinite 14000ms;

    }


    .csslider1.cs_pauseHover:hover>.cs_arrowprev>label,
    .csslider1>#cs_pause1:checked~.cs_arrowprev>label,
    .csslider1.cs_pauseHover:hover>.cs_arrownext>label,
    .csslider1>#cs_pause1:checked~.cs_arrownext>label {
        -webkit-animation-play-state: paused !important;
        -moz-animation-play-state: paused !important;
        -ms-animation-play-state: paused !important;
        -o-animation-play-state: paused !important;
        animation-play-state: paused !important;
    }

    /* stop */
    .csslider1>.slide:checked~.cs_arrowprev>label,
    .csslider1>.slide:checked~.cs_arrownext>label {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        -o-animation: none;
        animation: none;
    }


    /* /calculate autoplay */
    .csslider1>.cs_bullets {
        position: absolute;
        left: 0;
        width: 100%;
        z-index: 6;
        font-size: 0;
        line-height: 8pt;
        text-align: center;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .csslider1>.cs_bullets>div {
        margin-left: -50%;
        width: 100%;
    }

    .csslider1>.cs_bullets>label {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    .csslider1>.cs_bullets>label>.cs_thumb {
        visibility: hidden;
        position: absolute;
        opacity: 0;
        z-index: 1;
        line-height: 0;
        left: -44px;
        top: -48px;
    }

    .csslider1>.cs_description {
        z-index: 3;
    }

    .csslider1>.cs_description a,
    .csslider1>.cs_description a:visited,
    .csslider1>.cs_description a:active {
        color: inherit;
    }

    .csslider1>.cs_description a:hover {
        text-decoration: none;
    }

    .csslider1>.cs_description>label {
        position: absolute;
        word-wrap: break-word;
        white-space: normal;
        text-align: left;
        max-width: 50%;
        left: 0;
    }

    .csslider1>.cs_description>label>span {
        vertical-align: top;
    }

    .csslider1>.cs_description>label span {
        display: inline-block;
    }

    .csslider1>ul>li {
        position: absolute;
        left: 0;
        top: 0;
        display: inline-block;
        opacity: 0;
        z-index: 1;

        -webkit-transition: opacity 2000ms ease, -webkit-transform 24000ms linear;
        -moz-transition: opacity 2000ms ease, -moz-transform 24000ms linear;
        -ms-transition: opacity 2000ms ease, -ms-transform 24000ms linear;
        -o-transition: opacity 2000ms ease, -o-transform 24000ms linear;
        transition: opacity 2000ms ease, transform 24000ms linear;

    }

    .csslider1>ul>li.num0 {
        opacity: 0;
        -webkit-transform: scale(1.3) translate(-11.53846%, 11.53846%);
        -moz-transform: scale(1.3) translate(-11.53846%, 11.53846%);
        -ms-transform: scale(1.3) translate(-11.53846%, 11.53846%);
        -o-transform: scale(1.3) translate(-11.53846%, 11.53846%);
        transform: scale(1.3) translate(-11.53846%, 11.53846%);

    }

    .csslider1>ul>li.num1 {
        opacity: 0;
        -webkit-transform: scale(1.3) translate(11.53846%, 11.53846%);
        -moz-transform: scale(1.3) translate(11.53846%, 11.53846%);
        -ms-transform: scale(1.3) translate(11.53846%, 11.53846%);
        -o-transform: scale(1.3) translate(11.53846%, 11.53846%);
        transform: scale(1.3) translate(11.53846%, 11.53846%);

    }

    .csslider1>ul>li.num2 {
        opacity: 0;
        -webkit-transform: scale(1.3) translate(-11.53846%, -11.53846%);
        -moz-transform: scale(1.3) translate(-11.53846%, -11.53846%);
        -ms-transform: scale(1.3) translate(-11.53846%, -11.53846%);
        -o-transform: scale(1.3) translate(-11.53846%, -11.53846%);
        transform: scale(1.3) translate(-11.53846%, -11.53846%);

    }


    .csslider1>ul>li.num0 {
        opacity: 1;
        z-index: 2;
    }

    .csslider1>.slide:checked~ul>li.num0 {
        opacity: 0;
        z-index: 1;
    }


    .csslider1>#cs_slide1_0:checked~ul>li.num0,
    .csslider1>#cs_slide1_1:checked~ul>li.num1,
    .csslider1>#cs_slide1_2:checked~ul>li.num2 {
        opacity: 1;
        -webkit-transform: scale(1) translate(0, 0);
        -moz-transform: scale(1) translate(0, 0);
        -ms-transform: scale(1) translate(0, 0);
        -o-transform: scale(1) translate(0, 0);
        transform: scale(1) translate(0, 0);

        z-index: 2;
    }




    /* calculate autoplay */
    @-webkit-keyframes kenbernsBR {

        0%,
        100% {
            -webkit-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -webkit-transform: scale(1.3) translate(11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-moz-keyframes kenbernsBR {

        0%,
        100% {
            -moz-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -moz-transform: scale(1.3) translate(11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-ms-keyframes kenbernsBR {

        0%,
        100% {
            -ms-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -ms-transform: scale(1.3) translate(11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-o-keyframes kenbernsBR {

        0%,
        100% {
            -o-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -o-transform: scale(1.3) translate(11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @keyframes kenbernsBR {

        0%,
        100% {
            transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            transform: scale(1.3) translate(11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-webkit-keyframes kenbernsBL {

        0%,
        100% {
            -webkit-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -webkit-transform: scale(1.3) translate(11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-moz-keyframes kenbernsBL {

        0%,
        100% {
            -moz-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -moz-transform: scale(1.3) translate(11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-ms-keyframes kenbernsBL {

        0%,
        100% {
            -ms-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -ms-transform: scale(1.3) translate(11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-o-keyframes kenbernsBL {

        0%,
        100% {
            -o-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -o-transform: scale(1.3) translate(11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @keyframes kenbernsBL {

        0%,
        100% {
            transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            transform: scale(1.3) translate(11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-webkit-keyframes kenbernsTL {

        0%,
        100% {
            -webkit-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -webkit-transform: scale(1.3) translate(-11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-moz-keyframes kenbernsTL {

        0%,
        100% {
            -moz-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -moz-transform: scale(1.3) translate(-11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-ms-keyframes kenbernsTL {

        0%,
        100% {
            -ms-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -ms-transform: scale(1.3) translate(-11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-o-keyframes kenbernsTL {

        0%,
        100% {
            -o-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -o-transform: scale(1.3) translate(-11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @keyframes kenbernsTL {

        0%,
        100% {
            transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            transform: scale(1.3) translate(-11.53846%, -11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-webkit-keyframes kenbernsTR {

        0%,
        100% {
            -webkit-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -webkit-transform: scale(1.3) translate(-11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-moz-keyframes kenbernsTR {

        0%,
        100% {
            -moz-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -moz-transform: scale(1.3) translate(-11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-ms-keyframes kenbernsTR {

        0%,
        100% {
            -ms-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -ms-transform: scale(1.3) translate(-11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @-o-keyframes kenbernsTR {

        0%,
        100% {
            -o-transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            -o-transform: scale(1.3) translate(-11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }

    @keyframes kenbernsTR {

        0%,
        100% {
            transform: scale(1);
            opacity: 0
        }

        8.333333333333334%,
        33.333333333333336% {
            opacity: 1
        }

        41.66666666666667%,
        66.66666666666666% {
            transform: scale(1.3) translate(-11.53846%, 11.53846%);
            opacity: 0;
            z-index: 2;
        }
    }



    .csslider1>#cs_play1:checked~ul>li.num0,
    .csslider1>#cs_pause1:checked~ul>li.num0 {
        -webkit-animation: kenbernsTR 24000ms infinite -2000ms linear;
        -moz-animation: kenbernsTR 24000ms infinite -2000ms linear;
        -ms-animation: kenbernsTR 24000ms infinite -2000ms linear;
        -o-animation: kenbernsTR 24000ms infinite -2000ms linear;
        animation: kenbernsTR 24000ms infinite -2000ms linear;

    }

    .csslider1>#cs_play1:checked~ul>li.num1,
    .csslider1>#cs_pause1:checked~ul>li.num1 {
        -webkit-animation: kenbernsBR 24000ms infinite 6000ms linear;
        -moz-animation: kenbernsBR 24000ms infinite 6000ms linear;
        -ms-animation: kenbernsBR 24000ms infinite 6000ms linear;
        -o-animation: kenbernsBR 24000ms infinite 6000ms linear;
        animation: kenbernsBR 24000ms infinite 6000ms linear;

    }

    .csslider1>#cs_play1:checked~ul>li.num2,
    .csslider1>#cs_pause1:checked~ul>li.num2 {
        -webkit-animation: kenbernsTL 24000ms infinite 14000ms linear;
        -moz-animation: kenbernsTL 24000ms infinite 14000ms linear;
        -ms-animation: kenbernsTL 24000ms infinite 14000ms linear;
        -o-animation: kenbernsTL 24000ms infinite 14000ms linear;
        animation: kenbernsTL 24000ms infinite 14000ms linear;

    }




    .csslider1>#cs_play1:checked~ul>li,
    .csslider1>#cs_pause1:checked~ul>li {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;

    }



    .csslider1.cs_pauseHover:hover>ul>li,
    .csslider1>#cs_pause1:checked~ul>li {
        -webkit-animation-play-state: paused !important;
        -moz-animation-play-state: paused !important;
        -ms-animation-play-state: paused !important;
        -o-animation-play-state: paused !important;
        animation-play-state: paused !important;
    }

    /* stop */

    .csslider1>.slide:checked~ul>li {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        -o-animation: none;
        animation: none;
    }

    /* /calculate autoplay */
    .csslider1 {
        -webkit-perspective: 500px;
        -moz-perspective: 500px;
        -ms-perspective: 500px;
        -o-perspective: 500px;
        perspective: 500px;

    }

    .csslider1>.cs_play_pause {
        -webkit-transition: .5s opacity 0s ease;
        -moz-transition: .5s opacity 0s ease;
        -ms-transition: .5s opacity 0s ease;
        -o-transition: .5s opacity 0s ease;
        transition: .5s opacity 0s ease;

    }

    .csslider1>.cs_arrowprev {
        -webkit-transition: .5s opacity .15s ease, .5s -webkit-transform .15s cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -moz-transition: .5s opacity .15s ease, .5s -moz-transform .15s cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -ms-transition: .5s opacity .15s ease, .5s -ms-transform .15s cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -o-transition: .5s opacity .15s ease, .5s -o-transform .15s cubic-bezier(0.680, -0.550, 0.265, 1.550);
        transition: .5s opacity .15s ease, .5s transform .15s cubic-bezier(0.680, -0.550, 0.265, 1.550);

        -webkit-transform: rotateY(-90deg);
        -moz-transform: rotateY(-90deg);
        -ms-transform: rotateY(-90deg);
        -o-transform: rotateY(-90deg);
        transform: rotateY(-90deg);

    }

    .csslider1>.cs_arrownext {
        -webkit-transition: .5s opacity .3s ease, .5s -webkit-transform .3s cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -moz-transition: .5s opacity .3s ease, .5s -moz-transform .3s cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -ms-transition: .5s opacity .3s ease, .5s -ms-transform .3s cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -o-transition: .5s opacity .3s ease, .5s -o-transform .3s cubic-bezier(0.680, -0.550, 0.265, 1.550);
        transition: .5s opacity .3s ease, .5s transform .3s cubic-bezier(0.680, -0.550, 0.265, 1.550);

        -webkit-transform: rotateY(90deg);
        -moz-transform: rotateY(90deg);
        -ms-transform: rotateY(90deg);
        -o-transform: rotateY(90deg);
        transform: rotateY(90deg);

    }

    .csslider1>.cs_arrowprev,
    .csslider1>.cs_arrownext,
    .csslider1>.cs_play_pause {
        opacity: 0;
    }

    .csslider1:hover>.cs_arrowprev,
    .csslider1:hover>.cs_arrownext,
    .csslider1:hover>.cs_play_pause {
        opacity: 1;
        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        -ms-transform: rotateX(0deg);
        -o-transform: rotateX(0deg);
        transform: rotateX(0deg);

    }

    .csslider1>.cs_arrowprev>label,
    .csslider1>.cs_arrownext>label {
        overflow: hidden;
        margin-top: -35px;
        width: 40px;
        height: 70px;

        /* Fallback for web browsers that doesn't support RGBa */
        background: #000;
        background-color: rgba(0, 0, 0, 0.6);

        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .csslider1>.cs_arrowprev {
        left: 70px;
    }

    .csslider1>.cs_arrownext {
        right: 70px;
    }

    .csslider1>.cs_arrowprev>label {
        right: 0;
    }

    .csslider1>.cs_arrownext>label {
        left: 0;
    }

    .csslider1>.cs_arrowprev>label:after {
        content: '\e800';
    }

    .csslider1>.cs_arrownext>label:after {
        content: '\e801';
    }

    .csslider1>.cs_arrowprev>label:after,
    .csslider1>.cs_arrownext>label:after {
        display: block;
        font: 40px "demurecontrols";
        text-align: center;
        line-height: 76px;
        color: #fff;
    }




    .csslider1>.cs_arrowprev>label,
    .csslider1>.cs_arrownext>label {
        -webkit-transition: 300ms width ease, 300ms margin-left ease, 300ms background-color ease;
        -moz-transition: 300ms width ease, 300ms margin-left ease, 300ms background-color ease;
        -ms-transition: 300ms width ease, 300ms margin-left ease, 300ms background-color ease;
        -o-transition: 300ms width ease, 300ms margin-left ease, 300ms background-color ease;
        transition: 300ms width ease, 300ms margin-left ease, 300ms background-color ease;

    }

    .csslider1>.cs_arrowprev:hover>label {
        background-color: #E34B64;
        width: 70px;
    }

    .csslider1>.cs_arrownext:hover>label {
        background-color: #E34B64;
        width: 70px;
    }

    .csslider1>.cs_bullets {
        bottom: 5px;
        margin-bottom: 5px;
    }

    .csslider1>.cs_bullets>label {
        -webkit-perspective: 500px;
        -moz-perspective: 500px;
        -ms-perspective: 500px;
        -o-perspective: 500px;
        perspective: 500px;

    }

    .csslider1>.cs_bullets>label>.cs_thumb {
        border: 3px solid #E34B64;
        margin-top: -11px;
        -webkit-transition: opacity 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), -webkit-transform 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), visibility 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275);
        -moz-transition: opacity 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), -moz-transform 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), visibility 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275);
        -ms-transition: opacity 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), -ms-transform 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), visibility 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275);
        -o-transition: opacity 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), -o-transform 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), visibility 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275);
        transition: opacity 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), transform 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275), visibility 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275);

        -webkit-transform-origin: 0% 100% 0px;
        -moz-transform-origin: 0% 100% 0px;
        -ms-transform-origin: 0% 100% 0px;
        -o-transform-origin: 0% 100% 0px;
        transform-origin: 0% 100% 0px;

        -webkit-transform: rotateX(90deg);
        -moz-transform: rotateX(90deg);
        -ms-transform: rotateX(90deg);
        -o-transform: rotateX(90deg);
        transform: rotateX(90deg);

    }

    .csslider1>.cs_bullets>label>.cs_thumb:before {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        left: 50%;
        margin-left: -1px;
        bottom: -8px;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;

        border-top: 7px solid #E34B64;
    }

    .csslider1>.cs_bullets>label:hover>.cs_thumb {
        visibility: visible;
        opacity: 1;
        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        -ms-transform: rotateX(0deg);
        -o-transform: rotateX(0deg);
        transform: rotateX(0deg);

    }


    .csslider1>.cs_bullets>label {
        margin: 0 6px;
        padding: 9px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;

        /* Fallback for web browsers that doesn't support RGBa */
        background: #000;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .csslider1>.cs_bullets>label.num0 {
        background-color: #E34B64;
    }

    .csslider1>.slide:checked~.cs_bullets>label {
        /* Fallback for web browsers that doesn't support RGBa */
        background: #000;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .csslider1>#cs_slide1_0:checked~.cs_bullets>label.num0,
    .csslider1>#cs_slide1_1:checked~.cs_bullets>label.num1,
    .csslider1>#cs_slide1_2:checked~.cs_bullets>label.num2 {
        background-color: #E34B64;
    }

    .csslider1>.cs_bullets>label:hover {
        background-color: #E34B64;
    }

    /* calculate autoplay */
    @-webkit-keyframes bullet {

        0%,
        33.32333333333334% {
            background-color: #E34B64;
        }

        33.333333333333336%,
        100% {
            background: #000;
            background-color: rgba(0, 0, 0, 0.6);
        }
    }

    @-moz-keyframes bullet {

        0%,
        33.32333333333334% {
            background-color: #E34B64;
        }

        33.333333333333336%,
        100% {
            background: #000;
            background-color: rgba(0, 0, 0, 0.6);
        }
    }

    @-ms-keyframes bullet {

        0%,
        33.32333333333334% {
            background-color: #E34B64;
        }

        33.333333333333336%,
        100% {
            background: #000;
            background-color: rgba(0, 0, 0, 0.6);
        }
    }

    @-o-keyframes bullet {

        0%,
        33.32333333333334% {
            background-color: #E34B64;
        }

        33.333333333333336%,
        100% {
            background: #000;
            background-color: rgba(0, 0, 0, 0.6);
        }
    }

    @keyframes bullet {

        0%,
        33.32333333333334% {
            background-color: #E34B64;
        }

        33.333333333333336%,
        100% {
            background: #000;
            background-color: rgba(0, 0, 0, 0.6);
        }
    }


    .csslider1>#cs_play1:checked~.cs_bullets>label.num0,
    .csslider1>#cs_pause1:checked~.cs_bullets>label.num0 {
        -webkit-animation: bullet 24000ms infinite -2000ms;
        -moz-animation: bullet 24000ms infinite -2000ms;
        -ms-animation: bullet 24000ms infinite -2000ms;
        -o-animation: bullet 24000ms infinite -2000ms;
        animation: bullet 24000ms infinite -2000ms;

    }

    .csslider1>#cs_play1:checked~.cs_bullets>label.num1,
    .csslider1>#cs_pause1:checked~.cs_bullets>label.num1 {
        -webkit-animation: bullet 24000ms infinite 6000ms;
        -moz-animation: bullet 24000ms infinite 6000ms;
        -ms-animation: bullet 24000ms infinite 6000ms;
        -o-animation: bullet 24000ms infinite 6000ms;
        animation: bullet 24000ms infinite 6000ms;

    }

    .csslider1>#cs_play1:checked~.cs_bullets>label.num2,
    .csslider1>#cs_pause1:checked~.cs_bullets>label.num2 {
        -webkit-animation: bullet 24000ms infinite 14000ms;
        -moz-animation: bullet 24000ms infinite 14000ms;
        -ms-animation: bullet 24000ms infinite 14000ms;
        -o-animation: bullet 24000ms infinite 14000ms;
        animation: bullet 24000ms infinite 14000ms;

    }




    .csslider1>#cs_play1:checked~.cs_bullets>label,
    .csslider1>#cs_pause1:checked~.cs_bullets>label {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;

    }

    .csslider1.cs_pauseHover:hover>.cs_bullets>label,
    .csslider1>#cs_pause1:checked~.cs_bullets>label {
        -webkit-animation-play-state: paused !important;
        -moz-animation-play-state: paused !important;
        -ms-animation-play-state: paused !important;
        -o-animation-play-state: paused !important;
        animation-play-state: paused !important;
    }

    /* stop */

    .csslider1>.slide:checked~.cs_bullets>label {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        -o-animation: none;
        animation: none;
    }

    /* /calculate autoplay */


    .csslider1>.cs_description>label {
        font: 20px 'Roboto', sans-serif;
        line-height: normal;
        bottom: 35px;
        left: 20px;
        top: auto;
        opacity: 1;
        z-index: 1;

        -webkit-perspective: 500px;
        -moz-perspective: 500px;
        -ms-perspective: 500px;
        -o-perspective: 500px;
        perspective: 500px;

    }

    .csslider1>.cs_description>label>span {
        margin: 1px 10px;
        padding: 10px;
        color: #fff;

        overflow: hidden;

        -webkit-transform-origin: 0% 0% 0px;
        -moz-transform-origin: 0% 0% 0px;
        -ms-transform-origin: 0% 0% 0px;
        -o-transform-origin: 0% 0% 0px;
        transform-origin: 0% 0% 0px;


        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }


    .csslider1>#cs_slide1_0:checked~.cs_description>.num0,
    .csslider1>#cs_slide1_1:checked~.cs_description>.num1,
    .csslider1>#cs_slide1_2:checked~.cs_description>.num2 {
        z-index: 2;
    }



    .csslider1>#cs_slide1_0:checked~.cs_description>.num0>.cs_descr,
    .csslider1>#cs_slide1_1:checked~.cs_description>.num1>.cs_descr,
    .csslider1>#cs_slide1_2:checked~.cs_description>.num2>.cs_descr {
        opacity: 1;
        visibility: visible;
        -webkit-transition: 750ms opacity 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -webkit-transform 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -moz-transition: 750ms opacity 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -moz-transform 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -ms-transition: 750ms opacity 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -ms-transform 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -o-transition: 750ms opacity 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -o-transform 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        transition: 750ms opacity 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms transform 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1350ms cubic-bezier(0.680, -0.550, 0.265, 1.550);

        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        -ms-transform: rotateX(0deg);
        -o-transform: rotateX(0deg);
        transform: rotateX(0deg);

    }


    .csslider1>#cs_slide1_0:checked~.cs_description>.num0>.cs_title,
    .csslider1>#cs_slide1_1:checked~.cs_description>.num1>.cs_title,
    .csslider1>#cs_slide1_2:checked~.cs_description>.num2>.cs_title {
        opacity: 1;
        visibility: visible;
        -webkit-transition: 750ms opacity 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -webkit-transform 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1200ms ease;
        -moz-transition: 750ms opacity 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -moz-transform 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1200ms ease;
        -ms-transition: 750ms opacity 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -ms-transform 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1200ms ease;
        -o-transition: 750ms opacity 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -o-transform 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1200ms ease;
        transition: 750ms opacity 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms transform 1200ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 1200ms ease;

        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        -ms-transform: rotateX(0deg);
        -o-transform: rotateX(0deg);
        transform: rotateX(0deg);

    }


    .csslider1>#cs_slide1_0:checked~.cs_description>.num0 .cs_wrapper,
    .csslider1>#cs_slide1_1:checked~.cs_description>.num1 .cs_wrapper,
    .csslider1>#cs_slide1_2:checked~.cs_description>.num2 .cs_wrapper {
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);

    }

    .csslider1>.cs_description>label>.cs_title {
        margin: 0px 10px;
        opacity: 0;
        visibility: hidden;
        z-index: 2;
        /* Fallback for web browsers that doesn't support RGBa */
        background: #000;
        background-color: rgba(0, 0, 0, 0.6);
        -webkit-transform: rotateX(90deg);
        -moz-transform: rotateX(90deg);
        -ms-transform: rotateX(90deg);
        -o-transform: rotateX(90deg);
        transform: rotateX(90deg);

        -webkit-transition: 750ms opacity 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -webkit-transform 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 975ms ease;
        -moz-transition: 750ms opacity 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -moz-transform 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 975ms ease;
        -ms-transition: 750ms opacity 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -ms-transform 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 975ms ease;
        -o-transition: 750ms opacity 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -o-transform 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 975ms ease;
        transition: 750ms opacity 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms transform 975ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 975ms ease;

    }

    .csslider1>.cs_description>label>.cs_descr {
        font-size: 0.8em;
        margin: 1px 10px;
        opacity: 0;
        visibility: hidden;
        z-index: 1;

        background-color: #E34B64;

        -webkit-transform: rotateX(-90deg);
        -moz-transform: rotateX(-90deg);
        -ms-transform: rotateX(-90deg);
        -o-transform: rotateX(-90deg);
        transform: rotateX(-90deg);

        -webkit-transition: 750ms opacity 750ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -webkit-transform 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -moz-transition: 750ms opacity 750ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -moz-transform 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -ms-transition: 750ms opacity 750ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -ms-transform 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -o-transition: 750ms opacity 750ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -o-transform 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        transition: 750ms opacity 750ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms transform 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms visibility 600ms cubic-bezier(0.680, -0.550, 0.265, 1.550);

    }


    .csslider1>.cs_description>label>.cs_title>.cs_wrapper {
        -webkit-transform: translateX(-100%);
        -moz-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        -o-transform: translateX(-100%);
        transform: translateX(-100%);

        -webkit-transition: 750ms opacity 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -webkit-transform 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -moz-transition: 750ms opacity 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -moz-transform 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -ms-transition: 750ms opacity 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -ms-transform 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -o-transition: 750ms opacity 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -o-transform 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        transition: 750ms opacity 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms transform 1450ms cubic-bezier(0.680, -0.550, 0.265, 1.550);

    }

    .csslider1>.cs_description>label>.cs_descr>.cs_wrapper {
        -webkit-transform: translateX(100%);
        -moz-transform: translateX(100%);
        -ms-transform: translateX(100%);
        -o-transform: translateX(100%);
        transform: translateX(100%);

        -webkit-transition: 750ms opacity 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -webkit-transform 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -moz-transition: 750ms opacity 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -moz-transform 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -ms-transition: 750ms opacity 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -ms-transform 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        -o-transition: 750ms opacity 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms -o-transform 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        transition: 750ms opacity 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550), 750ms transform 1675ms cubic-bezier(0.680, -0.550, 0.265, 1.550);

    }


    /* calculate autoplay */
    @-webkit-keyframes cs_descrWrapper {

        1.53125%,
        35.520833333333336% {
            z-index: 2;
        }

        35.530833333333334%,
        100% {
            z-index: 0;
        }
    }

    @-moz-keyframes cs_descrWrapper {

        1.53125%,
        35.520833333333336% {
            z-index: 2;
        }

        35.530833333333334%,
        100% {
            z-index: 0;
        }
    }

    @-ms-keyframes cs_descrWrapper {

        1.53125%,
        35.520833333333336% {
            z-index: 2;
        }

        35.530833333333334%,
        100% {
            z-index: 0;
        }
    }

    @-o-keyframes cs_descrWrapper {

        1.53125%,
        35.520833333333336% {
            z-index: 2;
        }

        35.530833333333334%,
        100% {
            z-index: 0;
        }
    }

    @keyframes cs_descrWrapper {

        1.53125%,
        35.520833333333336% {
            z-index: 2;
        }

        35.530833333333334%,
        100% {
            z-index: 0;
        }
    }



    .csslider1>#cs_play1:checked~.cs_description>.num0 {
        -webkit-animation: cs_descrWrapper 24000ms infinite -1400ms ease;
        -moz-animation: cs_descrWrapper 24000ms infinite -1400ms ease;
        -ms-animation: cs_descrWrapper 24000ms infinite -1400ms ease;
        -o-animation: cs_descrWrapper 24000ms infinite -1400ms ease;
        animation: cs_descrWrapper 24000ms infinite -1400ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num1 {
        -webkit-animation: cs_descrWrapper 24000ms infinite 6600ms ease;
        -moz-animation: cs_descrWrapper 24000ms infinite 6600ms ease;
        -ms-animation: cs_descrWrapper 24000ms infinite 6600ms ease;
        -o-animation: cs_descrWrapper 24000ms infinite 6600ms ease;
        animation: cs_descrWrapper 24000ms infinite 6600ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num2 {
        -webkit-animation: cs_descrWrapper 24000ms infinite 14600ms ease;
        -moz-animation: cs_descrWrapper 24000ms infinite 14600ms ease;
        -ms-animation: cs_descrWrapper 24000ms infinite 14600ms ease;
        -o-animation: cs_descrWrapper 24000ms infinite 14600ms ease;
        animation: cs_descrWrapper 24000ms infinite 14600ms ease;
    }



    @-webkit-keyframes cs_title {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            -webkit-transform: rotateX(-9deg);
            z-index: 2;
            visibility: visible;
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            -webkit-transform: rotateX(0deg);
            z-index: 2;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            -webkit-transform: rotateX(90deg);
            z-index: 2;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }

    @-moz-keyframes cs_title {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            -moz-transform: rotateX(-9deg);
            z-index: 2;
            visibility: visible;
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            -moz-transform: rotateX(0deg);
            z-index: 2;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            -moz-transform: rotateX(90deg);
            z-index: 2;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }

    @-ms-keyframes cs_title {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            -ms-transform: rotateX(-9deg);
            z-index: 2;
            visibility: visible;
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            -ms-transform: rotateX(0deg);
            z-index: 2;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            -ms-transform: rotateX(90deg);
            z-index: 2;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }

    @-o-keyframes cs_title {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            -o-transform: rotateX(-9deg);
            z-index: 2;
            visibility: visible;
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            -o-transform: rotateX(0deg);
            z-index: 2;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            -o-transform: rotateX(90deg);
            z-index: 2;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }

    @keyframes cs_title {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            transform: rotateX(-9deg);
            z-index: 2;
            visibility: visible;
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            transform: rotateX(0deg);
            z-index: 2;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            transform: rotateX(90deg);
            z-index: 2;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }



    @-webkit-keyframes cs_descr {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            -webkit-transform: rotateX(9deg);
            z-index: 1;
            visibility: visible;
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            -webkit-transform: rotateX(0deg);
            z-index: 1;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            -webkit-transform: rotateX(-90deg);
            z-index: 1;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }

    @-moz-keyframes cs_descr {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            -moz-transform: rotateX(9deg);
            z-index: 1;
            visibility: visible;
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            -moz-transform: rotateX(0deg);
            z-index: 1;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            -moz-transform: rotateX(-90deg);
            z-index: 1;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }

    @-ms-keyframes cs_descr {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            -ms-transform: rotateX(9deg);
            z-index: 1;
            visibility: visible;
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            -ms-transform: rotateX(0deg);
            z-index: 1;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            -ms-transform: rotateX(-90deg);
            z-index: 1;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }

    @-o-keyframes cs_descr {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            -o-transform: rotateX(9deg);
            z-index: 1;
            visibility: visible;
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            -o-transform: rotateX(0deg);
            z-index: 1;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            -o-transform: rotateX(-90deg);
            z-index: 1;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }

    @keyframes cs_descr {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            transform: rotateX(9deg);
            z-index: 1;
            visibility: visible;
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            transform: rotateX(0deg);
            z-index: 1;
            visibility: visible;
        }

        33.333333333333336% {
            opacity: 0;
            transform: rotateX(-90deg);
            z-index: 1;
            visibility: hidden;
        }

        33.343333333333334%,
        100% {
            z-index: 0;
        }
    }



    .csslider1>#cs_play1:checked~.cs_description>.num0>.cs_title,
    .csslider1>#cs_pause1:checked~.cs_description>.num0>.cs_title {
        -webkit-animation: cs_title 24000ms infinite -1400ms ease;
        -moz-animation: cs_title 24000ms infinite -1400ms ease;
        -ms-animation: cs_title 24000ms infinite -1400ms ease;
        -o-animation: cs_title 24000ms infinite -1400ms ease;
        animation: cs_title 24000ms infinite -1400ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num1>.cs_title,
    .csslider1>#cs_pause1:checked~.cs_description>.num1>.cs_title {
        -webkit-animation: cs_title 24000ms infinite 6600ms ease;
        -moz-animation: cs_title 24000ms infinite 6600ms ease;
        -ms-animation: cs_title 24000ms infinite 6600ms ease;
        -o-animation: cs_title 24000ms infinite 6600ms ease;
        animation: cs_title 24000ms infinite 6600ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num2>.cs_title,
    .csslider1>#cs_pause1:checked~.cs_description>.num2>.cs_title {
        -webkit-animation: cs_title 24000ms infinite 14600ms ease;
        -moz-animation: cs_title 24000ms infinite 14600ms ease;
        -ms-animation: cs_title 24000ms infinite 14600ms ease;
        -o-animation: cs_title 24000ms infinite 14600ms ease;
        animation: cs_title 24000ms infinite 14600ms ease;
    }


    .csslider1>#cs_play1:checked~.cs_description>.num0>.cs_descr,
    .csslider1>#cs_pause1:checked~.cs_description>.num0>.cs_descr {
        -webkit-animation: cs_descr 24000ms infinite -1400ms ease;
        -moz-animation: cs_descr 24000ms infinite -1400ms ease;
        -ms-animation: cs_descr 24000ms infinite -1400ms ease;
        -o-animation: cs_descr 24000ms infinite -1400ms ease;
        animation: cs_descr 24000ms infinite -1400ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num1>.cs_descr,
    .csslider1>#cs_pause1:checked~.cs_description>.num1>.cs_descr {
        -webkit-animation: cs_descr 24000ms infinite 6600ms ease;
        -moz-animation: cs_descr 24000ms infinite 6600ms ease;
        -ms-animation: cs_descr 24000ms infinite 6600ms ease;
        -o-animation: cs_descr 24000ms infinite 6600ms ease;
        animation: cs_descr 24000ms infinite 6600ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num2>.cs_descr,
    .csslider1>#cs_pause1:checked~.cs_description>.num2>.cs_descr {
        -webkit-animation: cs_descr 24000ms infinite 14600ms ease;
        -moz-animation: cs_descr 24000ms infinite 14600ms ease;
        -ms-animation: cs_descr 24000ms infinite 14600ms ease;
        -o-animation: cs_descr 24000ms infinite 14600ms ease;
        animation: cs_descr 24000ms infinite 14600ms ease;
    }



    @-webkit-keyframes cs_title_text {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            -webkit-transform: translateX(-1%);
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            -webkit-transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            -webkit-transform: translateX(100%);
        }
    }

    @-moz-keyframes cs_title_text {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            -moz-transform: translateX(-1%);
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            -moz-transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            -moz-transform: translateX(100%);
        }
    }

    @-ms-keyframes cs_title_text {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            -ms-transform: translateX(-1%);
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            -ms-transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            -ms-transform: translateX(100%);
        }
    }

    @-o-keyframes cs_title_text {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            -o-transform: translateX(-1%);
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            -o-transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            -o-transform: translateX(100%);
        }
    }

    @keyframes cs_title_text {

        1.53125%,
        31.792083333333334% {
            opacity: 1;
            transform: translateX(-1%);
        }

        2.1875%,
        31.135833333333334% {
            opacity: 1;
            transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            transform: translateX(100%);
        }
    }


    @-webkit-keyframes cs_descr_text {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            -webkit-transform: translateX(1%);
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            -webkit-transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            -webkit-transform: translateX(-100%);
        }
    }

    @-moz-keyframes cs_descr_text {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            -moz-transform: translateX(1%);
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            -moz-transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            -moz-transform: translateX(-100%);
        }
    }

    @-ms-keyframes cs_descr_text {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            -ms-transform: translateX(1%);
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            -ms-transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            -ms-transform: translateX(-100%);
        }
    }

    @-o-keyframes cs_descr_text {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            -o-transform: translateX(1%);
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            -o-transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            -o-transform: translateX(-100%);
        }
    }

    @keyframes cs_descr_text {

        3.0625%,
        29.604583333333334% {
            opacity: 1;
            transform: translateX(1%);
        }

        4.375%,
        28.948333333333334% {
            opacity: 1;
            transform: translateX(0%);
        }

        33.333333333333336% {
            opacity: 0;
            transform: translateX(-100%);
        }
    }



    .csslider1>#cs_play1:checked~.cs_description>.num0 .cs_title>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>.num0 .cs_title>.cs_wrapper {
        -webkit-animation: cs_title_text 24000ms infinite -1190ms ease;
        -moz-animation: cs_title_text 24000ms infinite -1190ms ease;
        -ms-animation: cs_title_text 24000ms infinite -1190ms ease;
        -o-animation: cs_title_text 24000ms infinite -1190ms ease;
        animation: cs_title_text 24000ms infinite -1190ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num1 .cs_title>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>.num1 .cs_title>.cs_wrapper {
        -webkit-animation: cs_title_text 24000ms infinite 6810ms ease;
        -moz-animation: cs_title_text 24000ms infinite 6810ms ease;
        -ms-animation: cs_title_text 24000ms infinite 6810ms ease;
        -o-animation: cs_title_text 24000ms infinite 6810ms ease;
        animation: cs_title_text 24000ms infinite 6810ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num2 .cs_title>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>.num2 .cs_title>.cs_wrapper {
        -webkit-animation: cs_title_text 24000ms infinite 14810ms ease;
        -moz-animation: cs_title_text 24000ms infinite 14810ms ease;
        -ms-animation: cs_title_text 24000ms infinite 14810ms ease;
        -o-animation: cs_title_text 24000ms infinite 14810ms ease;
        animation: cs_title_text 24000ms infinite 14810ms ease;
    }


    .csslider1>#cs_play1:checked~.cs_description>.num0 .cs_descr>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>.num0 .cs_descr>.cs_wrapper {
        -webkit-animation: cs_descr_text 24000ms infinite -1190ms ease;
        -moz-animation: cs_descr_text 24000ms infinite -1190ms ease;
        -ms-animation: cs_descr_text 24000ms infinite -1190ms ease;
        -o-animation: cs_descr_text 24000ms infinite -1190ms ease;
        animation: cs_descr_text 24000ms infinite -1190ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num1 .cs_descr>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>.num1 .cs_descr>.cs_wrapper {
        -webkit-animation: cs_descr_text 24000ms infinite 6810ms ease;
        -moz-animation: cs_descr_text 24000ms infinite 6810ms ease;
        -ms-animation: cs_descr_text 24000ms infinite 6810ms ease;
        -o-animation: cs_descr_text 24000ms infinite 6810ms ease;
        animation: cs_descr_text 24000ms infinite 6810ms ease;
    }

    .csslider1>#cs_play1:checked~.cs_description>.num2 .cs_descr>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>.num2 .cs_descr>.cs_wrapper {
        -webkit-animation: cs_descr_text 24000ms infinite 14810ms ease;
        -moz-animation: cs_descr_text 24000ms infinite 14810ms ease;
        -ms-animation: cs_descr_text 24000ms infinite 14810ms ease;
        -o-animation: cs_descr_text 24000ms infinite 14810ms ease;
        animation: cs_descr_text 24000ms infinite 14810ms ease;
    }




    .csslider1>#cs_play1:checked~.cs_description>label>.cs_title,
    .csslider1>#cs_play1:checked~.cs_description>label>.cs_descr,
    .csslider1>#cs_play1:checked~.cs_description>label>.cs_title>.cs_wrapper,
    .csslider1>#cs_play1:checked~.cs_description>label>.cs_descr>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>label>.cs_title,
    .csslider1>#cs_pause1:checked~.cs_description>label>.cs_descr,
    .csslider1>#cs_pause1:checked~.cs_description>label>.cs_title>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>label>.cs_descr>.cs_wrapper {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;

    }

    .csslider1.cs_pauseHover:hover>.cs_description>label>.cs_title,
    .csslider1.cs_pauseHover:hover>.cs_description>label>.cs_descr,
    .csslider1.cs_pauseHover:hover>.cs_description>label>.cs_title>.cs_wrapper,
    .csslider1.cs_pauseHover:hover>.cs_description>label>.cs_descr>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>label>.cs_title,
    .csslider1>#cs_pause1:checked~.cs_description>label>.cs_descr,
    .csslider1>#cs_pause1:checked~.cs_description>label>.cs_title>.cs_wrapper,
    .csslider1>#cs_pause1:checked~.cs_description>label>.cs_descr>.cs_wrapper {
        -webkit-animation-play-state: paused !important;
        -moz-animation-play-state: paused !important;
        -ms-animation-play-state: paused !important;
        -o-animation-play-state: paused !important;
        animation-play-state: paused !important;
    }

    /* stop */
    .csslider1>.slide:checked~.cs_description>label {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        -o-animation: none;
        animation: none;
    }


    @media only screen and (max-width: 480px),
    only screen and (-webkit-max-device-pixel-ratio: 2) and (max-width: 480px),
    only screen and (max--moz-device-pixel-ratio: 2) and (max-width: 480px),
    only screen and (-o-max-device-pixel-ratio: 2/1) and (max-width: 480px),
    only screen and (max-device-pixel-ratio: 2) and (max-width: 480px),
    only screen and (max-resolution: 192dpi) and (max-width: 480px),
    only screen and (max-resolution: 2dppx) and (max-width: 480px) {

        .csslider1>.cs_description,
        .csslider1>.cs_bullets {
            display: none;
        }
    }
</style>

<body style="background-color:#eeeeee; margin: auto; text-align: center;">
    <!-- Start cssSlider.com -->
    <div class='csslider1 autoplay '>
        <input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide'>
        <input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide'>
        <input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide'>
        <input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
        <input name="cs_anchor1" id='cs_pause1' type="radio" class='cs_anchor'>
        <ul>
            <div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
                <img src="http://cssslider.com/sliders/pen/images/buns.jpg" style="width: 100%;">
            </div>
            <li class='num0 img'>
                <a href="http://cssslider.com" target=""><img
                        src='http://cssslider.com/sliders/pen/images/buns.jpg' alt='Buns' title='Buns' /> </a>
            </li>
            <li class='num1 img'>
                <a href="http://cssslider.com" target=""><img
                        src='http://cssslider.com/sliders/pen/images/buns.jpg' alt='Croissant' title='Croissant' />
                </a>
            </li>
            <li class='num2 img'>
                <a href="http://cssslider.com" target=""><img
                        src='http://cssslider.com/sliders/pen/images/buns.jpg' alt='Lemon pie' title='Lemon pie' />
                </a>
            </li>

        </ul>
        <div class='cs_description'>
            <label class='num0'>
                <span class="cs_title"><span class="cs_wrapper">Buns</span></span>
            </label>
            <label class='num1'>
                <span class="cs_title"><span class="cs_wrapper">Croissant</span></span>
            </label>
            <label class='num2'>
                <span class="cs_title"><span class="cs_wrapper">Lemon pie</span></span>
            </label>
        </div>

        <div class='cs_arrowprev'>
            <label class='num0' for='cs_slide1_0'></label>
            <label class='num1' for='cs_slide1_1'></label>
            <label class='num2' for='cs_slide1_2'></label>
        </div>
        <div class='cs_arrownext'>
            <label class='num0' for='cs_slide1_0'></label>
            <label class='num1' for='cs_slide1_1'></label>
            <label class='num2' for='cs_slide1_2'></label>
        </div>

        <div class='cs_bullets'>
            <label class='num0' for='cs_slide1_0'>
                <span class='cs_point'></span>
                <span class='cs_thumb'><img src='http://cssslider.com/sliders/pen/tooltips/buns.jpg' alt='Buns'
                        title='Buns' /></span>
            </label>
            <label class='num1' for='cs_slide1_1'>
                <span class='cs_point'></span>
                <span class='cs_thumb'><img src='http://cssslider.com/sliders/pen/tooltips/croissant.jpg'
                        alt='Croissant' title='Croissant' /></span>
            </label>
            <label class='num2' for='cs_slide1_2'>
                <span class='cs_point'></span>
                <span class='cs_thumb'><img src='http://cssslider.com/sliders/pen/tooltips/lemonpie.jpg'
                        alt='Lemon pie' title='Lemon pie' /></span>
            </label>
        </div>
    </div>
    <!-- End cssSlider.com -->

    <br /><br />
    <p class='text-1'>Resposive pure CSS <a href="http://cssslider.com">slider</a> with CSS3 animations, autoplay,
        kenburns, prev/next,<br /> bullets with tooltips - no JavaScript! Vector icons only - no images. </p>
</body>






<style>

.slider {
	width: 95%;
	margin: auto;
	overflow: hidden;
}

.slider ul {
	display: flex;
	padding: 0;
	width: 400%;

	animation: cambio 20s infinite alternate linear;
}

.slider li {
	width: 100%;
	list-style: none;
}

.slider img {
	width: 100%;
}

@keyframes cambio {
	0% {margin-left: 0;}
	20% {margin-left: 0;}

	25% {margin-left: -100%;}
	45% {margin-left: -100%;}

	50% {margin-left: -200%;}
	70% {margin-left: -200%;}

	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}

</style>

<div class="slider">
    <ul>
        <li>
<img src="http://dominicushoeve.com/wp-content/uploads/ktz/latest-high-resolution-wallpaper-1920x1080-70558-pictures-high-resolution-wallpaper-30whtvl34j4r12m8b0c1sa.jpg" alt="">
</li>
        <li>
<img src="http://youghaltennisclub.ie/wp-content/uploads/2014/06/Tennis-Wallpaper-High-Definition-700x300.jpg" alt="">
</li>
        <li>
<img src="http://welltechnically.com/wp-content/uploads/2013/08/android-wallpapers-700x300.jpg" alt="">
</li>
        <li>
<img src="http://welltechnically.com/wp-content/uploads/2013/09/android-widescreen-wallpaper-14165-hd-wallpapers-700x300.jpg" alt="">
</li>
    </ul>
</div>
