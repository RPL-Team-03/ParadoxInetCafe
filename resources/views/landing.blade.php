@extends('layouts.main')
@section('title', 'Home')
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
            <div class="flex justify-center space-x-6" data-aos="fade-up" data-aos-duration="1500">
                <a href="#" class="bg-red-500 hover:bg-red-400 text-white text-lg font-medium py-3 px-8 rounded-sm">
                    CONTACT US
                </a>
                <a href="#"
                    class="bg-blue-500 hover:bg-blue-400 text-white text-lg font-medium py-3 px-10 rounded-sm">
                    PRICE LIST
                </a>
            </div>
            <div class="flex justify-center space-x-6 mt-5" data-aos="fade-up" data-aos-duration="1500">
                <a href="https://paradoxgamestore.my.id/"
                    class="bg-red-500 hover:bg-red-400 text-white text-lg font-medium py-3 px-20 rounded-sm">
                    PARADOX GAME STORE
                </a>
            </div>
        </div>
    </div>

    {{-- Card Container --}}
    <section class="flex bg-black items-center justify-center py-6">
        {{-- Card 1 --}}
        <div class="py-10 px-8" data-aos="fade-right" data-aos-duration="1000">
            <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="" alt="Image A1" />
                </a>
                <div class="p-7">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BATTLE ARENA (A1)
                        </h5>
                    </a>
                    <div class="flex space-x-3">
                        <i class="ri-computer-line text-white text-lg"></i>
                        <p class="mb-3 font-extrabold text-lg text-gray-700 dark:text-gray-400">Available : 5</p>
                    </div>
                    <a href="/BattleArena_A1"
                        class="flex items-center px-3 py-2 text-md font-medium text-center justify-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="py-10 px-8" data-aos="fade-right" data-aos-duration="1500">
            <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="" alt="Image B1" />
                </a>
                <div class="p-7">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BATTLE ARENA (B1)
                        </h5>
                    </a>
                    <div class="flex space-x-3">
                        <i class="ri-computer-line text-white text-lg"></i>
                        <p class="mb-3 font-extrabold text-lg text-gray-700 dark:text-gray-400">Available : 5</p>
                    </div>
                    <a href="/BattleArena_B1"
                        class="flex items-center px-3 py-2 text-md font-medium text-center justify-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="py-10 px-8" data-aos="fade-right" data-aos-duration="2000">
            <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="" alt="Image Reguler" />
                </a>
                <div class="p-6">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">REGULER SEAT</h5>
                    </a>
                    <div class="flex space-x-3">
                        <i class="ri-computer-line text-white text-lg"></i>
                        <p class="mb-3 font-extrabold text-lg text-gray-700 dark:text-gray-400">Available : 5</p>
                    </div>
                    <a href="/reguler"
                        class="flex items-center px-3 py-2 text-md font-medium text-center justify-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        {{-- Card 4 --}}
        <div class="py-10 px-8" data-aos="fade-right" data-aos-duration="2500">
            <div class="max-w-sm bg-white border border-gray-200 rounded-md shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="" alt="Image VVIP" />
                </a>
                <div class="p-7">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">VVIP</h5>
                    </a>
                    <div class="flex space-x-3">
                        <i class="ri-computer-line text-white text-lg"></i>
                        <p class="mb-3 font-extrabold text-lg text-gray-700 dark:text-gray-400">Available : 5</p>
                    </div>
                    <a href="/vvip"
                        class="flex items-center px-3 py-2 text-md font-medium text-center justify-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Detail
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Pricelist --}}
    <section class="bg-black pb-16">
        <div class="flex text-white py-20 px-64 items-center justify-end">
            <h1 class="text-5xl font-extrabold">PRICELIST</h1>
        </div>
        <div class="flex space-x-24 p-10 items-center justify-center">

            {{-- Regular Pricelist --}}
            <a href="#"
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" data-aos="flip-left" data-aos-duration="1000">
                <h5
                    class="mb-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white justify-center text-center">
                    REGULER</h5>
                <div class="grid grid-flow-row-dense grid-cols-2 items-center">
                    <div class="p-5 text-white">
                        <div class="flex flex-col mt-3">
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold leading-normal">1 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal">3 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal">5 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal">10 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal col-span-2">Paket Pagi (06.00 - 12.00)</h3>
                                <h3 class="text-lg font-semibold leading-normal col-span-2">Paket Malam (19.00 - 05.00)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end text-white pr-6">
                        <div class="flex flex-col">
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold leading-normal">5K</h3>
                                <h3 class="text-lg font-semibold leading-normal">14K</h3>
                                <h3 class="text-lg font-semibold leading-normal">23K</h3>
                                <h3 class="text-lg font-semibold leading-normal">45K</h3>
                            </div>
                            <div class="pt-5">
                                <div class="space-y-10">
                                    <h3 class="text-lg font-semibold leading-normal">15K</h3>
                                    <h3 class="text-lg font-semibold leading-normal">15K</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            {{-- VVIP Pricelist --}}
            <a href="#"
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" data-aos="flip-left" data-aos-duration="1500">
                <h5
                    class="mb-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white justify-center text-center">
                    VVIP</h5>
                <div class="grid grid-flow-row-dense grid-cols-2 items-center">
                    <div class="p-5 text-white">
                        <div class="flex flex-col mt-3">
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold leading-normal">1 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal">3 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal">5 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal">10 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal col-span-2">Paket Pagi (06.00 - 12.00)</h3>
                                <h3 class="text-lg font-semibold leading-normal col-span-2">Paket Malam (19.00 - 05.00)
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end text-white pr-6">
                        <div class="flex flex-col">
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold leading-normal">7K</h3>
                                <h3 class="text-lg font-semibold leading-normal">20K</h3>
                                <h3 class="text-lg font-semibold leading-normal">30K</h3>
                                <h3 class="text-lg font-semibold leading-normal">60K</h3>
                            </div>
                            <div class="pt-5">
                                <div class="space-y-10">
                                    <h3 class="text-lg font-semibold leading-normal">25K</h3>
                                    <h3 class="text-lg font-semibold leading-normal">40K</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            {{-- Battle Arena Pricelist --}}
            <a href="#"
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" data-aos="flip-left" data-aos-duration="2000">
                <h5
                    class="mb-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white justify-center text-center">
                    BATTLE ARENA</h5>
                <div class="grid grid-flow-row-dense grid-cols-2 items-center">
                    <div class="p-5 text-white">
                        <div class="flex flex-col mt-3">
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold leading-normal">1 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal">3 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal">5 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal">10 Hour</h3>
                                <h3 class="text-lg font-semibold leading-normal col-span-2">Paket Pagi (06.00 - 12.00)</h3>
                                <h3 class="text-lg font-semibold leading-normal col-span-2">Paket Malam (19.00 - 05.00)
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end text-white pr-6">
                        <div class="flex flex-col">
                            <div class="space-y-2">
                                <h3 class="text-lg font-semibold leading-normal">5K</h3>
                                <h3 class="text-lg font-semibold leading-normal">14K</h3>
                                <h3 class="text-lg font-semibold leading-normal">23K</h3>
                                <h3 class="text-lg font-semibold leading-normal">45K</h3>
                            </div>
                            <div class="pt-5">
                                <div class="space-y-10">
                                    <h3 class="text-lg font-semibold leading-normal">15K</h3>
                                    <h3 class="text-lg font-semibold leading-normal">25K</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="text-white" style="background-image: url('assets/img/FAQ.png'); background-position: center; background-repeat:no-repeat; background-size: cover;">
        <div class="py-10 justify-start ml-40">
            <h1 class="font-extrabold text-6xl">FAQ</h1>
        </div>
        {{-- <div class="bg-gradient-to-r from-blue-500 to-green-500 h-screen flex items-center justify-center">
        <h1 class="text-white text-4xl">Selamat Datang!</h1>
    </div> --}}

        {{-- Button FAQ  1 --}}
        <div class="px-40">
            <div class="flex text-center items-center px-5 py-2.5 text-white bg-black hover:bg-gray-800-800">
                <button class="font-medium py-2 text-lg" type="button">
                    Lorem Ipsum dolor sit amet ? <i class="ri-arrow-down-s-line inline-flex px-3.5"></i>
                </button>
            </div>
        </div>

        {{-- Dropdown Menu --}}
        <div class="px-40 text-lg font-bold">
            <div class="flex px-5 py-2.5 bg-black text-white">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo nulla optio, quod labore, placeat molestias alias ut esse tempora accusamus nihil harum vero eaque minima consectetur consequuntur similique obcaecati illum.
            </div>
            <div class="pb-10"></div>
        </div>


        {{-- Button FAQ 2 --}}
        <div class="px-40">
            <div class="flex text-center items-center px-5 py-2.5 text-white bg-black hover:bg-gray-800-800">
                <button class="font-medium py-2 text-lg" type="button">
                    Lorem Ipsum dolor sit amet ?
                    <i class="ri-arrow-down-s-line inline-flex px-3.5"></i>
                </button>
            </div>
        </div>

        {{-- Dropdown Menu --}}
        <div class="px-40 text-lg font-bold">
            <div class="flex px-5 py-2.5 bg-black text-white">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo nulla optio, quod labore, placeat molestias alias ut esse tempora accusamus nihil harum vero eaque minima consectetur consequuntur similique obcaecati illum.
            </div>
            <div class="pb-10"></div>
        </div>


        {{-- Button FAQ 3 --}}
        <div class="px-40">
            <div class="flex text-center items-center px-5 py-2.5 text-white bg-black hover:bg-gray-800-800">
                <button class="font-medium py-2 text-lg" type="button">
                    Lorem Ipsum dolor sit amet ? <i class="ri-arrow-down-s-line inline-flex px-3.5"></i>
                </button>
            </div>
        </div>

        {{-- Dropdown Menu --}}
        <div class="px-40 text-lg font-bold">
            <div class="flex px-5 py-2.5 bg-black text-white">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo nulla optio, quod labore, placeat molestias alias ut esse tempora accusamus nihil harum vero eaque minima consectetur consequuntur similique obcaecati illum.
            </div>
            <div class="pb-10"></div>
        </div>


        {{-- Button FAQ 4 --}}
        <div class="px-40">
            <div class="flex text-center items-center px-5 py-2.5 text-white bg-black hover:bg-gray-800-800">
                <button class="font-medium py-2 text-lg" type="button">
                    Lorem Ipsum dolor sit amet ?<i class="ri-arrow-down-s-line inline-flex px-3.5"></i>
                </button>
            </div>
        </div>

        {{-- Dropdown Menu --}}
        <div class="px-40 text-lg font-bold">
            <div class="flex px-5 py-2.5 bg-black text-white">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo nulla optio, quod labore, placeat molestias alias ut esse tempora accusamus nihil harum vero eaque minima consectetur consequuntur similique obcaecati illum.
            </div>
            <div class="pb-52"></div>
        </div>

    </section>
@endsection
