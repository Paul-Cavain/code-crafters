@extends('layouts.app')

@section('title', 'Logistic and Transport')

@section('content')
    <section  class="flex flex-col justify-center items-center gap-y-4 w-full min-h-screen text-white bg-darkGreen px-8 md:px-0">
        <h3 class='text-sm md:text-md hidden md:flex'>Thanks for submission of your informations</h3>
        <h3 class='text-sm md:text-md flex md:hidden'>Thanks for submission</h3>
        <p class='md:pt-1 text-sm md:text-md hidden md:flex'>Please wait for approval</p>
        <p class='md:pt-1 text-sm md:text-md flex md:hidden'>Wait for approval</p>
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="size-48 pt-12 md:pt-10" fill="limeGreen" viewBox="0 0 512 512">
                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
            </svg>
        </span>
        <p class="pt-12 text-sm md:text-md md:pt-8 text-center">Please contcact te system admin, for approval to continue with next step</p>
        <button class="text-white uppercase text-xs px-4 w-fit h-10 mt-8 rounded-sm focus:outline-none bg-limeGreen hover:text-white hover:bg-darkGreen hover:border-2 hover:border-white transition ease-out duration-500 text-center">Contact Now</button>
    </section>
@endsection
