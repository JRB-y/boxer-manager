<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Boxer Manager</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/multiple-select.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
    </head>
    <body class="bg-dark">
        @include('parts.navbar')
        <div class="container-fluid">
            @yield('content')
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        @yield('javascript')
    </body>
</html>
