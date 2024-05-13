<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fatah Dev</title>

    {{-- Press Start 2P fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    {{-- NES CSS --}}
    <link href="https://unpkg.com/nes.css/css/nes.css" rel="stylesheet" />

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="{{ asset('/css/Style.css') }}">

    <style>

    </style>

</head>

<body>
    @include('partials.navbar')

    <div class="container">
        @yield('container')
    </div>
</body>

</html>
