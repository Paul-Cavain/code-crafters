<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/car-solid.svg') }}" type="image/svg+xml">
    <link rel="shortcut icon" href="{{ asset('images/car-solid.svg') }}" type="image/svg+xml">
    
    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'My Website')</title>
</head>
<body>
    @if (request()->is(['login', 'registerUser', 'registerCompany', 'approval']))
        @include('components.header')
    @else
        @include('components.header')
        @include('components.navbar')
    @endif

    <main class='bg-darkGreen'>
        @yield('content')
    </main>

    @if (!request()->is(['login', 'registerUser', 'registerCompany', 'approval']))
        @include('components.footer')
    @endif
</body>
</html>
