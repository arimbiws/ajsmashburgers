<nav x-data="{ mobileMenuOpen: false }" class="bg-accent text-white w-full z-50 sticky top-0 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <div class="shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <x-application-logo class="block h-12 w-auto object-contain" />
                </a>
            </div>

            <div class="hidden md:flex space-x-9 text-white font-medium text-md tracking-wide">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-primary font-bold' : 'hover:text-primary transition' }}">Home</a>

                <a href="{{ route('about') ?? '#' }}" class="{{ request()->routeIs('about') ? 'text-primary font-bold' : 'hover:text-primary transition' }}">About Us</a>

                <a href="{{ route('menu') ?? '#' }}" class="{{ request()->routeIs('menu') ? 'text-primary font-bold' : 'hover:text-primary transition' }}">Menu</a>
                <a href="{{ route('outlets') ?? '#' }}" class="{{ request()->routeIs('outlets') ? 'text-primary font-bold' : 'hover:text-primary transition' }}">Outlets</a>
                <a href="{{ route('news') ?? '#' }}" class="{{ request()->routeIs('news*') ? 'text-primary font-bold' : 'hover:text-primary transition' }}">News</a>
                <a href="{{ route('contact') ?? '#' }}" class="{{ request()->routeIs('contact') ? 'text-primary font-bold' : 'hover:text-primary transition' }}">Contact Us</a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-primary hover:text-white focus:outline-none transition-colors">

                <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>

                <svg x-show="mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>

            </button>
        </div>
    </div>

    <div x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-tertiary border-t border-accent absolute w-full shadow-xl"
        style="display: none;">

        <div class="px-4 pt-2 pb-4 space-y-2">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-primary bg-accent' : 'text-white hover:text-primary hover:bg-accent transition' }}">Home</a>

            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:text-primary hover:bg-accent transition">About Us</a>

            <a href="{{ route('menu') ?? '#' }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('menu') ? 'text-primary bg-accent' : 'text-white hover:text-primary hover:bg-accent transition' }}">Menu</a>

            <a href="{{ route('outlets') ?? '#' }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('outlets') ? 'text-primary bg-accent' : 'text-white hover:text-primary hover:bg-accent transition' }}">Outlets</a>

            <a href="{{ route('news') ?? '#' }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('news*') ? 'text-primary bg-accent' : 'text-white hover:text-primary hover:bg-accent transition' }}">News</a>

            <a href="{{ route('contact') ?? '#' }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'text-primary bg-accent' : 'text-white hover:text-primary hover:bg-accent transition' }}">Contact Us</a>
        </div>
    </div>
</nav>