@extends ('plantilla_auxiliar')
@section ('contenido')
<div class="w-full max-w-xl p-4 bg-white mx-auto">
    <form action="{{route('filtrar') }}" method="GET">
      <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Filtrar por estatus <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
            <li>
              <button type="button" name="status" value="Completado" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Completado</button>
            </li>
            <li>
              <button type="button" name="status" value="Asignado" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Asignado</button>
            </li>
            <li>
              <button type="button" name="status" value="En Proceso" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">En Proceso</button>
            </li>
            <li>
              <button type="button" name="status" value="Nunca Solucionado" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nunca Solucionado</button>
            </li>
            <li>
              <button type="button" name="status" value="Cancelado por Cliente" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cancelado por Cliente</button>
            </li>
            <p><li>
                <button type="button" name="status" value="Solicitado" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Solicitado</button>
                </li>
<<<<<<< HEAD
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fecha</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Departamento</button>
                </li>
            </div>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Buscar tickets" required>
                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
=======
            </p>

            </ul>
>>>>>>> 11f7118008502e39b4cfa2b72c9e6f79491ce6d4
        </div>
        <input type="text" name="search" id="search-dropdown" class="flex-grow w-full px-4 py-2 text-gray-900 bg-gray-100 border border-gray-300 rounded-r-lg focus:outline-none focus:ring-4 focus:ring-gray-100 dark:bg-gray-700 dark:focus:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" placeholder="Buscar por departamento" autocomplete="off" required>
        <button type="submit" class="flex-shrink-0 px-4 py-2 ml-2 text-sm font-medium text-white bg-gray-900 border border-gray-900 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:border-gray-600 dark:focus:bg-gray-700 dark:hover:bg-gray-700">Buscar</button>
      </div>
    </form>
  </div>  
  


<div class="bg-white rounded-lg shadow p-6">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No. Ticket
                </th>
                <th scope="col" class="px-6 py-3">
                    Autor
                </th>
<<<<<<< HEAD
                <th scope="col" class="px-6 py-3">
                    Departamento
                </th>
=======
                
>>>>>>> 11f7118008502e39b4cfa2b72c9e6f79491ce6d4
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
                <th scope="col" class="px-6 py-3">
                    FECHA
                </th>
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    13343w
                </th>
                <td class="px-6 py-4">
                    Alejandro Martínez
=======
            @foreach ($ticket as $item)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    
                    {{$item->id_ticket}}
                </th>
                <td class="px-6 py-4">
                    {{$item->detalles}} <br>
                    {{$item->comentarios}}
>>>>>>> 11f7118008502e39b4cfa2b72c9e6f79491ce6d4
                </td>
               
                <td class="px-6 py-4">
<<<<<<< HEAD
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
                <td >
                  <div style="display: flex; justify-content: center;">
                    <button type="button" data-drawer-target="drawer-disable-body-scrolling" data-drawer-show="drawer-disable-body-scrolling" data-drawer-body-scrolling="false" aria-controls="drawer-disable-body-scrolling" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Generar Reporte</button>
                    
                  </div>
                </td>
            </tr>
=======
                    {{$item->departamento}}
                </td>
                <td>
                    {{$item->estatus}}

                </td>
                <td class="px-6 py-4">
                    {{$item->created_at}}

                </td>
            </tr>
            @endforeach
>>>>>>> 11f7118008502e39b4cfa2b72c9e6f79491ce6d4
        </tbody>
    </table>
</div>

@stop