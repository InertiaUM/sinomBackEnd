<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<nav class="flex flex-row justify-between fixed w-full bottom-0 bg-warning text-black  py-2 px-5">
    <a href="{{ route('organization') }}" class="flex flex-col items-center text-dark">
        <img src="{{url('/icons/company.png')}}" alt="Image" class="w-10" />
        <small>Organization</small>
    </a>
    <a href="{{ route('dashboard') }}" class="flex flex-col items-center text-dark">
        <img src="{{url('/icons/house.png')}}" alt="Image" class="w-10" />
        <small>Home</small>
    </a>
    <a href="{{ route('profile.show') }}" class="flex flex-col items-center text-dark">
        <img src="{{url('/icons/user.png')}}" alt="Image" class="w-10" />
        <small>Profile</small>
    </a>
</nav>