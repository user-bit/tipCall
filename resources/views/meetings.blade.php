@extends('layouts.main')
@section('title', 'TipCall - Calendar')
@section('content')
    <x-header/>
    <main>
        <x-header-user/>
        <div class="md:pt-8 pt-4 pb-8 bg-gray">
            <div class="container mx-auto px-4">
                <div class="text-xl sm:text-2xl font-medium sm:mt-2 sm:w-1/2 w-full">Meetings</div>
                <div class="mt-10">
                    <div class="border border-gray-two rounded-2xl sm:py-4 sm:px-6 py-2 px-3 bg-white mb-2 flex items-center flex-wrap">
                        <div class="md:w-3/12 sm:w-6/12 w-full text-lg font-medium">Jānis Bērziņš</div>
                        <div class="md:w-3/12 sm:w-6/12 w-full md:text-left sm:text-right text-left">email@email.com</div>
                        <div class="flex md:w-4/12 w-full mt-2 md:mt-0">
                            <div class="font-medium w-4/12">10.05.2022</div>
                            <div class="font-medium w-4/12 text-center">08:43</div>
                            <div class="font-medium w-4/12 md:text-left text-right">30 min</div>
                        </div>
                        <div class="flex justify-around md:w-2/12 w-full mt-2 md:mt-0">
                            <div class="w-8 h-8 rounded-full border border-green flex justify-center items-center">
                                <img src="images/check-green.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pink flex justify-center items-center">
                                <img src="images/close.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pur-pure flex justify-center items-center">
                                <img src="images/time.svg">
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl sm:py-4 sm:px-6 py-2 px-3 bg-white mb-2 flex items-center flex-wrap">
                        <div class="md:w-3/12 sm:w-6/12 w-full text-lg font-medium">Artis Lutkovskis</div>
                        <div class="md:w-3/12 sm:w-6/12 w-full md:text-left sm:text-right text-left">artis.lutkovskis@gmail.com</div>
                        <div class="flex md:w-4/12 w-full mt-2 md:mt-0">
                            <div class="font-medium w-4/12">10.05.2022</div>
                            <div class="font-medium w-4/12 text-center">08:43</div>
                            <div class="font-medium w-4/12 md:text-left text-right">30 min</div>
                        </div>
                        <div class="flex justify-around md:w-2/12 w-full mt-2 md:mt-0">
                            <div class="w-8 h-8 rounded-full border border-green flex justify-center items-center">
                                <img src="images/check-green.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pink flex justify-center items-center">
                                <img src="images/close.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pur-pure flex justify-center items-center">
                                <img src="images/time.svg">
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl sm:py-4 sm:px-6 py-2 px-3 bg-white mb-2 flex items-center flex-wrap">
                        <div class="md:w-3/12 sm:w-6/12 w-full text-lg font-medium">Krišjānis Āboliņš</div>
                        <div class="md:w-3/12 sm:w-6/12 w-full md:text-left sm:text-right text-left">email@email.com</div>
                        <div class="flex md:w-4/12 w-full mt-2 md:mt-0">
                            <div class="font-medium w-4/12">10.05.2022</div>
                            <div class="font-medium w-4/12 text-center">08:43</div>
                            <div class="font-medium w-4/12 md:text-left text-right">30 min</div>
                        </div>
                        <div class="flex justify-around md:w-2/12 w-full mt-2 md:mt-0">
                            <div class="w-8 h-8 rounded-full border border-green flex justify-center items-center">
                                <img src="images/check-green.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pink flex justify-center items-center">
                                <img src="images/close.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pur-pure flex justify-center items-center">
                                <img src="images/time.svg">
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl sm:py-4 sm:px-6 py-2 px-3 bg-white mb-2 flex items-center flex-wrap">
                        <div class="md:w-3/12 sm:w-6/12 w-full text-lg font-medium">Jānis Bērziņš</div>
                        <div class="md:w-3/12 sm:w-6/12 w-full md:text-left sm:text-right text-left">email@email.com</div>
                        <div class="flex md:w-4/12 w-full mt-2 md:mt-0">
                            <div class="font-medium w-4/12">10.05.2022</div>
                            <div class="font-medium w-4/12 text-center">08:43</div>
                            <div class="font-medium w-4/12 md:text-left text-right">30 min</div>
                        </div>
                        <div class="flex justify-around md:w-2/12 w-full mt-2 md:mt-0">
                            <div class="w-8 h-8 rounded-full border border-green flex justify-center items-center">
                                <img src="images/check-green.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pink flex justify-center items-center">
                                <img src="images/close.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pur-pure flex justify-center items-center">
                                <img src="images/time.svg">
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-two rounded-2xl sm:py-4 sm:px-6 py-2 px-3 bg-white mb-2 flex items-center flex-wrap">
                        <div class="md:w-3/12 sm:w-6/12 w-full text-lg font-medium">Jānis Bērziņš</div>
                        <div class="md:w-3/12 sm:w-6/12 w-full md:text-left sm:text-right text-left">email@email.com</div>
                        <div class="flex md:w-4/12 w-full mt-2 md:mt-0">
                            <div class="font-medium w-4/12">10.05.2022</div>
                            <div class="font-medium w-4/12 text-center">08:43</div>
                            <div class="font-medium w-4/12 md:text-left text-right">30 min</div>
                        </div>
                        <div class="flex justify-around md:w-2/12 w-full mt-2 md:mt-0">
                            <div class="w-8 h-8 rounded-full border border-green flex justify-center items-center">
                                <img src="images/check-green.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pink flex justify-center items-center">
                                <img src="images/close.svg">
                            </div>
                            <div class="w-8 h-8 rounded-full border border-pur-pure flex justify-center items-center">
                                <img src="images/time.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
