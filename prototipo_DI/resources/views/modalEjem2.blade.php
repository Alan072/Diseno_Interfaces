@extends ('plantilla_jefe')
@section ('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />

</head>
<body>
<center>
    <br>
    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Numero de ticket: {{$dep->id_ticket}} </h5>
            <div class="col-span-2">
                <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Detalles: {{$dep->detalles}}</p>
                <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Comentarios: {{$dep->comentarios}}</p>
                <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Comentarios de Auxiliares: {{$dep->comentarios_aux}} </p>
                <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Fecha y Hora: {{$dep->created_at}}</p>

            </div>
        </div>
        <a href="/asignar_ticket" type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Regresar</a>
    </a>

</center>
</body>
</html>




@stop
