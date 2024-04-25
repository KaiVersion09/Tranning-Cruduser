<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container justify-content-center">
            <a class="navbar-brand" href="#">Home</a>
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Đăng Nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.createUser') }}">Đăng Ký</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Đăng Xuất</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer class="footer fixed-bottom bg-light py-3">
        <div class="container text-center">
            <span>© 2024 NHÓM G</span>
        </div>
    </footer>

</body>

</html>