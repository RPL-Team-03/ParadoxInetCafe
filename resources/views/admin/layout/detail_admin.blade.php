<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Paradox Admin | Detail</title>
</head>
{{-- Home Admin Page --}}
<div class="flex h-screen bg-black text-white">
    <!-- Sidebar -->
    <aside class="w-70 bg-black flex flex-col py-8">
        <!-- Logo -->
        <div class="pl-5">
            <a href="#" class="flex items-center space-x-4">
                <img src="assets/img/BASE_8.png" alt="ini logo" class="w-1/6">
                <span class="text-xl font-bold text-white">PARADOX GAME CENTER</span>
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="flex flex-col py-10 space-y-6 px-12">
            <a href="/admin" class="hover:text-red-600 font-bold py-4 px-4 text-2xl rounded-full">HOME</a>
            <a href="/admin_detail" class="hover:text-red-600 font-bold py-4 px-4 text-2xl rounded-full">DETAIL</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-950 p-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold">DETAIL</h1>
        </div>

         <!-- Main Content -->
    <div class="flex-1 grid grid-cols-3 gap-6 px-12">
        <!-- Left Image -->
        

        <!-- Specifications -->
        <div class="col-span-2 grid grid-cols-2 gap-6">
            <!-- Reguler Specification -->
            <div class="bg-black border border-gray-700 p-6 text-center rounded-lg">
                <h2 class="font-bold text-xl mb-4">REGULER SPECIFICATION</h2>
                <p>Nvidia GTX 1660ti</p>
                <p>Intel Core i3-10100F</p>
                <p>Monitor Zowie 144hz</p>
                <p>RAM 16</p>
            </div>
            <!-- VVIP Specification -->
            <div class="bg-black border border-gray-700 p-6 text-center rounded-lg">
                <h2 class="font-bold text-xl mb-4">VVIP SPECIFICATION</h2>
                <p>Nvidia RTX 3060ti</p>
                <p>Intel Core i5-10400F</p>
                <p>Monitor Phillips 240hz</p>
                <p>Hyper X Cloud II</p>
            </div>
        </div>
    </div>

    <!-- Battle Arena Specifications -->
    <div class="px-12 mt-8 grid grid-cols-3 gap-6">
        <!-- Battle Arena (A1) -->
        <div class="bg-black border border-gray-700 p-6 rounded-lg">
            <h2 class="font-bold text-xl mb-4">BATTLE ARENA (A1) SPECIFICATION</h2>
            <p>Intel i7-10700K</p>
            <p>RAM 32GB</p>
            <p>VGA RTX 3080 TI</p>
            <p>Monitor MSI 360HZ</p>
            <p>Headset Hyper X Cloud II</p>
            <p>Keyboard MAXFIT81 MK910</p>
            <p>Mouse Logitech G102</p>
            <p>Private Room</p>
        </div>
        <!-- Battle Arena (B1) -->
        <div class="bg-black border border-gray-700 p-6 rounded-lg">
            <h2 class="font-bold text-xl mb-4">BATTLE ARENA (B1) SPECIFICATION</h2>
            <p>Ryzen 7 5800X</p>
            <p>RAM 32GB</p>
            <p>VGA RTX 3080 TI</p>
            <p>Monitor MSI 360HZ</p>
            <p>Headset Hyper X Cloud II</p>
            <p>Keyboard MAXFIT81 MK910</p>
            <p>Mouse Logitech G102</p>
            <p>Private Room</p>
        </div>
        <!-- Right Image -->
        <div class="col-span-1">
        </div>
    </div>

    <!-- Buttons -->
    <footer class="flex justify-center space-x-4 mt-8 pb-10">
        <button class="bg-red-600 px-10 py-2  text-lg font-bold">CREATE</button>
        <button class="bg-red-600 px-10 py-2  text-lg font-bold">UPDATE</button>
        <button class="bg-red-600 px-10 py-2  text-lg font-bold">DELETE</button>
    </footer>
</div>