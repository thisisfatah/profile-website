<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fatah Dev</title>

    {{-- Press Start 2P fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- My Style --}}
    <link rel="stylesheet" href="{{ asset('/css/Style.css') }}">
</head>

<body>

    @include('partials.navbar')

    <div class="container">
        @yield('container')
    </div>
</body>

<footer class="text-white mt-auto text-center pt-3" style="background-color: #334591">
    <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="/"
            class="text-white">Fatahillah</a></p>
</footer>

</html>
