<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Añadir matricula') }}
        </h2>
    </x-slot>

    <style>
        @media only screen and (min-width: 1280px) {
            .container {
                white-space: nowrap;
                /* para evitar el salto de línea */
            }

            #elemento1,
            #elemento2 {
                display: inline-block;
                width: 50%;
                /* ajusta el ancho según tus necesidades */
                vertical-align: top;
                /* alinea los elementos superiormente */
            }

            #elemento3 {
                display: inline-block;
                width: 70%;
                /* ajusta el ancho según tus necesidades */
                vertical-align: top;
                /* alinea los elementos superiormente */
            }

            .conatiner2 {
                display: flex;
                justify-content: center;
                align-items: center;

                /* Ajusta la altura del contenedor según tus necesidades */
            }

            #boton {
                background-color: orange;
                color: white
            }


            #boton:hover {
                background-color: white;
                color: orange;
                border-color: orange;
                border: 1px solid;
            }
        }

        @media only screen and (max-width: 1139px) {
            .container {
                white-space: nowrap;
                /* para evitar el salto de línea */
            }

            #elemento1,
            #elemento2 {
                display: inline-block;
                width: 50%;
                /* ajusta el ancho según tus necesidades */
                vertical-align: top;
                /* alinea los elementos superiormente */
            }

            #elemento3 {
                display: inline-block;
                width: 50%;
                /* ajusta el ancho según tus necesidades */
                vertical-align: top;
                /* alinea los elementos superiormente */
            }

            .conatiner2 {
                display: flex;
                justify-content: center;
                align-items: center;

                /* Ajusta la altura del contenedor según tus necesidades */
            }

            #boton {
                background-color: orange;
                color: white
            }


            #boton:hover {
                background-color: white;
                color: orange;
                border-color: orange;
                border: 1px solid;
            }
        }

        @media only screen and (max-width: 950px) {
            .container {
                white-space: nowrap;
                /* para evitar el salto de línea */
            }

            #elemento1,
            #elemento2 {
                display: inline-block;
                width: 50%;
                /* ajusta el ancho según tus necesidades */
                vertical-align: top;
                /* alinea los elementos superiormente */
            }

            #elemento3 {
                display: inline-block;
                width: 50%;
                /* ajusta el ancho según tus necesidades */
                vertical-align: top;
                /* alinea los elementos superiormente */
            }

            .conatiner2 {
                display: flex;
                justify-content: center;
                align-items: center;

                /* Ajusta la altura del contenedor según tus necesidades */
            }

            #boton {
                background-color: orange;
                color: white
            }


            #boton:hover {
                background-color: white;
                color: orange;
                border-color: orange;
                border: 1px solid;
            }
        }

        @media only screen and (max-width: 700px) {
            .container {
                white-space: nowrap;
                /* para evitar el salto de línea */
            }

            #elemento1,
            #elemento2 {
                display: inline-block;
                width: 50%;
                /* ajusta el ancho según tus necesidades */
                vertical-align: top;
                /* alinea los elementos superiormente */
            }

            #elemento3 {
                display: inline-block;
                width: 50%;
                /* ajusta el ancho según tus necesidades */
                vertical-align: top;
                /* alinea los elementos superiormente */
            }

            .conatiner2 {
                display: flex;
                justify-content: center;
                align-items: center;

                /* Ajusta la altura del contenedor según tus necesidades */
            }

            #boton {
                background-color: orange;
                color: white
            }


            #boton:hover {
                background-color: white;
                color: orange;
                border-color: orange;
                border: 1px solid;
            }
        }


        .container {
            white-space: nowrap;
            /* para evitar el salto de línea */
        }

        #elemento1,
        #elemento2 {
            display: inline-block;
            width: 50%;
            /* ajusta el ancho según tus necesidades */
            vertical-align: top;
            /* alinea los elementos superiormente */
        }

        #elemento3 {
            display: inline-block;
            width: 70%;
            /* ajusta el ancho según tus necesidades */
            vertical-align: top;
            /* alinea los elementos superiormente */
        }

        .conatiner2 {
            display: flex;
            justify-content: center;
            align-items: center;

            /* Ajusta la altura del contenedor según tus necesidades */
        }

        #boton {
            background-color: orange;
            color: white
        }


        #boton:hover {
            background-color: white;
            color: orange;
            border-color: orange;
            border: 1px solid;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="POST" action="{{ route('matricula.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="mb-6" id="elemento1" style="width: 30%">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                                <input type="text" name="nombre" id="nombre"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                {{ $errors->first('nombre') }}
                            </div>
                            <div class="mb-6" id="elemento3">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
                            <input type="date" name="fecha" id="fecha"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="mb-6">
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cuota</label>
                            <select required name="id_tipo_actividad" id="id_tipo_actividad"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($id_pago as $id)
                                    <option>{{ $id->cantidad }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="container">
                            <div class="mb-6" id="elemento1">
                                <label for="number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                                <input type="number" name="telefono" id="telefono"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                {{ $errors->first('telefono') }}
                            </div>
                            <div class="mb-6" id="elemento2">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="text" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        @foreach ($id_pago as $id)
                        <input type="hidden" name="id_pago" id="id_pago" value="{{ $id->id }}" />
                    @endforeach
                        @foreach ($user as $id)
                            <input type="hidden" name="id_usuario" id="id_usuario" value="{{ $id->id }}" />
                        @endforeach
                        <div class="conatiner2">
                            <button type="submit" id="boton"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Abonar
                                matrícula</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
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
