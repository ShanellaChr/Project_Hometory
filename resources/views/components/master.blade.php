<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hometory</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- Navbar --}}
    @include('components.navbar')

    <div class="container mt-5">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>
