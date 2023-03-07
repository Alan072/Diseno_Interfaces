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
        <label>ID: 13466</label><br><br>
        <label>FECHA: 06/03/2023</label><br><br>
        <label>DEPARTAMENTO: Negocios</label><br><br>
        <label>MAQUINA: 12</label><br><br>
        <label>DESCRIPCION: Fallas de Office</label><br><br>
        <label>ESTATUS: Pendiente</label><br><br>
        <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Asignar ticket</button>
        <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Regresar</button>
      </div>
      <div class="column">
        <center>
            <label> Auxiliar: Alejandro Martínez</label>
            <br><br><br>
            <label>Comentarios:
                <br>
            *********************************
            <br>
            *********************************
            <br>
            *********************************
            <br>
            *********************************
            <br>
            *********************************
            </label>
        </center>
        
      </div>
    </div>
    
  </body>
</html>

@stop