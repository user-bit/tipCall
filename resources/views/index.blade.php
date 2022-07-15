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
<header class="md:py-8 py-4 bg-gray">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="md:basis-1/2 w-full flex md:justify-start justify-center">
                <img src="<?php echo e(asset('images/logo.svg')); ?>">
            </div>
            <div class="md:basis-1/2 w-full flex md:justify-end md:mt-0 items-center justify-center mt-8">
                <a href="{{ url('sign') }}" class="text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider">
                    Sign up
                </a>
                <a href="{{ url('login') }}" class="text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 ml-2.5 tracking-wider">
                    Login
                </a>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="xl:py-16 lg:py-8 bg-gray md:pt-0 pt-10">
        <div class="container mx-auto px-4">
            <div class="text-center font-medium xl:text-4xl lg:text-3xl text-2xl">Become an online consultant instantly</div>
            <div class="flex flex-wrap xl:mt-24 lg:mt-16 mt-8">
                <div class="xl:basis-1/4 lg:basis-1/2 basis-full md:mb-10">
                    <div class="flex justify-center items-center h-48">
                        <img src="<?php echo e(asset('images/consulting-1.svg')); ?>">
                    </div>
                    <div class="px-2 font-semibold text-lg	text-center lg:text-base text-sm">Create your Tipcall profile,
                        Set up available hours and hourly rates
                    </div>
                </div>
                <div class="xl:basis-1/4 lg:basis-1/2 basis-full md:mb-10">
                    <div class="flex justify-center items-center h-48">
                        <img src="<?php echo e(asset('images/consulting-2.svg')); ?>">
                    </div>
                    <div class="px-2 font-semibold text-lg	text-center lg:text-base text-sm">Promote yourself</div>
                </div>
                <div class="xl:basis-1/4 lg:basis-1/2 basis-full md:mb-10">
                    <div class="info-block__photo flex justify-center items-center h-48">
                        <img src="<?php echo e(asset('images/consulting-3.svg')); ?>">
                    </div>
                    <div class="px-2 font-semibold text-lg	text-center lg:text-base text-sm">Let people book meetings
                        with you
                    </div>
                </div>
                <div class="xl:basis-1/4 lg:basis-1/2 basis-full md:mb-10">
                    <div class="flex justify-center items-center h-48">
                        <img src="<?php echo e(asset('images/consulting-4.svg')); ?>">
                    </div>
                    <div class="px-2 font-semibold text-lg	text-center lg:text-base text-sm">Get paid</div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center font-medium xl:text-4xl lg:text-3xl text-2xl">How it works</div>
            <div class="xl:mt-32 lg:mt-20 mt-16 relative">
                <span class="absolute bg-black w-px top-10 md:left-2/4 -z-10 xl:bottom-64 md:bottom-60 bottom-96 left1/4"></span>
                <span class="block bg-pink md:left-2/4 w-3.5 h-3.5 -ml-1.5 rounded-full xl:bottom-64 md:bottom-60 bottom-96 absolute"></span>

                <div class="flex items-center flex-wrap relative mx-auto">
                    <div class="flex md:justify-center md:w-5/12 md:pl-0 w-full justify-start pl-8">
                        <img src="<?php echo e(asset('images/work_1.svg')); ?>">
                    </div>
                    <div class="flex justify-center md:w-2/12">
                        <span class="block bg-pink w-3.5 h-3.5 rounded-full md:static absolute -inset-1.5 md:-mt-28 mt-8"></span>
                    </div>
                    <div class="md:w-5/12 md:pl w-full pl-8">
                        <div class="font-medium xl:text-2xl lg:text-xl md:mt-10 mt-4 text-xl">Register on tipcall.io</div>
                        <div class="md:mt-5 mt-2">Register with your e-mail or social profile and create your
                            tipcall profile
                        </div>
                        <a href="#"
                           class="md:mt-8 inline-block text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider mt-5">Sign
                            up</a>
                    </div>
                </div>

                <div class="flex items-center flex-wrap-reverse relative mx-auto mt-16">
                    <div class="md:w-5/12 md:pl w-full pl-8">
                        <div class="font-medium xl:text-2xl md:text-xl md:mt-10 md:text-right text-left text-xl mt-2">
                            Set up availability hours and your hourly rates
                        </div>
                        <div class="md:mt-5 md:text-right xl:pl-10 text-left mt-2">
                            Make sure you offer several types of meetings and meeting lengths, to make yourself more
                            available
                        </div>
                    </div>
                    <div class="flex justify-center md:w-2/12 ">
                        <span class="block bg-pink w-3.5 h-3.5 rounded-full mt-10 md:static absolute -inset-1.5"></span>
                    </div>
                    <div class="flex md:justify-center md:w-5/12 md:pl-0 w-full justify-start pl-8">
                        <img src="<?php echo e(asset('images/work_2.png')); ?>" class="xl:min-w-fit lg:min-w-full">
                    </div>
                </div>

                <div class="flex items-center flex-wrap relative mx-auto mt-16">
                    <div class="flex md:justify-center md:w-5/12 md:pl-0 w-full justify-start pl-8">
                        <img src="<?php echo e(asset('images/work_3.png')); ?>" class="xl:min-w-fit lg:min-w-full">
                    </div>
                    <div class="flex justify-center md:w-2/12 ">
                        <span class="block bg-pink w-3.5 h-3.5 rounded-full mt-10 md:static absolute -inset-1.5"></span>
                    </div>
                    <div class="md:w-5/12 md:pl w-full pl-8">
                        <div class="font-medium xl:text-2xl lg:text-xl md:mt-10 mt-4 text-xl">Let everyone know you are available for
                            online consultations
                        </div>
                        <div class="md:mt-5 mt-2">
                            Promote yourself to your followers through posts, stories or ads
                        </div>
                    </div>
                </div>

                <div class="flex items-center flex-wrap-reverse relative mx-auto mt-16">
                    <div class="md:w-5/12 md:pl w-full pl-8">
                        <div class="font-medium xl:text-2xl md:text-xl md:mt-10 md:text-right text-left text-xl mt-2">
                            Add your calendar link and
                            badge to your social and professional profile description
                        </div>
                        <div class="md:mt-5 md:text-right xl:pl-10 text-left mt-2">
                            This will allow you to passively promote yourself and get additional bookings
                        </div>
                    </div>
                    <div class="flex justify-center md:w-2/12 ">
                        <span class="block bg-pink w-3.5 h-3.5 rounded-full mt-10 md:static absolute -inset-1.5"></span>
                    </div>
                    <div class="flex md:justify-center md:w-5/12 md:pl-0 w-full justify-start pl-8">
                        <img src="<?php echo e(asset('images/work_4.svg')); ?>" class="xl:min-w-fit lg:min-w-full">
                    </div>
                </div>

                <div class="flex items-center flex-wrap relative md:mt-24 mt-16">
                    <div class="flex md:justify-center md:w-5/12 md:pl-0 w-full justify-start pl-8">
                        <img src="<?php echo e(asset('images/work_5.png')); ?>" class="xl:min-w-fit lg:min-w-full">
                    </div>
                    <div class="flex justify-center md:w-2/12 ">
                        <span class="block bg-pink w-3.5 h-3.5 rounded-full mt-10 md:static absolute -inset-1.5"></span>
                    </div>
                    <div class="md:w-5/12 md:pl w-full pl-8">
                        <div class="font-medium xl:text-2xl lg:text-xl md:mt-10 mt-4 text-xl">Get paid automatically after each
                            successful video session
                        </div>
                        <div class="md:mt-5 mt-2">
                            After completed meetings, see your earning reports and get paid
                        </div>
                    </div>
                </div>

                <div class="flex items-center flex-wrap-reverse relative mx-auto mt-16">
                    <div class="md:w-5/12 md:pl w-full pl-8">
                        <div class="font-medium xl:text-2xl md:text-xl md:mt-10 md:text-right text-left text-xl mt-2">Best online consultancy
                            platform for professionals & influencers
                        </div>
                        <div class="md:mt-5 md:text-right xl:pl-10 text-left mt-2">
                            There could be quite a few people willing to pay for having a chat with you - convert your
                            followers into paid customers
                        </div>
                    </div>
                    <div class="flex justify-center md:w-2/12"></div>
                    <div class="flex md:justify-center md:w-5/12 md:pl-0 w-full justify-start pl-8">
                        <img src="<?php echo e(asset('images/work_6.svg')); ?>" class="xl:min-w-fit lg:min-w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-12 xl:py-16 md:py-14 py-8 bg-gray">
        <div class="container mx-auto px-4">
            <div class="text-center font-medium xl:text-4xl lg:text-3xl text-2xl">Tips & Tricks</div>
            <div class="xl:mt-20 lg:mt-14 flex flex-wrap items-center mt-10">
                <div class="xl:basis-1/2 md:basis-5/12 flex justify-center w-full">
                    <img src="<?php echo e(asset('images/tips.png')); ?>">
                </div>
                <div class="xl:basis-1/2 md:basis-7/12 md:mt-0 w-full mt-10">
                    <ul class="md:pl-6 pl-0">
                        <li class="flex items-center md:mb-4 mb-2">
                            <div class="w-1/12">
                                <div class="w-10 h-10 flex justify-center items-center bg-white rounded-full">
                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
                                              fill="#24A439"/>
                                    </svg>
                                </div>
                            </div>
                            <span class="w-11/12 font-medium pl-4 xl:pr-10">Lorem ipsum dolor sit amet, consectetur</span>
                        </li>
                        <li class="flex items-center mb-4">
                            <div class="w-1/12">
                                <div class="w-10 h-10 flex justify-center items-center bg-white rounded-full">
                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
                                              fill="#24A439"/>
                                    </svg>
                                </div>
                            </div>
                            <span class="w-11/12 font-medium pl-4 xl:pr-10">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </li>
                        <li class="flex items-center mb-4">
                            <div class="w-1/12">
                                <div class="w-10 h-10 flex justify-center items-center bg-white rounded-full">
                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
                                              fill="#24A439"/>
                                    </svg>
                                </div>
                            </div>
                            <span class="w-11/12 font-medium pl-4 xl:pr-10">Lorem ipsum dolor sit amet</span>
                        </li>
                        <li class="flex items-center mb-4">
                            <div class="w-1/12">
                                <div class="w-10 h-10 flex justify-center items-center bg-white rounded-full">
                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
                                              fill="#24A439"/>
                                    </svg>
                                </div>
                            </div>
                            <span class="w-11/12 font-medium pl-4 xl:pr-10">Lorem ipsum dolor sit amet, consectetur adipiscing ipsum dolor sit</span>
                        </li>
                        <li class="flex items-center mb-4">
                            <div class="w-1/12">
                                <div class="w-10 h-10 flex justify-center items-center bg-white rounded-full">
                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
                                              fill="#24A439"/>
                                    </svg>
                                </div>
                            </div>
                            <span class="w-11/12 font-medium pl-4 xl:pr-10">Lorem ipsum dolor sit amet, consectetur</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="md:my-24 my-14">
        <div class="container mx-auto px-4">
            <div class="text-center font-medium xl:text-4xl lg:text-3xl text-2xl">Pricing</div>
            <div class="mt-8 flex flex-wrap-reverse items-center">
                <div class="md:basis-1/2 xl:pl-16 xl:pr-16 lg:pr-10 w-full">
                    <div class="font-medium xl:text-2xl lg:text-xl mt-10">Register for free and get paid after successful meetings</div>
                    <div class="mt-4">
                        It costs 0$ to create and maintain a Tipcall profile, so go ahead and make yourself available for online consultations and earn additional income
                    </div>
                    <div class="mt-4">
                        <a href="#" class="inline-block text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider">Sign up</a>
                    </div>
                </div>
                <div class="md:basis-1/2 w-full">
                    <img src="<?php echo e(asset('images/price.svg')); ?>">
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="mt-14 pt-12 border-gray-two border-t">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="lg:basis-4/12 md:basis-6/12 w-full md:text-left text-center">
                <img src="<?php echo e(asset('images/logo.svg')); ?>" class="md:mx-0 mx-auto">
                <span class="text-sm block mt-6">Satekles iela 2c, Rīga, Latvija, LV-1050</span>
                <a href="tel:+371 67 288 887" class="block mt-2 text-sm font-medium">+371 67 288 887</a>
                <a href="mailto:info@tipcall.oi" class="block mt-1 text-sm font-medium text-pink">info@tipcall.oi</a>
            </div>
            <div class="lg:basis-4/12 md:basis-6/12 w-full">
                <ul class="md:pl-6 md:mt-16 lg:text-left md:text-right text-center p-0 mt-4">
                    <li class="mb-1"><a href="#" class="text-sm font-medium">Privacy policy</a></li>
                    <li class="mb-1"><a href="#" class="text-sm font-medium">Cooking policy</a></li>
                    <li><a href="#" class="text-sm font-medium">Help center</a></li>
                </ul>
            </div>
            <div class="lg:basis-4/12 md:w-full lg:mt-0 mt-8 w-full">
                <span class="font-medium lg:text-right text-center block">Become an online consultant instantly</span>
                <div class="basis-1/2 flex lg:justify-end justify-center items-center mt-4">
                    <button class="text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider">
                        Sign up
                    </button>
                    <button class="text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 ml-2.5 tracking-wider">
                        Login
                    </button>
                </div>
                <span class="mt-10 block text-gray-three lg:text-right text-center text-sm">© SIA Tipcall 2022</span>
            </div>
        </div>
    </div>
    <div class="h-6 bg-gray mt-12"></div>
</footer>
</body>
</html>
