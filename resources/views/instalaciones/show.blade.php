<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mas informacion sobre clases') }}
        </h2>
    </x-slot>

    <style>
        #container {
            margin-left: 300px;
            width: 600px
        }

        #card {
            width: 800px !important;
            margin-left: 500px;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, Sans-serif;
        }

        .dummy_page {
            height: 200px;
            width: 100%;
            background-color: white;
            text-align: center;
            box-sizing: border-box;
            padding: 60px 0px;
        }

        /* STYLES SPECIFIC TO FOOTER  */


        .titulo {
            color: orange !important;
        }

        #politicas {
            margin-left: 300px !important;
        }
    </style>




    <section class="flex flex-col md:flex-row  h-[35rem]  xl:px-16 ">
        <div class="hidden md:flex md:w-1/2 h-25 md:h-full flex flex-col xl:py-5 justify-between xl:pr-10">
            <div class="h-[30rem] ">
                <img src="{{ asset($url . $profesores->imagen) }}" alt="logo-universidad"
                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
        </div>
        <div class="px-30 lg:px-16 md:w-1/2" style="margin-top: 3%">
            <p class="text-5xl font-bold mb-12">{{ $profesores->nombre }}</p>
            <p>{{ $profesores->descripcion }}</p>
            <p>{{ $profesores->descripcion_corta }}</p>

        </div>
    </section>



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
