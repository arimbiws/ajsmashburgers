<x-app-layout title="Kelola Kategori">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex justify-between items-center mb-3 md:mb-6">
            <div>
                <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Daftar Kategori</h2>
                <p class="text-sm text-gray-400">Kelola kategori menu makanan dan minuman.</p>
            </div>
            <a href="{{ route('admin.categories.create') }}" class="bg-radial-hero text-white font-medium py-2.5 px-5 rounded-xl shadow-md transition-colors flex justify-center items-center flex-shrink-0">
                <x-heroicon-o-plus class="w-5 h-5" /> <span class="hidden md:block md:ms-2">Tambah Kategori</span>
            </a>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white border-b border-gray-100 text-secondary text-xs uppercase tracking-wider">
                            <th class="px-6 py-4 font-bold text-center">No</th>
                            <th class="px-6 py-4 font-bold text-center">Nama Kategori</th>
                            <th class="px-6 py-4 font-bold text-center">Slug</th>
                            <th class="px-6 py-4 font-bold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($categories as $index => $category)
                        <tr class="hover:bg-orange-50/30 transition-colors group">
                            <td class="px-6 py-4 text-gray-400 text-center">{{ $categories->firstItem() + $index }}</td>
                            <td class="px-6 py-4 font-bold text-text">{{ $category->name }}</td>
                            <td class="px-6 py-4 text-gray-400 text-sm">{{ $category->slug }}</td>
                            <td class="px-6 py-4 flex gap-2 justify-center">
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="p-2 text-accent bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                    <x-heroicon-o-pencil-square class="w-5 h-5" />
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
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
                            <td colspan="4" class="px-6 py-12 text-center text-gray-400 font-medium">Belum ada data kategori.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="p-6 border-t border-gray-100">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</x-app-layout>