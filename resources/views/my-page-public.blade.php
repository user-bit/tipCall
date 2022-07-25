@extends('layouts.main')
@section('title', 'TipCall - my-plans')
@section('content')
    <x-header/>
    <main>
        <x-header-user/>
        <div class="md:pt-8 pt-4 bg-gray">
            <div class="container mx-auto px-4">
                <div class="text-xl sm:text-2xl font-medium sm:mt-2 sm:w-1/2 w-full">My page</div>

                <div class="border-gray-two border-t sm:mt-8 sm:pt-8 mt-4 pt-4">
                    <img src="<?php echo e(asset('images/logo.svg')); ?>" class="mx-auto w-20 h-fit	">
                </div>
                <div class="mt-5 mx-auto sm:w-3/5 w-full text-center">
                    Your profile is public. Here's the unique public link:
                </div>
                <a href="#" class="flex justify-center items-center">
                    <span class="font-medium text-pink pr-2 sm:text-base text-sm">tipcall.io/artis-lutkovskis</span>
                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3.33657 1.6C3.66603 0.667846 4.55503 0 5.6 0H7.2C8.24498 0 9.13397 0.667846 9.46344 1.6H10.4C11.7255 1.6 12.8 2.67452 12.8 4V6.4C12.8 6.84183 12.4418 7.2 12 7.2C11.5582 7.2 11.2 6.84183 11.2 6.4V4C11.2 3.55817 10.8418 3.2 10.4 3.2H9.46344C9.13397 4.13215 8.24498 4.8 7.2 4.8H5.6C4.55503 4.8 3.66603 4.13215 3.33657 3.2H2.4C1.95817 3.2 1.6 3.55817 1.6 4V13.6C1.6 14.0418 1.95817 14.4 2.4 14.4H10.4C10.8418 14.4 11.2 14.0418 11.2 13.6V12.8C11.2 12.3582 11.5582 12 12 12C12.4418 12 12.8 12.3582 12.8 12.8V13.6C12.8 14.9255 11.7255 16 10.4 16H2.4C1.07452 16 0 14.9255 0 13.6V4C0 2.67452 1.07452 1.6 2.4 1.6H3.33657ZM5.6 1.6C5.15817 1.6 4.8 1.95817 4.8 2.4C4.8 2.84183 5.15817 3.2 5.6 3.2H7.2C7.64183 3.2 8 2.84183 8 2.4C8 1.95817 7.64183 1.6 7.2 1.6H5.6ZM8.56569 6.63431C8.87811 6.94673 8.87811 7.45327 8.56569 7.76569L7.53137 8.8H13.6C14.0418 8.8 14.4 9.15817 14.4 9.6C14.4 10.0418 14.0418 10.4 13.6 10.4H7.53137L8.56569 11.4343C8.87811 11.7467 8.87811 12.2533 8.56569 12.5657C8.25327 12.8781 7.74674 12.8781 7.43432 12.5657L5.03432 10.1657C4.7219 9.85327 4.7219 9.34673 5.03432 9.03431L7.43432 6.63431C7.74674 6.3219 8.25327 6.3219 8.56569 6.63431Z"
                              fill="#E5005B"/>
                    </svg>
                </a>
                <form class="pb-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:mt-20 mt-10">
                        <div>
                            <div class="text-center mb-4">
                                <img src="<?php echo e(asset('images/default-a.svg')); ?>" class="mx-auto">
                                <div
                                    class="mt-2 relative border border-pur-pure inline-flex rounded-full px-6 py-2 cursor-pointer">
                                    <input type="file" class="absolute inset-0 opacity-0">
                                    <span class="font-medium">Select image</span>
                                </div>
                            </div>
                            <div class="mb-6">
                                <label class="font-medium block text-sm">Full Name</label>
                                <input
                                    class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                    type="text" placeholder="Artis Lutkovskis">
                            </div>
                            <div class="mb-6">
                                <label class="font-medium block text-sm">Slogan</label>
                                <input
                                    class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                    type="text" placeholder="UI/UX designer">
                            </div>
                            <div class="mb-6">
                                <label class="font-medium block text-sm mb-2">Description</label>
                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                <textarea name="text" id="editor" rows="10" cols="80"></textarea>
                                <script>ClassicEditor.create(document.querySelector('#editor'))</script>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between flex-wrap">
                                <div class="text-2xl mb-4 sm:mb-0">My plans</div>
                                <button
                                    class="flex items-center border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V6M6 6V11M6 6H11M6 6L1 6" stroke="#4A2545" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="ml-2">Create new event</span>
                                </button>
                            </div>

                            <div class="border border-gray-two rounded-2xl sm:py-4 sm:px-5 py-3 px-3 mt-8">
                                <div class="flex justify-between items-center flex-wrap">
                                    <div class="mb-2 text-lg sm:text-2xl font-medium">Fast UI/UX Meeting</div>
                                    <label for="toggleA" class="flex items-center cursor-pointer">
                                        <div class="relative">
                                            <input type="checkbox" id="toggleA" class="sr-only" checked>
                                            <div class="bg-checkbox block bg-gray-two w-11 h-6 rounded-full"></div>
                                            <div class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                        </div>
                                        <div class="ml-3 font-medium text-pink sm:text-base	text-sm">Publish</div>
                                    </label>
                                </div>
                                <div class="font-medium mt-2 sm:text-base text-sm">15 min / 10.00 Eur</div>
                                <div class="flex justify-between items-end mt-4 sm:text-base text-sm">
                                    <div class="w-4/5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis...</div>
                                    <a href="#" class="font-medium text-pink">Edit</a>
                                </div>
                            </div>

                            <div class="border border-gray-two rounded-2xl sm:py-4 sm:px-5 py-3 px-3 mt-8">
                                <div class="flex justify-between items-center flex-wrap">
                                    <div class="mb-2 text-lg sm:text-2xl font-medium">30 min UI/UX Meeting</div>
                                    <label for="toggleB" class="flex items-center cursor-pointer">
                                        <div class="relative">
                                            <input type="checkbox" id="toggleB" class="sr-only" checked>
                                            <div class="bg-checkbox block bg-gray-two w-11 h-6 rounded-full"></div>
                                            <div class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                        </div>
                                        <div class="ml-3 font-medium text-pink">Publish</div>
                                    </label>
                                </div>
                                <div class="font-medium mt-2 sm:text-base text-sm">30 min / 20.00 Eur</div>
                                <div class="flex justify-between items-end mt-4 sm:text-base text-sm">
                                    <div class="w-4/5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis...</div>
                                    <a href="#" class="font-medium text-pink">Edit</a>
                                </div>
                            </div>

                            <div class="border border-gray-two rounded-2xl sm:py-4 sm:px-5 py-3 px-3 mt-8">
                                <div class="flex justify-between items-center flex-wrap">
                                    <div class="mb-2 text-lg sm:text-2xl font-medium text-gray-three">Hour UI/UX Meeting</div>
                                    <label for="toggleC" class="flex items-center cursor-pointer">
                                        <div class="relative">
                                            <input type="checkbox" id="toggleC" class="sr-only">
                                            <div class="bg-checkbox block bg-gray-two w-11 h-6 rounded-full"></div>
                                            <div class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                        </div>
                                        <div class="ml-3 font-medium text-pink">Publish</div>
                                    </label>
                                </div>
                                <div class="font-medium mt-2 sm:text-base text-sm text-gray-three">1 hour / 40.00 Eur</div>
                                <div class="flex justify-between items-end mt-4 sm:text-base text-sm">
                                    <div class="w-4/5 text-gray-three">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis...</div>
                                    <a href="#" class="font-medium text-pink">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center flex-wrap sm:mt-12 mt-4">
                        <button type="submit" class="mb-2 mx-2 font-medium text-current border border-current rounded-full px-6 py-2 tracking-wider inline-block hover:bg-pur-pure hover:text-white transition-all duration-300">Save</button>
                        <a href="{{ url('my-page-public') }}" type="submit" class="mb-2 mx-2 text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Make public</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
