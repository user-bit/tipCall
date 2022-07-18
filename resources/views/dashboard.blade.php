@extends('layouts.main')
@section('title', 'TipCall - dashboard')
@section('content')
    <x-header/>
    <main>
        <x-header-user/>
        <div x-data="{ open: true }">
            <div class="fixed rounded-3xl p-6 bg-pur-pure w-80 sm:right-4 right-0 top-20" x-show="open"
                 @click.outside="open = true" x-transition.duration.500ms>
                <div class="text-gray text-lg font-medium">New meeting today at 15:00</div>
                <div class="mt-4 text-gray text-sm font-medium">Lorem ipsum dolor sit consectetur adipiscing elit. Nulla varius nisi vel.</div>
                <div class="flex justify-between mt-4">
                    <a href="" class="border border-gray bg-gray text-pur-pure font-medium py-2.5 px-6 rounded-full hover:bg-transparent hover:text-gray transition-all duration-300">View calendar</a>
                    <button class="border border-gray-two font-medium text-gray py-2.5 px-6 rounded-full hover:bg-gray hover:text-current transition-all duration-300" @click="open = false">Close</button>
                </div>
            </div>
        </div>
        <div class="md:pt-8 pt-4 bg-gray">
            <div class="container mx-auto px-4">
                <div class="text-2xl font-medium mt-2">Dashboard</div>
                <div class="flex flex-wrap md:mt-7 mt-3  bg-white rounded-2xl overflow-hidden border border-gray-two">
                    <div class="lg:w-1/3 w-full flex sm:p-5 p-3 border-r border-gray-two">
                        <div class="w-1/2">
                            <div class="text-lg font-medium mt-1">Calls made</div>
                            <div class="sm:text-2xl text-xl font-medium mt-2">14</div>
                        </div>
                        <div class="w-1/2">
                            <img class="mx-auto" src="<?php echo e(asset('images/dashboard-1.svg')); ?>">
                        </div>
                    </div>
                    <div class="lg:w-1/3 w-full flex sm:p-5 p-3 border-r border-gray-two">
                        <div class="w-1/2">
                            <div class="text-lg font-medium mt-1">Time spent</div>
                            <div class="sm:text-2xl text-xl font-medium mt-2">523h 40min</div>
                        </div>
                        <div class="w-1/2">
                            <img class="mx-auto" src="<?php echo e(asset('images/dashboard-2.svg')); ?>">
                        </div>
                    </div>
                    <div class="lg:w-1/3 w-full flex sm:p-5 p-3 border-r border-gray-two">
                        <div class="w-1/2">
                            <div class="text-lg font-medium mt-1">Earnings</div>
                            <div class="sm:text-2xl text-xl font-medium mt-2">850 €</div>
                            <div class="font-medium text-sm text-pink mt-2">Withdraw</div>
                        </div>
                        <div class="w-1/2">
                            <img class="mx-auto" src="<?php echo e(asset('images/dashboard-3.svg')); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-8 bg-gray pb-10">
            <div class="container mx-auto px-4">
                <div class="text-lg font-medium mt-2">Next meetings</div>
                <div class="grid lg:grid-cols-3 grid-cols-1 lg:gap-8 gap-4 pt-6">
                    <div class="border border-gray-two rounded-2xl py-4 px-5">
                        <div class="text-lg font-medium">Jānis Bērziņš</div>
                        <div>email@email.com</div>
                        <div class="flex mt-4 justify-between">
                            <div class="font-medium text-pink">Today</div>
                            <div class="font-medium">16:43</div>
                            <div class="font-medium">1h 30 min</div>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl py-4 px-5">
                        <div class="text-lg font-medium">Jānis Bērziņš</div>
                        <div>email@email.com</div>
                        <div class="flex mt-4 justify-between">
                            <div class="font-medium">Tomorrow</div>
                            <div class="font-medium">16:43</div>
                            <div class="font-medium">1h 30 min</div>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl py-4 px-5">
                        <div class="flex justify-between">
                            <div class="text-lg font-medium">Jānis Bērziņš</div>
                            <div class="bg-pink text-xs	text-white rounded-full py-1 px-2 flex items-center font-semibold">
                                New
                            </div>
                        </div>
                        <div>email@email.com</div>
                        <div class="flex mt-4 justify-between">
                            <div class="font-medium">10.05.2022</div>
                            <div class="font-medium">16:43</div>
                            <div class="font-medium">1h 30 min</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

