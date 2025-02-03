@extends('layouts.app')

@section('title', 'Logistic and Transport')

@section('content')
    <section class="flex flex-col justify-center items-center md:flex-row w-full min-h-screen text-white md:px-32 py-10 md:py-0">

        <div class="w-full">
            <h2 class="text-xl md:text-start flex justify-center items-center md:hidden">Sign up</h2>
            <!-- image -->
            <img src="{{ asset('images/register.png') }}" alt="contact image" class="w-full h-[40vh] md:h-full mt-10 md:mt-0 mx-auto object-cover opacity-30">
        </div>

        <div class="flex flex-col justify-center items-center w-full">
            <form action="" class='flex flex-col justify-center items-center gap-y-4 w-full'>
                <h2 class="text-2xl text-start hidden md:flex">Sign up</h2>
                <p class="pt-10 md:pt-0">Personal Informations</p>

                <label htmlFor='first name' class='hidden'>First Name</label>
                <input
                    type='text'
                    name="firstname"
                    placeholder='Enter First Name'
                    class='w-5/6 md:w-3/4 h-10 focus:outline-none border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs'
                />

                <label htmlFor='last name' class='hidden'>Last Name</label>
                <input 
                    type='text'
                    name='lastname'
                    placeholder='Enter Last Name'
                    class='w-5/6 md:w-3/4 h-10 focus:outline-none border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs'
                />

                <label htmlFor='Phone number' class='hidden'>Phone Number</label>
                <input 
                    type='phone'
                    name="phone"
                    placeholder='Enter Phone Number'
                    class='w-5/6 md:w-3/4 h-10 focus:outline-none border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs'
                />

                <label htmlFor='Email' class='hidden'>Email</label>
                <input 
                    type='email'
                    name="email"
                    placeholder='Enter Email'
                    class='w-5/6 md:w-3/4 h-10 focus:outline-none border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs'
                />
                <button
                    type='button'
                    class='w-5/6 md:w-3/4 h-10 text-white bg-limeGreen hover:bg-darkGreen hover:text-white hover:border-2 hover:border-white mt-6'
                >
                Next
                </button>
            </form>
        </div>
    </section>
@endsection
