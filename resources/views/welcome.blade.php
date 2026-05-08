<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/simple.min.css">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts
    </head>
    <body>
        <header>
            Hi
        </header>
        <main>
            Hello world!

            <a>Products list</a>
        </main>
    </body>
</html>
