<div class="left-menu w-1/4 bg-white border-r border-gray-seven pt-12">
    <ul>
        <li class="mb-3"><a href="{{ url('my-profile') }}" class="<?php echo ($_SERVER['REQUEST_URI']=='/my-profile')?'font-semibold border-b-2 border-current pb-1':''?>">My profile</a></li>
        <li><a href="{{ url('billing') }}" class="<?php echo ($_SERVER['REQUEST_URI']=='/billing')?'font-semibold border-b-2 border-current pb-1':''?>">Billing</a></li>
    </ul>
</div>
