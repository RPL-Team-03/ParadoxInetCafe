@extends('layouts.main')
@section('title', 'Detail PC Reguler')
@section('container')
    <section class="bg-black">
        <div class="flex text-white py-8 px-64 items-center justify-end">
            <h1 class="text-5xl font-extrabold">DETAIL</h1>
        </div>
        <div class="grid grid-cols-2">
            <div class="flex items-center justify-center pt-14">
                <img src="assets/img/REG_Detail.jpeg" alt="PC1" class="w-3/4 mt-6 ml-72 rounded-md"/>
            </div>
            <div class="text-white mt-20">
                <div class="flex justify-center text-center text-4xl">
                    <h1 class="font-extrabold">REGULER SPECIFICATION</h1>
                </div>
                <div class="space-y-5 justify-center text-center mt-12">
                    <p class="text-3xl font-semibold">NVIDIA GTX 1660 Ti</p>
                    <p class="text-3xl font-semibold">Intel Core i3-10100F</p>
                    <p class="text-3xl font-semibold">Monitor Zowie 144Hz</p>
                    <p class="text-3xl font-semibold">RAM 16GB</p>
                </div>
            </div>
        </div>
        {{-- Twice Image --}}
        <div class="flex justify-center text-center mt-5">
            <img src="assets/img/RG_1.png" alt="Regule Image">
        </div>
    </section>
@endsection