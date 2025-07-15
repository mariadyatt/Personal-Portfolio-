<nav class="bg-purple text-black py-2 px-2 flex justify-between items-center shadow-md z-[999] relative">
    <!-- Logo or Name -->
    <div class="text-2xl font-bold">
        @if (request()->routeIs('landing'))
            <a href="{{ route('landing2') }}">
                <img src="{{ asset('images/logo/logob.png') }}" alt="Logo" class="w-[65px] hover:opacity-80 transition" title="Go to Landing 2">
            </a>
        @else
            <a href="{{ route('landing') }}">
                <img src="{{ asset('images/logo/logow.png') }}" alt="Logo" class="w-[60px] hover:opacity-80 transition" title="Go to Landing 1">
            </a>
        @endif
    </div>

    <!-- Navigation Links -->
    <ul class="flex space-x-15 font-medium text-lg">
        <li><a href="{{ route('home') }}" class="hover:text-purple-400 transition font-extrabold">Home</a></li>
        <li><a href="{{ route('skills') }}" class="hover:text-purple-400 transition font-extrabold">Skills</a></li>
        <li><a href="{{ route('projects') }}" class="hover:text-purple-400 transition font-extrabold">Projects</a></li>
        <li class="mr-8"><a href="{{ route('about') }}" class="hover:text-purple-400 transition font-extrabold">About</a></li>
    </ul>
</nav>
