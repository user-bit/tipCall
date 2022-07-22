<header class=" py-4 border-gray-two border-b bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap" x-data="{ open: false }">
            <div class="basis-1/2">
                <img src="<?php echo e(asset('images/logo.svg')); ?>">
            </div>
            <div class="flex md:hidden basis-1/2 flex-col items-end justify-center pointer open-menu">
                <span class="w-10 h-0.5 bg-pur-pure block relative -top-2"></span>
                <span class="w-10 h-0.5 bg-pur-pure block relative"></span>
                <span class="w-10 h-0.5 bg-pur-pure block relative top-2"></span>
            </div>
            <div class="info-menu md:basis-1/2 w-full md:justify-end justify-center md:flex hidden">
                <ul class="flex flex-wrap w-full justify-end">
                    <li class="md:pr-6 pr-0 md:w-fit w-full flex justify-center items-center mb-2">
                        <a href="{{ url('dashboard') }}" class="font-semibold hover:text-pink transition-all duration-300">Home</a></li>
                    <li class="md:pr-6 pr-0 md:w-fit w-full flex justify-center items-center mb-2">
                        <a href="#" class="flex hover:text-pink transition-all duration-300">
                            <span>Meetings</span>
                            <span class="w-2.5 h-2.5 bg-pink relative rounded-full block -top-1.5"></span>
                        </a>
                    </li>
                    <li class="md:pr-6 pr-0 md:w-fit w-full flex justify-center items-center mb-2"><a href="{{ url('faq') }}" class="hover:text-pink transition-all duration-300">Help</a></li>
                    <li class="relative md:w-fit w-full flex justify-center items-center mb-2" x-data="{ open: false }">
                        <a href="#" class="flex items-center font-semibold hover:text-pink transition-all duration-300" @click="open = ! open">
                            <span class="pr-4">Account</span>
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M0.292893 0.292893C0.683416 -0.097631 1.31658 -0.097631 1.7071 0.292893L4.99999 3.58579L8.29288 0.292893C8.6834 -0.0976311 9.31657 -0.0976311 9.70709 0.292893C10.0976 0.683417 10.0976 1.31658 9.70709 1.70711L5.7071 5.70711C5.31657 6.09763 4.68341 6.09763 4.29289 5.70711L0.292893 1.70711C-0.0976309 1.31658 -0.0976309 0.683418 0.292893 0.292893Z"
                                      fill="#1D1D1B"/>
                            </svg>
                        </a>
                        <ul class="bg-white p-3 rounded-md  absolute shadow top-8 right-0 md:w-28 w-full" x-show="open"
                            @click.outside="open = false" x-transition.duration.500ms>
                            <li class="mb-2 md:text-left text-center">
                                <a href="{{ url('my-profile') }}" class="text-sm font-medium hover:text-pink transition-all duration-300">
                                    My profile
                                </a>
                            </li>
                            <li class="mb-2 md:text-left text-center">
                                <a href="{{ url('billing') }}" class="text-sm font-medium hover:text-pink transition-all duration-300">Billing</a></li>
                            <li class="md:text-left text-center"><a href="#" class="text-sm font-medium hover:text-pink transition-all duration-300">Sign out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
