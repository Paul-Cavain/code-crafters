<header class="pt-11 md:mt-2 left-0 right-0 w-full">
    <div class="bg-darkGreen p-4 flex flex-col-reverse md:flex-row justify-start items-start md:justify-between md:items-center md:px-10 border-b-2 border-gray-600">
        <div class='flex flex-row justify-center items-center gap-x-6'>
            <span class='text-limeGreen'>Blue Transport</span>
            <form class="flex flex-row justify-start items-center gap-x-0">
                <input 
                    type="text" 
                    placeholder="search vehicles by route"
                    class="px-2 w-96 h-10 border-2 border-limeGreen bg-gray-300 rounded-l-sm focus:outline-none"
                />
                <button class="bg-limeGreen w-20 h-10 rounded-r-sm flex items-center justify-center text-white transition-all ease-out duration-500 hover:bg-darkGreen hover:text-white hover:border-2 hover:border-limeGreen">Search</button>
            </form>
        </div>
        <div class='flex flex-row justify-center items-center gap-x-4'>
            <button 
                class="hidden bg-darkGreen border-2 border-limeGreen w-fit px-4 h-10 rounded-sm md:flex items-center justify-center text-white transition-all ease-out duration-500 hover:bg-limeGreen hover:text-black hover:border-2 hover:border-white">vehicles
            </button>
            <a href="{{ url('/login') }}">
                <button 
                    class="hidden bg-limeGreen border-2 border-limeGreen w-fit px-4 h-10 rounded-sm md:flex items-center justify-center text-white transition-all ease-out duration-500 hover:bg-limeGreen hover:text-black hover:border-2 hover:border-white">login
                </button>
            </a>
        </div>
    </div>
</header>
