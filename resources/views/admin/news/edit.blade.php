<x-app-layout title="Edit Berita">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex items-center gap-4 mb-3 md:mb-6">
            <a href="{{ route('admin.news.index') }}" class="p-2 bg-white rounded-xl shadow-sm border border-gray-100 text-gray-500 hover:border-secondary hover:text-secondary transition-colors">
                <x-heroicon-o-arrow-left class="w-5 h-5" />
            </a>
            <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Edit Berita</h2>
        </div>

        <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label class="block text-sm font-bold text-text mb-2 uppercase">Judul Berita/Promo</label>
                <input type="text" name="title" value="{{ old('title', $news->title) }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary outline-none transition">
            </div>

            <div class="mb-6 p-6 bg-gray-50/50 rounded-2xl border border-gray-100">
                <label class="block text-sm font-bold text-text mb-4 uppercase">Gambar Thumbnail</label>
                @if($news->thumbnail)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $news->thumbnail) }}" class="w-48 h-28 object-cover rounded-xl border border-gray-200 shadow-sm">
                </div>
                @endif
                <input type="file" name="thumbnail" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-white focus:border-secondary outline-none transition cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-orange-100 file:text-orange-700 hover:file:bg-orange-200">
                <p class="text-xs text-gray-400 mt-2 font-medium">*Biarkan kosong jika tidak ingin mengubah gambar.</p>
            </div>

            <div class="mb-8">
                <label class="block text-sm font-bold text-text mb-2 uppercase">Konten Lengkap</label>
                <textarea name="content" rows="10" required class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary outline-none transition resize-y">{{ old('content', $news->content) }}</textarea>
            </div>

            <div class="flex justify-end pt-6 border-t border-gray-100">
                <button type="submit" class="bg-secondary hover:bg-secondary text-white font-bold py-3 px-10 rounded-xl transition shadow-lg">Perbarui Berita</button>
            </div>
        </form>
    </div>
</x-app-layout>