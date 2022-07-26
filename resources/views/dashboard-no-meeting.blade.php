@extends('layouts.main')
@section('title', 'TipCall - dashboard')
@section('content')
    <x-header/>
    <main>
        <x-header-user/>
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
                <div class="text-gray-eight font-semibold text-center mt-9">You don’t have any upcoming Meetings!</div>
                <div class="text-gray-eight font-medium text-sm text-center">Share your link to schedule</div>
                <div class="mt-4 flex justify-center items-center cursor-pointer">
                    <span class="font-medium text-pink pr-2 sm:text-base text-sm">tipcall.io/artis-lutkovskis</span>
                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3.33657 1.6C3.66603 0.667846 4.55503 0 5.6 0H7.2C8.24498 0 9.13397 0.667846 9.46344 1.6H10.4C11.7255 1.6 12.8 2.67452 12.8 4V6.4C12.8 6.84183 12.4418 7.2 12 7.2C11.5582 7.2 11.2 6.84183 11.2 6.4V4C11.2 3.55817 10.8418 3.2 10.4 3.2H9.46344C9.13397 4.13215 8.24498 4.8 7.2 4.8H5.6C4.55503 4.8 3.66603 4.13215 3.33657 3.2H2.4C1.95817 3.2 1.6 3.55817 1.6 4V13.6C1.6 14.0418 1.95817 14.4 2.4 14.4H10.4C10.8418 14.4 11.2 14.0418 11.2 13.6V12.8C11.2 12.3582 11.5582 12 12 12C12.4418 12 12.8 12.3582 12.8 12.8V13.6C12.8 14.9255 11.7255 16 10.4 16H2.4C1.07452 16 0 14.9255 0 13.6V4C0 2.67452 1.07452 1.6 2.4 1.6H3.33657ZM5.6 1.6C5.15817 1.6 4.8 1.95817 4.8 2.4C4.8 2.84183 5.15817 3.2 5.6 3.2H7.2C7.64183 3.2 8 2.84183 8 2.4C8 1.95817 7.64183 1.6 7.2 1.6H5.6ZM8.56569 6.63431C8.87811 6.94673 8.87811 7.45327 8.56569 7.76569L7.53137 8.8H13.6C14.0418 8.8 14.4 9.15817 14.4 9.6C14.4 10.0418 14.0418 10.4 13.6 10.4H7.53137L8.56569 11.4343C8.87811 11.7467 8.87811 12.2533 8.56569 12.5657C8.25327 12.8781 7.74674 12.8781 7.43432 12.5657L5.03432 10.1657C4.7219 9.85327 4.7219 9.34673 5.03432 9.03431L7.43432 6.63431C7.74674 6.3219 8.25327 6.3219 8.56569 6.63431Z"
                              fill="#E5005B"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="pt-8 bg-gray pb-10">
            <div class="container mx-auto px-4">
                <div class="text-lg font-medium mt-2">Tips & Tricks</div>
                <div class="grid grid-cols-1 md:grid-cols-3 border border-gray-two rounded-2xl mt-6 bg-white">
                    <div class="flex py-5 md:pl-5 md:border-r border-b md:border-b-0 border-gray-two justify-center">
                        <div class="mt-0.5 w-5">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 0C4.0374 0 0 4.03745 0 9.00006C0 13.9627 4.0374 18 9 18C13.9626 18 18 13.9627 18 9.00006C18 4.03745 13.9626 0 9 0ZM9 16.3636C4.93964 16.3636 1.63636 13.0604 1.63636 9.00006C1.63636 4.93975 4.93964 1.63636 9 1.63636C13.0604 1.63636 16.3636 4.93975 16.3636 9.00006C16.3636 13.0604 13.0603 16.3636 9 16.3636Z" fill="#1D1D1B"/>
                                <path d="M8.99987 3.81812C8.39845 3.81812 7.90918 4.30772 7.90918 4.90952C7.90918 5.51077 8.39845 5.99993 8.99987 5.99993C9.60129 5.99993 10.0906 5.51077 10.0906 4.90952C10.0906 4.30772 9.60129 3.81812 8.99987 3.81812Z" fill="#1D1D1B"/>
                                <path d="M9.00007 7.63623C8.54821 7.63623 8.18188 8.00256 8.18188 8.45441V13.3635C8.18188 13.8154 8.54821 14.1817 9.00007 14.1817C9.45192 14.1817 9.81825 13.8154 9.81825 13.3635V8.45441C9.81825 8.00256 9.45192 7.63623 9.00007 7.63623Z" fill="#1D1D1B"/>
                            </svg>
                        </div>
                        <div class="pl-2.5 w-52">
                            <div class="text-current text-sm font-medium">How to get first client?</div>
                            <a href="#" class="text-sm text-pink font-medium hover:text-current transition-all duration-300">View more</a>
                        </div>
                    </div>
                    <div class="flex py-5 md:pl-5 md:border-r border-b md:border-b-0 border-gray-two justify-center">
                        <div class="mt-0.5 w-5">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 0C4.0374 0 0 4.03745 0 9.00006C0 13.9627 4.0374 18 9 18C13.9626 18 18 13.9627 18 9.00006C18 4.03745 13.9626 0 9 0ZM9 16.3636C4.93964 16.3636 1.63636 13.0604 1.63636 9.00006C1.63636 4.93975 4.93964 1.63636 9 1.63636C13.0604 1.63636 16.3636 4.93975 16.3636 9.00006C16.3636 13.0604 13.0603 16.3636 9 16.3636Z" fill="#1D1D1B"/>
                                <path d="M8.99987 3.81812C8.39845 3.81812 7.90918 4.30772 7.90918 4.90952C7.90918 5.51077 8.39845 5.99993 8.99987 5.99993C9.60129 5.99993 10.0906 5.51077 10.0906 4.90952C10.0906 4.30772 9.60129 3.81812 8.99987 3.81812Z" fill="#1D1D1B"/>
                                <path d="M9.00007 7.63623C8.54821 7.63623 8.18188 8.00256 8.18188 8.45441V13.3635C8.18188 13.8154 8.54821 14.1817 9.00007 14.1817C9.45192 14.1817 9.81825 13.8154 9.81825 13.3635V8.45441C9.81825 8.00256 9.45192 7.63623 9.00007 7.63623Z" fill="#1D1D1B"/>
                            </svg>
                        </div>
                        <div class="pl-2.5 w-52">
                            <div class="text-current text-sm font-medium">How to incrase earnings?</div>
                            <a href="#" class="text-sm text-pink font-medium hover:text-current transition-all duration-300">View more</a>
                        </div>
                    </div>
                    <div class="flex py-5 md:pl-5 justify-center">
                        <div class="mt-0.5 w-5">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 0C4.0374 0 0 4.03745 0 9.00006C0 13.9627 4.0374 18 9 18C13.9626 18 18 13.9627 18 9.00006C18 4.03745 13.9626 0 9 0ZM9 16.3636C4.93964 16.3636 1.63636 13.0604 1.63636 9.00006C1.63636 4.93975 4.93964 1.63636 9 1.63636C13.0604 1.63636 16.3636 4.93975 16.3636 9.00006C16.3636 13.0604 13.0603 16.3636 9 16.3636Z" fill="#1D1D1B"/>
                                <path d="M8.99987 3.81812C8.39845 3.81812 7.90918 4.30772 7.90918 4.90952C7.90918 5.51077 8.39845 5.99993 8.99987 5.99993C9.60129 5.99993 10.0906 5.51077 10.0906 4.90952C10.0906 4.30772 9.60129 3.81812 8.99987 3.81812Z" fill="#1D1D1B"/>
                                <path d="M9.00007 7.63623C8.54821 7.63623 8.18188 8.00256 8.18188 8.45441V13.3635C8.18188 13.8154 8.54821 14.1817 9.00007 14.1817C9.45192 14.1817 9.81825 13.8154 9.81825 13.3635V8.45441C9.81825 8.00256 9.45192 7.63623 9.00007 7.63623Z" fill="#1D1D1B"/>
                            </svg>
                        </div>
                        <div class="pl-2.5 w-52">
                            <div class="text-current text-sm font-medium">How to incrase earnings?</div>
                            <a href="#" class="text-sm text-pink font-medium hover:text-current transition-all duration-300">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

