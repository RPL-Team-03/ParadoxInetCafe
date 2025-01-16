<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Paradox Game Center</title>
    @vite('resources/css/app.css') {{-- Pastikan konfigurasi Vite untuk Tailwind sudah benar --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-black text-white h-screen">
    <div class="flex h-full">
        <!-- Left Section: Background Image -->
        <div class="w-2/5 h-full">
            <img 
                alt="Background image of a group of performers on stage with red props" 
                class="w-full h-full object-cover" 
                src="{{ asset('assets\img\Twice login.png') }}" 
            />
        </div>
        <!-- Right Section: Login Form -->
        <div class="w-3/5 h-full flex items-center justify-center bg-black">
            <div class="bg-black bg-opacity-75 p-12 rounded-lg max-w-lg w-3/4">
                <!-- Logo and Title -->
                <div class="flex items-center justify-center mb-5">
                    <img 
                        alt="Paradox Game Center logo" 
                        class="w-20 h-20" 
                        src="{{ asset('assets\img\BASE_8.png') }}" 
                    />
                    <h1 class="text-3xl font-bold ml-4">PARADOX ADMIN</h1>
                </div>
                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Username Field -->
                    <div class="mb-3">
                        <label class="block text-lg font-bold mb-3" for="username">USERNAME</label>
                        <div class="relative">
                            <input 
                                class="w-full px-5 py-3 bg-red-700 text-white text-lg rounded focus:outline-none focus:ring-2 focus:ring-red-500" 
                                id="login" 
                                type="text" 
                                name="login" 
                                value=""
                                autocomplete="new-password" 
                                required 
                                autofocus
                            />
                            <i class="fas fa-user absolute right-4 top-4 text-white text-lg"></i>
                        </div>
                        @error('username')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Password Field -->
                    <div class="mb-8">
                        <label class="block text-lg font-bold mb-3" for="password">PASSWORD</label>
                        <div class="relative">
                            <input 
                                class="w-full px-5 py-3 bg-red-700 text-white text-lg rounded focus:outline-none focus:ring-2 focus:ring-red-500" 
                                id="password" 
                                type="password" 
                                name="password"
                                value="" 
                                autocomplete="new-password"
                                required
                            />
                            <i class="fas fa-key absolute right-4 top-4 text-white text-lg"></i>
                        </div>
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Login Button -->
                    <button 
                        class="w-full py-3 bg-red-700 text-white font-bold text-lg rounded hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500" 
                        type="submit">
                        LOGIN
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
