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
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clases') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="relative overflow-x-auto" id="tabla">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha_entrada
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha_salida
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
                                {{ $clase->descripcion }}

                            </td>
                            <td class="px-6 py-4">
                                {{ $clase->fecha_inicio }}

                            </td>
                            <td class="px-6 py-4">
                                {{ $clase->fecha_fin }}
                            </td>

                            <td>
                                <a href="{{ route('actividades.create', ['clase' => $clase->id]) }}"><button type="button"
                                        class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Detalle</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
