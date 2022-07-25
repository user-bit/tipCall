@extends('layouts.main')
@section('title', 'TipCall - Calendar')
@section('content')
    <x-header/>
    <main>
        <x-header-user/>
        <div class="md:pt-8 pt-4 pb-8 bg-gray">
            <div class="container mx-auto px-4">
                <div class="text-xl sm:text-2xl font-medium sm:mt-2 sm:w-1/2 w-full">Calendar</div>
                <div class="flex justify-between flex-wrap md:mt-6 mt-2">
                    <ul class="flex md:justify-start justify-center min-w-max">
                        <li class="py-3 mr-8"><a href="">Calendar</a></li>
                        <li class="py-3 mr-8 border-b-2 border-b-current"><a class="font-semibold" href="">My
                                availability</a></li>
                    </ul>
                    <div class="md:mt-0 mt-4 flex flex-wrap items-center sm:justify-start justify-center">
                        <button
                            class="mb-2 block text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 mr-2.5 tracking-wider hover:bg-pur-pure hover:text-white transition-all	duration-300">
                            Book time off
                        </button>
                        <a class="mb-2 block text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Calendar
                            import</a>
                    </div>
                </div>
                <div class="sm:text-2xl text-lg	 font-medium sm:mt-10 mt-5">Set your weekly availability hours</div>
                <div class="sm:text-base text-sm">You'll be able to enter offline dates and times in case of holidays in the calendar view
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-2 mt-10">
                    <div class="border border-gray-two rounded-2xl py-3	px-4 lg:h-max">
                        <div class="flex justify-between items-center">
                            <div class="font-semibold">MON</div>
                            <div class="cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#111827" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2.5 text-center">
                            <span class="font-medium mb-2 text-sm block">10:00 - 11:30</span>
                            <span class="font-medium mb-2 text-sm block">12:30 - 13:00</span>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl py-3	px-4 lg:h-max">
                        <div class="flex justify-between items-center">
                            <div class="font-semibold">TUE</div>
                            <div class="cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#111827" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2.5 text-center">
                            <span class="font-medium mb-2 text-sm block">10:00 - 11:30</span>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl py-3	px-4 lg:h-max">
                        <div class="flex justify-between items-center">
                            <div class="font-semibold">WED</div>
                            <div class="cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#111827" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2.5 text-center">
                            <span class="font-medium mb-2 text-sm block">14:00 - 15:00</span>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl py-3	px-4 lg:h-max">
                        <div class="flex justify-between items-center">
                            <div class="font-semibold">THU</div>
                            <div class="cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#111827" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2.5 text-center">
                            <span class="font-medium mb-2 text-sm block">10:00 - 11:30</span>
                            <span class="font-medium mb-2 text-sm block">12:30 - 13:00</span>
                            <span class="font-medium mb-2 text-sm block">14:00 - 15:00</span>
                            <span class="font-medium mb-2 text-sm block">17:00 - 18:00</span>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl py-3	px-4 lg:h-max">
                        <div class="flex justify-between items-center">
                            <div class="font-semibold">FRI</div>
                            <div class="cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#111827" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2.5 text-center">
                            <span class="font-medium mb-2 text-sm block">10:00 - 11:30</span>
                            <span class="font-medium mb-2 text-sm block">12:30 - 13:00</span>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl py-3	px-4 lg:h-max">
                        <div class="flex justify-between items-center">
                            <div class="font-semibold">SAT</div>
                            <div class="cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#111827" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2.5 text-center">
                            <span class="text-gray-three font-medium text-sm block">Not set</span>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl py-3	px-4 lg:h-max">
                        <div class="flex justify-between items-center">
                            <div class="font-semibold">SUN</div>
                            <div class="cursor-pointer">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#111827" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-2.5 text-center">
                            <span class="text-gray-three font-medium text-sm block">Not set</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
