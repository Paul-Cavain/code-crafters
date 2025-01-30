<header>
    <nav class='bg-darkGreen flex flex-row justify-between items-center p-4 border-2 border-white'>
        <h2 class="text-limeGreen text-2xl">Blue Transport</h2>
        <ul class="flex flex-row justify-center items-center gap-x-10 text-white">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/service') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <a href="{{ url('/login') }}">
                <li class="bg-limeGreen w-20 h-10 rounded-sm flex items-center justify-center transition ease-out hover:border-2 hover:border-limeGreen hover:bg-darkGreen duration-500">Login</li>
            </a>
        </ul>
    </nav>
</header>