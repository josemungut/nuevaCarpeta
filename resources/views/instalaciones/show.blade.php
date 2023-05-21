<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mas informacion sobre clases') }}
        </h2>
    </x-slot>

    <style>
        #tajerta {
            margin-left: 60%;
            width: 600px
        }
    </style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="imagen" src="{{ asset($url . $profesores->imagen) }}">
                        <div class="p-5">
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Profesor:
                                {{ $profesores->nombre }}</p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Apellido:
                                {{ $profesores->apellidos }}</p>
                            <p class="mb-s3 font-normal text-gray-700 dark:text-gray-400">Direccion:
                                {{ $profesores->direccion }}</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>