@extends('layouts.main')
@section('title', 'TipCall - Preview')
@section('content')

    <div class="bg-pur-pure sm:pb-28 pb-56">
        <div class="container mx-auto px-4">
            <div class="text-sm	text-white flex items-center justify-end pt-11">
                <span class="mr-2">powered by</span>
                <img src="<?php echo e(asset('images/logo-white.svg')); ?>">
            </div>
        </div>
    </div>
    <div class="bg-gray">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap sm:flex-nowrap relative w-full sm:-top-24 -top-52">
                <div class="sm:hidden block w-full">
                    <div class="text-2xl font-medium text-white mt-4 text-center sm:text-left">Artis Lutkovskis</div>
                    <div class="text-sm	font-medium text-white text-center sm:text-left">I’m into startups, product building and investor
                        relationship management
                    </div>
                </div>

                <img class="sm:mt-0 mt-5 mx-auto w-44 h-44 rounded-full" src="<?php echo e(asset('images/avatar.png')); ?>">
                <div class="sm:pl-6 pl-0">
                    <div class="sm:block hidden">
                        <div class="text-2xl font-medium text-white mt-4">Artis Lutkovskis</div>
                        <div class="text-sm	font-medium text-white">I’m into startups, product building and investor
                            relationship management
                        </div>
                    </div>
                    <div class="text-sm	font-medium sm:mt-20 mt-4 text-gray-three text-center sm:text-left">About me</div>
                    <div class="text-current text-sm font-medium mt-4 text-center sm:text-left"
                         x-data="{length: 210}"
                         x-init="originalContent = $el.firstElementChild.textContent.trim()">
                         <span x-text="originalContent.slice(0, length)">Why would you want to book a call with me:
                        I’m experienced in building products from ground up across different IT areas. Due to my
                        training and experience in building and presenting software start-ups
                        Why would you want to book a call with me:
                        I’m experienced in building products from ground up across different IT areas. Due to my
                        training and experience in building and presenting software start-ups
                         </span>
                        <button class="sm:inline block mx-auto mt-2 sm:mt-0"  x-cloak @click="length = undefined" x-show="length">
                            <span class="text-pink font-medium">Read more</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid sm:grid-cols-3 grid-cols-1 -mt-28 sm:mt-0 gap-4">
                <div class="border border-gray-two rounded-2xl bg-white sm:p-6 p-3 flex flex-wrap justify-between items-start mb-2">
                    <div class="text-lg	font-semibold">Fast UI/UX Meeting</div>
                    <div class="mt-5 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam...</div>
                    <a href="#" class="block mt-1.5 text-pink font-medium inline-flex sm:text-base text-sm hover:text-pur-pure transition-all duration-300">View more</a>
                    <div class="flex justify-between items-center w-full mt-7">
                        <div class="sm:text-2xl text-base font-medium">10.00 Eur</div>
                        <div class="text-lg	font-medium sm:text-base text-sm">15 min</div>
                    </div>

                    <a href="#" class="mt-6 sm:text-base text-sm inline-flex text-white bg-pur-pure border border-pur-pure rounded-full font-medium w-full justify-center py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Book meeting</a>
                </div>

                <div class="border border-gray-two rounded-2xl bg-white sm:p-6 p-3 flex flex-wrap justify-between items-start mb-2">
                    <div class="text-lg	font-semibold">30 min UI/UX Meeting</div>
                    <div class="mt-5 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam...</div>
                    <a href="#" class="block mt-1.5 text-pink font-medium inline-flex sm:text-base text-sm hover:text-pur-pure transition-all duration-300">View more</a>
                    <div class="flex justify-between items-center w-full mt-7">
                        <div class="sm:text-2xl text-base font-medium">20.00 Eur</div>
                        <div class="text-lg	font-medium sm:text-base text-sm">15 min</div>
                    </div>

                    <a href="#" class="mt-6 sm:text-base text-sm inline-flex text-white bg-pur-pure border border-pur-pure rounded-full font-medium w-full justify-center py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Book meeting</a>
                </div>

                <div class="border border-gray-two rounded-2xl bg-white sm:p-6 p-3 flex flex-wrap justify-between items-start mb-2">
                    <div class="text-lg	font-semibold">Hour UI/UX Meeting</div>
                    <div class="mt-5 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam...</div>
                    <a href="#" class="block mt-1.5 text-pink font-medium inline-flex sm:text-base text-sm hover:text-pur-pure transition-all duration-300">View more</a>
                    <div class="flex justify-between items-center w-full mt-7">
                        <div class="sm:text-2xl text-base font-medium">40.00 Eur</div>
                        <div class="text-lg	font-medium sm:text-base text-sm">15 min</div>
                    </div>

                    <a href="#" class="mt-6 sm:text-base text-sm inline-flex text-white bg-pur-pure border border-pur-pure rounded-full font-medium w-full justify-center py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Book meeting</a>
                </div>
            </div>
        </div>
    </div>

@endsection
