<x-app-layout title="Kelola Menu">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6">
            <div>
                <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Menu Makanan</h2>
                <p class="text-sm text-gray-400">Kelola daftar menu dan harga.</p>
            </div>

            <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
                <form action="{{ route('admin.menus.index') }}" method="GET" class="flex flex-col sm:flex-row gap-2 w-full lg:w-auto">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <x-heroicon-o-magnifying-glass class="h-5 w-5 text-gray-400" />
                        </div>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari menu atau kategori..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition-all text-sm">
                    </div>
                    <select name="sort" onchange="this.form.submit()" class="w-full lg:w-50 px-4 py-2.5 rounded-xl border border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition-all text-sm cursor-pointer">
                        <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                        <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Terlama</option>
                        <option value="nama_asc" {{ request('sort') == 'nama_asc' ? 'selected' : '' }}>A - Z</option>
                        <option value="nama_desc" {{ request('sort') == 'nama_desc' ? 'selected' : '' }}>Z - A</option>
                        <option value="harga_tertinggi" {{ request('sort') == 'harga_tertinggi' ? 'selected' : '' }}>Harga Tertinggi</option>
                        <option value="harga_terendah" {{ request('sort') == 'harga_terendah' ? 'selected' : '' }}>Harga Terendah</option>
                    </select>
                </form>

                <a href="{{ route('admin.menus.create') }}" class="bg-radial-hero text-white font-medium py-2.5 px-5 rounded-xl shadow-md transition-colors flex justify-center items-center flex-shrink-0">
                    <x-heroicon-o-plus class="w-5 h-5" /> <span class="hidden md:block md:ms-2">Tambah Menu</span>
                </a>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white border-b border-gray-100 text-secondary text-xs uppercase tracking-wider">
                            <th class="px-6 py-4 font-bold text-center">No</th>
                            <th class="px-6 py-4 font-bold text-center">Menu</th>
                            <th class="px-6 py-4 font-bold text-center">Kategori</th>
                            <th class="px-6 py-4 font-bold text-center">Harga</th>
                            <th class="px-6 py-4 font-bold text-center">Status</th>
                            <th class="px-6 py-4 font-bold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($menus as $index => $menu)
                        <tr class="hover:bg-orange-50/30 transition-colors group">
                            <td class="px-3 py-4 text-gray-400 text-center">{{ $menus->firstItem() + $index }}</td>
                            <td class="px-6 py-4 flex items-center gap-4 w-40 md:w-auto">
                                <img src="{{ asset('storage/' . $menu->menu_image) }}" class="w-12 h-12 rounded-xl object-cover shadow-sm">
                                <span class="font-bold text-text text-xs md:text-sm wrap-break-word">{{ $menu->name }}</span>
                            </td>
                            <td class="px-6 py-4 text-gray-400 text-sm">{{ $menu->category->name ?? '-' }}</td>
                            <td class="px-6 py-4 font-bold text-secondary">Rp{{ number_format($menu->price, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs font-bold rounded-full {{ $menu->is_available ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                    {{ $menu->is_available ? 'Tersedia' : 'Habis' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 flex gap-2 justify-center">
                                <a href="{{ route('admin.menus.edit', $menu) }}" class="p-2 text-accent bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors"><x-heroicon-o-pencil-square class="w-5 h-5" /></a>
                                <form action="{{ route('admin.menus.destroy', $menu) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete(this)" class="p-2 text-red-500 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                                        <x-heroicon-o-trash class="w-5 h-5" />
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-400 font-medium">Belum ada menu.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="p-6 border-t border-gray-100">{{ $menus->links() }}</div>
        </div>
    </div>
</x-app-layout>