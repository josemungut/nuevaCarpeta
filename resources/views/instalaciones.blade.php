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
                            Siente la <span class="text-orange-500">Energía</span>
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">
                            Bienvenidos a La Sala de Poder. Somos un centro de acondicionamiento físico y
                            entrenamiento que se enfoca en llevarte a tu límite absoluto.
                            <a href="#"
                                class="bg-transparent hover:bg-orange-500 text-orange-500 font-semibold hover:text-white p-4 border border-orange-500 hover:border-transparent rounded inline-block mt-5 cursor-pointer">Visitar
                                nuestras actividades</a>
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
                        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="#wellRun">
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
