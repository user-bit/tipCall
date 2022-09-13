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
                <a href="{{ url('sign') }}"
                   class="text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                    Sign up
                </a>
                <a href="{{ url('login') }}"
                   class="text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 ml-2.5 tracking-wider hover:bg-pur-pure hover:text-white transition-all	duration-300">
                    Login
                </a>
            </div>
        </div>
    </div>
</header>

<main class="overflow-hidden">
    <div class="xl:py-16 lg:py-8 bg-gray md:pt-0 pt-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap-reverse items-center">
                <div class="md:w-5/12 w-full">
                    <div class="md:block hidden lg:text-4xl text-2xl font-medium leading-normal">
                        Host calls and <br/> get paid
                        <span class="text-pink">for your time</span>
                    </div>
                    <div class="md:text-left text-center text-base mt-5 md:pr-20">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                        sodales mauris quam, imperdiet elementum tortor cursus id.
                    </div>
                    <a href="{{ url('sign') }}"
                       class="md:w-fit justify-center w-full mt-6 inline-flex text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                        Sign up
                    </a>
                </div>
                <div class="md:w-7/12 w-full flex justify-end ">
                    <div class="relative step-content">
                        <img src="<?php echo e(asset('images/preview-bg.png')); ?>">

                        <div class="step-one step-item">
                            <div class="step-one__title">Create your public profile</div>
                            <div class="step-one__avatar">
                                <img src="<?php echo e(asset('images/preview-avatart.png')); ?>">
                            </div>
                        </div>
                        <div class="step-two step-item">
                            <div class="step-two__title">Create your public profile</div>
                            <div class="step-two__avatar">
                                <img src="<?php echo e(asset('images/preview-two.png')); ?>">
                            </div>
                            <div class="step-two__facebook">
                                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="27" cy="27" r="27" fill="#4A2545"/>
                                    <path d="M22.9201 28.8579L18.4402 28.8576C18.4426 27.0992 18.4459 25.4396 18.4521 23.6876L22.8502 23.6878C22.8689 23.2928 22.8961 22.9877 22.9016 22.6823C22.934 21.3209 22.89 19.9391 23.0125 18.6074C23.3013 15.6378 25.1162 13.543 28.0424 13.1379C29.8661 12.8812 31.7504 13.0902 33.6524 13.0902C33.6527 14.696 33.648 16.1579 33.6451 17.7957C32.9643 17.7941 32.2862 17.7823 31.6114 17.7988C31.0074 17.7817 30.403 17.8235 29.8067 17.9235C29.4148 17.9817 29.0558 18.1779 28.7939 18.4772C28.532 18.7764 28.3842 19.1592 28.3771 19.5571C28.3174 20.8783 28.3547 22.2035 28.372 23.6439L33.4857 23.6386C33.2608 25.332 33.074 26.904 32.8298 28.4662C32.79 28.6145 32.416 28.8102 32.1843 28.8413C30.9483 28.8773 29.716 28.8594 28.3658 28.8539C28.3503 33.3051 28.3388 37.6806 28.3298 42.128L22.8803 42.1256C22.9015 37.7143 22.9079 33.3374 22.9201 28.8579Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="step-two__wats">
                                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="27" cy="27" r="27" fill="#E5005B"/>
                                    <path d="M9.68277 38.4986C10.8174 36.2698 11.8514 34.1949 12.9521 32.1466C13.1222 31.8486 13.2294 31.5189 13.2671 31.1781C13.3047 30.8374 13.2719 30.4928 13.1708 30.1659C12.6295 27.9063 12.6032 25.5511 13.0938 23.275C13.5844 20.9989 14.5794 18.8603 16.0049 17.018C17.4304 15.1757 19.2498 13.677 21.328 12.6331C23.4063 11.5892 25.6901 11.0269 28.01 10.9879C30.3298 10.9489 32.6262 11.4342 34.7287 12.4078C36.8311 13.3814 38.6857 14.8183 40.1547 16.6119C41.6237 18.4055 42.6695 20.5098 43.2145 22.7685C43.7594 25.0272 43.7895 27.3823 43.3026 29.6592C42.3641 33.4081 40.0756 36.6821 36.8788 38.8492C33.682 41.0163 29.8035 41.9228 25.992 41.3938C23.3905 40.9907 20.9254 39.9709 18.801 38.4191C18.3819 38.142 17.8877 38.0004 17.3847 38.0133C14.8515 38.1634 12.3862 38.3173 9.68277 38.4986ZM14.0928 35.6655C15.6623 35.5829 17.0016 35.4733 18.3439 35.4597C18.813 35.4715 19.2667 35.6266 19.6442 35.9044C21.3126 37.2933 23.2875 38.2641 25.407 38.7372C33.172 40.4541 40.9391 34.4626 41.0169 26.5622C41.18 24.0496 40.5568 21.5524 39.2342 19.4193C37.9117 17.2862 35.9559 15.6237 33.6399 14.6639C31.349 13.4977 28.7463 13.087 26.2019 13.4902C23.6574 13.8933 21.3006 15.0899 19.4664 16.9097C15.4118 20.6072 14.3678 25.2541 15.974 30.5013C16.106 31.0065 16.0647 31.5422 15.8566 32.0226C15.3863 33.2224 14.7514 34.3625 14.1132 35.6302L14.0928 35.6655Z" fill="white"/>
                                    <path d="M22.8093 18.8043C24.1244 17.6214 25.454 18.1772 25.8544 19.8561C26.0136 20.5131 26.0411 20.729 26.172 21.4755C26.3198 21.9051 26.3091 22.3742 26.1418 22.798C25.9744 23.2218 25.6615 23.5721 25.2597 23.7856C24.6137 24.1542 24.592 24.5771 24.8381 25.2254C25.6102 27.1654 26.9237 28.8391 28.6218 30.0466C28.718 30.1424 28.8324 30.2179 28.9584 30.2684C29.0844 30.3189 29.2193 30.3435 29.3552 30.3408C29.4911 30.338 29.6252 30.3079 29.7495 30.2522C29.8738 30.1966 29.9858 30.1165 30.0789 30.0168C31.7298 28.6982 31.7511 28.7222 33.4462 29.9834L34.0237 30.4227C34.3193 30.584 34.5634 30.8256 34.7279 31.12C34.8925 31.4144 34.9709 31.7497 34.9541 32.0875C34.9374 32.4254 34.8261 32.7521 34.6332 33.0304C34.4403 33.3087 34.1734 33.5272 33.8631 33.6611C33.2061 34.0924 32.4452 34.3367 31.6621 34.3678C30.879 34.3988 30.1033 34.2155 29.4182 33.8375C25.7768 32.007 22.9965 28.8227 21.6668 24.96C21.1342 23.8166 20.9785 22.5313 21.2221 21.2897C21.5042 20.3273 22.055 19.4648 22.8093 18.8043Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="step-two__inst">
                                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="27" cy="27" r="27" fill="#E5005B"/>
                                    <path d="M39.9661 19.8452C39.9082 16.2984 37.6503 14.0261 34.1726 14.0297C29.342 14.0297 24.4986 14.0815 19.6422 14.1852C16.2172 14.2614 14.0253 16.5663 14.0152 20.003C14.0112 22.4358 14.0683 24.8674 14.0955 27.28C14.1227 29.6925 14.137 32.0392 14.1825 34.4161C14.2551 38.0454 16.5081 40.3238 20.0604 40.34C24.8535 40.3367 29.6449 40.285 34.4348 40.1849C37.9375 40.1057 40.1588 37.7639 40.1334 34.2583C40.1035 29.453 40.0477 24.6486 39.9661 19.8452ZM37.8182 34.3407C37.8209 36.5822 36.6328 37.8345 34.4027 37.8794C29.6108 37.961 24.8194 38.0127 20.0283 38.0345C17.8 38.0456 16.5499 36.822 16.5148 34.5897C16.4356 29.7412 16.3774 24.8811 16.3402 20.0093C16.321 17.7696 17.5476 16.513 19.7593 16.4533C24.5508 16.368 29.342 16.3144 34.1331 16.2926C36.362 16.2871 37.6158 17.5439 37.6442 19.7658C37.7007 22.1919 37.7132 24.6229 37.7409 27.0409C37.7687 29.459 37.8155 31.8974 37.817 34.3296L37.8182 34.3407Z" fill="white"/>
                                    <path d="M27.0112 20.3366C25.6729 20.3451 24.3675 20.7515 23.2595 21.5047C22.1514 22.2578 21.2901 23.3241 20.7841 24.5691C20.2782 25.8141 20.1501 27.1822 20.416 28.5012C20.682 29.8202 21.3301 31.031 22.2787 31.9813C23.2273 32.9315 24.4341 33.5786 25.747 33.8412C27.0599 34.1037 28.4202 33.9699 29.6567 33.4566C30.8932 32.9433 31.9505 32.0736 32.6956 30.9567C33.4406 29.8399 33.8401 28.5261 33.8436 27.1806C33.8467 26.2792 33.6719 25.386 33.3292 24.5526C32.9865 23.7192 32.4829 22.9623 31.8474 22.3257C31.2118 21.6892 30.4571 21.1855 29.627 20.8441C28.7968 20.5026 27.9077 20.3301 27.0112 20.3366ZM27.0576 31.6918C25.8859 31.6698 24.7667 31.1973 23.9299 30.3714C23.0932 29.5456 22.6025 28.4292 22.559 27.2518C22.5518 26.6542 22.6618 26.0612 22.8826 25.5067C23.1034 24.9521 23.4308 24.4468 23.846 24.0197C24.2612 23.5925 24.7561 23.2519 25.3025 23.0172C25.8489 22.7826 26.436 22.6584 27.0304 22.6519C27.6247 22.6454 28.2147 22.7567 28.7666 22.9794C29.3185 23.2021 29.8214 23.5318 30.2468 23.9498C30.6721 24.3677 31.0115 24.8657 31.2456 25.4153C31.4797 25.9649 31.6039 26.5553 31.611 27.1529C31.5963 28.3593 31.1108 29.511 30.2591 30.36C29.4074 31.209 28.2577 31.6873 27.0576 31.6918Z" fill="white"/>
                                    <path d="M35.8056 20.0757C35.8095 20.2806 35.7693 20.4839 35.6876 20.6716C35.6059 20.8594 35.4848 21.027 35.3325 21.1632C35.1802 21.2993 35.0004 21.4006 34.8054 21.4602C34.6104 21.5198 34.4048 21.5362 34.2028 21.5083C33.9869 21.5226 33.7705 21.4871 33.5702 21.4047C33.3699 21.3223 33.1908 21.1951 33.0466 21.0328C32.9023 20.8705 32.7968 20.6772 32.7379 20.4679C32.679 20.2585 32.6683 20.0384 32.7067 19.8243C32.7684 18.8704 33.382 18.4214 34.3279 18.356C35.2921 18.5072 35.8655 19.0546 35.8056 20.0757Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="step-two__twit">
                                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="27" cy="27" r="27" fill="#4A2545"/>
                                    <path d="M15.0365 34.3658C17.5788 34.6913 20.1522 34.1189 22.316 32.7467C19.4456 31.6121 18.3427 30.6103 18.0454 28.8991L20.0254 28.9608C17.7788 27.8777 16.5371 26.2009 16.5563 23.6293L18.5461 24.33C16.6289 21.4664 16.362 19.3452 17.7779 17.4851C18.9503 19.1344 20.4467 20.5251 22.1744 21.571C23.9021 22.6168 25.8241 23.2955 27.8215 23.565C27.8302 23.2313 27.8257 22.9787 27.8359 22.7292C27.8179 21.7274 28.1093 20.7454 28.67 19.9184C29.2307 19.0914 30.0332 18.4599 30.967 18.111C31.8847 17.7096 32.9039 17.602 33.8861 17.8031C34.8683 18.0041 35.766 18.5039 36.457 19.2346C36.5865 19.3933 36.7604 19.5093 36.9561 19.5675C37.1518 19.6257 37.3602 19.6235 37.5543 19.5611C38.3786 19.3402 39.1964 19.1211 40.0927 18.8809C39.6488 19.8677 38.9024 20.6853 37.9622 21.2145C37.9791 21.2639 37.9927 21.3145 38.0028 21.3658L40.4882 20.9325L40.5805 21.0417C39.9025 21.6253 39.2397 22.24 38.5297 22.7828C38.3529 22.8969 38.2051 23.0509 38.098 23.2326C37.9909 23.4143 37.9274 23.6186 37.9126 23.8295C37.6547 27.4245 36.0611 30.7872 33.448 33.2504C30.835 35.7137 27.3932 37.0977 23.8055 37.128C20.8501 37.1889 17.9442 36.3415 15.4765 34.6992C15.3312 34.5759 15.1812 34.461 15.0365 34.3658Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div class="step-three step-item">
                            <div class="step-three__title">Get booked</div>
                            <div class="step-three__avatar">
                                <img src="<?php echo e(asset('images/preview-calendar.png')); ?>">
                            </div>
                            <div class="step-three__avatar-one">
                                <img src="<?php echo e(asset('images/preview-avatart.png')); ?>">
                            </div>
                            <div class="step-three__message-one">Lorem ipsum dolor sit ?</div>
                            <div class="step-three__avatar-two">
                                <img src="<?php echo e(asset('images/preview-avatart-two.png')); ?>">
                            </div>
                            <div class="step-three__message-two">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            <div class="step-three__icon-one">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21.9894" cy="21.9894" r="21.9894" fill="#4A2545"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0575 28.8715C13.1682 28.8715 12.4473 27.9451 12.4473 26.8022C12.4473 24.5458 12.4473 20.0917 12.4473 17.8352C12.4473 16.6924 13.1682 15.7659 14.0575 15.7659H25.8655C26.7549 15.7659 27.4757 16.6924 27.4757 17.8352V26.8022C27.4757 27.9451 26.7549 28.8715 25.8655 28.8715C20.9772 28.8715 17.8707 28.8715 14.0575 28.8715Z" fill="#E9E9E9"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.9385 19.2957L31.206 17.1475C31.4469 17.0427 31.7521 17.0558 31.9769 17.1737C32.2178 17.3047 32.3623 17.5142 32.3623 17.7369V26.9061C32.3623 27.1288 32.2178 27.3384 31.9769 27.4694C31.7778 27.5716 31.5032 27.5991 31.206 27.4956L25.9385 25.3474V19.2957Z" fill="#E9E9E9"/>
                                </svg>
                            </div>
                            <div class="step-three__icon-two">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21.9894" cy="21.9894" r="21.9894" fill="#4A2545"/>
                                    <path d="M14.5576 28.4341V32.0595C14.5575 32.1193 14.5752 32.1778 14.6083 32.2275C14.6415 32.2772 14.6887 32.3159 14.7439 32.3388C14.7992 32.3616 14.8599 32.3675 14.9185 32.3558C14.9771 32.344 15.0309 32.3152 15.0731 32.2728L18.8724 28.4642C14.78 28.4341 15.9479 28.4341 14.5576 28.4341Z" fill="#E9E9E9"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7881 26.807C10.7881 28.1222 11.8877 29.1883 13.2438 29.1883H31.2528C32.6091 29.1883 33.7085 28.1222 33.7085 26.807V16.4878C33.7085 15.1727 32.6091 14.1064 31.2528 14.1064H13.2438C11.8877 14.1064 10.7881 15.1727 10.7881 16.4878V26.807ZM18.7073 22.4014C19.332 22.4014 19.8384 21.895 19.8384 21.2703C19.8384 20.6456 19.332 20.1392 18.7073 20.1392C18.0826 20.1392 17.5762 20.6456 17.5762 21.2703C17.5762 21.895 18.0826 22.4014 18.7073 22.4014ZM23.608 21.2703C23.608 21.895 23.1016 22.4014 22.4768 22.4014C21.8521 22.4014 21.3457 21.895 21.3457 21.2703C21.3457 20.6456 21.8521 20.1392 22.4768 20.1392C23.1016 20.1392 23.608 20.6456 23.608 21.2703ZM26.2483 22.4014C26.873 22.4014 27.3795 21.895 27.3795 21.2703C27.3795 20.6456 26.873 20.1392 26.2483 20.1392C25.6236 20.1392 25.1172 20.6456 25.1172 21.2703C25.1172 21.895 25.6236 22.4014 26.2483 22.4014Z" fill="#E9E9E9"/>
                                </svg>
                            </div>
                            <div class="step-three__icon-three">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21.9894" cy="21.9894" r="21.9894" fill="#4A2545"/>
                                    <path d="M28.7773 22.7322C28.7773 22.3339 28.4727 22.0293 28.0744 22.0293C27.6761 22.0293 27.3715 22.3339 27.3715 22.7322C27.3715 25.4734 25.1457 27.6992 22.4045 27.6992C19.6633 27.6992 17.4375 25.4734 17.4375 22.7322C17.4375 22.3339 17.1329 22.0293 16.7346 22.0293C16.3363 22.0293 16.0317 22.3339 16.0317 22.7322C16.0317 25.9888 18.4684 28.7301 21.7016 29.0815V30.9559H19.1478C18.7495 30.9559 18.445 31.2604 18.445 31.6587C18.445 32.057 18.7495 32.3616 19.1478 32.3616H25.6612C26.0595 32.3616 26.3641 32.057 26.3641 31.6587C26.3641 31.2604 26.0595 30.9559 25.6612 30.9559H23.1074V29.0815C26.3406 28.7301 28.7773 25.9888 28.7773 22.7322Z" fill="#E9E9E9"/>
                                    <path d="M22.4049 12.4468C20.2494 12.4468 18.4922 14.204 18.4922 16.3595V22.7088C18.4922 24.8877 20.2494 26.6215 22.4049 26.6449C24.5604 26.6449 26.3176 24.8877 26.3176 22.7322V16.3595C26.3176 14.204 24.5604 12.4468 22.4049 12.4468Z" fill="#E9E9E9"/>
                                </svg>
                            </div>
                            <div class="step-three__time">
                                0:04:46
                            </div>
                        </div>
                        <div class="step-four step-item">
                            <div class="step-four__title">Get paid instantly</div>
                            <div class="step-four__avatar">
                                <img src="<?php echo e(asset('images/preview-four.png')); ?>">
                            </div>
                            <div class="step-four__money-one">
                                <svg width="62" height="92" viewBox="0 0 62 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.2874 12.4546C27.6553 14.9112 28.4254 17.627 28.5006 20.2589C28.5758 22.8908 27.9526 25.3207 26.7098 27.2417C25.4669 29.1626 23.6602 30.4885 21.5178 31.0517C19.3754 31.6149 16.9934 31.3902 14.6729 30.4061C12.3523 29.4219 10.1972 27.7224 8.47987 25.5222C6.76251 23.322 5.55992 20.7199 5.02404 18.0445C4.48815 15.3692 4.64299 12.7406 5.46901 10.4909C6.29503 8.24125 7.75517 6.47136 9.66497 5.40485C10.936 4.69621 12.3745 4.31645 13.8981 4.28729C15.4218 4.25813 17.0006 4.58013 18.5445 5.23489C20.0883 5.88965 21.5668 6.86431 22.8954 8.10313C24.224 9.34195 25.3766 10.8206 26.2874 12.4546Z" fill="#FFC727"/>
                                    <path d="M18.2082 7.31776C19.5036 7.82993 20.7498 8.61685 21.8732 9.63206C22.9988 10.6598 23.9796 11.8914 24.7598 13.2567C25.5421 14.6271 26.1018 16.1073 26.4053 17.6086C26.7162 19.1125 26.7664 20.6084 26.5531 22.008C26.3398 23.4077 25.8672 24.6827 25.1633 25.7578C24.4683 26.8377 23.5533 27.6953 22.4736 28.2788C21.3969 28.8607 20.1821 29.1658 18.8981 29.1768C17.6203 29.1751 16.3005 28.8778 15.0155 28.3022C16.9388 29.073 18.9011 29.2216 20.6612 28.7298C22.4213 28.2381 23.9025 27.1273 24.9228 25.5341C26.2662 23.397 26.6983 20.5568 26.1281 17.6117C25.6864 15.4014 24.7016 13.2497 23.2946 11.4209C21.8876 9.59211 20.1197 8.16598 18.2082 7.31776Z" fill="white"/>
                                    <path opacity="0.1" d="M14.9403 28.3178C13.6451 27.8032 12.3999 27.0122 11.2795 25.9922C10.155 24.9636 9.17668 23.7302 8.40077 22.3631C7.62696 20.9926 7.07455 19.5149 6.77619 18.0173C6.47068 16.5136 6.4252 15.019 6.6424 13.6212C6.85961 12.2235 7.33513 10.9508 8.04106 9.87781C8.74199 8.80171 9.66035 7.94691 10.7418 7.364C11.82 6.78737 13.0357 6.48788 14.3196 6.48261C15.5997 6.48714 16.9215 6.78969 18.2072 7.37241C16.281 6.58821 14.3125 6.4285 12.545 6.91303C10.7776 7.39755 9.28878 8.50507 8.26253 10.0987C6.90945 12.2258 6.46918 15.0625 7.03512 18.0066C7.46984 20.2174 8.4491 22.372 9.8523 24.2049C11.2555 26.0378 13.0213 27.469 14.9323 28.3222L14.9403 28.3178Z" fill="black"/>
                                    <path d="M53.564 75.3404C51.9722 78.4739 49.6389 81.1409 46.8589 83.0046C44.0788 84.8683 40.9768 85.845 37.9447 85.8113C34.9125 85.7776 32.0862 84.7351 29.8229 82.8154C27.5596 80.8958 25.9607 78.1851 25.2283 75.0258C24.496 71.8665 24.6629 68.4003 25.708 65.0652C26.7532 61.73 28.6297 58.6755 31.1005 56.2876C33.5712 53.8996 36.5254 52.2852 39.5899 51.6485C42.6543 51.0117 45.6915 51.3811 48.3178 52.71C50.0644 53.5953 51.5858 54.8831 52.795 56.4999C54.0041 58.1167 54.8773 60.0308 55.3645 62.1326C55.8518 64.2345 55.9436 66.4828 55.6346 68.7491C55.3256 71.0154 54.622 73.2552 53.564 75.3404Z" fill="#FFC727"/>
                                    <path d="M52.8588 63.1832C53.3078 64.9216 53.4224 66.7932 53.196 68.6876C52.9578 70.5929 52.3878 72.4807 51.5186 74.2437C50.6454 76.0123 49.4818 77.6162 48.0975 78.9593C46.716 80.3119 45.1417 81.3793 43.4675 82.0983C41.7934 82.8173 40.0532 83.1734 38.3497 83.1456C36.6479 83.1307 35.0159 82.7289 33.5521 81.9644C32.0924 81.2021 30.8243 80.1039 29.8201 78.7323C28.8343 77.3585 28.1347 75.7394 27.7622 73.9693C28.4176 76.5573 29.7741 78.7658 31.6649 80.3232C33.5557 81.8806 35.8983 82.7192 38.405 82.7358C41.748 82.7311 45.1448 81.2712 47.8799 78.6636C49.922 76.6919 51.4811 74.1763 52.3656 71.4262C53.2502 68.676 53.4216 65.811 52.8588 63.1832Z" fill="white"/>
                                    <path opacity="0.1" d="M27.6878 73.8984C27.2416 72.1586 27.1321 70.2853 27.366 68.3907C27.606 66.4862 28.1798 64.5998 29.0544 62.8402C29.9342 61.0806 31.1007 59.4862 32.4849 58.1513C33.8704 56.8044 35.447 55.743 37.1221 55.0295C38.7973 54.3159 40.5373 53.9645 42.24 53.9959C43.9422 54.0198 45.5738 54.4272 47.0383 55.1939C48.4936 55.9615 49.7562 57.0644 50.7542 58.4398C51.7388 59.8179 52.4343 61.4427 52.7997 63.2185C52.1564 60.6182 50.8071 58.3956 48.9184 56.8254C47.0298 55.2552 44.6847 54.4062 42.173 54.3834C38.8333 54.3711 35.4341 55.8197 32.6967 58.4221C30.6486 60.3867 29.0821 62.8982 28.1902 65.647C27.2983 68.3959 27.1198 71.2622 27.6769 73.8928L27.6878 73.8984Z" fill="black"/>
                                </svg>
                            </div>
                            <div class="step-four__money-two">
                                <svg width="59" height="78" viewBox="0 0 59 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.6515 67.4023C19.9177 69.4336 18.7036 71.239 17.1626 72.5904C15.6217 73.9419 13.8229 74.7788 11.9936 74.9954C10.1643 75.2121 8.38655 74.7987 6.8849 73.8075C5.38326 72.8164 4.22509 71.292 3.55672 69.4268C2.88835 67.5616 2.73976 65.4393 3.12972 63.3282C3.51967 61.217 4.43068 59.2116 5.74766 57.5652C7.06464 55.9189 8.7285 54.7056 10.5291 54.0784C12.3296 53.4513 14.1861 53.4386 15.8639 54.0419C16.9799 54.4439 17.9891 55.1086 18.8339 55.9979C19.6786 56.8872 20.3423 57.9837 20.7869 59.2245C21.2316 60.4654 21.4485 61.8264 21.4253 63.2296C21.402 64.6328 21.1391 66.0508 20.6515 67.4023Z" fill="#FFC727"/>
                                    <path d="M19.3525 60.0593C19.748 61.082 19.9516 62.2119 19.9514 63.3824C19.9448 64.5604 19.7371 65.7537 19.3401 66.8945C18.9412 68.039 18.3554 69.1059 17.6179 70.0315C16.8828 70.9626 16.011 71.7352 15.054 72.3036C14.097 72.8721 13.0742 73.2249 12.0458 73.3412C11.0194 73.4652 10.0073 73.3483 9.07034 72.9976C8.13608 72.6479 7.29315 72.0788 6.58947 71.3226C5.89677 70.5638 5.35892 69.6333 5.0072 68.5852C5.58816 70.1088 6.56419 71.3466 7.81534 72.1465C9.06648 72.9463 10.5382 73.2734 12.0497 73.0875C14.0635 72.8232 16.0051 71.6692 17.4656 69.8686C18.5542 68.5091 19.3127 66.8564 19.648 65.1137C19.9832 63.3711 19.8805 61.6143 19.3525 60.0593Z" fill="white"/>
                                    <path opacity="0.1" d="M4.95709 68.5485C4.56316 67.5247 4.36255 66.3934 4.36728 65.2223C4.37499 64.0446 4.58511 62.8518 4.98552 61.7127C5.3891 60.5732 5.97731 59.5117 6.71537 58.5911C7.45328 57.6632 8.32688 56.8941 9.28486 56.3289C10.2429 55.7637 11.2659 55.4138 12.2941 55.2997C13.3214 55.1812 14.3337 55.3015 15.2712 55.6535C16.2031 56.0068 17.0431 56.5792 17.7433 57.3381C18.4356 58.0997 18.9714 59.034 19.3192 60.086C18.7447 58.554 17.772 57.307 16.5212 56.4992C15.2705 55.6914 13.7965 55.3582 12.2815 55.5408C10.2685 55.7944 8.32461 56.9418 6.86241 58.7394C5.76968 60.0951 5.00642 61.7458 4.66664 63.4882C4.32685 65.2307 4.42538 66.9888 4.95009 68.546L4.95709 68.5485Z" fill="black"/>
                                    <path d="M55.3053 25.1739C54.7559 29.0386 53.1783 32.6678 50.7718 35.6032C48.3652 38.5386 45.2377 40.6485 41.7843 41.6662C38.3309 42.684 34.7065 42.564 31.369 41.3214C28.0316 40.0787 25.1307 37.7693 23.033 34.6848C20.9353 31.6002 19.7347 27.8789 19.5831 23.9911C19.4314 20.1032 20.3354 16.2231 22.1809 12.8411C24.0264 9.45896 26.7305 6.72657 29.9517 4.98907C33.1729 3.25157 36.7667 2.5869 40.279 3.07903C42.6155 3.40785 44.8579 4.24043 46.878 5.52916C48.8981 6.81789 50.6562 8.53747 52.0517 10.5896C53.4473 12.6417 54.453 14.986 55.0113 17.4885C55.5696 19.991 55.6695 22.6026 55.3053 25.1739Z" fill="#FFC727"/>
                                    <path d="M49.6298 12.5714C50.8363 14.2526 51.7169 16.1909 52.2196 18.2717C52.7133 20.368 52.8238 22.5612 52.5446 24.7264C52.2632 26.8989 51.5863 28.9982 50.5543 30.8986C49.5295 32.8081 48.1715 34.483 46.5605 35.8245C44.9495 37.166 43.1181 38.1469 41.1744 38.7093C39.2378 39.2847 37.2252 39.427 35.2579 39.1275C33.2963 38.8289 31.4174 38.1088 29.728 37.008C28.0587 35.8985 26.6159 34.4304 25.4834 32.689C27.2648 35.1965 29.6893 37.0594 32.4589 38.0485C35.2284 39.0377 38.2224 39.1102 41.0728 38.257C44.8635 37.0906 48.1317 34.3677 50.189 30.6617C51.715 27.8685 52.4751 24.6683 52.3757 21.4544C52.2764 18.2406 51.322 15.1531 49.6298 12.5714Z" fill="white"/>
                                    <path opacity="0.1" d="M25.3707 32.6394C24.1667 30.9556 23.2914 29.0139 22.797 26.9303C22.3056 24.8341 22.2002 22.641 22.4867 20.4776C22.7792 18.3123 23.4633 16.222 24.4984 14.3303C25.5301 12.4255 26.8931 10.7561 28.5074 9.42007C30.1217 8.084 31.9547 7.10818 33.899 6.54988C35.8397 5.98382 37.8541 5.84756 39.823 6.14916C41.7817 6.45482 43.6564 7.18185 45.3402 8.28881C47.0098 9.40325 48.4503 10.8788 49.5769 12.6286C47.8044 10.1039 45.3824 8.22364 42.6101 7.22023C39.8379 6.21681 36.837 6.13423 33.9784 6.98271C30.1846 8.12979 26.9092 10.8417 24.8472 14.543C23.3115 17.3308 22.5415 20.5292 22.6319 23.7442C22.7223 26.9593 23.6692 30.0506 25.356 32.6373L25.3707 32.6394Z" fill="black"/>
                                </svg>
                            </div>
                            <div class="step-four__money-three">
                                <img src="<?php echo e(asset('images/pr-money-one.svg')); ?>">
                            </div>
                        </div>

                        <div class="step-round"></div>
                    </div>

                </div>
                <div class="md:hidden block text-2xl text-center w-full font-medium leading-normal">
                    Host calls and <br/> get paid
                    <span class="text-pink">for your time</span>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:py-16 pt-14 pb-4 bg-gray">
        <div class="container mx-auto px-4">
            <div class="text-center font-medium xl:text-4xl lg:text-3xl text-2xl">Who is this for</div>
            <div class="relative">
                <div class="swiper-who mx-auto mt-8 overflow-hidden pb-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="bg-pur-pure">
                                <div class="py-6 sm:text-2xl text-lg font-medium text-white text-center">
                                    Psychotherapist
                                </div>
                            </div>
                            <div class="relative">
                                <div class="absolute top-0 left-0 right-0 bg-pur-pure bottom-2/4"></div>
                                <img class="relative z-10 w-28 h-28 rounded-full mx-auto"
                                     src="<?php echo e(asset('images/slide-1.png')); ?>">
                            </div>
                            <div class="text-center text-pur-pure text-lg font-semibold mt-3">Anna</div>
                            <div class="text-center text-gray-three text-sm font-medium mt-1">Problem</div>
                            <div class="text-gray-eight sm:px-5 px-2 font-medium h-24 overflow-hidden">
                                Covid increased the ratio of online consulting
                            </div>
                            <div class="sm:mt-6 mb-4">
                                <svg width="311" height="9" viewBox="0 0 311 9" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 1H148.212C149.177 1 150.084 1.4649 150.648 2.24909L153.876 6.74048C154.674 7.85078 156.326 7.85078 157.124 6.74048L160.352 2.24909C160.916 1.4649 161.823 1 162.788 1H311"
                                        stroke="#E9E9E9"/>
                                </svg>
                            </div>
                            <div class="text-gray-three text-sm font-medium text-center">Solution</div>
                            <div class="font-medium sm:px-6 px-2 pb-5 mt-2">
                                <span class="text-pink">Tipcall.io</span> solves both booking of sessions and invoicing
                            </div>
                        </div>
                        <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="bg-pur-pure">
                                <div class="py-6 sm:text-2xl text-lg font-medium text-white text-center">
                                    Fashion influencer
                                </div>
                            </div>
                            <div class="relative">
                                <div class="absolute top-0 left-0 right-0 bg-pur-pure bottom-2/4"></div>
                                <img class="relative z-10 w-28 h-28 rounded-full mx-auto"
                                     src="<?php echo e(asset('images/slide-2.png')); ?>">
                            </div>
                            <div class="text-center text-pur-pure text-lg font-semibold mt-3">Maria</div>
                            <div class="text-center text-gray-three text-sm font-medium mt-1">Problem</div>
                            <div class="text-gray-eight sm:px-5 px-2 font-medium h-24 overflow-hidden">
                                Maria has 10K followers. Some of them reach out for private consultations
                            </div>
                            <div class="mt-6 mb-4">
                                <svg width="311" height="9" viewBox="0 0 311 9" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 1H148.212C149.177 1 150.084 1.4649 150.648 2.24909L153.876 6.74048C154.674 7.85078 156.326 7.85078 157.124 6.74048L160.352 2.24909C160.916 1.4649 161.823 1 162.788 1H311"
                                        stroke="#E9E9E9"/>
                                </svg>
                            </div>
                            <div class="text-gray-three text-sm font-medium text-center">Solution</div>
                            <div class="font-medium sm:px-6 px-2 pb-5 mt-2">
                                Maria shared her tipcall page to her followers and now hosts paid sessions
                            </div>
                        </div>
                        <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="bg-pur-pure">
                                <div class="py-6 sm:text-2xl text-lg font-medium text-white text-center">
                                    Public Speaker
                                </div>
                            </div>
                            <div class="relative">
                                <div class="absolute top-0 left-0 right-0 bg-pur-pure bottom-2/4"></div>
                                <img class="relative z-10 w-28 h-28 rounded-full mx-auto"
                                     src="<?php echo e(asset('images/slide-3.png')); ?>">
                            </div>
                            <div class="text-center text-pur-pure text-lg font-semibold mt-3">Jason</div>
                            <div class="text-center text-gray-three text-sm font-medium mt-1">Problem</div>
                            <div class="text-gray-eight sm:px-5 px-2 font-medium h-24 overflow-hidden">
                                People reach out after events for follow on chats and consultations
                            </div>
                            <div class="mt-6 mb-4">
                                <svg width="311" height="9" viewBox="0 0 311 9" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 1H148.212C149.177 1 150.084 1.4649 150.648 2.24909L153.876 6.74048C154.674 7.85078 156.326 7.85078 157.124 6.74048L160.352 2.24909C160.916 1.4649 161.823 1 162.788 1H311"
                                        stroke="#E9E9E9"/>
                                </svg>
                            </div>
                            <div class="text-gray-three text-sm font-medium text-center">Solution</div>
                            <div class="font-medium sm:px-6 px-2 pb-5 mt-2">
                                Jason shares his tipcall link after talks, so anyone can book paid meetings when he’s
                                available
                            </div>
                        </div>

                        <div class="swiper-slide bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="bg-pur-pure">
                                <div class="py-6 text-2xl font-medium text-white text-center">Psychotherapist</div>
                            </div>
                            <div class="relative">
                                <div class="absolute top-0 left-0 right-0 bg-pur-pure bottom-2/4"></div>
                                <img class="relative z-10 w-28 h-28 rounded-full mx-auto"
                                     src="<?php echo e(asset('images/slide-1.png')); ?>">
                            </div>
                            <div class="text-center text-pur-pure text-lg font-semibold mt-3">Anna</div>
                            <div class="text-center text-gray-three text-sm font-medium mt-1">Problem</div>
                            <div class="text-gray-eight px-5 font-medium h-24 overflow-hidden">
                                Covid increased the ratio of online consulting
                            </div>
                            <div class="mt-6 mb-4">
                                <svg width="311" height="9" viewBox="0 0 311 9" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 1H148.212C149.177 1 150.084 1.4649 150.648 2.24909L153.876 6.74048C154.674 7.85078 156.326 7.85078 157.124 6.74048L160.352 2.24909C160.916 1.4649 161.823 1 162.788 1H311"
                                        stroke="#E9E9E9"/>
                                </svg>
                            </div>
                            <div class="text-gray-three text-sm font-medium text-center">Solution</div>
                            <div class="font-medium px-6 pb-5 mt-2">
                                <span class="text-pink">Tipcall.io</span> solves both booking of sessions and invoicing
                            </div>
                        </div>
                    </div>
                    <div class="sm:block hidden swiper-who__prev top-2/4 absolute left-0 z-10 cursor-pointer">
                        <svg class="fill-gray-three hover:fill-pur-pure transition-all duration-300"
                             width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.393465 12C0.393465 11.721 0.500828 11.4418 0.715282 11.2288L11.6988 0.319704C12.128 -0.106568 12.823 -0.106568 13.2519 0.319704C13.6808 0.745976 13.6811 1.43625 13.2519 1.86225L3.04489 12L13.2519 22.1379C13.6811 22.5641 13.6811 23.2544 13.2519 23.6804C12.8227 24.1064 12.1277 24.1067 11.6988 23.6804L0.715282 12.7713C0.500828 12.5583 0.393465 12.279 0.393465 12Z"/>
                        </svg>
                    </div>
                    <div class="sm:block hidden swiper-who__next top-2/4 absolute right-0 z-10 cursor-pointer">
                        <svg class="fill-gray-three hover:fill-pur-pure transition-all duration-300"
                             width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.1803 12C13.1803 11.721 13.073 11.4418 12.8585 11.2288L1.87496 0.319704C1.44578 -0.106568 0.750794 -0.106568 0.321887 0.319704C-0.107021 0.745976 -0.107295 1.43625 0.321887 1.86225L10.5289 12L0.321888 22.1379C-0.107295 22.5641 -0.107295 23.2544 0.321888 23.6804C0.75107 24.1064 1.44605 24.1067 1.87496 23.6804L12.8585 12.7713C13.073 12.5583 13.1803 12.279 13.1803 12Z"/>
                        </svg>
                    </div>
                    <div class="swiper-pagination swiper-who__pagination"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center font-medium xl:text-4xl lg:text-3xl text-2xl">How it works</div>
            <div class="xl:mt-32 lg:mt-20 mt-16 relative">
                <span
                    class="absolute bg-black w-px top-10 md:left-2/4 -z-10 xl:bottom-64 md:bottom-60 bottom-96 left1/4"></span>
                <span
                    class="block bg-pink md:left-2/4 w-3.5 h-3.5 -ml-1.5 rounded-full xl:bottom-64 md:bottom-60 bottom-96 absolute"></span>

                <div class="flex items-center flex-wrap relative mx-auto">
                    <div class="flex md:justify-center md:w-5/12 md:pl-0 w-full justify-start pl-8">
                        <img src="<?php echo e(asset('images/work_1.svg')); ?>">
                    </div>
                    <div class="flex justify-center md:w-2/12">
                        <span
                            class="block bg-pink w-3.5 h-3.5 rounded-full md:static absolute -inset-1.5 md:-mt-28 mt-8"></span>
                    </div>
                    <div class="md:w-5/12 md:pl w-full pl-8">
                        <div class="font-medium xl:text-2xl lg:text-xl md:mt-10 mt-4 text-xl">Register on tipcall.io
                        </div>
                        <div class="md:mt-5 mt-2">Register with your e-mail or social profile and create your
                            tipcall profile
                        </div>
                        <a href="#"
                           class="md:mt-8 inline-block text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider mt-5 hover:bg-transparent hover:text-current transition-all duration-300">Sign
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
                        <div class="font-medium xl:text-2xl lg:text-xl md:mt-10 mt-4 text-xl">Let everyone know you are
                            available for
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
                        <div class="font-medium xl:text-2xl lg:text-xl md:mt-10 mt-4 text-xl">Get paid automatically
                            after each
                            successful video session
                        </div>
                        <div class="md:mt-5 mt-2">
                            After completed meetings, see your earning reports and get paid
                        </div>
                    </div>
                </div>

                <div class="flex items-center flex-wrap-reverse relative mx-auto mt-16">
                    <div class="md:w-5/12 md:pl w-full pl-8">
                        <div class="font-medium xl:text-2xl md:text-xl md:mt-10 md:text-right text-left text-xl mt-2">
                            Best online consultancy
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
                                        <path
                                            d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
                                            fill="#24A439"/>
                                    </svg>
                                </div>
                            </div>
                            <span
                                class="w-11/12 font-medium pl-4 xl:pr-10">Lorem ipsum dolor sit amet, consectetur</span>
                        </li>
                        <li class="flex items-center mb-4">
                            <div class="w-1/12">
                                <div class="w-10 h-10 flex justify-center items-center bg-white rounded-full">
                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
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
                                        <path
                                            d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
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
                                        <path
                                            d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
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
                                        <path
                                            d="M16.5336 0.260679C16.1859 -0.0870394 15.6223 -0.0870394 15.2745 0.260679L5.62006 9.90172L1.51992 5.80158C1.17224 5.45386 0.608541 5.4539 0.260789 5.80158C-0.0869295 6.14926 -0.0869295 6.71296 0.260789 7.06068L4.99049 11.7903C5.33807 12.1379 5.90218 12.1377 6.24962 11.7903L16.5336 1.51981C16.8813 1.17213 16.8813 0.608397 16.5336 0.260679Z"
                                            fill="#24A439"/>
                                    </svg>
                                </div>
                            </div>
                            <span
                                class="w-11/12 font-medium pl-4 xl:pr-10">Lorem ipsum dolor sit amet, consectetur</span>
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
                    <div class="font-medium xl:text-2xl lg:text-xl mt-10">Register for free and get paid after
                        successful meetings
                    </div>
                    <div class="mt-4">
                        It costs 0$ to create and maintain a Tipcall profile, so go ahead and make yourself available
                        for online consultations and earn additional income
                    </div>
                    <div class="mt-4">
                        <a href="#"
                           class="inline-block text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">Sign
                            up</a>
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
                    <li class="mb-1"><a href="#"
                                        class="text-sm font-medium hover:text-pink transition-all duration-300">Privacy
                            policy</a></li>
                    <li class="mb-1"><a href="#"
                                        class="text-sm font-medium hover:text-pink transition-all duration-300">Cooking
                            policy</a></li>
                    <li><a href="#" class="text-sm font-medium hover:text-pink transition-all duration-300">Help
                            center</a></li>
                </ul>
            </div>
            <div class="lg:basis-4/12 md:w-full lg:mt-0 mt-8 w-full">
                <span class="font-medium lg:text-right text-center block">Become an online consultant instantly</span>
                <div class="basis-1/2 flex lg:justify-end justify-center items-center mt-4">
                    <a href="{{ url('sign') }}"
                       class="text-white bg-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 tracking-wider hover:bg-transparent hover:text-current transition-all duration-300">
                        Sign up
                    </a>
                    <a href="{{ url('login') }}"
                       class="text-pur-pure border border-pur-pure rounded-full font-medium px-6 py-2 ml-2.5 tracking-wider hover:bg-pur-pure hover:text-white transition-all duration-300">
                        Login
                    </a>
                </div>
                <span class="mt-10 block text-gray-three lg:text-right text-center text-sm">© SIA Tipcall 2022</span>
            </div>
        </div>
    </div>
    <div class="h-6 bg-gray mt-12"></div>
</footer>

<script src="{{asset('js/app.js')}}" defer></script>
</body>
</html>
