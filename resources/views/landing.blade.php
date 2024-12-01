@extends('layouts.main')
@section('title', 'home')
@section('container')
<div class="relative bg-black text-white min-h-screen flex flex-col items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="background-image.jpg" alt="Background" class="object-cover w-full h-full opacity-70"> 
        <!-- Ganti dengan path gambar background Anda -->
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center px-6">
        <h1 class="text-5xl font-bold mb-4">STAY COZY, STAY PRO.</h1>
        <p class="text-lg font-medium mb-8">
            PROVIDE GAMING FACILITY AS COMFORTABLE AS BEING AT HOME
        </p>
        
        <!-- Buttons -->
        <div class="flex justify-center space-x-6">
            <a href="#" class="bg-red-500 hover:bg-red-400 text-white text-lg font-medium py-3 px-8 rounded-full">
                CONTACT US
            </a>
            <a href="#" class="bg-blue-500 hover:bg-blue-400 text-white text-lg font-medium py-3 px-8 rounded-full">
                PRICE LIST
            </a>
        </div>
    </div>
</div>
@endsection
    
