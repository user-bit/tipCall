<div class="py-4 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-end flex-wrap">
            <div class="md:w-1/2 w-full">
                <div class="flex items-center justify-center md:justify-start">
                    <div class="w-16 h-16 rounded-full overflow-hidden">
                        <img src="<?php echo e(asset('images/avatar.png')); ?>">
                    </div>
                    <div class="sm:pl-6 pl-3">
                        <div class="text-2xl font-medium">Artis Lutkovskis</div>
                        <div class="flex items-center cursor-pointer">
                            <span class="font-medium text-pink pr-2 sm:text-base text-sm">tipcall.io/artis-lutkovskis</span>
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.33657 1.6C3.66603 0.667846 4.55503 0 5.6 0H7.2C8.24498 0 9.13397 0.667846 9.46344 1.6H10.4C11.7255 1.6 12.8 2.67452 12.8 4V6.4C12.8 6.84183 12.4418 7.2 12 7.2C11.5582 7.2 11.2 6.84183 11.2 6.4V4C11.2 3.55817 10.8418 3.2 10.4 3.2H9.46344C9.13397 4.13215 8.24498 4.8 7.2 4.8H5.6C4.55503 4.8 3.66603 4.13215 3.33657 3.2H2.4C1.95817 3.2 1.6 3.55817 1.6 4V13.6C1.6 14.0418 1.95817 14.4 2.4 14.4H10.4C10.8418 14.4 11.2 14.0418 11.2 13.6V12.8C11.2 12.3582 11.5582 12 12 12C12.4418 12 12.8 12.3582 12.8 12.8V13.6C12.8 14.9255 11.7255 16 10.4 16H2.4C1.07452 16 0 14.9255 0 13.6V4C0 2.67452 1.07452 1.6 2.4 1.6H3.33657ZM5.6 1.6C5.15817 1.6 4.8 1.95817 4.8 2.4C4.8 2.84183 5.15817 3.2 5.6 3.2H7.2C7.64183 3.2 8 2.84183 8 2.4C8 1.95817 7.64183 1.6 7.2 1.6H5.6ZM8.56569 6.63431C8.87811 6.94673 8.87811 7.45327 8.56569 7.76569L7.53137 8.8H13.6C14.0418 8.8 14.4 9.15817 14.4 9.6C14.4 10.0418 14.0418 10.4 13.6 10.4H7.53137L8.56569 11.4343C8.87811 11.7467 8.87811 12.2533 8.56569 12.5657C8.25327 12.8781 7.74674 12.8781 7.43432 12.5657L5.03432 10.1657C4.7219 9.85327 4.7219 9.34673 5.03432 9.03431L7.43432 6.63431C7.74674 6.3219 8.25327 6.3219 8.56569 6.63431Z"
                                      fill="#E5005B"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 w-full flex mt-6 md:mt-0 justify-center md:justify-end">
                <a href="#"
                   class="font-medium text-current border border-current rounded-full px-5 py-3 tracking-wider inline-block hover:bg-current hover:text-white transition-all duration-300">Preview
                    Tipcall Profile</a>
            </div>
        </div>
    </div>
</div>
<div class="dashboard-menu md:pt-6 pt-2 bg-white">
    <div class="container mx-auto px-4 overflow-auto sm:pb-0 pb-2">
        <ul class="flex md:justify-start justify-center min-w-max">
            <li class="py-3 mr-8 <?php echo ($_SERVER['REQUEST_URI']=='/dashboard')?'border-b-2 border-b-current':''?>">
                <a href="{{ url('dashboard') }}" class="<?php echo ($_SERVER['REQUEST_URI']=='/dashboard')?'font-semibold':'hover:text-pink transition-all duration-300'?>">Dashboard</a>
            </li>
            <li class="py-3 mr-8 <?php echo ($_SERVER['REQUEST_URI']=='/my-plans')?'border-b-2 border-b-current':''?>">
                <a href="{{ url('my-plans') }}" class="<?php echo ($_SERVER['REQUEST_URI']=='/my-plans')?'font-semibold':'hover:text-pink transition-all duration-300'?>">My plans</a>
            </li>
            <li class="py-3 mr-8 <?php echo ($_SERVER['REQUEST_URI']=='/my-page')?'border-b-2 border-b-current':''?>">
                <a href="{{ url('my-page') }}" class="<?php echo ($_SERVER['REQUEST_URI']=='/my-page')?'font-semibold':'hover:text-pink transition-all duration-300'?>">My Page</a>
            </li>
            <li class="py-3 mr-8"><a href="#" class="hover:text-pink transition-all duration-300">Calendar</a></li>
        </ul>
    </div>
</div>
