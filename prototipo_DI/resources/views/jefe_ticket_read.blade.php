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
   
<a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ str_replace('\\', '/', asset('storage/images/'.$empleado->foto)) }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">@isset($empleado->nombre){{$empleado->nombre}}@endisset</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Puesto: @isset($empleado->puesto_nombre){{$empleado->puesto_nombre}}@endisset</p>
        <div class="col-span-2">
            <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Apellido Paterno: @isset($empleado->apellido_paterno){{$empleado->apellido_paterno}}@endisset</p>
            <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Apellido Materno: @isset($empleado->apellido_materno){{$empleado->apellido_materno}}@endisset</p>
            <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Departamento: @isset($empleado->departamento_nombre){{$empleado->departamento_nombre}}@endisset</p>
            <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Email: @isset($empleado->email){{$empleado->email}}@endisset</p>            
        </div>
        
    </div>
    <a href="/tb_usuarios" type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Regresar</a>
    <a href="{{route('usuarioedit',$empleado->id_empleado)}}" type="button" class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Actualizar</a>
</a>

</center>
</body>
</html>


@stop
