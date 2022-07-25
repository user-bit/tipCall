@extends('layouts.main')
@section('title', 'TipCall - my-plans')
@section('content')
    <x-header/>
    <main>
        <div class="bg-gray">
            <div class="container mx-auto px-4 flex justify-between">
                <x-left-menu/>
                <div class="w-full lg:w-3/4 pt-12 sm:pl-8 pl-0">
                    <div class="text-2xl font-medium">My Profile</div>
                    <form method="post" enctype="multipart/form-data" class="pb-20">
                        <div class="flex justify-between flex-wrap mt-10">
                            <div class="text-center sm:w-1/4 w-full">
                                <img src="http://tipcall.loc/images/default-a.svg" class="mx-auto w-32 h-32">
                                <div
                                    class="mt-2 relative border border-pur-pure inline-flex rounded-full px-4 py-1.5 cursor-pointer">
                                    <input type="file" class="absolute inset-0 opacity-0">
                                    <span class="font-medium">Select image</span>
                                </div>
                            </div>
                            <div class="sm:w-3/4 w-full mt-4 sm:mt-0 sm:pl-3">
                                <div class="rounded-2xl	border border-pur-pure overflow-hidden">
                                    <div class="text-xs	xl:text-sm text-white text-center bg-pur-pure py-4 px-2">This information
                                        will be available on your public profile after you publish it
                                    </div>
                                    <div class="p-3 sm:p-6">
                                        <div class="mb-6">
                                            <label class="font-medium block text-sm">Full Name</label>
                                            <input
                                                class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0	placeholder:text-gray-four text-pur-pure"
                                                type="text" placeholder="Artis Lutkovskis">
                                        </div>
                                        <div class="mb-6">
                                            <label class="font-medium block text-sm">Slogan</label>
                                            <input
                                                class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0	placeholder:text-gray-four text-pur-pure"
                                                type="text" placeholder="UI/UX designer">
                                        </div>
                                        <div class="mb-6">
                                            <label class="font-medium block text-sm mb-2">Description</label>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <textarea name="text" id="editor" rows="10" cols="80"></textarea>
                                            <script>ClassicEditor.create(document.querySelector('#editor'))</script>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-5 sm:mt-10">
                                    <div class="sm:col-span-2 col-span-1">
                                        <div class="sm:mb-6 mb-2 sm:w-1/2 w-full">
                                            <div class="sm:mr-2 mr-0">
                                                <label class="font-medium block text-sm">Local time</label>
                                                <select class="form-select mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 appearance-none
                                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                        aria-label="Default select example">
                                                    <option selected>Riga GMT +3</option>
                                                    <option value="1">Kiev GMT +2</option>
                                                    <option value="2">Germany GMT -3</option>
                                                    <option value="3">USA GMT +10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:mb-6 mb-2">
                                        <label class="font-medium block text-sm">Slogan</label>
                                        <input
                                            class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                            type="text" placeholder="UI/UX designer">
                                    </div>
                                    <div class="sm:mb-6 mb-2">
                                        <label class="font-medium block text-sm">Slogan</label>
                                        <input
                                            class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 placeholder:text-gray-four text-pur-pure"
                                            type="text" placeholder="UI/UX designer">
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-10">
                                    <button type="submit" class="text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                                        Save
                                    </button>
                                    <a href="#" class="text-pur-pure font-medium">Deactivate account</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
