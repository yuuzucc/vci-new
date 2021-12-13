<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VCI</title>

    <!-- link bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- link bs icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- link jenis font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif&amp;display=swap">

    <!-- link icon panah putih & merah-->
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">

    <!-- link icon footer-->
    <link rel="stylesheet" href=" {{ asset('fonts/ionicons.min.css') }}">

    <!-- link footer-->
    <link rel="stylesheet" href="{{ asset('css/styles-landing.css') }}">

    <!-- link footer-->
    <link rel="stylesheet" href="{{ asset('css/Footer.css') }}">

    <!-- link navigation button-->
    <link rel="stylesheet" href="{{ asset('css/Navigation-with-Button.css') }}">

    @stack('styles')
</head>

<body>
    @include('partials.navbar')

    <div>
        @yield('container')
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>

