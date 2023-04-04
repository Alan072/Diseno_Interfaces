@extends ('plantilla_auxiliar')
@section ('contenido')
<div class="w-full max-w-xl p-4 bg-white mx-auto">
    <form action="{{ route('filtrar') }}" method="GET">
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
            </p>

            </ul>
        </div>
        <input type="text" name="search" id="search-dropdown" class="flex-grow w-full px-4 py-2 text-gray-900 bg-gray-100 border border-gray-300 rounded-r-lg focus:outline-none focus:ring-4 focus:ring-gray-100 dark:bg-gray-700 dark:focus:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" placeholder="Buscar por correo electrónico" autocomplete="off" required>
        <button type="submit" class="flex-shrink-0 px-4 py-2 ml-2 text-sm font-medium text-white bg-gray-900 border border-gray-900 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:bg-gray-800 dark:border-gray-600 dark:focus:bg-gray-700 dark:hover:bg-gray-700">Buscar</button>
      </div>
    </form>
  </div>  
  


<div class="bg-white rounded-lg shadow p-6">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    DESCRIPCION
                </th>
                
                <th scope="col" class="px-6 py-3">
                    DEPARTAMENTO
                </th>
                <th scope="col" class="px-6 py-3">
                    STATUS
                </th>
                <th scope="col" class="px-6 py-3">
                    FECHA
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ticket as $item)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    
                    {{$item->id_ticket}}
                </th>
                <td class="px-6 py-4">
                    {{$item->detalles}} <br>
                    {{$item->comentarios}}
                </td>
               
                <td class="px-6 py-4">
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
        </tbody>
    </table>
</div>
@stop