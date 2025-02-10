@extends('layouts.app')
@section('title', 'Logistic and Transport')

@section('content')
    <section class='pb-40'>
        <!-- intro image -->
        <div class="relative w-full h-[40vh] md:h-[65vh]">
            <!-- Centered Text -->
            <h3 class="absolute inset-0 flex items-center justify-center text-2xl md:text-4xl text-white kode-mono-text-font">
                Get ready with our service
            </h3>
            
            <!-- Image -->
            <img src="{{ asset('images/about.jpg') }}" alt="contact image" class="w-full h-[40vh] md:h-full mx-auto object-cover opacity-30">
        </div>
    </section>
@endsection

