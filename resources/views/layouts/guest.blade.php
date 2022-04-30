<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS files -->
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@latest/dist/css/tabler.min.css">
    <script src="https://unpkg.com/@tabler/core@latest/dist/js/tabler.min.js" defer></script>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    {{ $slot }}
  </body>
</html>
