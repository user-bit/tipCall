@extends('layouts.main')
@section('title', 'TipCall - Preview')
@section('content')
<div class=" py-3 bg-white border-b border-gray-two">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <a href="#" class="mx-2 text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 ml-2.5 tracking-wider hover:bg-pur-pure hover:text-white transition-all	duration-300">
                Back
            </a>
            <button class="mx-2 text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                Make public
            </button>
        </div>
    </div>
</div>

<div class="pb-12">
    <div class="container mx-auto px-4">
        <div class="sm:mt-12 mt-8">
            <img src="images/logo.svg" class="mx-auto w-20 h-fit">
        </div>
        <div class="mt-5 mx-auto sm:w-6/12 w-full text-center">
            Welcome to my <span class="text-pink">Tipcall.io</span> profile. Please choose a topic and time to book a call with me!
        </div>
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-6 sm:mt-20 mt-14">
            <div>
                <div class="w-72 h-72 rounded-full overflow-hidden mx-auto">
                    <img src="images/avatar.png" class="w-full h-full">
                </div>
                <div class="text-2xl text-center font-medium mt-6">Artis Lutkovskis</div>
                <div class="mt-2.5 text-center font-medium">UI/UX designer</div>
                <div class="sm:mt-11 mt-5">
                    Roger is a UX/UI product designer with several years of experience. He enjoys collaborating with other designers, developers, salespeople, copywriters, photographers and more.
                </div>
                <a href="#" class="text-pink font-medium mt-3 hover:text-pur-pure transition-all duration-300">Read more</a>
            </div>
            <div>
                <div class="border border-gray-two rounded-2xl bg-white sm:p-6 p-3 flex flex-wrap justify-between items-start mb-4">
                    <div class="w-8/12">
                        <div class="sm:text-2xl text-base font-medium">Fast UI/UX Meeting</div>
                        <div class="mt-5 sm:text-base text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam...</div>
                    </div>
                    <div class="w-4/12 text-right">
                        <div class="text-lg	font-medium sm:text-base text-sm">15 min</div>
                        <div class="sm:text-2xl text-base font-medium">10.00 Eur</div>
                        <a href="#" class="mt-6 text-pink font-medium inline-flex sm:text-base text-sm hover:text-pur-pure transition-all duration-300">View more</a>
                    </div>
                    <div class="w-full sm:text-left text-center">
                        <a href="#" class="mt-4 sm:text-base text-sm inline-flex text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Book meeting</a>
                    </div>
                </div>
                <div class="border border-gray-two rounded-2xl bg-white sm:p-6 p-3 flex flex-wrap justify-between items-start mb-4">
                    <div class="w-8/12">
                        <div class="sm:text-2xl text-base font-medium">30 min UI/UX Meeting</div>
                        <div class="mt-5 sm:text-base text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam...</div>
                    </div>
                    <div class="w-4/12 text-right">
                        <div class="text-lg	font-medium sm:text-base text-sm">30 min</div>
                        <div class="sm:text-2xl text-base font-medium">20.00 Eur</div>
                        <a href="#" class="mt-6 text-pink font-medium inline-flex sm:text-base text-sm hover:text-pur-pure transition-all duration-300">View more</a>
                    </div>
                    <div class="w-full sm:text-left text-center">
                        <a href="#" class="mt-4 sm:text-base text-sm inline-flex text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Book meeting</a>
                    </div>
                </div>
                <div class="border border-gray-two rounded-2xl bg-white sm:p-6 p-3 flex flex-wrap justify-between items-start mb-4">
                    <div class="w-8/12">
                        <div class="sm:text-2xl text-base font-medium">Hour UI/UX Meeting</div>
                        <div class="mt-5 sm:text-base text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam...</div>
                    </div>
                    <div class="w-4/12 text-right">
                        <div class="text-lg	font-medium sm:text-base text-sm">1 hour</div>
                        <div class="sm:text-2xl text-base font-medium">40.00 Eur</div>
                        <a href="#" class="mt-6 text-pink font-medium inline-flex sm:text-base text-sm hover:text-pur-pure transition-all duration-300">View more</a>
                    </div>
                    <div class="w-full sm:text-left text-center">
                        <a href="#" class="mt-4 sm:text-base text-sm inline-flex text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Book meeting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
