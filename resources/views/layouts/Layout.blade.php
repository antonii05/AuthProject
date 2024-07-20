<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('head')
</head>

<body>
    @if ($hasMenu == true)
        <x-menu-component />
    @endif
    <div class="container-fluid">
        <div class="mx-5">
            @yield('body')
        </div>
    </div>
</body>
<footer>
    @yield('footer')
</footer>

</html>
