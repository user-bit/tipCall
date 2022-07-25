@extends('layouts.main')
@section('title', 'TipCall - my-plans')
@section('content')
    <x-header/>
    <main>
        <div class="bg-gray">
            <div class="container mx-auto px-4 flex justify-between">
                <x-left-menu/>
                <div class="lg:w-3/4 w-full sm:pt-12 pt-8 sm:pb-12 pb-8 lg:pl-8">
                    <div class="text-2xl font-medium">Billing</div>
                    <div class="mb-6 sm:w-2/5 w-full mt-7">
                        <label class="font-medium block text-sm">Year</label>
                        <select class="form-select mt-2 h-12 px-4 rounded-md border border-gray-two w-full outline-0 appearance-none
                                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label="Default select example">
                            <option selected>2022</option>
                            <option value="1">2021</option>
                            <option value="2">2020</option>
                            <option value="3">2019</option>
                        </select>
                    </div>

                    <div class="mt-8">
                        <div class="flex flex-wrap items-center bg-white rounded-2xl border border-gray-two sm:p-6 p-4 mb-4">
                            <div class="sm:w-2/12 w-full text-center sm:text-left mb-4 sm:mb-0">
                                <span class="bg-pink rounded-full text-xs font-semibold tracking-wide text-white px-2 py-1 uppercase">Pending</span>
                            </div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">18.05.2022</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">10 h 30 min</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">350 $</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">Paypal</div>
                            <a href="#" class="sm:w-2/12 w-full text-pink font-medium sm:text-right text-center mt-4 sm:mt-0">View PDF</a>
                        </div>
                        <div class="flex flex-wrap items-center bg-white rounded-2xl border border-gray-two sm:p-6 p-4 mb-4">
                            <div class="sm:w-2/12 w-full text-center sm:text-left mb-4 sm:mb-0">
                                <span class="bg-pink rounded-full text-xs font-semibold tracking-wide text-white px-2 py-1 uppercase">Pending</span>
                            </div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">18.05.2022</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">10 h 30 min</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">350 $</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">Paypal</div>
                            <a href="#" class="sm:w-2/12 w-full text-pink font-medium sm:text-right text-center mt-4 sm:mt-0">View PDF</a>
                        </div>
                        <div class="flex flex-wrap items-center bg-white rounded-2xl border border-gray-two sm:p-6 p-4 mb-4">
                            <div class="sm:w-2/12 w-full text-center sm:text-left mb-4 sm:mb-0">
                                <span class="bg-pink rounded-full text-xs font-semibold tracking-wide text-white px-2 py-1 uppercase">Pending</span>
                            </div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">18.05.2022</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">10 h 30 min</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">350 $</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">Paypal</div>
                            <a href="#" class="sm:w-2/12 w-full text-pink font-medium sm:text-right text-center mt-4 sm:mt-0">View PDF</a>
                        </div>
                        <div class="flex flex-wrap items-center bg-white rounded-2xl border border-gray-two sm:p-6 p-4 mb-4">
                            <div class="sm:w-2/12 w-full text-center sm:text-left mb-4 sm:mb-0">
                                <span class="bg-pink rounded-full text-xs font-semibold tracking-wide text-white px-2 py-1 uppercase">Pending</span>
                            </div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">18.05.2022</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">10 h 30 min</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">350 $</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">Paypal</div>
                            <a href="#" class="sm:w-2/12 w-full text-pink font-medium sm:text-right text-center mt-4 sm:mt-0">View PDF</a>
                        </div>
                        <div class="flex flex-wrap items-center bg-white rounded-2xl border border-gray-two sm:p-6 p-4 mb-4">
                            <div class="sm:w-2/12 w-full text-center sm:text-left mb-4 sm:mb-0">
                                <span class="bg-pink rounded-full text-xs font-semibold tracking-wide text-white px-2 py-1 uppercase">Pending</span>
                            </div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">18.05.2022</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">10 h 30 min</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">350 $</div>
                            <div class="sm:w-2/12 w-1/2 text-center sm:text-left">Paypal</div>
                            <a href="#" class="sm:w-2/12 w-full text-pink font-medium sm:text-right text-center mt-4 sm:mt-0">View PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
