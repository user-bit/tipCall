<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TipCall - Home</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body class="font-sans text-base font-normal text-current">
<div class="flex min-h-screen">
    <div class="w-1/2 bg-gray absolute inset-0 -z-10"></div>
    <div class="container mx-auto px-4">
        <div class="flex">
            <div class="md:w-1/2 md:block hidden mt-10 lg:pr-16 md:pr-5">
                <a href="{{ url('/') }}">
                    <img src="<?php echo e(asset('images/logo.svg')); ?>">
                </a>
                <div class="mt-6 text-sm font-medium">Welcome to <span class="text-pink">Tipcall.io</span> - we are happy to see that you've chosen to become an
                    online consultant
                </div>
                <img src="<?php echo e(asset('images/sign.svg')); ?>" class="mx-auto mt-24">
            </div>
            <div class="md:w-1/2 w-full lg:pl-16 md:pl-5 mt-6">
                <a href="{{ url('/') }}" class="md:hidden ">
                    <img src="<?php echo e(asset('images/logo.svg')); ?>">
                </a>
                <div class="md:text-4xl text-2xl font-medium lg:mt-32 md:mt-24 mt-8">Log In to Tipcall</div>
                <div class="flex md:mt-6 mt-2">
                    <span>Don’t have an account?</span>
                    <a href="{{ url('sign') }}" class="ml-2 font-medium text-pink">Sign Up</a>
                </div>
                <form class="mt-8" type="post">
                    <div class="mb-6">
                        <label class="font-medium block text-sm">E-mail</label>
                        <input class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0	placeholder:text-gray-four text-pur-pure" type="mail" placeholder="johnsmith@gmail.com">
                    </div>
                    <div class="mb-6">
                        <label class="font-medium block text-sm">Password</label>
                        <input class="mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0	text-pur-pure" type="password" placeholder="">
                    </div>
                    <div class="flex justify-between">
                        <div class="flex">
                            <div class="flex items-center justify-center w-full mb-12">
                                <label for="toggleB" class="flex items-center cursor-pointer">
                                    <div class="relative">
                                        <input type="checkbox" id="toggleB" class="sr-only">
                                        <div class="block bg-gray-two w-11 h-6 rounded-full"></div>
                                        <div class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
                                    </div>
                                    <div class="ml-3 font-medium text-sm">Remember me</div>
                                </label>
                            </div>
                        </div>
                        <a href="#" class="font-medium text-sm text-pink">Forgot password?</a>
                    </div>
                    <button class="bg-pur-pure text-white w-full py-4 rounded-full font-medium">Log In</button>
                </form>
                <div class="mt-8 font-medium">Log In with</div>
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-2 w-full mt-4 pb-4">
                    <button class="flex items-center justify-center py-2 border border-pur-pure rounded-full w-full">
                        <img src="<?php echo e(asset('images/icon-google.svg')); ?>">
                        <span class="text-sm font-medium ml-2">Google</span>
                    </button>
                    <button class="flex items-center justify-center py-2 border border-pur-pure rounded-full w-full">
                        <img src="<?php echo e(asset('images/icon-facebook.svg')); ?>">
                        <span class="text-sm font-medium ml-2">Facebook</span>
                    </button>
                    <button class="flex items-center justify-center py-2 border border-pur-pure rounded-full w-full">
                        <img src="<?php echo e(asset('images/icon-linked.svg')); ?>">
                        <span class="text-sm font-medium ml-2">Linkedin</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
