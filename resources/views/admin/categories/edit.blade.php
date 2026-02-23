<x-app-layout title="Edit Kategori">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex items-center gap-4 mb-3 md:mb-6">
            <a href="{{ route('admin.categories.index') }}" class="p-2 bg-white rounded-xl shadow-sm border border-gray-100 text-gray-500 hover:border-secondary hover:text-secondary transition-colors">
                <x-heroicon-o-arrow-left class="w-5 h-5" />
            </a>
            <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Edit Kategori</h2>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label class="block text-sm font-bold text-text mb-2">Nama Kategori</label>
                    <input type="text" name="name" value="{{ old('name', $category->name) }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-secondary focus:ring focus:ring-secondary/20 bg-gray-50 transition outline-none">
                    @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-secondary hover:bg-secondary text-white font-bold py-3 px-8 rounded-xl shadow-md transition-colors">
                        Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>