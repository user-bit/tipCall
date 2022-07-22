@extends('layouts.main')
@section('title', 'TipCall - my-plans')
@section('content')
    <x-header/>
    <main>
        <div class="bg-gray ">
            <div class="container mx-auto px-4 flex justify-between">
                <x-left-menu/>
                <div class="w-3/4 pt-12 pb-12 pl-8">
                    <div class="text-2xl font-medium">Billing</div>
                    <div class="mb-6 w-2/5 mt-7">
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
                        <div class="flex items-center bg-white rounded-2xl border border-gray-two py-6 px-6 mb-4">
                            <div class="w-2/12">
                                <span class="bg-pink rounded-full text-xs font-semibold tracking-wide text-white px-2 py-1 uppercase">Pending</span>
                            </div>
                            <div class="w-2/12">18.05.2022</div>
                            <div class="w-2/12">10 h 30 min</div>
                            <div class="w-2/12">350 $</div>
                            <div class="w-2/12">Paypal</div>
                            <a href="#" class="w-2/12 text-pink font-medium text-right">View PDF</a>
                        </div>
                        <div class="flex items-center bg-white rounded-2xl border border-gray-two py-6 px-6 mb-4">
                            <div class="w-2/12">
                                <span class="border border-pur-pure rounded-full text-xs font-semibold tracking-wide text-pur-pure px-3 py-1 uppercase">Sent</span>
                            </div>
                            <div class="w-2/12">18.04.2022</div>
                            <div class="w-2/12">10 h 30 min</div>
                            <div class="w-2/12">350 $</div>
                            <div class="w-2/12">Paypal</div>
                            <a href="#" class="w-2/12 text-pink font-medium text-right">View PDF</a>
                        </div>
                        <div class="flex items-center bg-white rounded-2xl border border-gray-two py-6 px-6 mb-4">
                            <div class="w-2/12">
                                <span class="border border-pur-pure rounded-full text-xs font-semibold tracking-wide text-pur-pure px-3 py-1 uppercase">Sent</span>
                            </div>
                            <div class="w-2/12">18.03.2022</div>
                            <div class="w-2/12">10 h 30 min</div>
                            <div class="w-2/12">350 $</div>
                            <div class="w-2/12">Paypal</div>
                            <a href="#" class="w-2/12 text-pink font-medium text-right">View PDF</a>
                        </div>
                        <div class="flex items-center bg-white rounded-2xl border border-gray-two py-6 px-6 mb-4">
                            <div class="w-2/12">
                                <span class="border border-pur-pure rounded-full text-xs font-semibold tracking-wide text-pur-pure px-3 py-1 uppercase">Sent</span>
                            </div>
                            <div class="w-2/12">18.02.2022</div>
                            <div class="w-2/12">10 h 30 min</div>
                            <div class="w-2/12">350 $</div>
                            <div class="w-2/12">Paypal</div>
                            <a href="#" class="w-2/12 text-pink font-medium text-right">View PDF</a>
                        </div>
                        <div class="flex items-center bg-white rounded-2xl border border-gray-two py-6 px-6 mb-4">
                            <div class="w-2/12">
                                <span class="border border-pur-pure rounded-full text-xs font-semibold tracking-wide text-pur-pure px-3 py-1 uppercase">Sent</span>
                            </div>
                            <div class="w-2/12">18.01.2022</div>
                            <div class="w-2/12">10 h 30 min</div>
                            <div class="w-2/12">350 $</div>
                            <div class="w-2/12">Paypal</div>
                            <a href="#" class="w-2/12 text-pink font-medium text-right">View PDF</a>
                        </div>
                        <div class="flex items-center bg-white rounded-2xl border border-gray-two py-6 px-6 mb-4">
                            <div class="w-2/12">
                                <span class="border border-pur-pure rounded-full text-xs font-semibold tracking-wide text-pur-pure px-3 py-1 uppercase">Sent</span>
                            </div>
                            <div class="w-2/12">18.04.2022</div>
                            <div class="w-2/12">10 h 30 min</div>
                            <div class="w-2/12">350 $</div>
                            <div class="w-2/12">Paypal</div>
                            <a href="#" class="w-2/12 text-pink font-medium text-right">View PDF</a>
                        </div>
                        <div class="flex items-center bg-white rounded-2xl border border-gray-two py-6 px-6 mb-4">
                            <div class="w-2/12">
                                <span class="border border-pur-pure rounded-full text-xs font-semibold tracking-wide text-pur-pure px-3 py-1 uppercase">Sent</span>
                            </div>
                            <div class="w-2/12">18.04.2022</div>
                            <div class="w-2/12">10 h 30 min</div>
                            <div class="w-2/12">350 $</div>
                            <div class="w-2/12">Paypal</div>
                            <a href="#" class="w-2/12 text-pink font-medium text-right">View PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
