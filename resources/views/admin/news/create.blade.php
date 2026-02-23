<x-app-layout title="Tambah Berita">
    <div class="py-8 max-w-7xl mx-auto px-4">
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
            @csrf
            <div class="mb-6">
                <label class="block text-sm font-bold text-text mb-2 uppercase">Judul Berita/Promo</label>
                <input type="text" name="title" required class="w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-secondary outline-none transition">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-bold text-text mb-2 uppercase">Gambar Thumbnail</label>
                <input type="file" name="thumbnail" required class="w-full px-4 py-2.5 rounded-xl border-gray-200 bg-gray-50 focus:border-secondary outline-none transition file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100">
            </div>
            <div class="mb-8">
                <label class="block text-sm font-bold text-text mb-2 uppercase">Konten Lengkap</label>
                <textarea name="content" rows="8" required class="w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-secondary outline-none transition"></textarea>
            </div>
            <button type="submit" class="bg-secondary hover:bg-secondary text-white font-bold py-3 px-8 rounded-xl transition shadow-lg">Publikasi Berita</button>
        </form>
    </div>
</x-app-layout>