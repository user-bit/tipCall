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
        <div class="sm:mt-20 mt-4 pb-8">
            <img class="mx-auto" src="<?php echo e(asset('images/thx.png')); ?>">
            <div class="text-center sm:text-4xl text-3xl font-medium sm:mt-10 mt-4">Thank you!</div>
            <div class="text-center mt-4">All Setup Done, preview your promo page or go to dashboard!</div>
            <div class="mt-6 flex sm:flex-nowrap flex-wrap justify-center">
                <a href="#" class="sm:w-fit	w-full text-white text-center bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Preview promo page</a>
                <a href="#" class="sm:w-fit w-full text-center sm:mt-0 mt-4 text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 sm:ml-2.5 tracking-wider hover:bg-pur-pure hover:text-white transition-all	duration-300">Go to dashboard</a>
            </div>
        </div>
    </div>
@endsection
