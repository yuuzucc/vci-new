<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VCI</title>

    <!-- link bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- link bs icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- link jenis font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif&amp;display=swap">
    
    <!-- link icon panah putih & merah-->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    
    <!-- link icon footer-->
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    
    <!-- link footer-->
    <link rel="stylesheet" href="css/Footer.css">
    
    <!-- link navigation button-->
    <link rel="stylesheet" href="css/Navigation-with-Button.css">
    
    
  </head>
  
  <body>
      @include('partials.navbar')

      <div>
        @yield('container')
      </div>

      @include('partials.footer')
  </body>

</html>

{{-- Cobaaaa --}}