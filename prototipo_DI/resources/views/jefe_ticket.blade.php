@extends ('plantilla_jefe')
@section ('contenido')
@include('modalEjem')

<div class="bg-white rounded-lg shadow p-6">
    <form method="post" action="{{ route('insertar.create') }}">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
          <div>
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alan" required>
          </div>
          <div>
            <label for="apellido_paterno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Paterno</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pineda" required>
          </div>
          <div>
            <label for="apellido_materno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Materno</label>
            <input type="text" id="apellido_materno" name="apellido_materno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lugardo" required>
          </div>  
          <div>
            <label for="departamento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departamento</label>
            <input type="text" id="departamento" name="departamento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Recursos Humanos" required>
          </div>
            <div>
                <label for="puesto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puesto</label>
                <input type="text" name="puesto" id="puesto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Auxiliar" required>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
            </div> 
        </div>
        
    <br>
    <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit</button>
    <a class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" href="/tb_usuarios">
    Consultar Usuarios
    </a>
    </form>
</div>
    
<br>
<style>
    .container {
      display: flex;
      flex-wrap: wrap;
    }
    .column {
      flex: 50%;
      padding: 10px;
      box-sizing: border-box;
    }
  </style>




@stop
