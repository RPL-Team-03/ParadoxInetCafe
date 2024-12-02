@extends('layouts.main')
@section('title', 'home')
@section('container')
<div class="relative bg-black text-white min-h-screen flex flex-col items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="assets/img/background-image.png" alt="Background" class="object-cover w-full h-full opacity-70"> 
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
            <a href="#" class="bg-red-500 hover:bg-red-400 text-white text-lg font-medium py-3 px-8 rounded-sm">
                CONTACT US
            </a>
            <a href="#" class="bg-blue-500 hover:bg-blue-400 text-white text-lg font-medium py-3 px-8 rounded-sm">
                PRICE LIST
            </a>
        </div>
    </div>
</div>

{{-- Card Container --}}
<div class="flex bg-black items-center justify-center">
    {{-- Card 1 --}}
    <div class="py-10 mx-10">
        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="assets/img/BA_1.png" alt="BA_1" />
            </a>
            <div class="p-7">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BATTLE ARENA (A1)</h5>
                </a>
                <div class="flex space-x-3">
                    <i class="ri-computer-line text-white text-lg"></i>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Available : 5</p>
                </div>
                <a href="#" class="flex items-center px-3 py-2 text-md font-medium text-center justify-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Detail
                </a>
            </div>
        </div>
    </div>

    {{-- Card 2 --}}
    <div class="py-10 mx-10">
        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="assets/img/BA_2.png" alt="BA_2"/>
            </a>
            <div class="p-7">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BATTLE ARENA (B1)</h5>
                </a>
                <div class="flex space-x-3">
                    <i class="ri-computer-line text-white text-lg"></i>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Available : 5</p>
                </div>
                <a href="#" class="flex items-center px-3 py-2 text-md font-medium text-center justify-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Detail
                </a>
            </div>
        </div>
    </div>

    {{-- Card 3 --}}
    <div class="py-10 mx-10">
        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="assets/img/REG.png" alt="Reguler" />
            </a>
            <div class="p-7">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">REGULER SEAT</h5>
                </a>
                <div class="flex space-x-3">
                    <i class="ri-computer-line text-white text-lg"></i>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Available : 5</p>
                </div>
                <a href="#" class="flex items-center px-3 py-2 text-md font-medium text-center justify-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Detail
                </a>
            </div>
        </div>
    </div>

    {{-- Card 4 --}}
    <div class="py-10 mx-10">
        <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="assets/img/VVIP.png" alt="VVIP" />
            </a>
            <div class="p-7">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">VVIP</h5>
                </a>
                <div class="flex space-x-3">
                    <i class="ri-computer-line text-white text-lg"></i>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Available : 5</p>
                </div>
                <a href="#" class="flex items-center px-3 py-2 text-md font-medium text-center justify-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Detail
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
    
