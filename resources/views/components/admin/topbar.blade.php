<header class="flex items-center justify-between px-6 py-4 bg-white/80 backdrop-blur-md border-b border-gray-100 shadow-[0_4px_30px_rgba(0,0,0,0.03)] z-10 transition-all duration-300">
    <div class="flex items-center">
        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 bg-gray-50 p-2 rounded-xl focus:outline-none hover:text-secondary hover:bg-orange-50 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        @isset($header)
        <h2 class="ml-4 font-bold text-xl text-gray-800 hidden sm:block tracking-wide">
            {{ $header }}
        </h2>
        @endisset
    </div>

    <div class="flex items-center gap-4 mb-3 md:mb-6">

        <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = !dropdownOpen" class="flex items-center space-x-3 bg-gray-50 py-2 px-3 rounded-xl text-gray-600 hover:text-secondary hover:bg-orange-50 focus:outline-none transition-colors border border-gray-100">
                <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-secondary font-bold text-sm">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <span class="font-medium text-sm hidden md:block">{{ Auth::user()->name }}</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <div x-show="dropdownOpen"
                @click.away="dropdownOpen = false"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95 translate-y-2"
                x-transition:enter-end="transform opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="transform opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="transform opacity-0 scale-95 translate-y-2"
                class="absolute right-0 mt-3 w-56 bg-white rounded-2xl overflow-hidden shadow-xl z-50 border border-gray-100" style="display: none;">

                <div class="px-4 py-3 border-b border-gray-50 bg-gray-50/50">
                    <p class="text-xs text-gray-500">Signed in as</p>
                    <p class="text-xs font-medium text-gray-800 truncate">{{ Auth::user()->email }}</p>
                </div>

                <div class="py-2">
                    <a href="{{ route('home') }}" target="_blank" class="flex items-center px-4 py-2 text-sm text-text hover:bg-orange-50 hover:text-secondary transition-colors">
                        <x-heroicon-o-globe-alt class="w-4 h-4 mr-3 text-gray-400" />
                        {{ __('Lihat Website') }}
                    </a>
                    <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 text-sm text-text hover:bg-orange-50 hover:text-secondary transition-colors">
                        <x-heroicon-o-user class="w-4 h-4 mr-3 text-gray-400" />
                        {{ __('Edit Profil') }}
                    </a>
                </div>

                <div class="py-2 border-t border-gray-50">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="button" onclick="confirmLogout(this)" class="flex items-center w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 transition-colors font-medium">
                            <x-heroicon-o-arrow-right-on-rectangle class="w-4 h-4 mr-3 text-red-400" />
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>