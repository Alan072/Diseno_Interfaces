@extends ('plantilla_jefe')
@section ('contenido')
@include('modalEjem')


	<style type="text/css">
		.columnas {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.columna {
			flex-basis: calc(33.33%);
			margin-bottom: 20px;
			padding: 10px;
			background-color: #f2f2f2;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
		}
	</style>

<body>
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex justify-center">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
      </div>
      <br>
	<div class="columnas" style="display: flex; justify-content: space-between;">
		<div class="columna">
			<label>Departamento</label><br>
			<input type="text" required>
            <br>
            <label>Fecha</label><br>
            <input type="text" required>
		</div>
		<div class="columna">
			<label>No. Maquinas</label><br>
			<input type="text" required>
            <br>
            <label>No. Empleados</label><br>
            <input type="text" required>
		</div>
		<div class="columna">
			<label>Maquinas disponibles</label><br>
			<input type="text" required>
            <br>
            <label>Extra</label><br>
            <input type="text" required>
		</div>
	</div>
    <center>
        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit</button>
        <a class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" href="/tb_reportes">
        Consultar Reportes
        </a>
    </center>
</div>


</body>
</html>


@stop