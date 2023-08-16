<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- my style --}}
    <link rel="stylesheet" href="bootstrap/css/style.css">
</head>

<body>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
    <ul class="nav nav-tabs" style="background: rgb(0, 204, 255)">
        <li class=s"nav-item" >
            <a class="nav-link" href="/pasien" style="color: black">Pasien</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dokters" style="color: black">Dokter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/berobats" style="color: black">Hasil Diagnosa</a>
        </li>
        <ul class="navbar-nav ms-auto" style="padding-right: 20px ">
            <li class="nav-item" >
                <a class="nav-link" href="/login"style="color: black"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
        </ul>

    </ul>
    @yield('content')

</body>

</html>