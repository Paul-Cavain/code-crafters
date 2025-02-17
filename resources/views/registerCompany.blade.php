@extends('layouts.app') 
@section('title', 'Logistic and Transport')
@section('content')
  <section class="flex flex-col justify-center items-center md:flex-row w-full min-h-screen text-white px-12 md:px-32 py-10 md:py-0">

    <div class="w-full">
        <h2 class="text-xl md:text-start flex justify-center items-center md:hidden">Sign up</h2>
        <!-- image 1 -->
        <img src="{{ asset('images/company.png') }}" alt="contact image" class="step-image w-4/5 h-[40vh] md:h-[70vh] mt-10 md:mt-0 mx-auto object-cover opacity-30">

        <!-- image 2 -->
        <img src="{{ asset('images/truck.png') }}" alt="contact image" class="step-image hidden w-4/5 h-[40vh] md:h-[70vh] mt-10 md:mt-0 mx-auto object-cover opacity-30">
    </div>

    <div class="flex flex-col justify-center items-center w-full">
      <form action="" class="flex flex-col justify-start items-center gap-y-6 w-full md:w-3/4 h-full">

        <!-- Dynamic Heading -->
        <h3 class="text-2xl" id="step-title">Register Company</h3>

        <!-- Step 1 -->
        <div class="step-content space-y-3 w-full min-h-[50vh] md:min-h-[50vh] flex flex-col justify-center items-center gap-y-6" id="content-1">
            <div>
                <p class="pt-10 md:pt-0">Company Information</p>
                <input type="text" name="company_name" placeholder="Company Name" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                <input type="text" name="Region" placeholder="Your Region" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                <input type="text" name="District_or_ward" placeholder="District | ward" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                <input type="text" name="Address" placeholder="Enter Address" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                <input type="text" name="registration_number" placeholder="Registration number" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
            </div>
            <button type="button" class="w-full h-10 text-white bg-limeGreen transition-all ease-out duration-500 hover:bg-darkGreen hover:text-white hover:border-2 hover:border-white" onclick="nextStep(1)">Next</button>
        </div>

        <!-- Step 2 -->
        <div class="step-content hidden space-y-3 w-full min-h-[50vh] md:min-h-[50vh] flex-col justify-between" id="content-2">
            <div>
                <p class="pt-10 md:pt-0">Account Information</p>
                <input type="text" name="username" placeholder="Username" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                <input type="text" name="password" placeholder="Create Password" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
                <input type="text" name="password" placeholder="Confirm Password" class="w-full h-10 border-x-0 border-t-0 border-b-2 bg-darkGreen text-xs focus:outline-none">
            </div>
            <div class="flex justify-between w-full">
                <button type="button" class="bg-gray-300 text-black w-1/3 py-2 transition-all ease-out duration-500 hover:bg-darkGreen hover:text-white hover:border-2 hover:border-white" onclick="prevStep(2)">Back</button>
                <a href="{{ url('/approval') }}">
                    <button type="button" class="bg-limeGreen text-white w-fit px-8 md:px-16 h-10 transition-all ease-out duration-500 hover:bg-darkGreen hover:text-white hover:border-2 hover:border-white" onclick="nextStep(2)">Submit</button>
                </a>
            </div>
        </div>
    </form>
</div>

  </section>

  <script>
    let currentStep = 1;

    // Get elements once to optimize performance
    const stepContents = document.querySelectorAll('.step-content');
    const stepTitle = document.getElementById('step-title');
    const images = document.querySelectorAll('.step-image');

    function showStep(step) {
        // Hide all step contents
        stepContents.forEach(el => el.classList.add('hidden'));
        document.getElementById(`content-${step}`).classList.remove('hidden');

        // Update step title dynamically
        stepTitle.textContent = step === 1 ? "Register Company" : "Register Trucks";

        // Toggle images
        images.forEach((img, index) => {
            img.classList.toggle('hidden', index !== step - 1);
        });
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
