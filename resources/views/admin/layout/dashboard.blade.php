<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @php
    $availability = \App\Models\Availability::first() ?? new \App\Models\Availability();
    @endphp

    <title>Paradox Admin | Home</title>
</head>
{{-- Home Admin Page --}}
<div class="flex h-screen bg-black text-white">
    <!-- Sidebar -->
    <aside class="w-70 bg-black flex flex-col py-8">
        <!-- Logo -->
        <div class="pl-5">
            <a href="#" class="flex items-center space-x-4">
                <img src="assets/img/BASE_8.png" alt="ini logo" class="w-1/6">
                <span class="text-xl font-bold text-white">PARADOX ADMIN</span>
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="flex flex-col py-10 space-y-6 px-12">
            <a href="/admin" class="hover:text-red-600 font-bold py-4 px-4 text-2xl rounded-full">HOME</a>
            <!-- Tombol Logout -->
<form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="bg-red-600 px-10 py-2 text-lg font-bold">
        LOGOUT
    </button>
</form>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5>Welcome, {{ Auth::user()->username }}</h5>
                    <p>Your email: {{ Auth::user()->email }}</p>
                    
                    <a href="{{ route('edit.credentials') }}" class="btn btn-primary mt-3">
                        Edit Credentials
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-950 p-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold">UPDATE SPACE</h1>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Card 1 -->
            <div class="bg-gray-900 rounded-lg p-4">
                <img src="https://via.placeholder.com/300x150" alt="Battle Arena A1" class="rounded-lg mb-4">
                <h2 class="text-lg font-bold mb-2">BATTLE ARENA (A1)</h2>
                <form action="{{ route('update.a1') }}" method="POST">
                    @csrf
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="mr-2">💻 Available:</span>
                            <input type="number" name="a1" class="mr-2 w-16 h-8 text-black rounded px-2" placeholder="0" value="{{ old('a1', $availability->a1) }}">
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-1 rounded">
                                Update Availability
                            </button>
                        </div>

                    </div>
                </form>                
                </div>
            

            <!-- Card 2 -->
            <div class="bg-gray-900 rounded-lg p-4">
                <img src="https://via.placeholder.com/300x150" alt="Battle Arena B1" class="rounded-lg mb-4">
                <h2 class="text-lg font-bold mb-2">BATTLE ARENA (B1)</h2>
                <form action="{{ route('update.b1') }}" method="POST">
                    @csrf
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="mr-2">💻 Available:</span>
                            <input type="number" name="b1" class="mr-2 w-16 h-8 text-black rounded px-2" placeholder="0" value="{{ old('b1', $availability->b1) }}">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-1 rounded">
                                Update Availability
                            </button>
                        </div>
                        
                    </div>
                </form>
            </div>

            <!-- Card 3 -->
            <div class="bg-gray-900 rounded-lg p-4">
                <img src="https://via.placeholder.com/300x150" alt="Reguler" class="rounded-lg mb-4">
                <h2 class="text-lg font-bold mb-2">REGULER</h2>
                <form action="{{ route('update.reguler') }}" method="POST">
                    @csrf
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="mr-2">💻 Available:</span>
                            <input type="number" name="reguler" class="mr-2 w-16 h-8 text-black rounded px-2" placeholder="0" value="{{ old('reguler', $availability->reguler) }}">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-1 rounded">
                                Update Availability
                            </button>
                        </div>    
                    </div>
                </form>
            </div>

            <!-- Card 4 -->
            <div class="bg-gray-900 rounded-lg p-4">
                <img src="https://via.placeholder.com/300x150" alt="VVIP" class="rounded-lg mb-4">
                <h2 class="text-lg font-bold mb-2">VVIP</h2>
                <form action="{{ route('update.vvip') }}" method="POST">
                    @csrf
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="mr-2">💻 Available:</span>
                            <input type="number" name="vvip" class="mr-2 w-16 h-8 text-black rounded px-2" placeholder="0" value="{{ old('vvip', $availability->vvip) }}">
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-1 rounded">
                                Update Availability
                            </button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>