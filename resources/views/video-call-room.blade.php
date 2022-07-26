@extends('layouts.main')
@section('title', 'TipCall - Room')
@section('content')
    <div class="bg-gray min-h-screen flex justify-center items-center flex-col">
        <div class="text-2xl sm:text-4xl font-medium"><span class="text-pink">9 min</span> till the call</div>
        <div class="text-xl	sm:text-2xl mt-9 font-medium">Fast UI/UX Meeting</div>
        <div class="font-medium">2 h 15 min</div>
        <div class="mt-12 w-28 w-28 rounded-full">
            <img src="images/avatar.png" class="w-full h-full">
        </div>
        <div class="text-2xl font-medium mt-4">Jānis Bērziņš</div>
        <div class="flex flex-wrap justify-center mt-9">
            <button class="mb-2 text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 ml-2.5 tracking-wider hover:bg-pur-pure hover:text-white transition-all duration-300">Cancel call</button>
            <button class="mb-2 text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 ml-2.5 tracking-wider hover:bg-pur-pure hover:text-white transition-all duration-300">Reshedule call</button>
            <button class="mb-2 text-gray-two border border-gray-two rounded-full font-medium px-6 py-2 ml-2.5 tracking-wider cursor-default">Join now</button>
        </div>
    </div>
@endsection
