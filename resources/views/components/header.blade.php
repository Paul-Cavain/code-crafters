<header>
    <nav class='bg-darkGreen flex flex-row justify-between items-center p-4'>
        <h2 class="text-limeGreen text-2xl">Blue Transport</h2>
        <ul class="flex flex-row justify-center items-center gap-x-10 text-white">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/service') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <li class="bg-limeGreen w-20 h-10 rounded-sm flex items-center justify-center"><a href="{{ url('/login') }}">Login</a></li>
        </ul>
    </nav>
</header>