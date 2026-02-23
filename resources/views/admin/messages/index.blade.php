<x-app-layout title="Kelola Pesan">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6">
            <div>
                <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Daftar Pesan Masuk</h2>
                <p class="text-sm text-gray-400">Kelola pertanyaan dan masukan dari pelanggan Anda.</p>
            </div>

            <div class="w-full lg:w-auto">
                <form action="{{ route('admin.messages.index') }}" method="GET" class="flex flex-col sm:flex-row gap-2">
                    <div class="relative w-full sm:w-64">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <x-heroicon-o-magnifying-glass class="h-5 w-5 text-gray-400" />
                        </div>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama, email, subjek..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition-all text-sm">
                    </div>
                    <select name="sort" onchange="this.form.submit()" class="w-full sm:w-48 px-4 py-2.5 rounded-xl border border-gray-200 bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 outline-none transition-all text-sm cursor-pointer">
                        <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                        <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Terlama</option>
                        <option value="belum_dibaca" {{ request('sort') == 'belum_dibaca' ? 'selected' : '' }}>Belum Dibaca</option>
                        <option value="sudah_dibaca" {{ request('sort') == 'sudah_dibaca' ? 'selected' : '' }}>Sudah Dibaca</option>
                    </select>
                </form>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white border-b border-gray-100 text-secondary text-xs uppercase tracking-wider">
                            <th class="px-6 py-4 font-bold text-center">Status</th>
                            <th class="px-6 py-4 font-bold text-left">Pengirim</th>
                            <th class="px-6 py-4 font-bold text-left">Subjek & Pesan</th>
                            <th class="px-6 py-4 font-bold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($messages as $msg)
                        <tr class="hover:bg-orange-50/30 transition-colors group {{ !$msg->is_read ? 'bg-blue-50/20' : '' }}">

                            <td class="px-6 py-4 text-center">
                                @if(!$msg->is_read)
                                <div class="w-3 h-3 bg-secondary rounded-full mx-auto shadow-[0_0_6px_rgba(211,63,23,0.4)]" title="Belum Dibaca"></div>
                                @else
                                <div class="w-3 h-3 bg-gray-300 rounded-full mx-auto" title="Sudah Dibaca"></div>
                                @endif
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <p class="text-sm font-bold {{ !$msg->is_read ? 'text-secondary' : 'text-text' }}">{{ $msg->name }}</p>
                                <p class="text-xs text-gray-500">{{ $msg->email }}</p>
                                <p class="text-xs text-gray-400 mt-1">{{ $msg->created_at->format('d M Y, H:i') }}</p>
                            </td>

                            <td class="px-6 py-4">
                                <p class="text-sm font-bold mb-1 whitespace-normal break-words max-w-xs md:max-w-md leading-tight {{ !$msg->is_read ? 'text-secondary' : 'text-text' }}">
                                    {{ $msg->subject ?? 'Tanpa Subjek' }}
                                </p>
                                <p class="text-xs md:text-sm text-gray-500 truncate max-w-xs md:max-w-md">
                                    {{ $msg->message }}
                                </p>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('admin.messages.show', $msg->id) }}" class="p-2 text-accent bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors" title="Lihat Pesan">
                                        <x-heroicon-o-eye class="w-5 h-5" />
                                    </a>
                                    <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete(this)" class="p-2 text-red-500 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                                            <x-heroicon-o-trash class="w-5 h-5" />
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="py-12 px-6 text-center text-gray-400 font-medium">
                                <x-heroicon-o-inbox class="w-12 h-12 mx-auto text-gray-300 mb-3" />
                                Kotak masuk Anda kosong.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($messages->hasPages())
            <div class="p-6 border-t border-gray-100 bg-gray-50/50">
                {{ $messages->links() }}
            </div>
            @endif
        </div>
    </div>
</x-app-layout>