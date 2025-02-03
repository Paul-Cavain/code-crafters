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
            <form action="" class="flex flex-col justify-start items-center gap-y-6 w-full md:w-3/4 h-full">
                <h2 class="text-2xl text-start hidden md:flex">Sign up</h2>
                
                <!-- Step 1 -->
                <div class="step-content space-y-3 w-full h-full md:h-full hidden" id="content-1">
                    <p class="pt-10 md:pt-0">Personal Information</p>
                    <input type="text" name="firstname" placeholder="Enter First Name" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                    <input type="text" name="lastname" placeholder="Enter Last Name" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                    <input type="text" name="phone" placeholder="Enter Phone Number" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                    <input type="text" name="email" placeholder="Enter Email" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                    <button type="button" class="w-full h-10 text-white bg-limeGreen mt-6" onclick="nextStep(1)">Next</button>
                </div>
                
                <!-- Step 2 -->
                <div class="step-content hidden space-y-4 w-full h-full md:h-full" id="content-2">
                    <p class="pt-10 md:pt-0">Account Information</p>
                    <input type="text" name="username" placeholder="Username" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                    <input type="text" name="password" placeholder="Create Password" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                    <input type="text" name="password" placeholder="Confirm Password" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                    <div class="flex justify-between w-full mt-10">
                        <button type="button" class="bg-gray-300 text-black w-1/3 py-2" onclick="prevStep(2)">Back</button>
                        <a href="{{ url('/approval') }}">
                            <button type="button" class="bg-limeGreen text-white w-fit px-16 h-10" onclick="nextStep(2)">Submit</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        let currentStep = 1;
        function showStep(step) {
            document.querySelectorAll('.step-content').forEach((el) => el.classList.add('hidden'));
            document.getElementById(`content-${step}`).classList.remove('hidden');
        }
        function nextStep(step) {
            if (step < 2) {
                currentStep++;
                showStep(currentStep);
            }
        }
        function prevStep(step) {
            if (step > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }
        document.addEventListener('DOMContentLoaded', () => showStep(currentStep));
    </script>
@endsection
