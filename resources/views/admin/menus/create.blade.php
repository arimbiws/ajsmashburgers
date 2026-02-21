<x-app-layout>
    <div class="max-w-4xl mx-auto py-10">
        <h2 class="text-2xl font-bold mb-5">Tambah Menu Baru</h2>

        <form action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf <div class="mb-4">
                <label class="block text-gray-700">Nama Menu</label>
                <input type="text" name="name" class="w-full border-gray-300 rounded shadow-sm focus:ring-orange-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Kategori</label>
                <select name="category_id" class="w-full border-gray-300 rounded shadow-sm">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Harga (Rp)</label>
                <input type="number" name="price" class="w-full border-gray-300 rounded shadow-sm">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Deskripsi</label>
                <textarea name="description" rows="3" class="w-full border-gray-300 rounded shadow-sm"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Foto Menu</label>
                <input type="file" name="menu_image" class="w-full border border-gray-300 p-2 rounded">
            </div>

            <button type="submit" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700">
                Simpan Menu
            </button>
        </form>
    </div>
</x-app-layout>