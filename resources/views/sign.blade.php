@extends('layouts.main')
@section('title', 'TipCall - dashboard')
@section('content')
    <div x-data="{ open: false }">
        <div class="flex min-h-screen">
            <div class="w-1/2 bg-gray absolute inset-0 -z-10"></div>
            <div class="container mx-auto px-4">
                <div class="flex">
                    <div class="md:w-1/2 md:block hidden mt-10 lg:pr-16 md:pr-5">
                        <a href="{{ url('/') }}">
                            <img src="<?php echo e(asset('images/logo.svg')); ?>">
                        </a>
                        <div class="mt-6 text-sm font-medium">Welcome to <span class="text-pink">Tipcall.io</span> - we
                            are
                            happy to see that you've chosen to become an
                            online consultant
                        </div>
                        <img src="<?php echo e(asset('images/sign.svg')); ?>" class="mx-auto mt-24">
                    </div>
                    <div class="md:w-1/2 w-full lg:pl-16 md:pl-5 mt-6">
                        <a href="{{ url('/') }}" class="md:hidden ">
                            <img src="<?php echo e(asset('images/logo.svg')); ?>">
                        </a>
                        <div class="md:text-4xl text-2xl font-medium lg:mt-32 md:mt-24 mt-8">Sign Up to Tipcall</div>
                        <div class="flex md:mt-6 mt-2">
                            <span>Already have an account?</span>
                            <a href="{{ url('login') }}" class="ml-2 font-medium text-pink hover:text-pur-pure transition-all duration-300">Log in</a>
                        </div>
                        <form class="mt-8">
                            <div class="mb-6">
                                <label class="font-medium block text-sm">E-mail</label>
                                <input
                                    class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0	placeholder:text-gray-four text-pur-pure"
                                    type="mail" placeholder="johnsmith@gmail.com">
                            </div>
                            <div class="mb-6">
                                <label class="font-medium block text-sm">Password</label>
                                <input
                                    class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0	text-pur-pure"
                                    type="password" placeholder="">
                            </div>
                            <button class="bg-pur-pure text-white w-full py-4 rounded-full font-medium border border-pur-pure rounded-full hover:bg-transparent hover:text-current transition-all duration-300">Create an
                                account
                            </button>
                        </form>
                        <div class="mt-8 font-medium">Sign up with</div>
                        <div class="grid lg:grid-cols-3 grid-cols-1 gap-2 w-full mt-4">
                            <button
                                class="flex items-center justify-center py-2 border border-pur-pure rounded-full w-full">
                                <img src="<?php echo e(asset('images/icon-google.svg')); ?>">
                                <span class="text-sm font-medium ml-2">Google</span>
                            </button>
                            <button
                                class="flex items-center justify-center py-2 border border-pur-pure rounded-full w-full">
                                <img src="<?php echo e(asset('images/icon-facebook.svg')); ?>">
                                <span class="text-sm font-medium ml-2">Facebook</span>
                            </button>
                            <button
                                class="flex items-center justify-center py-2 border border-pur-pure rounded-full w-full">
                                <img src="<?php echo e(asset('images/icon-linked.svg')); ?>">
                                <span class="text-sm font-medium ml-2">Linkedin</span>
                            </button>
                        </div>
                        <div class="lg:pt-24 md:pt-14 pt-6 mb-12 font-medium text-sm cursor-pointer">By Sign Up user
                            agree to the <a
                                class="text-pink hover:text-pur-pure transition-all duration-300" x-on:click="open = ! open">Terms
                                & Conditions</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed inset-0 bg-gray-six backdrop-blur-xl" x-show="open" x-on:click="open = ! open"></div>
        <div
            class="fixed w-11/12 md:w-3/5 top-2/4 left-1/2 -translate-y-2/4 -translate-x-2/4 bg-white shadow rounded-3xl sm:pt-11 sm:pl-11 sm:pb-11 sm:pr-3 p-5 "
            x-show="open">
            <div
                class="group absolute w-12 h-12 rounded-md bg-gray-five flex justify-center items-center top-3 right-3 cursor-pointer hover:bg-pur-pure transition-all duration-300" x-on:click="open = ! open">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white fill-pur-pure">
                    <path
                        d="M10.6491 9.00013L17.6579 1.99094C18.114 1.53502 18.114 0.797859 17.6579 0.341939C17.202 -0.11398 16.4649 -0.11398 16.0089 0.341939L8.99989 7.35114L1.99106 0.341939C1.53493 -0.11398 0.798002 -0.11398 0.342092 0.341939C-0.114031 0.797859 -0.114031 1.53502 0.342092 1.99094L7.35093 9.00013L0.342092 16.0093C-0.114031 16.4653 -0.114031 17.2024 0.342092 17.6583C0.5693 17.8858 0.868044 18 1.16657 18C1.4651 18 1.76363 17.8858 1.99106 17.6583L8.99989 10.6491L16.0089 17.6583C16.2364 17.8858 16.5349 18 16.8334 18C17.132 18 17.4305 17.8858 17.6579 17.6583C18.114 17.2024 18.114 16.4653 17.6579 16.0093L10.6491 9.00013Z"/>
                </svg>
            </div>
            <div class="text-2xl text-pur-pure font-medium">Terms & Conditions</div>
            <div class="h-96 overflow-auto mt-6 pr-5 scroll-custom text-sm sm:text-base">
                <p class="mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius nisi vel dolor posuere
                    vestibulum.
                    Maecenas fermentum justo est, eu tempor turpis iaculis in. Pellentesque vel diam consequat,
                    porttitor purus
                    id, lacinia ligula. Vestibulum egestas ultricies nulla, vitae vehicula felis maximus eget. Ut
                    aliquet, felis
                    quis lobortis pulvinar, leo elit imperdiet lorem, vel convallis quam ante quis tortor. Pellentesque
                    volutpat
                    urna sollicitudin magna pulvinar, vulputate lobortis ante feugiat. Pellentesque habitant morbi
                    tristique
                    senectus et netus et malesuada fames ac turpis egestas. Sed semper posuere vehicula. Vestibulum
                    vehicula sem
                    lectus, placerat hendrerit leo auctor a. Etiam pretium dapibus dui, vel lobortis lectus ultricies
                    ut.
                    Aliquam erat volutpat. Donec interdum augue vel erat tristique gravida. Nulla dolor odio, tincidunt
                    non
                    velit at, tincidunt dignissim dolor.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius nisi vel dolor posuere
                    vestibulum.
                    Maecenas fermentum justo est, eu tempor turpis iaculis in. Pellentesque vel diam consequat,
                    porttitor purus
                    id, lacinia ligula. Vestibulum egestas ultricies nulla, vitae vehicula felis maximus eget. Ut
                    aliquet, felis
                    quis lobortis pulvinar, leo elit imperdiet lorem, vel convallis quam ante quis tortor. Pellentesque
                    volutpat
                    urna sollicitudin magna pulvinar, vulputate lobortis ante feugiat. Pellentesque habitant morbi
                    tristique
                    senectus et netus et malesuada fames ac turpis egestas. Sed semper posuere vehicula. Vestibulum
                    vehicula sem
                    lectus, placerat hendrerit leo auctor a. Etiam pretium dapibus dui, vel lobortis lectus ultricies
                    ut.
                    Aliquam erat volutpat. Donec interdum augue vel erat tristique gravida. Nulla dolor odio, tincidunt
                    non
                    velit at, tincidunt dignissim dolor.
                </p>
            </div>
            <button x-on:click="open = ! open"
                class="cursor-pointer mt-8 text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                Close
            </button>
        </div>
    </div>
@endsection
