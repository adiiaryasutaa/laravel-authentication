<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>@yield('title')</title>
</head>

<body>
  
  @yield('main')
  
  {{-- <script src="../node_modules/@themesberg/flowbite/dist/flowbite.bundle.js"></script> --}}
  <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>

</body>

</html>