<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Huellas Felices')</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    @include('partials.nav')
    <main class="container mt-4">
        @yield('content')
    </main>
    <footer class="text-center mt-5 mb-3">
        <small>@ {{ date('Y') }} - Huellas Felices</small>
    </footer>

     <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>