<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-3">
                                    CLASES RESERVADAS
                                </th>
                                <th class="px-6 py-3">
                                    CLIENTES RESERVADOS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($reserva); $i++)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $actividades[$i]->nombre}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $clientes[$i]->name}}
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
