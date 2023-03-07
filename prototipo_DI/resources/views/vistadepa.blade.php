@extends ('plantilla_jefe')
@section ('contenido')

<!DOCTYPE html>
<html>
  <head>
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
  </head>
  <body>
    <div class="container">
      <div class="column">
        <label>DEPARTAMENTO</label><br><br><br>
        <label>FECHA REGISTRO</label><br><br><br>
        <label>TOTAL EMPLEADOS</label><br><br><br>
      </div>
      <div class="column">
        <label>MAQUINAS DISPONIBLES</label><br><br><br>
        <label>MAQUINAS NO DISPONIBLES</label><br><br><br>
        <label>EXTRA</label><br><br><br>
      </div>
    </div>
    <center>
        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Regresar</button>
    </center>
    <script src="model.js"></script>
    <button id="btn-abrir-modal">abir modal</button>
      <dialog id='modal'>
        <h1>Soy un modal</h1>
      </dialog>
  </body>
</html>

@stop