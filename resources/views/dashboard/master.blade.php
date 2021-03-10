<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
    <title>Módulo admin</title>
</head>
<body> 
    @include('dashboard.partials.nav-header')
    <br>
    <div class="container">     
        @include('dashboard.partials.session-status')
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>