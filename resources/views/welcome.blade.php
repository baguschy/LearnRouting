<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       @vite('resources/sass/app.scss')
    </head>
    <body>
        <div class="container m-5">
            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/main.svg') }}" alt="image">
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
