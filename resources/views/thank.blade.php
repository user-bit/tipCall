@extends('layouts.main')
@section('title', 'TipCall - dashboard')
@section('content')
    <div class="bg-gray min-h-screen pt-10">
        <div class="container mx-auto px-4">
            <a href="{{ url('/') }}">
                <img src="<?php echo e(asset('images/logo.svg')); ?>">
            </a>
            <div class="flex flex-col mt-20 items-center pb-10">
                <img src="<?php echo e(asset('images/thank.svg')); ?>">
                <div class="text-4xl font-medium text-center">Thank you!</div>
                <div class="mt-6 text-center">All Done, Log in to use your account!</div>
                <a href="{{ url('login') }}" class="inline-block cursor-pointer mt-8 text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all	duration-300">Log In</a>
            </div>
        </div>
    </div>
@endsection
