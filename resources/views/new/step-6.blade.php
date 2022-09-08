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

        <div class="mt-8 relative md:block hidden">
            <div
                class="absolute xl:left-72 xl:right-72 lg:left-36 lg:right-36 left-20 right-20 top-4 h-px bg-gray-three -z-10"></div>
            <div class="flex justify-center lg:space-x-24 space-x-12">
                <div>
                    <div
                        class="mx-auto w-8	h-8 border border-pink rounded-full text-lg font-medium flex justify-center items-center text-white bg-pink">
                        1
                    </div>
                    <div class="text-current font-medium mt-2">Create plan</div>
                </div>
                <div>
                    <div
                        class="mx-auto w-8	h-8 border border-pink rounded-full text-lg font-medium flex justify-center items-center text-white bg-pink">
                        2
                    </div>
                    <div class="text-current font-medium mt-2">Connect calendar</div>
                </div>
                <div>
                    <div
                        class="mx-auto w-8	h-8 border border-pink rounded-full text-lg font-medium flex justify-center items-center text-white bg-pink">
                        3
                    </div>
                    <div class="text-current font-medium mt-2">Create promo page</div>
                </div>
                <div>
                    <div
                        class="mx-auto w-8	h-8 border border-pink rounded-full text-lg font-medium flex justify-center items-center text-pink bg-gray">
                        4
                    </div>
                    <div class="text-pink font-medium mt-2">Setup Billing</div>
                </div>
            </div>
        </div>

        <div class="flex md:mt-12 mt-2 md:pb-12 pb-24">
            <div class="md:w-8/12 w-full md:pr-10">
                <div class="md:bg-white md:rounded-3xl md:shadow-md  md:p-8">
                    <div class="text-2xl font-medium">Setup Billing with</div>

                    <div class="mt-16">
                        <svg width="77" height="32" viewBox="0 0 77 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M76.9033 16.5338C76.9033 11.0651 74.2544 6.75 69.1916 6.75C64.1074 6.75 61.0312 11.0651 61.0312 16.4911C61.0312 22.9211 64.6628 26.1681 69.8752 26.1681C72.4172 26.1681 74.3398 25.5914 75.7925 24.7796V20.5072C74.3398 21.2335 72.6736 21.6821 70.5587 21.6821C68.4866 21.6821 66.6495 20.9558 66.4145 18.4351H76.8606C76.8606 18.1574 76.9033 17.0465 76.9033 16.5338ZM66.3504 14.5044C66.3504 12.0905 67.8244 11.0865 69.1702 11.0865C70.4733 11.0865 71.8618 12.0905 71.8618 14.5044H66.3504Z"
                                  fill="#1D1D1B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M52.784 6.75C50.6905 6.75 49.3447 7.73266 48.597 8.41624L48.3193 7.09179H43.6196V32L48.9602 30.8678L48.9815 24.8223C49.7505 25.3777 50.8827 26.1681 52.7626 26.1681C56.5864 26.1681 60.0684 23.092 60.0684 16.3202C60.0471 10.1252 56.5223 6.75 52.784 6.75ZM51.5022 21.4685C50.2419 21.4685 49.4942 21.0199 48.9815 20.4645L48.9602 12.5391C49.5156 11.9196 50.2846 11.4924 51.5022 11.4924C53.4462 11.4924 54.792 13.6713 54.792 16.4698C54.792 19.3323 53.4676 21.4685 51.5022 21.4685Z"
                                  fill="#1D1D1B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M36.2734 5.49006L41.6353 4.33651V0L36.2734 1.13219V5.49006Z" fill="#1D1D1B"/>
                            <path d="M41.6353 7.11426H36.2734V25.8061H41.6353V7.11426Z" fill="#1D1D1B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M30.5268 8.69321L30.185 7.11241H25.5708V25.8042H30.9113V13.1365C32.1717 11.4916 34.3079 11.7907 34.9701 12.0257V7.11241C34.2865 6.85607 31.7872 6.3861 30.5268 8.69321Z"
                                  fill="#1D1D1B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M19.8455 2.47754L14.6332 3.58837L14.6118 20.6994C14.6118 23.861 16.983 26.1895 20.1446 26.1895C21.8963 26.1895 23.178 25.869 23.883 25.4845V21.148C23.1994 21.4257 19.8242 22.4084 19.8242 19.2468V11.6632H23.883V7.11312H19.8242L19.8455 2.47754Z"
                                  fill="#1D1D1B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.40461 12.5391C5.40461 11.706 6.0882 11.3856 7.22039 11.3856C8.84391 11.3856 10.8947 11.8769 12.5182 12.7527V7.73266C10.7451 7.02771 8.99344 6.75 7.22039 6.75C2.88388 6.75 0 9.01438 0 12.7955C0 18.6914 8.1176 17.7515 8.1176 20.2936C8.1176 21.2762 7.26311 21.5967 6.06684 21.5967C4.29378 21.5967 2.0294 20.8703 0.234983 19.8877V24.9719C2.22166 25.8264 4.2297 26.1895 6.06684 26.1895C10.5102 26.1895 13.5649 23.9892 13.5649 20.1654C13.5436 13.7995 5.40461 14.9317 5.40461 12.5391Z"
                                  fill="#1D1D1B"/>
                        </svg>
                        <div class="mt-3 text-sm font-medium">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum ex et accumsan
                            molestie. Vivamus scelerisque ac odio id venenatis. Nulla a placerat dolor, condimentum
                            sollicitudin ante.
                        </div>
                    </div>

                    <button
                        class="mt-10 text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                        Connect with stripe
                    </button>
                </div>
            </div>

            <div
                class="open-bottom md:hidden block p-4 flex items-center justify-center fixed left-0 right-0 bottom-0 bg-white shadow-2xl shadow-black px-10 rounded-t-xl z-10">
                <div class="w-20 rounded-lg	h-1 bg-gray-two absolute top-2"></div>
                <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.71094 20.25H18.2891C19.8399 20.25 21.1016 18.9883 21.1016 17.4375V2.8125C21.1016 1.26169 19.8399 0 18.2891 0H3.71094C2.16013 0 0.898438 1.26169 0.898438 2.8125V21.1875C0.898438 22.7383 2.16013 24 3.71094 24H17.3516H18.2891C19.8399 24 21.1016 22.7383 21.1016 21.1875V21.1852C20.3176 21.775 19.3435 22.125 18.2891 22.125H17.3516H3.71094C3.194 22.125 2.77344 21.7044 2.77344 21.1875C2.77344 20.6706 3.194 20.25 3.71094 20.25ZM2.77344 2.8125C2.77344 2.29556 3.194 1.875 3.71094 1.875H18.2891C18.806 1.875 19.2266 2.29556 19.2266 2.8125V17.4375C19.2266 17.9544 18.806 18.375 18.2891 18.375H3.71094C3.38239 18.375 3.06678 18.4316 2.77344 18.5356V2.8125ZM9.42969 7.90219H7.55469C7.55469 6.94041 7.96691 6.01983 8.68569 5.37638C9.41389 4.72444 10.3935 4.41281 11.3735 4.52166C12.9435 4.69589 14.2077 5.95683 14.3795 7.51997C14.5362 8.94562 13.7002 9.96863 13.0577 10.6141C12.8923 10.7802 12.7397 10.9258 12.605 11.0543C11.9924 11.6385 11.9143 11.7367 11.9143 12.1404V12.1875H10.0393V12.1404C10.0393 10.9101 10.6287 10.3481 11.311 9.69731C11.4436 9.57089 11.5807 9.44016 11.7288 9.29133C12.3343 8.68303 12.5697 8.21456 12.5158 7.72481C12.4391 7.02684 11.8717 6.46345 11.1667 6.38522C10.7099 6.33469 10.2726 6.47231 9.93631 6.77344C9.60959 7.06584 9.42969 7.46672 9.42969 7.90219ZM10.0391 13.5938H11.9141V15.4688H10.0391V13.5938Z"
                        fill="#4A2545"/>
                </svg>


                <span class="text-lg font-semibold ml-2">Setup guide</span>
            </div>

            <div class="content-bottom w-4/12 px-6 sm:px-14 pb-10 md:p-0">
                <img class="w-full" src="<?php echo e(asset('images/step-5.png')); ?>">
                <div class="mt-2 relative">
                    <div class="pl-8 relative border-b-[rgba(182, 182, 182, 0.16)]">
                        <div class="w-3	h-3 absolute left-0 rounded-full bg-pink top-2"></div>
                        <div class="text-lg	font-medium">Setup Billing</div>
                        <div class="mt-2 text-sm font-medium">
                            Lorem ipsum dolor sit consectetur adipiscing elit. Nulla varius nisi vel.
                        </div>
                        <div class="pt-3 border-b border-gray-two pl-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
