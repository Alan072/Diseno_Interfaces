@include('dropdown')
<!--Este es el modal para la verificacion de el eliminar-->
<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Estas seguro de eliminar este reporte?</h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Si, estoy seguro
                </button>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancelar</button>
            </div>
        </div>
    </div>
</div>

<div id="actualizar" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Estas seguro de actualizar?</h3>
                <button data-modal-hide="actualizar" type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Confirmo</button>

            </div>
        </div>
    </div>
</div>

{{--
<!-- dentro de este modal, se mostrara el reporte completo de los tickets -->
  <!-- Main modal -->
  <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
      <div class="relative w-full h-full max-w-2xl md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                @foreach($tarea as $item)
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                       VISTA COMPLETA DEL TICKET:  {{$item->id_ticket}} 

                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-6 space-y-6">
                  <label>ID:{{$item->id_ticket}} 
                </label><br>
                  <label>Descripcion: {{$item->detalles}} <br>
                    {{$item->comentarios}} 
                  </label><br>
                  <label>Solicito el cliente: {{$item->nombre_completo}} 
                </label><br>
                  <label>Departamento: {{$item->departamento}}</label><br>
                  <label>Status: {{$item->estatus}}</label>
                  

              </div>
              @endforeach
              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aceptar</button>
                  <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cerrar</button>
              </div>
          </div>
      </div>
  </div>
--}}
<!-- dentro de este modal, se mostrara el formulario para poder actualizar los departamentos-->  
  <!-- Main modal -->
  
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Assign Ticket</h3>

        <div class="relative w-full h-full max-w-md md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Asignar Ticket</h3>
                
              <form class="space-y-6" action="{{ route('insertar_tarea') }}" method="POST">
                @csrf


                <label for="ticket_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ticket</label>
                <select id="ticket_id" name="ticket_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="" disabled selected>Selecciona un Ticket</option>
              <?php
                // Realizar la conexión a la base de datos
                $conexion = mysqli_connect("localhost:3306", "root", "", "prototipo_di");
          
                // Verificar la conexión
                if (!$conexion) {
                  die("Error al conectar a la base de datos: " . mysqli_connect_error());
                }
          
                // Realizar la consulta a la base de datos
                $query = "SELECT * FROM tickets";
                $resultado = mysqli_query($conexion, $query);
          
                // Verificar si la consulta devolvió resultados
                if (mysqli_num_rows($resultado) > 0) {
                  // Iterar sobre los resultados y crear los elementos de la lista desplegable
                  while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $fila["id_ticket"] . "'>" . $fila["detalles"] ."</option>";
                  }
                } else {
                  // Si la consulta no devolvió resultados, mostrar un mensaje de error
                  echo "<option value=''>No se encontraron resultados</option>";
                }
          
                // Cerrar la conexión a la base de datos
                mysqli_close($conexion);
              ?>
            </select>   

              
                <label for="empleado_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona un Auxiliar</label>
                <select id="empleado_id" name="empleado_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="" disabled selected>Selecciona un Auxiliar</option>
              <?php
                // Realizar la conexión a la base de datos
                $conexion = mysqli_connect("localhost:3306", "root", "", "prototipo_di");
          
                // Verificar la conexión
                if (!$conexion) {
                  die("Error al conectar a la base de datos: " . mysqli_connect_error());
                }
          
                // Realizar la consulta a la base de datos
                $query = "SELECT * FROM empleado where puesto_id = 2";
                $resultado = mysqli_query($conexion, $query);
          
                // Verificar si la consulta devolvió resultados
                if (mysqli_num_rows($resultado) > 0) {
                  // Iterar sobre los resultados y crear los elementos de la lista desplegable
                  while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $fila["id_empleado"] . "'>" . $fila["nombre"] . " " . $fila["apellido_paterno"] . " " . $fila["apellido_materno"] ."</option>";
                  }
                } else {
                  // Si la consulta no devolvió resultados, mostrar un mensaje de error
                  echo "<option value=''>No se encontraron resultados</option>";
                }
          
                // Cerrar la conexión a la base de datos
                mysqli_close($conexion);
              ?>
            </select>

            <label for="departamento_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona un Auxiliar</label>
                <select id="departamento_id" name="departamento_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="" disabled selected>Selecciona un departamento</option>
              <?php
                // Realizar la conexión a la base de datos
                $conexion = mysqli_connect("localhost:3306", "root", "", "prototipo_di");
          
                // Verificar la conexión
                if (!$conexion) {
                  die("Error al conectar a la base de datos: " . mysqli_connect_error());
                }
          
                // Realizar la consulta a la base de datos
                $query = "SELECT * FROM departamento ";
                $resultado = mysqli_query($conexion, $query);
          
                // Verificar si la consulta devolvió resultados
                if (mysqli_num_rows($resultado) > 0) {
                  // Iterar sobre los resultados y crear los elementos de la lista desplegable
                  while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $fila["id_departamento"] . "'>" . $fila["nombre"] ."</option>";
                  }
                } else {
                  // Si la consulta no devolvió resultados, mostrar un mensaje de error
                  echo "<option value=''>No se encontraron resultados</option>";
                }
          
                // Cerrar la conexión a la base de datos
                mysqli_close($conexion);
              ?>
            </select>


                      <div>
                        <label for="comentarios" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comments</label>
                        <textarea style="resize:none;" name="comentarios" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="comentarios" required></textarea>
                    </div>
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Assign</button>
                        <button data-modal-hide="authentication-modal" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Close</button>
                    </div>  
                  </form>
              </div>
          </div>
      </div>
  </div> 
<!--Este es para el tooltip de el boton de documento-->
<div id="tooltip-document" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
    Ver reportes completos
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>

<!--Este es para el tootip de actualizar-->
<div id="tooltip-update" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
    Actualizar reportes
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>

<!--Este es para el tootip de eliminar-->
<div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
    Eliminar reportes
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>

<!--Este es para el tootip de descargar pdf-->
<div id="tooltip-download" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
    Descargar Reporte
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>

<!--Este es para el tootip de completado-->
<div id="tooltip-complete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
    Marcar como completado
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>

<!--Este es para el tootip de asignar-->
<div id="tooltip-assign" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
    Asignar ticket
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>