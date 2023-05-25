<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar clase') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 w-100 ">
                    <form method="POST" action="{{ route('actividades.update', ['actividade' => $clase->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-6">
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                            <input type="text" name="nombre" id="nombre"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="9999 AAAA" value="{{ $clase->nombre }}" required>
                        </div>

                        <div class="mb-6">
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha inicio</label>
                            <input type="text" name="fecha_inicio" id="fecha_inicio"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $clase->fecha_inicio }}" required>
                        </div>
                        <div class="mb-6">
                            <label for="text"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha fin</label>
                            <input type="text" name="fecha_fin" id="fecha_fin"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $clase->fecha_fin }}" required>
                        </div>
                        <div class="mb-6">
                            <label for="imagen"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen</label>
                            <video src="{{ asset($url . $clase->imagen) }}" value="{{ $clase->imagen }}" width="50%" height="50%" controls></video>
                            <input type="file" name="imagen" id="imagen"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
