@extends ('plantilla_cliente')
@section ('contenido')

<div class="bg-white rounded-lg shadow p-6">
    <form method="post">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Ticket</label>
                <input type="number" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12345" required>
            </div>
            <div>
                <label for="autor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Autor</label>
                <select id="autor" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled selected>Autor del Ticket</option>
                    <?php
                // Realizar la conexión a la base de datos
                $conexion = mysqli_connect("localhost:3307", "root", "", "prototipo_di");
          
                // Verificar la conexión
                if (!$conexion) {
                  die("Error al conectar a la base de datos: " . mysqli_connect_error());
                }
          
                // Realizar la consulta a la base de datos
                $query = "SELECT * FROM empleado where puesto_id= 3 ";
                $resultado = mysqli_query($conexion, $query);
          
                // Verificar si la consulta devolvió resultados
                if (mysqli_num_rows($resultado) > 0) {
                  // Iterar sobre los resultados y crear los elementos de la lista desplegable
                  while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $fila["id_empleado"] . "'>" . $fila["nombre"] . " " . $fila["apellido_paterno"] . " " . $fila["apellido_materno"] . "</option>";
                  }
                } else {
                  // Si la consulta no devolvió resultados, mostrar un mensaje de error
                  echo "<option value=''>No se encontraron resultados</option>";
                }
          
                // Cerrar la conexión a la base de datos
                mysqli_close($conexion);
              ?>
            </select>
            </div>
            <div>
                <label for="departamento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departamento</label>
                <select id="departamento" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled selected>Selecciona un departamento</option>
                    <?php
                // Realizar la conexión a la base de datos
                $conexion = mysqli_connect("localhost:3307", "root", "", "prototipo_di");
          
                // Verificar la conexión
                if (!$conexion) {
                  die("Error al conectar a la base de datos: " . mysqli_connect_error());
                }
          
                // Realizar la consulta a la base de datos
                $query = "SELECT * FROM departamento";
                $resultado = mysqli_query($conexion, $query);
          
                // Verificar si la consulta devolvió resultados
                if (mysqli_num_rows($resultado) > 0) {
                  // Iterar sobre los resultados y crear los elementos de la lista desplegable
                  while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $fila["id_departamento"] . "'>" . $fila["nombre"] . "</option>";
                  }
                } else {
                  // Si la consulta no devolvió resultados, mostrar un mensaje de error
                  echo "<option value=''>No se encontraron resultados</option>";
                }
          
                // Cerrar la conexión a la base de datos
                mysqli_close($conexion);
              ?>
            </select>
            </div>
            <div>
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
                <input type="date" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div>
                <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clasificación</label>
                <select id="small" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled selected>Selecciona una clasificación</option>
                    <option  value="US">Mantenimiento</option>
                    <option value="CA">Reparación</option>
                    <option value="FR">Falla software</option>
                </select>
            </div>
            <div>
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detalles</label>
                <textarea style="resize:none;" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="message-text"  required></textarea>
            </div>
        </div>
        
    <br>
    <button id="buttoninsert" type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit</button>
    <script src="ingresar.js"></script>
    <a id="buttoninsert" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" href="/tabcliente">
    Consultar tickets
    </a>
    </form>
</div>
@stop