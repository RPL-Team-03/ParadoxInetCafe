<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ParadoxNetCafe | @yield('title')</title>
    @vite('resources/css/app.css')

    {{-- Remixicon CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    
</head>
<body>
    @include('partials.navbar')
    <div>
        @yield('container')
    </div>
</body>
</html>