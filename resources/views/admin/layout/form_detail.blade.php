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
            <h1 class="text-4xl font-bold">Detail Reguler & VVIP</h1>
        </div>

        <!-- Main Content -->
        <div class="mb-8">
            <h1 class="text-2xl font-semibold">Reguler</h1>
        </div>

        <div class="flex-1">
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="text" id="text"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Spesifikasi Reguler" required />
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rincian</label>
                <input type="text" id="text"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
        </div>

        <div class="flex justify-center space-x-4 mt-8 pb-10">
            <button class="bg-red-600 px-10 py-2  text-lg font-bold">CREATE</button>
            <a href="/form_detail"><button class="bg-red-600 px-10 py-2  text-lg font-bold">UPDATE</button></a>
            <button class="bg-red-600 px-10 py-2  text-lg font-bold">DELETE</button>
        </div>

        <div class="mb-8 mt-20">
            <h1 class="text-2xl font-semibold">VVIP</h1>
        </div>

        <div class="flex-1">
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="text" id="text"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Spesifikasi VVIP" required />
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rincian</label>
                <input type="text" id="text"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
        </div>

        <!-- Buttons -->
        <footer class="flex justify-center space-x-4 mt-8 pb-10">
            <button class="bg-red-600 px-10 py-2  text-lg font-bold">CREATE</button>
            <a href="/form_detail"><button class="bg-red-600 px-10 py-2  text-lg font-bold">UPDATE</button></a>
            <button class="bg-red-600 px-10 py-2  text-lg font-bold">DELETE</button>
        </footer>
</div>
