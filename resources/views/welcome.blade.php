<x-app-layout>
    <style>
        .imagen {
            width: 100%;
            margin-left: 50px;
        }

        #nombre {
            padding-top: 25px;
            margin-left: 110px;
        }

        #email {
            margin-left: 90px;
        }

        */
    </style>
    <!-- Navbar -->
    <script src="{{ asset('./resoruce/js/prueba.js') }}"></script>

    <!--<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-lg font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
                    href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation">The Power
                    Room</a><button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">

                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i class="text-orange-500 fab fa-facebook text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Share</span></a>
                    </li>

                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i class="text-orange-500 fab fa-twitter text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Tweet</span></a>
                    </li>

                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo"><i class="text-orange-500 fab fa-linkedin text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Profile</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>-->
    <!-- Main Area -->
    <main>
        <!-- Hero -->
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

        <!-- About Section -->
        <section id="about" class="relative py-20 bg-black text-white">
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4" data-aos="fade-right">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1550345332-09e3ac987658?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4" data-aos="fade-left">
                        <div class="md:pr-12">
                            <small class="text-orange-500">Sobre nuestro centro deportivo</small>
                            <h3 class="text-4xl uppercase font-bold">CONSTRUCCIÓN DEL CUERPO SEGURO</h3>
                            <p class="mt-4 text-lg leading-relaxed">

                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="font-semibold inline-block py-3 mr-3 text-orange-500"><i
                                                    class="fas fa-dumbbell fa-2x"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-xl">
                                                Tenemos el último y mejor equipamiento
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="font-semibold inline-block py-3 mr-3 text-orange-500"><i
                                                    class="fas fa-hard-hat fa-2x"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-xl">
                                                Las mejores instalaciones para que puedas disfrutar de tu deporte
                                                favorito
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="font-semibold inline-block py-3 mr-3 text-orange-500"><i
                                                    class="fas fa-users fa-2x"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-xl">Los mejores profesionales para tu centro deportivo</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trainers Section -->
        <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold uppercase">
                            Conoce nuestros entrenadores
                        </h2>
                        <p class="text-lg leading-relaxed m-4">
                            Our trainers are are here to dedicate the time and effort that
                            you need to get in the best shape of your life
                        </p>
                    </div>
                </div>
                <!-- Trainer Card Wrapper -->

            </div>
            <!-- Card 2 -->
            <<div class="py-12">
                <div id="container">
                    <div class="grid grid-cols-3 grid-rows-1 p-6 ml-15" id="card">
                        @foreach ($profesores as $profesor)
                            <div class="max-w-sm ml-15">
                                <div class="p-5">
                                    <img class="imagen" src="{{ asset($url . $profesor->imagen) }}">

                                    <a href="#">
                                        <h5 id="nombre" class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                            {{ $profesor->nombre }} {{ $profesor->apellidos }}</h5>
                                    </a>
                                    <p id="email" class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        {{ $profesor->email }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                </div>


        </section>

        <!-- Contact Header Section -->
        <section class="pb-20 relative block bg-black text-white">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px; transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64 pb-20 pt-20">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white uppercase">
                            Contact Us
                        </h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4">
                            Contact us to ask any questions, aquire a membership, talk to
                            our trainers or anything else
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section class="relative block py-24 lg:pt-0 bg-black">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
                            data-aos="fade-up-right">
                            <div class="flex-auto p-5 lg:p-10 bg-orange-500 text-white">
                                <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                                <p class="leading-relaxed mt-1 mb-4">
                                    Complete this form and we will get back to you in 24 hours.
                                </p>
                                <div class="relative w-full mb-3 mt-8">
                                    <label class="block uppercase text-xs font-bold mb-2" for="full-name">Full
                                        Name</label><input type="text"
                                        class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Full Name" style="transition: all 0.15s ease 0s" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-xs font-bold mb-2"
                                        for="email">Email</label><input type="email"
                                        class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Email" style="transition: all 0.15s ease 0s" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-xs font-bold mb-2"
                                        for="message">Message</label>
                                    <textarea rows="4" cols="80"
                                        class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                        placeholder="Type a message..."></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="button" style="transition: all 0.15s ease 0s">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="relative bg-gray-300 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">Follow us on social media</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-700">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6">
                        <button
                            class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-twitter text-orange-500"></i></button><button
                            class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-facebook-square text-orange-500"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-linkedin text-orange-500"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-400" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-600 font-semibold py-1">
                        Copyright © The Power Room
                    </div>
                </div>
            </div>
        </div>
    </footer>

</x-app-layout>
