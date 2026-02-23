<x-app-layout title="Dashboard Admin">
    <div class="py-3">
        <div class="max-w-7xl mx-auto space-y-6">

            @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-xl shadow-sm mb-6">
                <div class="flex"> <x-heroicon-s-exclamation-circle class="h-5 w-5 text-red-500" />
                    <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif

            <div class="bg-radial-hero rounded-3xl p-8">
                <h2 class="text-primary text-xl font-bold mb-2 tracking-wide">Selamat datang, {{ Auth::user()->name }}! 👋</h2>
                <p class="text-gray-50 text-xs md:text-sm">Pantau dan kelola menu, outlet, serta pesan dari pelanggan Anda hari ini.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-6">
                <div class="bg-white rounded-3xl p-6 shadow-sm border flex items-center hover:shadow-md transition-shadow">
                    <div class="bg-orange-100 p-4 rounded-2xl mr-5">
                        <x-heroicon-o-clipboard-document-list class="w-8 h-8 text-secondary" />
                    </div>
                    <div>
                        <p class="text-text text-sm font-semibold uppercase tracking-wider mb-1">Total Menu</p>
                        <h3 class="text-3xl font-bold text-secondary">{{ $totalMenus }} <span class="text-base text-gray-500 font-medium">Item</span></h3>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 shadow-sm border flex items-center hover:shadow-md transition-shadow">
                    <div class="bg-gray-100 p-4 rounded-2xl mr-5">
                        <x-heroicon-o-map-pin class="w-8 h-8 text-text" />
                    </div>
                    <div>
                        <p class="text-text text-sm font-semibold uppercase tracking-wider mb-1">Total Cabang</p>
                        <h3 class="text-3xl font-bold text-text">{{ $totalOutlets }} <span class="text-base text-gray-500 font-medium">Outlet</span></h3>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 shadow-sm border flex items-center justify-between hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div class="flex items-center">
                        <div class="bg-blue-100 p-4 rounded-2xl mr-5">
                            <x-heroicon-o-chat-bubble-left-right class="w-8 h-8 text-accent" />
                        </div>
                        <div>
                            <p class="text-text text-sm font-semibold uppercase tracking-wider mb-1">Pesan Baru</p>
                            <h3 class="text-3xl font-bold text-accent">{{ $unreadMessages }} <span class="text-base text-gray-500 font-medium">Pesan</span></h3>
                        </div>
                    </div>
                    <a href="{{ route('admin.messages.index') }}" class="absolute inset-0 z-10" aria-label="Lihat Pesan"></a>
                    <x-heroicon-o-arrow-right class="w-6 h-6 text-gray-300 group-hover:text-accent group-hover:translate-x-1 transition-all" />
                </div>
            </div>

            <div class="mt-8 bg-white rounded-3xl shadow-sm border overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <h3 class="font-bold text-text text-lg tracking-wide">Pesan Belum Dibaca</h3>
                    <a href="{{ route('admin.messages.index') }}" class="text-sm font-bold text-secondary hover:text-text transition">Lihat Semua &rarr;</a>
                </div>
                <div class="divide-y divide-gray-100">
                    @php
                    $recentMessages = \App\Models\Message::where('is_read', false)->latest()->take(3)->get();
                    @endphp

                    @forelse($recentMessages as $msg)
                    <div class="px-6 py-4 hover:bg-orange-50/30 transition-colors group flex items-center justify-between">
                        <div class="flex items-center gap-4 mb-3 md:mb-6">
                            <div class="bg-blue-100 text-accent p-3 rounded-full">
                                <x-heroicon-s-envelope class="w-5 h-5" />
                            </div>
                            <div>
                                <p class="font-bold text-text">{{ $msg->name }}</p>
                                <p class="font-light text-sm text-text">{{ $msg->subject ?? 'Tanpa Subjek' }}</p>
                            </div>
                        </div>
                        <span class="text-xs font-bobase text-gray-400">{{ $msg->created_at->diffForHumans() }}</span>
                    </div>
                    @empty
                    <div class="px-6 py-8 text-centbase text-gray-400 font-medium">
                        Hore! Tidak ada pesan baru yang menumpuk.
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>