<x-app-layout title="Tambah Berita">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex items-center gap-4 mb-3 md:mb-6">
            <a href="{{ route('admin.news.index') }}" class="p-2 bg-white rounded-xl shadow-sm border border-gray-100 text-gray-500 hover:border-secondary hover:text-secondary transition-colors">
                <x-heroicon-o-arrow-left class="w-5 h-5" />
            </a>
            <div>
                <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Tulis Berita</h2>
                <p class="text-sm text-gray-400">Publikasi berita mengenai update atau promo terbaru.</p>
            </div>
        </div>

        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-10">
            @csrf

            <div class="mb-6">
                <label class="block text-sm font-bold text-text mb-2 uppercase">Judul Berita/Promo</label>
                <input type="text" name="title" required class="w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-secondary outline-none transition">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">Gambar Thumbnail</label>
                <input type="file" name="thumbnail" required class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 focus:outline-none outline-none transition-all cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-orange-100 file:text-orange-700 hover:file:bg-orange-200">
            </div>
            <div class="mb-8">
                <label class="block text-sm font-bold text-text mb-2 uppercase">Konten Lengkap</label>
                <textarea name="content" rows="8" required class="w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-secondary outline-none transition"></textarea>
            </div>
            <button type="submit" class="bg-secondary hover:bg-secondary text-white font-bold py-3 px-8 rounded-xl transition shadow-lg">Publikasi Berita</button>
        </form>
    </div>
</x-app-layout>