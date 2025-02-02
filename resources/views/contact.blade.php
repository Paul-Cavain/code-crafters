@extends('layouts.app')
@include('components.header')
@include('components.navbar')
@section('title', 'Logistic and Transport')

@section('content')
    <section class='pb-40'>
        <!-- intro image -->
        <div class="relative w-full h-[40vh] md:h-[65vh]">
            <!-- Centered Text -->
            <h3 class="absolute inset-0 flex items-center justify-center text-2xl md:text-4xl text-white kode-mono-text-font">
                {{ $title }}
            </h3>
            
            <!-- Image -->
            <img src="{{ asset('images/about.jpg') }}" alt="contact image" class="w-full h-[40vh] md:h-full mx-auto object-cover opacity-30">
        </div>

        <!-- cards working hrs -->
        <div class="flex flex-col md:flex-row md:justify-between items-center gap-y-6 md:gap-x-10 pt-16 md:pt-24 px-4 md:px-14 w-full">
            <div class="w-full h-auto py-4 p-4 border-2 border-limeGreen rounded-md text-white kode-mono-text-font">
                <h3 class="text-center">{{ $cardOneTitle[0] }}</h3>
                <ul class="mt-3">
                    <li>{{ $cardOneTitle[1] }}</li>
                    <li>{{ $cardOneTitle[2] }}</li>
                    <li>{{ $cardOneTitle[3] }}</li>
                </ul>
            </div>

            <div class="w-full h-auto py-7 p-4 border-2 border-limeGreen rounded-md text-white kode-mono-text-font">
                <h3 class="text-center">{{ $cardTwoTitle[0] }}</h3>
                <ul class="mt-3">
                    <li>{{ $cardTwoTitle[1] }}</li>
                    <li>{{ $cardTwoTitle[2] }}</li>
                </ul>
            </div>

            <div class="w-full h-auto py-7 p-4 border-2 border-limeGreen rounded-md text-white kode-mono-text-font">
                <h3 class="text-center">{{ $cardThreeTitle[0] }}</h3>
                <ul class="mt-3">
                    <li>{{ $cardThreeTitle[1] }}</li>
                    <li>{{ $cardThreeTitle[2] }}</li>
                </ul>
            </div>
        </div>

        <!-- contact form here -->
        <div class="mt-20 border-2 border-limeGreen rounded-md shadow-md md:w-11/12 mx-4 md:mx-14 md:px-10 px-4 py-4 md:py-12 flex flex-col md:flex-row justify-start md:justify-between text-center md:text-start md:items-start">
            <div class="w-full">
                <h3 class="text-white text-lg md:text-3xl">Lets discuss <span class="text-limeGreen">something</span> <p><span class="text-limeGreen">on</span> together</p></h3>

                <ul class="mt-16 md:mt-14 text-white flex flex-col gap-y-3">
                    <li class="flex flex-row gap-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-limeGreen" fill="currentColor" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                        </span>bluetransport@yahoo.com
                    </li>
                    <li class="flex flex-row gap-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class='size-5 text-limeGreen' fill="currentColor" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                        </span>+255614916853
                    </li>
                    <li class="flex flex-row gap-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-limeGreen" fill="currentColor" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                        </span>Nanenane Dodoma
                    </li>
                </ul>

                <!-- icons -->
                <ul class="flex flex-row gap-4 justify-center items-center md:justify-start md:items-start mt-16 md:mt-24">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 md:size-7 text-white cursor-pointer" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 md:size-7 text-white cursor-pointer" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 md:size-7 text-white cursor-pointer" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 md:size-7 text-white cursor-pointer" fill="currentColor" viewBox="0 0 496 512">
                            <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
                        </svg>
                    </li>
                </ul>
            </div>

            <div class="bg-white py-6 md:py-6 px-4 md:px-6 md:p-4 rounded-md w-full mt-12 md:mt-0">
                <h3 class='text-lg text-start'>I am interested in....</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-x-4 justify-start items-center pt-5 text-sm">
                    <span class="border-2 border-limeGreen bg-limeGreen text-white p-1.5 w-fit text-center rounded-sm cursor-pointer">Easy Delivery</span>
                    <span class="border-2 border-limeGreen p-1.5 w-fit text-center rounded-sm cursor-pointer">Less Cost</span>
                    <span class="border-2 border-limeGreen p-1.5 w-32 md:w-fit text-center rounded-sm cursor-pointer">24/7 Accesibile</span>
                    <span class="border-2 border-limeGreen p-1.5 mx-4 w-fit text-center rounded-sm cursor-pointer">Limitless</span>
                </div>
                <div class="mt-2 md:mt-5 flex justify-start items-center">
                    <span class="border-2 border-limeGreen p-1.5 w-fit text-center rounded-sm cursor-pointer">Other..</span>
                </div>

                <form class="mt-10 flex flex-col gap-5">
                    <input 
                        type="text"
                        placeholder="Your Name"
                        class="w-full border-t-0 border-x-0 border-b-2 border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-500 text-sm"
                    />
                    <input 
                        type="text"
                        placeholder="Your Email"
                        class="w-full border-t-0 border-x-0 border-b-2 border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-500 text-sm"
                    />
                    <textarea
                        placeholder="Your Message"
                        class="w-full border-t-0 border-x-0 border-b-2 border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-700 resize-none text-sm py-1"
                    ></textarea>

                    <button
                        type="button"
                        class="border-2 border-limeGreen rounded-md w-36 h-10 flex flex-row justify-center items-center gap-2 text-sm"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class='size-5' viewBox="0 0 512 512">
                            <path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/>
                        </svg>
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
@include('components.footer')
