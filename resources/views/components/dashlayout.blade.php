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
    <x-iconsidebar></x-iconsidebar>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <x-sidebar></x-sidebar>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

</html>
