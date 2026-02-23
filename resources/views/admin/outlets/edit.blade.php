<x-app-layout title="Edit Outlet">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex items-center gap-4 mb-3 md:mb-6">
            <a href="{{ route('admin.outlets.index') }}" class="p-2 bg-white rounded-xl shadow-sm border border-gray-100 text-gray-500 hover:border-secondary hover:text-secondary transition-colors">
                <x-heroicon-o-arrow-left class="w-5 h-5" />
            </a>
            <div>
                <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Edit Outlet</h2>
                <p class="text-sm text-gray-400">Perbarui informasi lokasi cabang.</p>
            </div>
        </div>

        <form action="{{ route('admin.outlets.update', $outlet) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-10">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">Nama Cabang</label>
                    <input type="text" name="name" value="{{ old('name', $outlet->name) }}" required
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 outline-none transition-all">
                </div>
                <div>
                    <label class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">Telepon Cabang</label>
                    <input type="text" name="phone" value="{{ old('phone', $outlet->phone) }}" required
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 outline-none transition-all">
                </div>
            </div>

            <div class="mb-6 p-6 bg-gray-50/50 rounded-2xl border border-gray-100">
                <label class="block text-sm font-bold text-text mb-4 uppercase tracking-wide">Gambar Cabang</label>

                @if($outlet->outlet_image)
                <div class="mb-5 flex flex-col sm:flex-row sm:items-center gap-4">
                    <img src="{{ asset('storage/' . $outlet->outlet_image) }}" alt="{{ $outlet->name }}" class="w-32 h-32 object-cover rounded-xl border border-gray-200 shadow-sm flex-shrink-0">
                    <p class="text-sm text-gray-500 leading-relaxed">Unggah gambar baru di bawah jika ingin mengganti tampilan saat ini.</p>
                </div>
                @endif

                <input type="file" name="outlet_image"
                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-white focus:border-secondary outline-none transition-all cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-orange-100 file:text-orange-700 hover:file:bg-orange-200">
                <p class="text-xs text-gray-400 mt-2 font-medium">*Biarkan kosong jika tidak ingin mengubah gambar.</p>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">Link Google Maps (URL)</label>
                <input type="url" name="maps_link" value="{{ old('maps_link', $outlet->maps_link) }}"
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 outline-none transition-all">
            </div>

            <div class="mb-8">
                <label class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">Alamat Lengkap</label>
                <textarea name="address" rows="3" required
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 outline-none transition-all resize-none">{{ old('address', $outlet->address) }}</textarea>
            </div>

            <div class="flex justify-end pt-6 border-t border-gray-100">
                <button type="submit" class="w-full md:w-auto bg-secondary hover:bg-secondary text-white font-bold py-3.5 px-10 rounded-xl transition-all shadow-[0_4px_14px_0_rgba(249,115,22,0.39)] hover:shadow-[0_6px_20px_rgba(249,115,22,0.23)] hover:-translate-y-0.5 uppercase tracking-widest text-sm">
                    Perbarui Outlet
                </button>
            </div>
        </form>
    </div>
</x-app-layout>