@extends('layouts.main')
@section('title', 'TipCall - FAQ')
@section('content')
    <x-header/>
    <div class="pt-10 pb-10">
        <div class="container mx-auto px-4">
            <div class="text-4xl font-medium text-center">Need help?</div>
            <div class="text-pink text-center font-medium mt-2.5">info@tipcall.io</div>
            <div class="text-2xl font-medium mt-16 text-center">Frequently asked questions</div>

            <div class="sm:w-10/12 w-full mx-auto mt-6 border border-gray-two bg-white rounded-2xl">
                <div class="border-b border-gray-two sm:px-8 px-4" x-data="{ open: true }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
                <div class="border-b border-gray-two sm:px-8 px-4" x-data="{ open: false }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
                <div class="border-b border-gray-two sm:px-8 px-4" x-data="{ open: false }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
                <div class="border-b border-gray-two sm:px-8 px-4" x-data="{ open: false }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
                <div class="sm:px-8 px-4" x-data="{ open: false }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
            </div>

            <div class="text-2xl font-medium mt-16 text-center">Tips & Tricks</div>

            <div class="sm:w-10/12 w-full mx-auto mt-6 border border-gray-two bg-white rounded-2xl">
                <div class="border-b border-gray-two sm:px-8 px-4" x-data="{ open: true }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
                <div class="border-b border-gray-two sm:px-8 px-4" x-data="{ open: false }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
                <div class="border-b border-gray-two sm:px-8 px-4" x-data="{ open: false }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
                <div class="border-b border-gray-two sm:px-8 px-4" x-data="{ open: false }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
                <div class="sm:px-8 px-4" x-data="{ open: false }">
                    <div class="flex justify-between items-center sm:py-7 py-5 cursor-pointer" @click="open = !open">
                        <span class="sm:text-lg text-base font-medium w-11/12">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M9.70712 5.70711C9.31659 6.09763 8.68343 6.09763 8.2929 5.70711L5.00002 2.41421L1.70713 5.70711C1.3166 6.09763 0.68344 6.09763 0.292917 5.70711C-0.0976076 5.31658 -0.0976075 4.68342 0.292917 4.29289L4.29291 0.292893C4.68343 -0.0976314 5.3166 -0.0976314 5.70712 0.292893L9.70712 4.29289C10.0976 4.68342 10.0976 5.31658 9.70712 5.70711Z" fill="#1D1D1B"/>
                            <path x-show="!open" fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.292885 0.292893C0.683408 -0.097631 1.31657 -0.097631 1.7071 0.292893L4.99998 3.58579L8.29287 0.292893C8.6834 -0.0976311 9.31656 -0.0976311 9.70708 0.292893C10.0976 0.683417 10.0976 1.31658 9.70708 1.70711L5.70709 5.70711C5.31657 6.09763 4.6834 6.09763 4.29288 5.70711L0.292885 1.70711C-0.0976391 1.31658 -0.0976391 0.683417 0.292885 0.292893Z"
                                  fill="#1D1D1B"/>
                        </svg>
                    </div>
                    <div class="sm:pb-8 pb-5 sm:text-base text-sm" x-show="open"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform -translate-y-6"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform translate-y-0"
                         x-transition:leave-end="opacity-0 transform -translate-y-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae risus risus. Cras pretium
                        hendrerit massa, et pretium orci mattis vitae. Fusce nec posuere quam, et scelerisque nunc.
                        Fusce est ligula, sodales hendrerit condimentum blandit, lobortis quis urna.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
