@extends('layouts.main')
@section('title', 'Battle Arena (A1)')
@section('container')
<section class="bg-black">
    <div class="flex text-white pt-12 px-48 items-center justify-end">
        <h1 class="text-5xl font-extrabold">DETAIL</h1>
    </div>
    <div class="grid grid-cols-2">
        <div class="text-white mt-20">
            <div class="flex pl-48 text-center text-4xl">
                <h1 class="font-extrabold">BATTLE ARENA (A1)<br>SPECIFICATION</h1>
            </div>
            <div class="space-y-4 justify-center pl-48 mt-14">
                <p class="text-3xl font-semibold">Intel 17-10700K</p>
                <p class="text-3xl font-semibold">RAM 32GB</p>
                <p class="text-3xl font-semibold">VGA RTX 3080 TI</p>
                <p class="text-3xl font-semibold">Monitor MSI 360HZ</p>
                <p class="text-3xl font-semibold">Headset Hyper X Cloud II</p>
                <p class="text-3xl font-semibold">Keyboard MAXFIT81 MK910</p>
                <p class="text-3xl font-semibold">Mouse Logitech G102</p>
                <p class="text-3xl font-semibold">Private Room</p>
            </div>
        </div>
        <div class="flex items-center justify-center pt-14">
            <img src="assets/img/BA_A1_Detail.png" alt="PC1" class="w-3/4 mt-6 mr-40 rounded-md"/>
        </div>
    </div>
    {{-- Twice Image --}}
    <div class="flex justify-end mr-40 z-0">
        <img src="assets/img/IMG_A1.png" alt="Twice Img" class="">
    </div>
</section>
@endsection