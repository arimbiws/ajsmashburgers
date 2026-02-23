<div x-show="sidebarOpen"
    x-transition.opacity
    class="fixed inset-0 z-20 bg-gray-900/50 backdrop-blur-sm lg:hidden"
    @click="sidebarOpen = false"></div>

<aside :class="sidebarOpen ? 'translate-x-0 w-60' : '-translate-x-full w-72 lg:w-0 lg:translate-x-0 lg:border-none'"
    class="fixed inset-y-0 left-0 z-30 flex flex-col bg-white border-r border-gray-100 shadow-xl lg:shadow-none transition-transform duration-300 lg:static shrink-0 whitespace-nowrap overflow-hidden">

    <div class="flex items-center justify-between lg:justify-center h-20 px-6 border-b border-gray-100 bg-white">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
            <x-application-logo class="block h-12 w-auto object-contain" />
            <span class="font-bold text-lg text-gray-800 tracking-wide hidden"></span>
        </a>

        <button @click="sidebarOpen = false" class="lg:hidden text-gray-400 hover:text-red-500 focus:outline-none transition-colors p-2 rounded-lg hover:bg-gray-50">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">

        <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')"
            class="flex items-center px-4 py-3 rounded-xl w-full transition-colors duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-orange-50 text-secondary shadow-sm' : 'text-gray-500 hover:bg-gray-50 hover:text-secondary' }}">
            <x-heroicon-o-home class="w-5 h-5 mr-3 {{ request()->routeIs('admin.dashboard') ? 'text-secondary' : 'text-gray-400 group-hover:text-secondary' }}" />
            <span class="font-medium">{{ __('Dashboard') }}</span>
        </x-nav-link>

        <p class="px-4 pt-6 pb-2 text-xs font-bold text-gray-400 uppercase tracking-widest">Manajemen Konten</p>

        <x-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.*')"
            class="flex items-center px-4 py-3 rounded-xl w-full transition-colors duration-200 {{ request()->routeIs('admin.categories.*') ? 'bg-orange-50 text-secondary shadow-sm' : 'text-gray-500 hover:bg-gray-50 hover:text-secondary' }}">
            <x-heroicon-o-tag class="w-5 h-5 mr-3 {{ request()->routeIs('admin.categories.*') ? 'text-secondary' : 'text-gray-400 group-hover:text-secondary' }}" />
            <span class="font-medium">{{ __('Kategori') }}</span>
        </x-nav-link>

        <x-nav-link :href="route('admin.menus.index')" :active="request()->routeIs('admin.menus.*')"
            class="flex items-center px-4 py-3 rounded-xl w-full transition-colors duration-200 {{ request()->routeIs('admin.menus.*') ? 'bg-orange-50 text-secondary shadow-sm' : 'text-gray-500 hover:bg-gray-50 hover:text-secondary' }}">
            <x-heroicon-o-clipboard-document-list class="w-5 h-5 mr-3 {{ request()->routeIs('admin.menus.*') ? 'text-secondary' : 'text-gray-400 group-hover:text-secondary' }}" />
            <span class="font-medium">{{ __('Menu Makanan') }}</span>
        </x-nav-link>

        <x-nav-link :href="route('admin.outlets.index')" :active="request()->routeIs('admin.outlets.*')"
            class="flex items-center px-4 py-3 rounded-xl w-full transition-colors duration-200 {{ request()->routeIs('admin.outlets.*') ? 'bg-orange-50 text-secondary shadow-sm' : 'text-gray-500 hover:bg-gray-50 hover:text-secondary' }}">
            <x-heroicon-o-map-pin class="w-5 h-5 mr-3 {{ request()->routeIs('admin.outlets.*') ? 'text-secondary' : 'text-gray-400 group-hover:text-secondary' }}" />
            <span class="font-medium">{{ __('Lokasi Outlet') }}</span>
        </x-nav-link>

        <p class="px-4 pt-6 pb-2 text-xs font-bold text-gray-400 uppercase tracking-widest">Informasi Publik</p>

        <x-nav-link :href="route('admin.news.index')" :active="request()->routeIs('admin.news.*')"
            class="flex items-center px-4 py-3 rounded-xl w-full transition-colors duration-200 {{ request()->routeIs('admin.news.*') ? 'bg-orange-50 text-secondary shadow-sm' : 'text-gray-500 hover:bg-gray-50 hover:text-secondary' }}">
            <x-heroicon-o-newspaper class="w-5 h-5 mr-3 {{ request()->routeIs('admin.news.*') ? 'text-secondary' : 'text-gray-400 group-hover:text-secondary' }}" />
            <span class="font-medium">{{ __('Berita & Promo') }}</span>
        </x-nav-link>

        <x-nav-link :href="route('admin.company.index')" :active="request()->routeIs('admin.company.*')"
            class="flex items-center px-4 py-3 rounded-xl w-full transition-colors duration-200 {{ request()->routeIs('admin.company.*') ? 'bg-orange-50 text-secondary shadow-sm' : 'text-gray-500 hover:bg-gray-50 hover:text-secondary' }}">
            <x-heroicon-o-building-storefront class="w-5 h-5 mr-3 {{ request()->routeIs('admin.company.*') ? 'text-secondary' : 'text-gray-400 group-hover:text-secondary' }}" />
            <span class="font-medium">{{ __('Profil Usaha') }}</span>
        </x-nav-link>

        <x-nav-link :href="route('admin.messages.index')" :active="request()->routeIs('admin.messages.index')"
            class="flex items-center px-4 py-3 rounded-xl w-full transition-colors duration-200 {{ request()->routeIs('admin.messages.index') ? 'bg-orange-50 text-secondary shadow-sm' : 'text-gray-500 hover:bg-gray-50 hover:text-secondary' }}">
            <x-heroicon-o-chat-bubble-left-right class="w-5 h-5 mr-3 {{ request()->routeIs('admin.messages.index') ? 'text-secondary' : 'text-gray-400 group-hover:text-secondary' }}" />
            <span class="font-medium">{{ __('Pesan') }}</span>
        </x-nav-link>
    </nav>
</aside>