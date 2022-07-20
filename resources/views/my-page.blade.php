@extends('layouts.main')
@section('title', 'TipCall - my-plans')
@section('content')
    <x-header/>
    <main>
        <x-header-user/>
        <div class="md:pt-8 pt-4 bg-gray">
            <div class="container mx-auto px-4">
                <div class="text-2xl font-medium mt-2 sm:w-1/2 w-full">My page</div>

                <div class="border-gray-two border-t mt-8 pt-8">
                    <img src="<?php echo e(asset('images/logo.svg')); ?>" class="mx-auto w-20 h-fit	">
                </div>
                <div class="mt-5 mx-auto w-3/5 text-center">Your profile is not published yet - make the necessary
                    changes, preview your profile and publish your profile.
                </div>
                <form class="pb-12">
                    <div class="grid grid-cols-2 gap-6 mt-20">
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
                            <div class="flex items-center justify-between">
                                <div class="text-2xl">My plans</div>
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

                            <div class="border border-gray-two rounded-2xl py-4 px-5 mt-8">
                                <div class="flex justify-between items-center">
                                    <div class="text-2xl font-medium">Fast UI/UX Meeting</div>
                                    <label for="toggleA" class="flex items-center cursor-pointer">
                                        <div class="relative">
                                            <input type="checkbox" id="toggleA" class="sr-only" checked>
                                            <div class="bg-checkbox block bg-gray-two w-11 h-6 rounded-full"></div>
                                            <div class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                        </div>
                                        <div class="ml-3 font-medium text-pink">Publish</div>
                                    </label>
                                </div>
                                <div class="font-medium mt-2">15 min / 10.00 Eur</div>
                                <div class="flex justify-between items-end mt-4">
                                    <div class="w-4/5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis...</div>
                                    <a href="#" class="font-medium text-pink">Edit</a>
                                </div>
                            </div>

                            <div class="border border-gray-two rounded-2xl py-4 px-5 mt-4">
                                <div class="flex justify-between items-center">
                                    <div class="text-2xl font-medium">30 min UI/UX Meeting</div>
                                    <label for="toggleB" class="flex items-center cursor-pointer">
                                        <div class="relative">
                                            <input type="checkbox" id="toggleB" class="sr-only" checked>
                                            <div class="bg-checkbox block bg-gray-two w-11 h-6 rounded-full"></div>
                                            <div class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                        </div>
                                        <div class="ml-3 font-medium text-pink">Publish</div>
                                    </label>
                                </div>
                                <div class="font-medium mt-2">30 min / 20.00 Eur</div>
                                <div class="flex justify-between items-end mt-4">
                                    <div class="w-4/5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis...</div>
                                    <a href="#" class="font-medium text-pink">Edit</a>
                                </div>
                            </div>

                            <div class="border border-gray-two rounded-2xl py-4 px-5 mt-4">
                                <div class="flex justify-between items-center">
                                    <div class="text-2xl font-medium text-gray-three">Hour UI/UX Meeting</div>
                                    <label for="toggleC" class="flex items-center cursor-pointer">
                                        <div class="relative">
                                            <input type="checkbox" id="toggleC" class="sr-only">
                                            <div class="bg-checkbox block bg-gray-two w-11 h-6 rounded-full"></div>
                                            <div class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                        </div>
                                        <div class="ml-3 font-medium text-pink">Publish</div>
                                    </label>
                                </div>
                                <div class="font-medium mt-2 text-gray-three">1 hour / 40.00 Eur</div>
                                <div class="flex justify-between items-end mt-4">
                                    <div class="w-4/5 text-gray-three">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis...</div>
                                    <a href="#" class="font-medium text-pink">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center mt-12">
                        <button type="submit" class="mx-2 font-medium text-current border border-current rounded-full px-6 py-2 tracking-wider inline-block hover:bg-pur-pure hover:text-white transition-all duration-300">Save</button>
                        <a href="{{ url('my-page-public') }}" type="submit" class="mx-2 text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Make public</a>
                    </div>
                </form>

            </div>
        </div>
    </main>
@endsection
