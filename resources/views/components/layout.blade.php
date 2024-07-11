<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/css/style.css">
<link href="/css/dashboard.css" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <x-navbar></x-navbar>
    <x-header>{{$title}}</x-header>
    <main>{{$slot}}</main>
</body>

</html>