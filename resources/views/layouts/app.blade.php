<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bootstrap 5.3 Jquery</title>
    <link rel="shortcut icon" href="icos/favicon.png" type="image/x-icon">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    <div class="container-fluid">
        @yield('content')
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    @yield('scriptes')
</body>
</html>