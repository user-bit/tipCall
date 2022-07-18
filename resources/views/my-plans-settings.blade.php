@extends('layouts.main')
@section('title', 'TipCall - My-profile')
@section('content')
    <x-header/>
    <main>
        <x-header-user/>
        <div class="md:pt-8 pt-4 bg-gray pb-10">
            <div class="container mx-auto px-4">
                <div class="flex justify-between flex-wrap">
                    <div class="text-2xl font-medium mt-2 sm:w-1/2 w-full">My plans</div>
                    <div class="sm:w-1/2 w-full flex sm:justify-end justify-start mt-4 sm:mt-0">
                        <button class="flex items-center text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="white" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="ml-2">Create new event</span>
                        </button>
                    </div>
                </div>
                <div class="font-medium text-lg	sm:mt-8 mt-4">Set up your profile</div>
                <div class="relative">
                    <div class="absolute w-px bg-gray-three top-0 bottom-10 sm:left-10 left-4"></div>
                    <div class="flex sm:mt-11 mt-5 sm:ml-6 ml-0">
                        <div class="w-8 h-8 flex justify-center items-center bg-white border border-gray-three rounded-full relative z-10">
                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.91406 6.88087L5.03245 10.3735L12.8284 1.64197" stroke="#B6B6B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="pl-4 w-[calc(100%-3rem)]">
                            <div class="text-lg	font-medium	">Create plans</div>
                            <div class="text-sm font-medium mt-2.5">Create one or more meeting types <a href="#" class="sm:text-base text-sm text-pink sm:ml-3 hover:text-pur-pure transition-all duration-300">Create new event</a></div>
                        </div>
                    </div>
                    <div class="flex sm:mt-11 mt-5 sm:ml-6 ml-0">
                        <div class="w-8 h-8 flex justify-center items-center bg-white border border-gray-three rounded-full relative z-10">
                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.91406 6.88087L5.03245 10.3735L12.8284 1.64197" stroke="#B6B6B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="pl-4 w-[calc(100%-3rem)]">
                            <div class="text-lg	font-medium">Connect calendar</div>
                            <div class="text-sm font-medium mt-2.5">Connect your calendar to see your availability and bookings <a href="#" class="sm:text-base text-sm text-pink sm:ml-3 hover:text-pur-pure transition-all duration-300">Go to Calendar</a></div>
                        </div>
                    </div>
                    <div class="flex sm:mt-11 mt-5 sm:ml-6 ml-0">
                        <div class="w-8 h-8 flex justify-center items-center bg-white border border-gray-three rounded-full relative z-10">
                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.91406 6.88087L5.03245 10.3735L12.8284 1.64197" stroke="#B6B6B6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="pl-4 w-[calc(100%-3rem)]">
                            <div class="text-lg	font-medium">Create promo page</div>
                            <div class="text-sm font-medium mt-2.5">Set up your public profile page that you can share to your social followers or through ads <a href="#" class="sm:text-base text-sm text-pink sm:ml-3 hover:text-pur-pure transition-all duration-300">Go to My page</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
