<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MC</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />

</head>
<body>
  
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
      <a class="flex items-center">
          <img src="https://cdn-icons-png.flaticon.com/512/2381/2381663.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Macuin Dashboards</span>
      </a>
      <div class="flex items-center">
          <a href="tel:5541251234" class="mr-6 text-sm font-medium text-gray-500 dark:text-white hover:underline">IG: @alan_lugardo</a>
          <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Salir</a>
      </div>
  </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
  <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
      <div class="flex items-center">
          <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
              <li>
                  <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Usuarios</a>
              </li>
              <li>
                  <a href="#" class="text-gray-900 dark:text-white hover:underline">Tickets</a>
              </li>
              <li>
                  <a href="#" class="text-gray-900 dark:text-white hover:underline">Departamentos</a>
              </li>
              <li>
                  <a href="#" class="text-gray-900 dark:text-white hover:underline">Reportes</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
@yield('contenido')
</body>
</html>