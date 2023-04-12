
@extends ('plantilla_auxiliar')
@section ('contenido')

<center>
<div style="max-width: 18rem;">
  <div style="background-color: #f8f9fa; padding: 1rem;">
    <div style="font-size: 1.25rem; font-weight: bold; margin-bottom: 1rem;">Tarea</div>
    <div style="font-size: 1.125rem; font-weight: bold; margin-bottom: 1rem;">Numero de ticket: {{$ticket->id_ticket}}</div>
    <div style="font-size: 1rem;">Detalles: {{$ticket->detalles}}</div>
    <div style="font-size: 1rem;">Comentarios: {{$ticket->comentarios}}</div>

    <form method="post" action="{{route('ticket_update', $ticket->id_ticket) }}">
      @csrf
      {!! method_field('PUT')!!}
  
      <div style="margin-top: 1rem;">
          <label for="estatus_id" style="display: block; font-size: 0.875rem; margin-bottom: 0.25rem;">STATUS</label>
  
          <div style="position: relative;">
              <select id="estatus_id" name="estatus_id" style="background-color: #fff; border: 1px solid #ced4da; border-radius: 0.25rem; color: #495057; font-size: 1rem; padding: 0.5rem 1rem; width: 100%;" required>
                  <option value="" disabled selected>Selecciona Status</option>
  
                  <?php
                  // Realizar la conexión a la base de datos
                  $conexion = mysqli_connect("localhost:3307", "root", "", "prototipo_di");
  
                  // Verificar la conexión
                  if (!$conexion) {
                      die("Error al conectar a la base de datos: " . mysqli_connect_error());
                  }
  
                  // Realizar la consulta a la base de datos
                  $query = "SELECT * FROM estatus";
                  $resultado = mysqli_query($conexion, $query);
  
                  // Verificar si la consulta devolvió resultados
                  if (mysqli_num_rows($resultado) > 0) {
                      // Iterar sobre los resultados y crear los elementos de la lista desplegable
                      while ($fila = mysqli_fetch_assoc($resultado)) {
                          echo "<option value='" . $fila["id_estatus"] . "'>" . $fila["nombre_estatus"] . "</option>";
                      }
                  } else {
                      // Si la consulta no devolvió resultados, mostrar un mensaje de error
                      echo "<option value=''>No se encontraron resultados</option>";
                  }
  
                  // Cerrar la conexión a la base de datos
                  mysqli_close($conexion);
                  ?>
  
              </select>
  
              <div class="form-floating" style="margin-top: 1rem;">
                <label for="floatingTextarea2">Comentarios</label>
                  <textarea class="form-control" placeholder="Comentarios sobre la tarea" name="comentarios_aux" id="comentarios_aux" style="height: 100px"></textarea>
                  
              </div>
  
                  <button type="submit" style="background-color: #007bff; border: none; border-radius: 0.25rem; color: #fff; cursor: pointer; font-size: 1rem; padding: 0.5rem 1rem;">Guardar</button>
          </div>
      </div>
  </form>
  
  </div>
</div>
</center>

  @stop



