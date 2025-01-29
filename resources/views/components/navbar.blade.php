<header>
    <nav class='bg-darkGreen flex flex-row justify-between items-center p-3.5 border-2 border-white'>
        <h2 class="text-limeGreen text-2xl">Blue Transport</h2>
        <ul class="flex flex-row justify-center items-center gap-x-10 text-white">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/service') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <li class="bg-limeGreen w-20 h-10 rounded-sm flex items-center justify-center"><a href="{{ url('/login') }}">Login</a></li>
        </ul>
    </nav>
    <div class="bg-darkGreen p-3.5 flex flex-row justify-between items-center border-x-2 border-b border-white">
        <form class="flex flex-row justify-start items-center gap-x-0">
            <input 
                type="text" 
                placeholder="search vehicles by route"
                class="px-2 w-48 h-10 border-2 border-limeGreen rounded-l-sm text-center"
            />
            <button class="bg-limeGreen w-20 h-10 rounded-r-sm flex items-center justify-center text-white">Search</button>
        </form>
        <button class="bg-darkGreen border-2 border-limeGreen w-52 h-10 rounded-sm flex items-center justify-center text-white">View Available vehicles</button>
    </div>
</header>
