@extends ('plantilla_jefe')
@section ('contenido')
@include('modalEjem')

<div class="bg-white rounded-lg shadow p-6">
  <form method="post" action="{{ route('usuarioupdate', $empleado->id_empleado) }}">
    <script src="actualizar.js"></script>
    @csrf
      {!! method_field('PUT')!!}
        <div class="grid gap-6 mb-6 md:grid-cols-2">
          <div>
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
            <input type="text"  id="nombre" name="nombre" value="{{ $empleado->nombre}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
          </div>
          <div>
            <label for="apellido_paterno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Paterno</label>
            <input type="text"  id="apellido_paterno" name="apellido_paterno" value="{{ $empleado->apellido_paterno}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
          </div>
          <div>
            <label for="apellido_materno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Materno</label>
            <input type="text" id="apellido_materno" name="apellido_materno" value="{{ $empleado->apellido_materno}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
          </div>  


          <div>
            <label for="departamento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departamento</label>
            <select id="departamento" name="departamento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
              <option value="" disabled selected>Selecciona un departamento</option>
              <?php
                // Realizar la conexión a la base de datos
                $conexion = mysqli_connect("localhost:3306", "root", "", "prototipo_di");
          
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
            <label for="puesto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puesto</label>
            <select id="puesto" name="puesto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
              <option value="" disabled selected>Selecciona un puesto</option>
              <?php
                // Realizar la conexión a la base de datos
                $conexion = mysqli_connect("localhost:3306", "root", "", "prototipo_di");
          
                // Verificar la conexión
                if (!$conexion) {
                  die("Error al conectar a la base de datos: " . mysqli_connect_error());
                }
          
                // Realizar la consulta a la base de datos
                $query = "SELECT * FROM puesto";
                $resultado = mysqli_query($conexion, $query);
          
                // Verificar si la consulta devolvió resultados
                if (mysqli_num_rows($resultado) > 0) {
                  // Iterar sobre los resultados y crear los elementos de la lista desplegable
                  while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $fila["id_puesto"] . "'>" . $fila["nombre"] . "</option>";
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
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                <input type="email" id="email" name="email" value="{{ $empleado->email}}"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div> 

            <div class="mb-6">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
              <div class="relative">
                <input type="password" id="password" name="password" value="{{ $empleado->password}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="********" required>
                <button type="button" class="absolute inset-y-0 right-0 px-3 py-2 bg-gray-200 rounded-md text-gray-700 dark:bg-gray-500 dark:text-gray-200" onclick="togglePasswordVisibility()">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                      <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4zM2.9 9c.2-.7.5-1.4 1.1-1.9A13 13 0 0110 5c2.2 0 4.2.5 5.9 1.4.6.4 1 1 1.2 1.6l-1.8.9c-.1-.4-.4-.7-.7-.9A8.4 8.4 0 0010 7c-1.3 0-2.5.3-3.5.9-.2.1-.4.2-.6.2-.2 0-.4-.1-.6-.2l-1.8-.9zM5 9a3 3 0 116 0 3 3 0 01-6 0z" clip-rule="evenodd" />
                      <path fill-rule="evenodd" d="M10 14.5c-2.2 0-4.2-.5-5.9-1.4-.6-.4-1-1-1.2-1.6l1.8-.9c.1.4.4.7.7.9a8.4 8.4 0 003.9 1.6c1.3 0 2.5-.3 3.5-.9.2-.1.4-.2.6-.2.2 0 .4.1.6.2l1.8.9c-.2.5-.5 1.1-1.1 1.6A13 13 0 0110 15.5z" clip-rule="evenodd" />
                  </svg>
              </button>
              </div>
            </div>
          </div>
          <script>
            function togglePasswordVisibility() {
                var passwordInput = document.getElementById("password");
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                } else {
                    passwordInput.type = "password";
                }
            }
        </script>
    <br>
    <script>
      var contador = 0;
    
      function mostrarAlerta() {
        contador++;
    
        if (contador == 2) {
          alert("Datos actualizados exitosamente");
          contador = 0;
        }
      }
    </script>
  </head>
  <body>
    <button onclick="mostrarAlerta()" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Actualizar</button>
    </form>
    
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

<script>
  function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    var visibilityButton = document.querySelector("#password + button");
    if (passwordField.type === "password") {
      passwordField.type = "text";
      visibilityButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
<path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4zM2.9 9c.2-.7.5-1.4 1.1-1.9A13 13 0 0110 5c2.2 0 4.2.5 5.9 1.4.6.4 1 1 1.2 1.6l-1.8.9c-.1-.4-.4-.7-.7-.9A8.4 8.4 0 0010 7c-1.3 0-2.5.3-3.5.9-.2.1-.4.2-.6.2-.2 0-.4-.1-.6-.2l-1.8-.9zM5 9a3 3 0 116 0 3 3 0 01-6 0z" clip-rule="evenodd"><path fill-rule="evenodd" d="M10 14.5c-2.2 0-4.2-.5-5.9-1.4-.6-.4-1-1-1.2-1.6l1.8-.9c.1.4.4.7.7.9a8.4 8.4 0 003.9 1.6c1.3 0 2.5-.3 3.5-.9.2-.1.4-.2.6-.2.2 0 .4.1.6.2l1.8.9c-.2.5-.5 1.1-1.1 1.6A13 13 0 0110 15.5z" clip-rule="evenodd"></svg>';
} else {
passwordField.type = "password";
visibilityButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 14.5c-2.2 0-4.2-.5-5.9-1.4-.6-.4-1-1-1.2-1.6l1.8-.9c.1.4.4.7.7.9a8.4 8.4 0 003.9 1.6c1.3 0 2.5-.3 3.5-.9.2-.1.4-.2.6-.2.2 0 .4.1.6.2l1.8.9c-.2.5-.5 1.1-1.1 1.6A13 13 0 0110 15.5zM10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></svg>';
}
}
</script>
@stop