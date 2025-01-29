<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'My Website')</title>
</head>
<body>
    @include('components.navbar')
    <!-- @include('components.header') -->

    <main class='bg-darkGreen'>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
