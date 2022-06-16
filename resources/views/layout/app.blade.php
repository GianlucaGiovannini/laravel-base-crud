<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel @yield('title-page')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-dark text-white">
    @include('partials.header')

    <main class="py-3">


        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>