@extends('layouts.app')

@section('title', 'Logistic and Transport')

@section('content')
    <section class="flex flex-col md:flex-row w-full min-h-screen justify-center items-center py-10 md:py-0 px-32">
        <div class="w-full">
            <h2 class="text-xl text-white flex justify-center items-center md:hidden">Login to your Account</h2>
            <p class='text-xs text-center text-white flex justify-center items-center md:hidden'>See what is going on with your Business</p>
            <!-- Image -->
            <img src="{{ asset('images/login.png') }}" alt="contact image" class="w-full h-[40vh] md:h-full mt-10 md:mt-0 mx-auto object-cover opacity-30">
        </div>
        <div class="flex flex-col justify-center items-center w-full text-white text-center gap-y-4">
            <form action="" class='flex flex-col justify-center items-center gap-y-4 w-full'>
            <h2 class="text-xl hidden md:flex">Login to your Account</h2>
            <p class='text-xs hidden md:flex'>See what is going on with your Business</p>
            <button class="flex justify-center items-center text-black w-4/5 md:w-1/2 h-10 bg-white rounded-sm focus:outline-none px-4 text-center transition ease-out duration-500 hover:bg-darkGreen hover:text-white hover:border-2 hover:border-white mt-14 md:mt-0">Continue with Google</button>
            <span class="text-xs">or Sign up with your email</span>

            <label htmlFor="email" class="text-start hidden">Email</label>
            <input 
                type="text"
                name="email"
                placeholder="Enter email"
                class="px-2 h-10 w-4/5 md:w-1/2 bg-white rounded-sm focus:outline-none mt-8 transition ease-out duration-500 hover:bg-darkGreen hover:text-white hover:border-2 hover:border-white"
            />

            <label htmlFor="password" class='text-start hidden'>Password</label>
            <input 
                type="password"
                name='password'
                placeholder="Enter password"
                class="px-2 h-10 w-4/5 md:w-1/2 mt-1 bg-white rounded-sm focus:outline-none transition ease-out duration-500 hover:bg-darkGreen hover:text-white hover:border-2 hover:border-white"
            />
            <a href='#'>
                <span class='text-xs text-end'>Forget Password?</span>
            </a>
            <button class="bg-limeGreen w-4/5 md:w-1/2 h-10 px-4 transition ease-out duration-500 hover:bg-darkGreen hover:text-white hover:border-2 hover:border-white">Login</button>
            <p class='text-xs flex gap-x-4'>Not registered?
                <a href='./register'>
                    <span class='text-blue-500'>Create Account</span>
                </a>
            </p>
            </form>
        </div>
        
    </section>

@endsection
