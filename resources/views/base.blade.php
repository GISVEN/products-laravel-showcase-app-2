<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/mvp.css">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @fonts
</head>
<body>

@section('header')
    <x-header></x-header>
@show

<main>
    @section('main')
    @show
</main>
</body>
</html>
