<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Menus') · Blade Activity</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <!-- Navbar with menu options -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <div class="container">
            <a href="{{ route('menus.home') }}" class="navbar-brand">Menus</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('menus.home') }}" class="nav-link {{ request()->routeIs('menus.home') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('menus.photos') }}" class="nav-link {{ request()->routeIs('menus.photos') ? 'active' : '' }}">Photos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('menus.contact') }}" class="nav-link {{ request()->routeIs('menus.contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content">
            <div class="container pt-3">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer visible from all views -->
    <footer class="main-footer text-center">
        <strong>Actividad “Menus” — Nicholas Josue Ceballos Lopez.</strong>
    </footer>

</div>

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>