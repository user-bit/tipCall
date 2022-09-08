@extends('layouts.main')
@section('title', 'TipCall - Preview')
@section('content')
    <div class="flex md:flex-nowrap flex-wrap min-h-screen">
        <a href="#" class="absolute left-6 top-6">
            <img src="<?php echo e(asset('images/logo-white.svg')); ?>">
        </a>
        <a href="#" class="absolute right-6 top-6 text-sm font-medium text-white md:text-current hover:text-pink transition-all duration-300">Sign out</a>
        <div class="md:w-1/2 w-full">
            <img class="w-full h-full object-cover" src="<?php echo e(asset('images/bg-step.jpg')); ?>">
        </div>
        <div class="md:w-1/2 w-full flex items-center sm:py-14 py-4">
            <div class="mx-auto sm:px-10 px-3">
                <div class="text-2xl font-medium">Sveiks Džon,</div>
                <div class="mt-6 space-y-4">
                    <p>
                        Sveicināts <a href="#" class="text-pink">tipcall.io</a> platformā, lai veiksmīgi strādātu ar tipcall platformu Tev ir nepieciešams uzsepot savu profilu.
                    </p>
                    <p>
                        Lai to izdarītu būs nepieciešami sekojoši soļi.
                    </p>
                </div>
                <div class="mt-12 relative">
                    <div class="absolute xl:left-72 xl:right-72 lg:left-36 lg:right-36 left-20 right-20 top-4 h-px bg-gray-three -z-10"></div>
                    <div class="pl-8 relative">
                        <div class="w-3	h-3 absolute left-0 rounded-full bg-pink top-2"></div>
                        <div class="text-lg	font-medium">Create plans</div>
                        <div class="mt-2 text-sm font-medium">Šeit tiek izveidoti plāni kuriem lietotāji varēs pieteikties.</div>
                    </div>
                    <div class="mt-10 pl-8 relative">
                        <div class="w-3	h-3 absolute left-0 rounded-full bg-gray-two top-2"></div>
                        <div class="text-lg	font-medium">Connect calendar </div>
                        <div class="mt-2 text-sm font-medium">Šeit Tu pievienosi laikus kuros esi atvērts sazvanam.</div>
                    </div>
                    <div class="mt-10 pl-8 relative">
                        <div class="w-3	h-3 absolute left-0 rounded-full bg-gray-two top-2"></div>
                        <div class="text-lg	font-medium">Create promo page</div>
                        <div class="mt-2 text-sm font-medium">Šī būs Tava publiskā lapa ar ko dalīsies ar saviem potenciālajiem klientiem.</div>
                    </div>
                    <div class="mt-10 pl-8 relative">
                        <div class="w-3	h-3 absolute left-0 rounded-full bg-gray-two top-2"></div>
                        <div class="text-lg	font-medium">Setup payment</div>
                        <div class="mt-2 text-sm font-medium">Ir nepieciešams pieslēgt Stripe kontu (tas neaizņems vairāk kā 5 min), lai pēc sarunas mēs varētu norēķināties ar Tevi.</div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="sm:w-fit	w-full justify-center inline-flex mt-6 text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                        Start
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
