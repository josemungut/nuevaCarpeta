<x-app-layout>

    <style>
        #container {
            background-color: black;
            color: white
        }

        #tabla {
            width: 95%;
            padding-left: 5%;
        }
    </style>
    <section class="hero2">
        <h2>El lugar ideal para entrenar, competir y disfrutar:<br> nuestro centro deportivo.</h2>
    </section>

    <div class="py-12">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha_entrada
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Hora
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aforo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Detalles
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actividades as $clase)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $clase->nombre }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $clase->fecha_inicio }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $clase->hora }}
                            </td>
                             <td class="px-6 py-4">
                                {{ $clase->plazaslibres()}}
                            </td>
                            <td>
                                <a href="{{ route('actividades.show', ['actividade' => $clase->id]) }}"><button
                                        type="button"
                                        class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Detalle</button></a>
                                @if ($clase->sala->aforo > 0)
                                    <form class="inline-block" action={{ route('reserva.store') }} method="POST">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="id_actividad" value="{{ $clase->id }}"> <button
                                            type="submit"
                                            class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">RESERVAR</button>
                                    </form>
                                @endif

                                @if (Auth::user()->tipo == 'admin')
                                    <a href="{{ route('actividades.edit', ['actividade' => $clase->id]) }}"><button
                                            type="button" c
                                            lass="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Editar</button></a>
                                    <form class="inline-block"
                                        action={{ route('actividades.destroy', ['actividade' => $clase->id]) }}
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Borrar</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        @if (Auth::user()->tipo == 'admin')
            <a href="{{ route('actividades.create') }}"><button type="button" id="boton"
                    class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Añañdir
                    actividades</button></a>
        @endif
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
<style>
    body {
        font-family: sans-serif;
    }



    .hero1 h1,
    .hero2 h1 {
        font-size: 3rem;
        margin-bottom: 0.5rem;
    }



    h2 {
        font-size: 2rem;
        margin-bottom: 1.5rem;

    }

    .hero2 {
        background-color: #7A6174;
        background-image:
            /* photo by Michael G for Unsplash */
            url("https://images.unsplash.com/photo-1434682881908-b43d0467b798?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fGNlbnRybyUyMGRlcG9ydGl2b3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"),
            url("https://images.unsplash.com/photo-1550171362-62bca9e5ad4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80");
        /* photo by Susan Q Yin for Unsplash */
        background-position: left, right;
        background-size: contain;
        background-blend-mode: hard-light;
        background-repeat: no-repeat;
        text-align: center;
        padding: 150px 0;
        color: white;
    }



    @media all AND (max-width: 500px) {
        .hero2 {
            background-image: url("");
            /* photo by Michael G for Unsplash */
            background-position: center;
            background-size: cover;
            background-blend-mode: hard-light;
            background-repeat: no-repeat;
        }


        .container {
            flex-direction: column;
        }

    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        /* Establece una altura para el contenedor */
    }
</style>
