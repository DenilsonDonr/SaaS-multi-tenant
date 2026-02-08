<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'SubscriptHub') }}</title>

        <!-- Scripts -->
        @vite(['resources/js/app.ts', 'resources/css/app.css'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        <h1 class="text-center">Hola from Laravel + Inertia + Vue 3!</h1>
        @inertia
    </body>
</html>