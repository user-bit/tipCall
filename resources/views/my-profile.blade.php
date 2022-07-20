@extends('layouts.main')
@section('title', 'TipCall - my-plans')
@section('content')
    <x-header/>
    <main>
        <div class="bg-gray ">
            <div class="container mx-auto px-4 flex justify-between">
                <x-left-menu/>
                <div class="w-3/4 pt-12 pl-8">
                    <div class="text-2xl font-medium">My Profile</div>
                    <div class="flex justify-between mt-10	">
                        <div class="text-center w-1/4">
                            <img src="http://tipcall.loc/images/default-a.svg" class="mx-auto w-32 h-32">
                            <div class="mt-2 relative border border-pur-pure inline-flex rounded-full px-4 py-1.5 cursor-pointer">
                                <input type="file" class="absolute inset-0 opacity-0">
                                <span class="font-medium">Select image</span>
                            </div>
                        </div>
                        <div class="w-3/4 pl-3">
                            <div class="rounded-2xl	border border-pur-pure overflow-hidden">
                                <div class="text-sm	text-white text-center bg-pur-pure py-4">This information will be available on your public profile after you publish it</div>
                                <div class="p-6">
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

                            <div class="flex wrap">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
