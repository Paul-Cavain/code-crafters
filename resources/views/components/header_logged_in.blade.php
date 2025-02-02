<header class="bg-darkGreen border-2 border-white fixed top-0 left-0 right-0 w-full z-10">
    <nav class="container-fill flex justify-between items-center px-4 md:px-12 py-4">
        <!-- Brand Name -->
        <h2 class="text-limeGreen text-lg md:text-2xl font-semibold md:font-bold">Blue Transport</h2>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>

        <!-- Navigation Links -->
        <ul id="menu" class="hidden md:flex flex-row justify-end items-center gap-x-6 text-white">
            <li><a href="{{ url('/') }}" class="hover:text-limeGreen transition ease-out duration-500">Home</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-limeGreen transition ease-out duration-500">About</a></li>
            <li><a href="{{ url('/service') }}" class="hover:text-limeGreen transition ease-out duration-500">Services</a></li>
            <li><a href="{{ url('/contact') }}" class="hover:text-limeGreen transition ease-out duration-500">Contact</a></li>
            <li>
                <a href="{{ url('/login') }}" class="bg-limeGreen px-5 py-2 rounded-md transition ease-out hover:border-2 hover:border-limeGreen hover:bg-darkGreen duration-500 flex items-center justify-center">
                    Login
                </a>
            </li>
        </ul>
    </nav>

    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-darkGreen p-4 border-t border-white">
        <ul class="flex flex-col space-y-4 text-white">
            <li><a href="{{ url('/') }}" class="hover:text-limeGreen transition">Home</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-limeGreen transition">About</a></li>
            <li><a href="{{ url('/service') }}" class="hover:text-limeGreen transition">Services</a></li>
            <li><a href="{{ url('/contact') }}" class="hover:text-limeGreen transition">Contact</a></li>
            <li>
                <a href="{{ url('/login') }}" class="bg-limeGreen px-5 py-2 rounded-md transition hover:border-2 hover:border-limeGreen hover:bg-darkGreen duration-500 flex items-center justify-center">
                    Log_Out
                </a>
            </li>
        </ul>
    </div>
</header>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.getElementById("menu-btn").addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
</script>
z