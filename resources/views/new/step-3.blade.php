@extends('layouts.main')
@section('title', 'TipCall - Preview')
@section('content')
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-7">
            <a href="#">
                <img class="w-28" src="<?php echo e(asset('images/logo.svg')); ?>">
            </a>
            <a href="#" class="text-sm font-medium text-current hover:text-pink transition-all duration-300">Sign
                out</a>
        </div>

        <div class="mt-8 relative md:block hidden">
            <div class="absolute xl:left-72 xl:right-72 lg:left-36 lg:right-36 left-20 right-20 top-4 h-px bg-gray-three -z-10"></div>
            <div class="flex justify-center lg:space-x-24 space-x-12">
                <div>
                    <div
                        class="mx-auto w-8	h-8 border border-pink rounded-full text-lg font-medium flex justify-center items-center text-white bg-pink">
                        1
                    </div>
                    <div class="text-current font-medium mt-2">Create plan</div>
                </div>
                <div>
                    <div
                        class="mx-auto w-8	h-8 border border-pink rounded-full text-lg font-medium flex justify-center items-center text-pink bg-gray">
                        2
                    </div>
                    <div class="text-pink font-medium mt-2">Connect calendar</div>
                </div>
                <div>
                    <div
                        class="mx-auto w-8	h-8 border border-gray-three rounded-full text-lg font-medium flex justify-center items-center text-gray-three bg-gray">
                        3
                    </div>
                    <div class="text-gray-three font-medium mt-2">Create promo page</div>
                </div>
                <div>
                    <div
                        class="mx-auto w-8	h-8 border border-gray-three rounded-full text-lg font-medium flex justify-center items-center text-gray-three bg-gray">
                        4
                    </div>
                    <div class="text-gray-three font-medium mt-2">Setup Billing</div>
                </div>
            </div>
        </div>

        <div class="flex md:mt-12 mt-2 md:pb-12 pb-24">
            <div class="md:w-8/12 w-full md:pr-10">
                <div class="md:bg-white md:rounded-3xl md:shadow-md  md:p-8">
                    <div class="text-2xl font-medium">Connect calendar</div>
                    <div class="mt-4 text-sm font-medium">Connect your calendar to see your availability and bookings
                    </div>

                    <div class="mt-6 sm:w-80">
                        <label class="font-medium block text-sm">Time zone</label>
                        <select class="form-select mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 appearance-none
                                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label="Default select example">
                            <option selected="">Riga, (GMT+3)</option>
                            <option value="1">Kiev, (GMT+2)</option>
                            <option value="2">Paris, (GMT+8)</option>
                        </select>
                    </div>

                    <div class="my-8 font-medium border border-pur-pure rounded-3xl py-3 px-8 inline-flex">
                        Available any time
                    </div>

                    <div class="flex flex-wrap mt-6 justify-between">
                        <div class="lg:w-6/12 w-full space-y-4 sm:pr-6 pr-0">
                            <div
                                class="item-day active border border-gray-two rounded-lg px-4 py-2 hover:bg-pink-three transition-all duration-300">
                                <div class="flex items-center justify-between">
                                    <span class="name-day text-current font-semibold w-28">MONDAY</span>
                                    <span class="text-current text-sm font-medium">Not set</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="item-content result-content">
                                    <div class="text-2xl font-medium mt-4">Monday</div>
                                    <div class="text-sm font-medium mt-2">Available hours</div>
                                    <div class="content-avl">
                                        <div class="content-avl-item">
                                            <div class="content-avl-i flex items-center mt-6">
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:00">
                                                <span class="mx-4">-</span>
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:30">
                                                <div class="ml-4 cursor-pointer close-svg">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="16" cy="16" r="15.5" stroke="#B6B6B6"/>
                                                        <path
                                                            d="M11.6421 20.3731L20.3736 11.6416M11.6421 11.6416L20.3736 20.3731"
                                                            stroke="#B6B6B6" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-avl group cursor-pointer flex items-center mt-9 ">
                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-current group-hover:stroke-pink transition-all duration-300">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span
                                            class="font-medium pl-2 group-hover:text-pink transition-all duration-300">Add more time</span>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="font-medium pl-2">Set this to all days</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="item-day cursor-pointer border border-gray-two rounded-lg px-4 py-2 hover:bg-pink-three transition-all duration-300">
                                <div class="flex items-center justify-between">
                                    <span class="name-day text-current font-semibold w-28">TUESDAY</span>
                                    <span class="text-current text-sm font-medium">Not set</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="item-content result-content">
                                    <div class="text-2xl font-medium mt-4">Tuesday</div>
                                    <div class="text-sm font-medium mt-2">Available hours</div>
                                    <div class="content-avl">
                                        <div class="content-avl-item">
                                            <div class="content-avl-i flex items-center mt-6">
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:00">
                                                <span class="mx-4">-</span>
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:30">
                                                <div class="ml-4 cursor-pointer close-svg">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="16" cy="16" r="15.5" stroke="#B6B6B6"/>
                                                        <path
                                                            d="M11.6421 20.3731L20.3736 11.6416M11.6421 11.6416L20.3736 20.3731"
                                                            stroke="#B6B6B6" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-avl group cursor-pointer flex items-center mt-9 ">
                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-current group-hover:stroke-pink transition-all duration-300">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span
                                            class="font-medium pl-2 group-hover:text-pink transition-all duration-300">Add more time</span>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="font-medium pl-2">Set this to all days</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="item-day cursor-pointer border border-gray-two rounded-lg px-4 py-2 hover:bg-pink-three transition-all duration-300">
                                <div class="flex items-center justify-between">
                                    <span class="text-current font-semibold w-28">WEDNESDAY</span>
                                    <span class="text-current text-sm font-medium">Not set</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="item-content result-content">
                                    <div class="text-2xl font-medium mt-4">Wednesday</div>
                                    <div class="text-sm font-medium mt-2">Available hours</div>
                                    <div class="content-avl">
                                        <div class="content-avl-item">
                                            <div class="content-avl-i flex items-center mt-6">
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:00">
                                                <span class="mx-4">-</span>
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:30">
                                                <div class="ml-4 cursor-pointer close-svg">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="16" cy="16" r="15.5" stroke="#B6B6B6"/>
                                                        <path
                                                            d="M11.6421 20.3731L20.3736 11.6416M11.6421 11.6416L20.3736 20.3731"
                                                            stroke="#B6B6B6" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-avl group cursor-pointer flex items-center mt-9 ">
                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-current group-hover:stroke-pink transition-all duration-300">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span
                                            class="font-medium pl-2 group-hover:text-pink transition-all duration-300">Add more time</span>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="font-medium pl-2">Set this to all days</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="item-day cursor-pointer border border-gray-two rounded-lg px-4 py-2 hover:bg-pink-three transition-all duration-300">
                                <div class="flex items-center justify-between">
                                    <span class="name-day text-current font-semibold w-28">THURSDAY</span>
                                    <span class="text-current text-sm font-medium">Not set</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="hidden item-content">
                                    <div class="text-2xl font-medium mt-4">Thursday</div>
                                    <div class="text-sm font-medium mt-2">Available hours</div>
                                    <div class="content-avl">
                                        <div class="content-avl-item">
                                            <div class="content-avl-i flex items-center mt-6">
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="12:00">
                                                <span class="mx-4">-</span>
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="12:30">
                                                <div class="ml-4 cursor-pointer close-svg">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="16" cy="16" r="15.5" stroke="#B6B6B6"/>
                                                        <path
                                                            d="M11.6421 20.3731L20.3736 11.6416M11.6421 11.6416L20.3736 20.3731"
                                                            stroke="#B6B6B6" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-avl group cursor-pointer flex items-center mt-9 ">
                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-current group-hover:stroke-pink transition-all duration-300">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span
                                            class="font-medium pl-2 group-hover:text-pink transition-all duration-300">Add more time</span>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="font-medium pl-2">Set this to all days</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="item-day cursor-pointer border border-gray-two rounded-lg px-4 py-2 hover:bg-pink-three transition-all duration-300">
                                <div class="flex items-center justify-between">
                                    <span class="text-current font-semibold w-28">FRIDAY</span>
                                    <span class="text-current text-sm font-medium">Not set</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="hidden item-content">
                                    <div class="text-2xl font-medium mt-4">Friday</div>
                                    <div class="text-sm font-medium mt-2">Available hours</div>
                                    <div class="content-avl">
                                        <div class="content-avl-item">
                                            <div class="content-avl-i flex items-center mt-6">
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:00">
                                                <span class="mx-4">-</span>
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:30">
                                                <div class="ml-4 cursor-pointer close-svg">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="16" cy="16" r="15.5" stroke="#B6B6B6"/>
                                                        <path
                                                            d="M11.6421 20.3731L20.3736 11.6416M11.6421 11.6416L20.3736 20.3731"
                                                            stroke="#B6B6B6" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-avl group cursor-pointer flex items-center mt-9 ">
                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-current group-hover:stroke-pink transition-all duration-300">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span
                                            class="font-medium pl-2 group-hover:text-pink transition-all duration-300">Add more time</span>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="font-medium pl-2">Set this to all days</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="item-day cursor-pointer border border-gray-two rounded-lg px-4 py-2 hover:bg-pink-three transition-all duration-300">
                                <div class="flex items-center justify-between">
                                    <span class="name-day text-current font-semibold w-28">SATURDAY</span>
                                    <span class="text-current text-sm font-medium">Not set</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="hidden item-content">
                                    <div class="text-2xl font-medium mt-4">Saturday</div>
                                    <div class="text-sm font-medium mt-2">Available hours</div>
                                    <div class="content-avl">
                                        <div class="content-avl-item">
                                            <div class="content-avl-i flex items-center mt-6">
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="12:00">
                                                <span class="mx-4">-</span>
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="12:30">
                                                <div class="ml-4 cursor-pointer close-svg">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="16" cy="16" r="15.5" stroke="#B6B6B6"/>
                                                        <path
                                                            d="M11.6421 20.3731L20.3736 11.6416M11.6421 11.6416L20.3736 20.3731"
                                                            stroke="#B6B6B6" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-avl group cursor-pointer flex items-center mt-9 ">
                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-current group-hover:stroke-pink transition-all duration-300">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span
                                            class="font-medium pl-2 group-hover:text-pink transition-all duration-300">Add more time</span>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="font-medium pl-2">Set this to all days</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="item-day cursor-pointer border border-gray-two rounded-lg px-4 py-2 hover:bg-pink-three transition-all duration-300">
                                <div class="flex items-center justify-between">
                                    <span class="text-current font-semibold w-28">SUNDAY</span>
                                    <span class="text-current text-sm font-medium">Not set</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="hidden item-content">
                                    <div class="text-2xl font-medium mt-4">Sunday</div>
                                    <div class="text-sm font-medium mt-2">Available hours</div>
                                    <div class="content-avl">
                                        <div class="content-avl-item">
                                            <div class="content-avl-i flex items-center mt-6">
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:00">
                                                <span class="mx-4">-</span>
                                                <input
                                                    class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                                    type="text" value="11:30">
                                                <div class="ml-4 cursor-pointer close-svg">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="16" cy="16" r="15.5" stroke="#B6B6B6"/>
                                                        <path
                                                            d="M11.6421 20.3731L20.3736 11.6416M11.6421 11.6416L20.3736 20.3731"
                                                            stroke="#B6B6B6" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-avl group cursor-pointer flex items-center mt-9 ">
                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-current group-hover:stroke-pink transition-all duration-300">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span
                                            class="font-medium pl-2 group-hover:text-pink transition-all duration-300">Add more time</span>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="font-medium pl-2">Set this to all days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="result-content result-content-all w-6/12 border-l border-gray-two pl-8 lg:block">
                            <div class="text-2xl font-medium mt-4">Monday</div>
                            <div class="text-sm font-medium mt-2">Available hours</div>
                            <div class="content-avl">
                                <div class="content-avl-item">
                                    <div class="content-avl-i flex items-center mt-6">
                                        <input
                                            class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                            type="text" value="11:00">
                                        <span class="mx-4">-</span>
                                        <input
                                            class="w-20 h-10 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                            type="text" value="11:30">
                                        <div class="ml-4 cursor-pointer close-svg">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16" cy="16" r="15.5" stroke="#B6B6B6"/>
                                                <path
                                                    d="M11.6421 20.3731L20.3736 11.6416M11.6421 11.6416L20.3736 20.3731"
                                                    stroke="#B6B6B6" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-avl add-avl-large group cursor-pointer flex items-center mt-9 ">
                                <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                     class="stroke-current group-hover:stroke-pink transition-all duration-300">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span class="font-medium pl-2 group-hover:text-pink transition-all duration-300">Add more time</span>
                            </div>
                            <div class="flex items-center mt-2">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#1D1D1B" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="font-medium pl-2">Set this to all days</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 flex items-center justify-between">
                        <button class="sm:hidden block text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                            Back
                        </button>
                        <div class="sm:hidden block flex space-x-2">
                            <span class="block w-3 h-3 bg-pur-pure rounded-full"></span>
                            <span class="block w-3 h-3 bg-pur-pure rounded-full"></span>
                            <span class="block w-3 h-3 bg-gray-two rounded-full"></span>
                            <span class="block w-3 h-3 bg-gray-two rounded-full"></span>
                        </div>
                        <button class="text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                            Next
                        </button>
                    </div>
                </div>
            </div>

            <div
                class="open-bottom md:hidden block p-4 flex items-center justify-center fixed left-0 right-0 bottom-0 bg-white shadow-2xl shadow-black px-10 rounded-t-xl z-10">
                <div class="w-20 rounded-lg	h-1 bg-gray-two absolute top-2"></div>
                <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.71094 20.25H18.2891C19.8399 20.25 21.1016 18.9883 21.1016 17.4375V2.8125C21.1016 1.26169 19.8399 0 18.2891 0H3.71094C2.16013 0 0.898438 1.26169 0.898438 2.8125V21.1875C0.898438 22.7383 2.16013 24 3.71094 24H17.3516H18.2891C19.8399 24 21.1016 22.7383 21.1016 21.1875V21.1852C20.3176 21.775 19.3435 22.125 18.2891 22.125H17.3516H3.71094C3.194 22.125 2.77344 21.7044 2.77344 21.1875C2.77344 20.6706 3.194 20.25 3.71094 20.25ZM2.77344 2.8125C2.77344 2.29556 3.194 1.875 3.71094 1.875H18.2891C18.806 1.875 19.2266 2.29556 19.2266 2.8125V17.4375C19.2266 17.9544 18.806 18.375 18.2891 18.375H3.71094C3.38239 18.375 3.06678 18.4316 2.77344 18.5356V2.8125ZM9.42969 7.90219H7.55469C7.55469 6.94041 7.96691 6.01983 8.68569 5.37638C9.41389 4.72444 10.3935 4.41281 11.3735 4.52166C12.9435 4.69589 14.2077 5.95683 14.3795 7.51997C14.5362 8.94562 13.7002 9.96863 13.0577 10.6141C12.8923 10.7802 12.7397 10.9258 12.605 11.0543C11.9924 11.6385 11.9143 11.7367 11.9143 12.1404V12.1875H10.0393V12.1404C10.0393 10.9101 10.6287 10.3481 11.311 9.69731C11.4436 9.57089 11.5807 9.44016 11.7288 9.29133C12.3343 8.68303 12.5697 8.21456 12.5158 7.72481C12.4391 7.02684 11.8717 6.46345 11.1667 6.38522C10.7099 6.33469 10.2726 6.47231 9.93631 6.77344C9.60959 7.06584 9.42969 7.46672 9.42969 7.90219ZM10.0391 13.5938H11.9141V15.4688H10.0391V13.5938Z"
                        fill="#4A2545"/>
                </svg>
                <span class="text-lg font-semibold ml-2">Setup guide</span>
            </div>

            <div class="content-bottom w-4/12 px-6 sm:px-14 pb-10 md:p-0">
                <img class="w-full" src="<?php echo e(asset('images/step-3.png')); ?>">
                <div class="mt-2 relative">
                    <div class="absolute left-[5px] top-2 bottom-4 bg-gray-two w-px"></div>
                    <div class="pl-8 relative border-b-[rgba(182, 182, 182, 0.16)]">
                        <div class="w-3	h-3 absolute left-0 rounded-full bg-pink top-2"></div>
                        <div class="text-lg	font-medium">Set availability</div>
                        <div class="mt-2 text-sm font-medium">Lorem ipsum dolor sit consectetur adipiscing elit. Nulla
                            varius nisi vel.
                        </div>
                        <div class="pt-3 border-b border-gray-two pl-5"></div>
                    </div>
                    <div class="mt-3 pl-8 relative border-b-[rgba(182, 182, 182, 0.16)]">
                        <div class="w-3	h-3 absolute left-0 rounded-full bg-gray-two top-2"></div>
                        <div class="text-lg	font-medium">Calendar import</div>
                        <div class="pt-3 border-b border-gray-two pl-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
