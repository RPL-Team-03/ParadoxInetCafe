@extends('layouts.main')
@section('title', 'Detail PC VVIP')
@section('container')
<section class="bg-black">
    <div class="flex text-white py-5 px-64 items-center justify-end">
        <h1 class="text-5xl font-extrabold">DETAIL</h1>
    </div>
    <div class="grid grid-cols-2">
        <div class="flex items-center left pt-1">
            <img src="\assets\img\VVIPdetail.png" alt="PC1" class="w-4/5 mt-6 ml-72 rounded-md"/>
        </div>
        <div class="flex justify-center pl-20">
            <div class="text-white py-20 px-10">
                <div class="flex justify-center text-center text-4xl">
                    <h1 class="font-extrabold">VVIP SPECIFICATION</h1>
                </div>
                <div class="space-y-5 justify-center text-center mt-12">
                    <p class="text-3xl font-semibold">NVIDIA RTX 3060 Ti</p>
                    <p class="text-3xl font-semibold">Intel Core i5-10400F</p>
                    <p class="text-3xl font-semibold">Monitor Phillips 240Hz</p>
                    <p class="text-3xl font-semibold">Hyper X Cloud II</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Twice Image --}}
    <div class="flex justify-center text-center mt-5">
        <img src="assets/img/VVIP_1.png" alt="Regule Image">
    </div>
</section>
@endsection