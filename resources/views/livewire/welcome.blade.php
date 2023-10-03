<?php

use function Livewire\Volt\{state, title, layout};

title('Welcome Page');
layout('components.layouts.app');
?>
<div class="bg-neutral-100 w-full">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center   bg-gray-900 selection:bg-red-500 selection:text-white">
        <div
            class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 backdrop-blur-md bg-black  rounded-bl-xl outline  hover:outline-gray-400 transition-all">

            <div class="text-white flex gap-2 justify-between items-center ">
                <span class="flex sm:hidden flex-col justify-center items-center">
                    <h2 class=" select-none ">
                        < Max Bernasconi>
                    </h2>
                </span>
                <span class="flex gap-2 justify-end items-center">
                    <span class="select-none">Contact me</span>
                    <a target="_blank" class="text-xl"
                        href="https://www.linkedin.com/in/maximiliano-bernasconi-7055a9196/"><i
                            class="fa-brands fa-linkedin"></i></a>
                    <a target="_blank" class="text-xl" href="https://github.com/MaxBernasconiCodes"><i
                            class="fa-brands fa-github"></i></a>
                    <a target="_blank" class="text-xl" href="https://www.instagram.com/max.web.artisan/"><i
                            class="fa-brands fa-instagram"></i></a>
                </span>
            </div>
            <div>
                {{-- @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold  text-gray-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold  text-gray-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold  text-gray-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                @endif --}}
            </div>
        </div>
        <div class="w-full min-h-[100vh] grid grid-cols-12 ">
            {{-- Side Menu --}}
            <div
                class="transition-all hidden sm:grid grid-rows-6 sm:grid-cols-4 sm:col-span-3  xl:col-span-2 3xl:col-span-1 bg-black  backdrop-blur-sm divide-y outline hover:outline-gray-300">

                <div class="col-span-4  relative w-full bg-black row-span-1 ">
                    <img src="{{ asset('storage/img/interface/logo169.jpg') }}" alt="Logo">
                    <h1
                        class="bottom-0 col-span-4 mx-auto p-6 text-4xl font-bolder text-gray-200  text-center w-full divide-x">
                        Hi, my name is Max
                    </h1>
                </div>
                <div class="col-span-4 text-white ">
                    <ul class=" text-decoration-none  list-none divide-y">
                        <li class="p-2 transition-all hover:p-4 cursor-pointer select-none hover:bg-gray-800 ">
                            <a href="#link1" class="w-full transition-all  text-right flex justify-between items-center">
                                <i class="fa-solid fa-code"></i>
                                <p>Item_01</p>
                            </a>
                        </li>
                        <li class="p-2 transition-all hover:p-4 cursor-pointer select-none hover:bg-gray-800 ">
                            <a href="#lin2" class="w-full transition-all  text-right flex justify-between items-center">
                                <i class="fa-solid fa-code"></i>
                                <p>Item_02</p>
                            </a>
                        </li>
                        <li class="p-2 transition-all hover:p-4 cursor-pointer select-none hover:bg-gray-800 ">
                            <a href="#link3" class="w-full transition-all  text-right flex justify-between items-center">
                                <i class="fa-solid fa-code"></i>
                                <p>Item_03</p>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>


            {{-- Main Articles --}}
            <div class="max-w-7xl min-w-[50vw] mx-auto p-6 lg:p-8 flex flex-col justify-start gap-8 group ">

                <div
                    class=" col-span-6 divide-x rounded w-4/5 min-h-[12rem] overflow-hidden shadow-[0_0_8px_5px_rgba(255,255,255,.1)] bg-gray-50 backdrop-blur-sm bg-opacity-5 outline outline-blue-900
        transition-all duration-300 hover:scale-[1.025] hover:outline-offset-2 hover:outline-8 active:scale-100 active:shadow-none group-hover:saturate-[.35] hover:!saturate-100 origin-top-left">
                    <img src="https://picsum.photos/800/300?random=1">
                </div>
            </div>
            {{-- blank space for animations or other elements --}}
            <div class=" lg:col-span-3 "></div>

        </div>

    </div>
</div>
