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
                            are happy to see that you've chosen to become an
                            online consultant
                        </div>
                        <img src="<?php echo e(asset('images/sign.svg')); ?>" class="mx-auto mt-24">
                    </div>
                    <div class="md:w-1/2 w-full lg:pl-16 md:pl-5 mt-6">
                        <a href="{{ url('/') }}" class="md:hidden ">
                            <img src="<?php echo e(asset('images/logo.svg')); ?>">
                        </a>
                        <div class="md:text-4xl text-2xl font-medium lg:mt-32 md:mt-24 mt-8">Log In to Tipcall</div>
                        <div class="flex md:mt-6 mt-2">
                            <span>Don’t have an account?</span>
                            <a href="{{ url('sign') }}" class="ml-2 font-medium text-pink hover:text-pur-pure transition-all duration-300">Sign Up</a>
                        </div>
                        <form class="mt-8" type="post">
                            <div class="mb-6">
                                <div class="flex justify-between items-center">
                                    <label class="font-medium block text-sm">E-mail</label>
                                    <div class="text-xs	font-medium text-pink">Please enter a correct email. </div>
                                </div>
                                <div class="error">
                                    <input
                                        class="mt-2 h-12 px-4 rounded-md border border-pink bg-red-one w-full outline-0 placeholder:text-pink text-pink"
                                        type="mail" value="johnsmith@gmail.com">
                                </div>
                            </div>
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
                            <div class="flex justify-between">
                                <div class="flex">
                                    <div class="flex items-center justify-center w-full mb-12">
                                        <label for="toggleB" class="flex items-center cursor-pointer">
                                            <div class="relative">
                                                <input type="checkbox" id="toggleB" class="sr-only">
                                                <div class="bg-checkbox block bg-gray-two w-11 h-6 rounded-full"></div>
                                                <div
                                                    class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                            </div>
                                            <div class="ml-3 font-medium text-sm">Remember me</div>
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="font-medium text-sm text-pink hover:text-pur-pure transition-all duration-300" x-on:click="open = ! open">Forgot password?</a>
                            </div>
                            <button class="bg-pur-pure text-white w-full py-4 rounded-full font-medium">Log In</button>
                        </form>
                        <div class="mt-8 font-medium">Log In with</div>
                        <div class="grid lg:grid-cols-3 grid-cols-1 gap-2 w-full mt-4 pb-4">
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
            <div class="text-2xl text-pur-pure font-medium">Resset password</div>
            <div class="sm:pr-40">
                <div class="mt-8 text-sm font-medium">Please enter your <span class="text-pink">Tipcall.io</span> email. We will send you a link to reset your password.</div>
                <form class="mt-8" type="post">
                    <div class="mb-6">
                        <label class="font-medium block text-sm">E-mail</label>
                        <input
                            class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0	placeholder:text-gray-four text-pur-pure"
                            type="mail" placeholder="johnsmith@gmail.com">
                    </div>
                    <button type="submit"
                            class="cursor-pointer mt-8 text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                        Reset
                    </button>
                </form>
            </div>
        </div>

        <div class="error-modal active flex items-center px-5 py-4 my-8 mx-auto rounded-2xl bg-red-one border border-pink w-max">
            <div class="mr-4">
                <img class="w-8	" src="images/error.svg"/>
            </div>
            <div class="">
                <div class="font-semibold text-current">Something went wrong!</div>
                <div class="text-sm	font-medium">Please enter a correct email address.</div>
            </div>
            <div class="close-modal group ml-7 w-10	h-10 rounded-md bg-gray-five flex justify-center items-center top-3 right-3 cursor-pointer hover:bg-pur-pure transition-all duration-300">
                <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white fill-pur-pure">
                    <path d="M10.6491 9.00013L17.6579 1.99094C18.114 1.53502 18.114 0.797859 17.6579 0.341939C17.202 -0.11398 16.4649 -0.11398 16.0089 0.341939L8.99989 7.35114L1.99106 0.341939C1.53493 -0.11398 0.798002 -0.11398 0.342092 0.341939C-0.114031 0.797859 -0.114031 1.53502 0.342092 1.99094L7.35093 9.00013L0.342092 16.0093C-0.114031 16.4653 -0.114031 17.2024 0.342092 17.6583C0.5693 17.8858 0.868044 18 1.16657 18C1.4651 18 1.76363 17.8858 1.99106 17.6583L8.99989 10.6491L16.0089 17.6583C16.2364 17.8858 16.5349 18 16.8334 18C17.132 18 17.4305 17.8858 17.6579 17.6583C18.114 17.2024 18.114 16.4653 17.6579 16.0093L10.6491 9.00013Z"></path>
                </svg>
            </div>
        </div>
    </div>
@endsection

