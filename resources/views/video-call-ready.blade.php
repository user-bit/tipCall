@extends('layouts.main')
@section('title', 'TipCall - Ready')
@section('content')
    <div class="bg-gray min-h-screen flex justify-center items-center flex-col">
        <div class="text-4xl font-medium"><span class="text-pink">Ready to join?</div>
        <div class="text-2xl mt-9 font-medium">Fast UI/UX Meeting</div>
        <div class="font-medium">15 min</div>
        <div class="mt-12 w-28 w-28 rounded-full">
            <img src="images/avatar.png" class="w-full h-full">
        </div>
        <div class="text-2xl font-medium mt-4">Jānis Bērziņš</div>
        <div class="flex mt-9">
            <button class="text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Join now</button>
        </div>
    </div>
@endsection
