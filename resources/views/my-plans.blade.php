@extends('layouts.main')
@section('title', 'TipCall - my-plans')
@section('content')
    <x-header/>
    <main>
        <x-header-user/>
        <div x-data="{ open: false }">
            <div class="md:pt-8 pt-4 bg-gray">
                <div class="container mx-auto px-4">

                    <div class="flex justify-between flex-wrap">
                        <div class="text-2xl font-medium mt-2 sm:w-1/2 w-full">My plans</div>
                        <div class="sm:w-1/2 w-full flex sm:justify-end justify-start mt-4 sm:mt-0">
                            <button x-on:click="open = ! open"
                                class="flex items-center text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="ml-2">Create new event</span>
                            </button>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 pt-6">
                        <div class="border border-gray-two rounded-2xl py-4 px-5">
                            <div class="flex justify-between items-center">
                                <label for="toggleA" class="flex items-center cursor-pointer">
                                    <div class="relative">
                                        <input type="checkbox" id="toggleA" class="sr-only checked-white" checked>
                                        <div class="block bg-pink w-11 h-6 rounded-full"></div>
                                        <div
                                            class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                    </div>
                                    <div class="ml-3 font-medium text-pink">Publish</div>
                                </label>
                                <a href="{{ url('my-plans-settings') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7502 6.99876C15.6215 6.91792 14.6124 6.31342 14.2113 6.12995L13.7143 4.9302C13.862 4.53348 14.1441 3.42057 14.1882 3.22763C14.2291 3.04876 14.1752 2.86144 14.0454 2.73169L13.2683 1.9546C13.1386 1.82485 12.9512 1.77091 12.7723 1.81178C12.626 1.84525 11.484 2.13147 11.0698 2.28566L9.87 1.78869C9.69444 1.40494 9.10794 0.41972 9.00119 0.249751C8.90366 0.0943439 8.73303 0 8.54953 0H7.45047C7.26697 0 7.09634 0.0943439 6.99878 0.249751C6.91794 0.378532 6.31344 1.38763 6.12997 1.78869L4.93022 2.28566C4.5335 2.138 3.42059 1.85591 3.22766 1.81178C3.04878 1.77094 2.86147 1.82488 2.73172 1.9546L1.95459 2.73172C1.82484 2.86147 1.77091 3.04879 1.81178 3.22766C1.84525 3.37398 2.13147 4.51598 2.28566 4.93023L1.78869 6.12998C1.40494 6.30554 0.419719 6.89205 0.24975 6.9988C0.0943438 7.09633 0 7.26695 0 7.45045V8.54952C0 8.73302 0.0943438 8.90364 0.24975 9.00121C0.378531 9.08205 1.38762 9.68655 1.78869 9.87002L2.28566 11.0698C2.138 11.4665 1.85591 12.5794 1.81178 12.7723C1.77094 12.9512 1.82484 13.1385 1.95459 13.2683L2.73172 14.0454C2.86147 14.1752 3.04884 14.2291 3.22766 14.1882C3.37397 14.1547 4.51597 13.8685 4.93022 13.7143L6.12997 14.2113C6.30553 14.5951 6.89203 15.5803 6.99878 15.7502C7.09634 15.9057 7.26697 16 7.45047 16H8.54953C8.73303 16 8.90366 15.9057 9.00122 15.7502C9.08206 15.6215 9.68656 14.6124 9.87003 14.2113L11.0698 13.7143C11.4665 13.862 12.5794 14.1441 12.7723 14.1882C12.9513 14.2292 13.1386 14.1752 13.2683 14.0454L14.0454 13.2683C14.1752 13.1385 14.2291 12.9512 14.1882 12.7723C14.1547 12.626 13.8685 11.484 13.7143 11.0698L14.2113 9.87002C14.5951 9.69446 15.5803 9.10796 15.7502 9.00121C15.9057 8.90364 16 8.73302 16 8.54952V7.45045C16 7.26695 15.9057 7.09633 15.7502 6.99876ZM8 11.4876C6.07691 11.4876 4.51234 9.92308 4.51234 7.99998C4.51234 6.07689 6.07691 4.51235 8 4.51235C9.92309 4.51235 11.4877 6.07692 11.4877 8.00002C11.4877 9.92311 9.92309 11.4876 8 11.4876Z"
                                            fill="#1D1D1B"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="text-2xl font-medium mt-8">Fast UI/UX Meeting</div>
                            <div class="font-medium">15 min</div>
                            <a href="#" class="mt-10 text-pink font-medium block">Preview booking page</a>
                            <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-two">
                                <div class="flex items-center cursor-pointer">
                                    <span class="text-pink font-medium mr-2 block">Copy link</span>
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.33657 1.6C3.66603 0.667846 4.55503 0 5.6 0H7.2C8.24498 0 9.13397 0.667846 9.46344 1.6H10.4C11.7255 1.6 12.8 2.67452 12.8 4V6.4C12.8 6.84183 12.4418 7.2 12 7.2C11.5582 7.2 11.2 6.84183 11.2 6.4V4C11.2 3.55817 10.8418 3.2 10.4 3.2H9.46344C9.13397 4.13215 8.24498 4.8 7.2 4.8H5.6C4.55503 4.8 3.66603 4.13215 3.33657 3.2H2.4C1.95817 3.2 1.6 3.55817 1.6 4V13.6C1.6 14.0418 1.95817 14.4 2.4 14.4H10.4C10.8418 14.4 11.2 14.0418 11.2 13.6V12.8C11.2 12.3582 11.5582 12 12 12C12.4418 12 12.8 12.3582 12.8 12.8V13.6C12.8 14.9255 11.7255 16 10.4 16H2.4C1.07452 16 0 14.9255 0 13.6V4C0 2.67452 1.07452 1.6 2.4 1.6H3.33657ZM5.6 1.6C5.15817 1.6 4.8 1.95817 4.8 2.4C4.8 2.84183 5.15817 3.2 5.6 3.2H7.2C7.64183 3.2 8 2.84183 8 2.4C8 1.95817 7.64183 1.6 7.2 1.6H5.6ZM8.56569 6.63432C8.87811 6.94673 8.87811 7.45327 8.56569 7.76569L7.53137 8.8H13.6C14.0418 8.8 14.4 9.15817 14.4 9.6C14.4 10.0418 14.0418 10.4 13.6 10.4H7.53137L8.56569 11.4343C8.87811 11.7467 8.87811 12.2533 8.56569 12.5657C8.25327 12.8781 7.74674 12.8781 7.43432 12.5657L5.03432 10.1657C4.7219 9.85327 4.7219 9.34673 5.03432 9.03432L7.43432 6.63432C7.74674 6.3219 8.25327 6.3219 8.56569 6.63432Z"
                                              fill="#E5005B"/>
                                    </svg>
                                </div>
                                <a href="#"
                                   class="text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                                    Share
                                </a>
                            </div>
                        </div>

                        <div class="border border-gray-two rounded-2xl py-4 px-5">
                            <div class="flex justify-between items-center">
                                <label for="toggleB" class="flex items-center cursor-pointer">
                                    <div class="relative">
                                        <input type="checkbox" id="toggleB" class="sr-only checked-white" checked>
                                        <div class="block bg-pink w-11 h-6 rounded-full"></div>
                                        <div
                                            class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                    </div>
                                    <div class="ml-3 font-medium text-pink">Publish</div>
                                </label>
                                <a href="{{ url('my-plans-settings') }}">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7502 6.99876C15.6215 6.91792 14.6124 6.31342 14.2113 6.12995L13.7143 4.9302C13.862 4.53348 14.1441 3.42057 14.1882 3.22763C14.2291 3.04876 14.1752 2.86144 14.0454 2.73169L13.2683 1.9546C13.1386 1.82485 12.9512 1.77091 12.7723 1.81178C12.626 1.84525 11.484 2.13147 11.0698 2.28566L9.87 1.78869C9.69444 1.40494 9.10794 0.41972 9.00119 0.249751C8.90366 0.0943439 8.73303 0 8.54953 0H7.45047C7.26697 0 7.09634 0.0943439 6.99878 0.249751C6.91794 0.378532 6.31344 1.38763 6.12997 1.78869L4.93022 2.28566C4.5335 2.138 3.42059 1.85591 3.22766 1.81178C3.04878 1.77094 2.86147 1.82488 2.73172 1.9546L1.95459 2.73172C1.82484 2.86147 1.77091 3.04879 1.81178 3.22766C1.84525 3.37398 2.13147 4.51598 2.28566 4.93023L1.78869 6.12998C1.40494 6.30554 0.419719 6.89205 0.24975 6.9988C0.0943438 7.09633 0 7.26695 0 7.45045V8.54952C0 8.73302 0.0943438 8.90364 0.24975 9.00121C0.378531 9.08205 1.38762 9.68655 1.78869 9.87002L2.28566 11.0698C2.138 11.4665 1.85591 12.5794 1.81178 12.7723C1.77094 12.9512 1.82484 13.1385 1.95459 13.2683L2.73172 14.0454C2.86147 14.1752 3.04884 14.2291 3.22766 14.1882C3.37397 14.1547 4.51597 13.8685 4.93022 13.7143L6.12997 14.2113C6.30553 14.5951 6.89203 15.5803 6.99878 15.7502C7.09634 15.9057 7.26697 16 7.45047 16H8.54953C8.73303 16 8.90366 15.9057 9.00122 15.7502C9.08206 15.6215 9.68656 14.6124 9.87003 14.2113L11.0698 13.7143C11.4665 13.862 12.5794 14.1441 12.7723 14.1882C12.9513 14.2292 13.1386 14.1752 13.2683 14.0454L14.0454 13.2683C14.1752 13.1385 14.2291 12.9512 14.1882 12.7723C14.1547 12.626 13.8685 11.484 13.7143 11.0698L14.2113 9.87002C14.5951 9.69446 15.5803 9.10796 15.7502 9.00121C15.9057 8.90364 16 8.73302 16 8.54952V7.45045C16 7.26695 15.9057 7.09633 15.7502 6.99876ZM8 11.4876C6.07691 11.4876 4.51234 9.92308 4.51234 7.99998C4.51234 6.07689 6.07691 4.51235 8 4.51235C9.92309 4.51235 11.4877 6.07692 11.4877 8.00002C11.4877 9.92311 9.92309 11.4876 8 11.4876Z"
                                            fill="#1D1D1B"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="text-2xl font-medium mt-8">30 min UI/UX Meeting</div>
                            <div class="font-medium">30 min</div>
                            <a href="#" class="mt-10 text-pink font-medium block">Preview booking page</a>
                            <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-two">
                                <div class="flex items-center cursor-pointer">
                                    <span class="text-pink font-medium mr-2 block">Copy link</span>
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.33657 1.6C3.66603 0.667846 4.55503 0 5.6 0H7.2C8.24498 0 9.13397 0.667846 9.46344 1.6H10.4C11.7255 1.6 12.8 2.67452 12.8 4V6.4C12.8 6.84183 12.4418 7.2 12 7.2C11.5582 7.2 11.2 6.84183 11.2 6.4V4C11.2 3.55817 10.8418 3.2 10.4 3.2H9.46344C9.13397 4.13215 8.24498 4.8 7.2 4.8H5.6C4.55503 4.8 3.66603 4.13215 3.33657 3.2H2.4C1.95817 3.2 1.6 3.55817 1.6 4V13.6C1.6 14.0418 1.95817 14.4 2.4 14.4H10.4C10.8418 14.4 11.2 14.0418 11.2 13.6V12.8C11.2 12.3582 11.5582 12 12 12C12.4418 12 12.8 12.3582 12.8 12.8V13.6C12.8 14.9255 11.7255 16 10.4 16H2.4C1.07452 16 0 14.9255 0 13.6V4C0 2.67452 1.07452 1.6 2.4 1.6H3.33657ZM5.6 1.6C5.15817 1.6 4.8 1.95817 4.8 2.4C4.8 2.84183 5.15817 3.2 5.6 3.2H7.2C7.64183 3.2 8 2.84183 8 2.4C8 1.95817 7.64183 1.6 7.2 1.6H5.6ZM8.56569 6.63432C8.87811 6.94673 8.87811 7.45327 8.56569 7.76569L7.53137 8.8H13.6C14.0418 8.8 14.4 9.15817 14.4 9.6C14.4 10.0418 14.0418 10.4 13.6 10.4H7.53137L8.56569 11.4343C8.87811 11.7467 8.87811 12.2533 8.56569 12.5657C8.25327 12.8781 7.74674 12.8781 7.43432 12.5657L5.03432 10.1657C4.7219 9.85327 4.7219 9.34673 5.03432 9.03432L7.43432 6.63432C7.74674 6.3219 8.25327 6.3219 8.56569 6.63432Z"
                                              fill="#E5005B"/>
                                    </svg>
                                </div>
                                <a href="#"
                                   class="text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                                    Share
                                </a>
                            </div>
                        </div>

                        <div class="border border-gray-two rounded-2xl py-4 px-5">
                            <div class="flex justify-between items-center">
                                <label for="toggleC" class="flex items-center cursor-pointer">
                                    <div class="relative">
                                        <input type="checkbox" id="toggleC" class="sr-only checked-white">
                                        <div class="block bg-gray-two w-11 h-6 rounded-full"></div>
                                        <div
                                            class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                    </div>
                                    <div class="ml-3 font-medium text-current">Publish</div>
                                </label>
                                <a>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7502 6.99876C15.6215 6.91792 14.6124 6.31342 14.2113 6.12995L13.7143 4.9302C13.862 4.53348 14.1441 3.42057 14.1882 3.22763C14.2291 3.04876 14.1752 2.86144 14.0454 2.73169L13.2683 1.9546C13.1386 1.82485 12.9512 1.77091 12.7723 1.81178C12.626 1.84525 11.484 2.13147 11.0698 2.28566L9.87 1.78869C9.69444 1.40494 9.10794 0.41972 9.00119 0.249751C8.90366 0.0943439 8.73303 0 8.54953 0H7.45047C7.26697 0 7.09634 0.0943439 6.99878 0.249751C6.91794 0.378532 6.31344 1.38763 6.12997 1.78869L4.93022 2.28566C4.5335 2.138 3.42059 1.85591 3.22766 1.81178C3.04878 1.77094 2.86147 1.82488 2.73172 1.9546L1.95459 2.73172C1.82484 2.86147 1.77091 3.04879 1.81178 3.22766C1.84525 3.37398 2.13147 4.51598 2.28566 4.93023L1.78869 6.12998C1.40494 6.30554 0.419719 6.89205 0.24975 6.9988C0.0943438 7.09633 0 7.26695 0 7.45045V8.54952C0 8.73302 0.0943438 8.90364 0.24975 9.00121C0.378531 9.08205 1.38762 9.68655 1.78869 9.87002L2.28566 11.0698C2.138 11.4665 1.85591 12.5794 1.81178 12.7723C1.77094 12.9512 1.82484 13.1385 1.95459 13.2683L2.73172 14.0454C2.86147 14.1752 3.04884 14.2291 3.22766 14.1882C3.37397 14.1547 4.51597 13.8685 4.93022 13.7143L6.12997 14.2113C6.30553 14.5951 6.89203 15.5803 6.99878 15.7502C7.09634 15.9057 7.26697 16 7.45047 16H8.54953C8.73303 16 8.90366 15.9057 9.00122 15.7502C9.08206 15.6215 9.68656 14.6124 9.87003 14.2113L11.0698 13.7143C11.4665 13.862 12.5794 14.1441 12.7723 14.1882C12.9513 14.2292 13.1386 14.1752 13.2683 14.0454L14.0454 13.2683C14.1752 13.1385 14.2291 12.9512 14.1882 12.7723C14.1547 12.626 13.8685 11.484 13.7143 11.0698L14.2113 9.87002C14.5951 9.69446 15.5803 9.10796 15.7502 9.00121C15.9057 8.90364 16 8.73302 16 8.54952V7.45045C16 7.26695 15.9057 7.09633 15.7502 6.99876ZM8 11.4876C6.07691 11.4876 4.51234 9.92308 4.51234 7.99998C4.51234 6.07689 6.07691 4.51235 8 4.51235C9.92309 4.51235 11.4877 6.07692 11.4877 8.00002C11.4877 9.92311 9.92309 11.4876 8 11.4876Z"
                                            fill="#1D1D1B"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="text-2xl font-medium mt-8 text-gray-three">Hour UI/UX Meeting</div>
                            <div class="font-medium text-gray-three">1 hour</div>
                            <a href="#" class="mt-10 font-medium block text-gray-three">Preview booking page</a>
                            <div class="flex items-center justify-between mt-6 pt-6 border-t border-gray-two">
                                <div class="flex items-center cursor-pointer">
                                    <span class="text-gray-three font-medium mr-2 block">Copy link</span>
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.33657 1.6C3.66603 0.667846 4.55503 0 5.6 0H7.2C8.24498 0 9.13397 0.667846 9.46344 1.6H10.4C11.7255 1.6 12.8 2.67452 12.8 4V6.4C12.8 6.84183 12.4418 7.2 12 7.2C11.5582 7.2 11.2 6.84183 11.2 6.4V4C11.2 3.55817 10.8418 3.2 10.4 3.2H9.46344C9.13397 4.13215 8.24498 4.8 7.2 4.8H5.6C4.55503 4.8 3.66603 4.13215 3.33657 3.2H2.4C1.95817 3.2 1.6 3.55817 1.6 4V13.6C1.6 14.0418 1.95817 14.4 2.4 14.4H10.4C10.8418 14.4 11.2 14.0418 11.2 13.6V12.8C11.2 12.3582 11.5582 12 12 12C12.4418 12 12.8 12.3582 12.8 12.8V13.6C12.8 14.9255 11.7255 16 10.4 16H2.4C1.07452 16 0 14.9255 0 13.6V4C0 2.67452 1.07452 1.6 2.4 1.6H3.33657ZM5.6 1.6C5.15817 1.6 4.8 1.95817 4.8 2.4C4.8 2.84183 5.15817 3.2 5.6 3.2H7.2C7.64183 3.2 8 2.84183 8 2.4C8 1.95817 7.64183 1.6 7.2 1.6H5.6ZM8.56569 6.63432C8.87811 6.94673 8.87811 7.45327 8.56569 7.76569L7.53137 8.8H13.6C14.0418 8.8 14.4 9.15817 14.4 9.6C14.4 10.0418 14.0418 10.4 13.6 10.4H7.53137L8.56569 11.4343C8.87811 11.7467 8.87811 12.2533 8.56569 12.5657C8.25327 12.8781 7.74674 12.8781 7.43432 12.5657L5.03432 10.1657C4.7219 9.85327 4.7219 9.34673 5.03432 9.03432L7.43432 6.63432C7.74674 6.3219 8.25327 6.3219 8.56569 6.63432Z"
                                              fill="#B6B6B6"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fixed inset-0 bg-gray-six backdrop-blur-xl" x-show="open" x-on:click="open = ! open"></div>
            <div class="max-h-screen overflow-auto fixed w-11/12 md:w-3/5 top-2/4 left-1/2 -translate-y-2/4 -translate-x-2/4 bg-white shadow rounded-3xl sm:p-11 p-4"
            x-show="open">
            <div
                class="group absolute w-12 h-12 rounded-md bg-gray-five flex justify-center items-center top-3 right-3 cursor-pointer hover:bg-pur-pure transition-all duration-300"
                x-on:click="open = ! open">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                     class="group-hover:fill-white fill-pur-pure">
                    <path
                        d="M10.6491 9.00013L17.6579 1.99094C18.114 1.53502 18.114 0.797859 17.6579 0.341939C17.202 -0.11398 16.4649 -0.11398 16.0089 0.341939L8.99989 7.35114L1.99106 0.341939C1.53493 -0.11398 0.798002 -0.11398 0.342092 0.341939C-0.114031 0.797859 -0.114031 1.53502 0.342092 1.99094L7.35093 9.00013L0.342092 16.0093C-0.114031 16.4653 -0.114031 17.2024 0.342092 17.6583C0.5693 17.8858 0.868044 18 1.16657 18C1.4651 18 1.76363 17.8858 1.99106 17.6583L8.99989 10.6491L16.0089 17.6583C16.2364 17.8858 16.5349 18 16.8334 18C17.132 18 17.4305 17.8858 17.6579 17.6583C18.114 17.2024 18.114 16.4653 17.6579 16.0093L10.6491 9.00013Z"/>
                </svg>
            </div>
            <div class="text-2xl text-pur-pure font-medium">Create new event</div>
            <form>
                <div class="mt-6">
                    <label class="font-medium block text-sm">Title</label>
                    <input
                        class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                        type="text">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-6">
                    <div>
                        <label class="font-medium block text-sm">Duration</label>
                        <select class="form-select mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 appearance-none
                                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label="Default select example">
                            <option selected>15 min</option>
                            <option value="1">30 min</option>
                            <option value="2">60 min</option>
                            <option value="3">90 min</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-medium block text-sm">Price</label>
                        <input
                            class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                            type="text" placeholder="10.00 Eur">
                    </div>
                </div>
                <div class="mt-6">
                    <label class="font-medium block text-sm mb-2">Description</label>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <textarea name="text" id="editor" rows="10" cols="80"></textarea>
                    <script>ClassicEditor.create(document.querySelector('#editor'))</script>
                </div>
                <div class="flex flex-wrap mt-6">
                    <button type="submit" class="mb-2 text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 mr-2.5 tracking-wider hover:bg-pur-pure hover:text-white transition-all	duration-300">
                        Save
                    </button>
                    <button class="mb-2 text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                        Save & Publish
                    </button>
                </div>
            </form>
        </div>
        </div>
    </main>
@endsection
