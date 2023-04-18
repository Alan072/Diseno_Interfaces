@extends ('plantilla_jefe')
@section ('contenido')
@include('modalEjem')

<div class="bg-white rounded-lg shadow p-6">
    <form method="post" action="{{ route('insertar.create') }}" enctype="multipart/form-data">
        @csrf
        
        <div class="grid gap-6 mb-6 md:grid-cols-2">
          <div class="grid grid-cols-1 mt-5 mx-7">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
              <div class='flex items-center justify-center w-full'>
                  <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-blue-300 group'>
                      <div class='flex flex-col items-center justify-center pt-7'>
                          <svg class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                          </svg>
                          <p class='text-sm text-gray-400 group-hover:text-blue-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                      </div>
                      <input name="imagen" id="imagen" required type='file' class="hidden" />
                  </label>
              </div>
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
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
            </div> 
            <div class="mb-6">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
              <div class="relative">
                <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="********" required>
                <button type="button" class="absolute inset-y-0 right-0 px-3 py-2 bg-gray-200 rounded-md text-gray-700 dark:bg-gray-500 dark:text-gray-200" onclick="togglePasswordVisibility()">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
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
    <button id="buttoninsert" type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Submit</button>
    <script src="ingresar.js"></script>
    <a class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" href="/tb_usuarios">
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
