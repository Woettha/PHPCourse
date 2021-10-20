<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('shared.icons')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'The Vinyl Shop')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')
<main class="container mt-3">

<main class="container">
    @yield('main', 'Page under construction ...')
</main>
{{--  Footer  --}}
    @include('shared.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
