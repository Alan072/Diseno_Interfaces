@extends ('plantilla_jefe')
@section ('contenido')
@include('modalEjem')

<div class="bg-white rounded-lg shadow p-6">
    <form method="post" action="{{ route('depupdate', $dep->id_departamento) }}">
        @csrf
         {!! method_field('PUT')!!}

            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departamento</label>
                    <input type="text" id="nombre" name="nombre" value="{{ $dep->nombre}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                </div>
                <div>
                    <label for="numero_maquinas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de maquinas</label>
                    <input type="number" id="numero_maquinas" name="numero_maquinas" value="{{ $dep->numero_maquinas}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                </div>
                <div>
                    <label for="maquinas_disponibles" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maquinas Disponibles</label>
                    <input type="number" id="maquinas_disponibles" name="maquinas_disponibles" value="{{ $dep->maquinas_disponibles}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                </div>  
                <div>
                    <label for="numero_empleados" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de empleados</label>
                    <input type="number" id="numero_empleados" name="numero_empleados" value="{{ $dep->numero_empleados}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                </div>
                <div>
                    <label for="extra" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Extra</label>
                    <input type="text" id="extra" name="extra" value="{{ $dep->extra}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
                </div>
                
            </div>
            <script>
                function mostrarAlerta() {
                  alert("Datos actualizados exitosamente");
                }
              </script>
            <button onclick="mostrarAlerta()" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
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
