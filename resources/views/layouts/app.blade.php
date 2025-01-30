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
    @include('components.header')
    @include('components.navbar')
    

    <main class='bg-darkGreen'>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
