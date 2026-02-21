<div x-show="sidebarOpen"
    x-transition.opacity
    class="fixed inset-0 z-20 bg-black bg-opacity-50 lg:hidden"
    @click="sidebarOpen = false"></div>

<aside :class="sidebarOpen ? 'translate-x-0 w-64' : '-translate-x-full w-64 lg:w-0 lg:translate-x-0 lg:border-none'"
    class="fixed inset-y-0 left-0 z-30 flex flex-col bg-white border-r border-gray-200 shadow-lg transition-all duration-300 lg:static shrink-0 whitespace-nowrap overflow-hidden">

    <div class="flex items-center justify-between h-20 px-6 border-b border-gray-100">
        <a href="{{ route('admin.dashboard') }}">
            <x-application-logo class="block h-10 w-auto object-contain" />
        </a>

        <button @click="sidebarOpen = false" class="lg:hidden text-gray-400 hover:text-red-500 focus:outline-none transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
        <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')"
            class="flex items-center px-4 py-2.5 rounded-lg w-full {{ request()->routeIs('admin.dashboard') ? 'bg-orange-50 text-orange-600' : 'text-gray-600 hover:bg-orange-50 hover:text-orange-600' }}">
            <span class="font-medium">{{ __('Dashboard') }}</span>
        </x-nav-link>

        <p class="px-4 pt-4 pb-2 text-xs font-bold text-gray-400 uppercase tracking-wider">Manajemen Konten</p>

        <x-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.*')"
            class="flex items-center px-4 py-2.5 rounded-lg w-full {{ request()->routeIs('admin.categories.*') ? 'bg-orange-50 text-orange-600' : 'text-gray-600 hover:bg-orange-50 hover:text-orange-600' }}">
            <span class="font-medium">{{ __('Kategori') }}</span>
        </x-nav-link>

        <x-nav-link :href="route('admin.menus.index')" :active="request()->routeIs('admin.menus.*')"
            class="flex items-center px-4 py-2.5 rounded-lg w-full {{ request()->routeIs('admin.menus.*') ? 'bg-orange-50 text-orange-600' : 'text-gray-600 hover:bg-orange-50 hover:text-orange-600' }}">
            <span class="font-medium">{{ __('Menu Makanan') }}</span>
        </x-nav-link>

        <x-nav-link :href="route('admin.outlets.index')" :active="request()->routeIs('admin.outlets.*')"
            class="flex items-center px-4 py-2.5 rounded-lg w-full {{ request()->routeIs('admin.outlets.*') ? 'bg-orange-50 text-orange-600' : 'text-gray-600 hover:bg-orange-50 hover:text-orange-600' }}">
            <span class="font-medium">{{ __('Lokasi Outlet') }}</span>
        </x-nav-link>

        <p class="px-4 pt-4 pb-2 text-xs font-bold text-gray-400 uppercase tracking-wider">Interaksi</p>

        <x-nav-link :href="route('admin.news.index')" :active="request()->routeIs('admin.news.*')"
            class="flex items-center px-4 py-2.5 rounded-lg w-full {{ request()->routeIs('admin.news.*') ? 'bg-orange-50 text-orange-600' : 'text-gray-600 hover:bg-orange-50 hover:text-orange-600' }}">
            <span class="font-medium">{{ __('Berita & Promo') }}</span>
        </x-nav-link>


        <x-nav-link :href="route('admin.company.index')" :active="request()->routeIs('admin.company.*')"
            class="flex items-center px-4 py-2.5 rounded-lg w-full {{ request()->routeIs('admin.company.*') ? 'bg-orange-50 text-orange-600' : 'text-gray-600 hover:bg-orange-50 hover:text-orange-600' }}">
            <span class="font-medium">{{ __('Profil Usaha') }}</span>
        </x-nav-link>
    </nav>
</aside>