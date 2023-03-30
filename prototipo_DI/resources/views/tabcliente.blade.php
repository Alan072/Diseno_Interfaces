@extends ('plantilla_cliente')
@section ('contenido')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No. Ticket
                </th>
                <th scope="col" class="px-6 py-3">
                    Autor
                </th>
                <th scope="col" class="px-6 py-3">
                    Departamento
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha
                </th>
                <th scope="col" class="px-6 py-3">
                    Clasificación
                </th>
                <th scope="col" class="px-6 py-3">
                    Detalles
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    13343w
                </th>
                <td class="px-6 py-4">
                    Alejandro Martínez
                </td>
                <td class="px-6 py-4">
                    Logistica
                </td>
                <td class="px-6 py-4">
                    29/03/2023
                </td>
                <td class="px-6 py-4">
                    *************
                </td>
                <td class="px-6 py-4">
                    *********************<br>
                    *********************<br>
                    *********************<br>
                    *********************<br>
                </td>
                <td class="px-6 py-4">
                    En proceso
                </td>
                <td class="flex items-center">
                    <script>
                        function mostrarAlerta() {
                          alert("Ticket eliminado exitosamente");
                        }
                      </script>
                    <button onclick="mostrarAlerta()" type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
            </tr>
        </tbody>
    </table>
</div>

@stop