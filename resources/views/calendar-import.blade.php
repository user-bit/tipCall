@extends('layouts.main')
@section('title', 'TipCall - Calendar')
@section('content')
    <x-header/>
    <main>
        <x-header-user/>
        <div class="md:pt-8 pt-4 pb-8 bg-gray">
            <div class="container mx-auto px-4">
                <a href="#" class="text-sm sm:text-base	text-pink font-medium">Back to Calendar</a>
                <div class="text-xl sm:text-2xl font-medium sm:mt-2 sm:w-1/2 w-full">Calendar import</div>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 sm:gap-4 gap-2 sm:mt-8 mt-4">
                    <div class="border border-pur-pure rounded-2xl sm:p-4 p-2.5">
                        <img src="images/calendar-1.png">
                        <div class="text-pur-pure font-semibold	mt-3.5">Google Calendar</div>
                        <div class="text-pur-pure text-xs font-medium mt-1">Add ecent to your calendar and prevent double-booking</div>
                    </div>
                    <div class="border border-pur-pure rounded-2xl sm:p-4 p-2.5">
                        <img src="images/calendar-2.png">
                        <div class="text-pur-pure font-semibold	mt-3.5">Office 365 Calendar</div>
                        <div class="text-pur-pure text-xs font-medium mt-1">Add ecent to your calendar and prevent double-booking</div>
                    </div>
                    <div class="border border-pur-pure rounded-2xl sm:p-4 p-2.5">
                        <img src="images/calendar-3.png">
                        <div class="text-pur-pure font-semibold	mt-3.5">iCloud Calendar</div>
                        <div class="text-pur-pure text-xs font-medium mt-1">Add ecent to your calendar and prevent double-booking</div>
                    </div>
                    <div class="border border-pur-pure rounded-2xl sm:p-4 p-2.5">
                        <img src="images/calendar-4.png">
                        <div class="text-pur-pure font-semibold	mt-3.5">Outlook Calendar Plug-in</div>
                        <div class="text-pur-pure text-xs font-medium mt-1">Add ecent to your calendar and prevent double-booking</div>
                    </div>
                    <div class="border border-pur-pure rounded-2xl sm:p-4 p-2.5">
                        <img src="images/calendar-5.png">
                        <div class="text-pur-pure font-semibold	mt-3.5">Exchange Calendat</div>
                        <div class="text-pur-pure text-xs font-medium mt-1">Add ecent to your calendar and prevent double-booking</div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
