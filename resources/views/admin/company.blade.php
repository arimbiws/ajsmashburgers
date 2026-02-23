<x-app-layout title="Profil Usaha">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex justify-between items-center mb-3 md:mb-6">
            <div>
                <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Profil Usaha</h2>
                <p class="text-sm text-gray-400">Kelola informasi utama dan logo perusahaan yang tampil di website pengunjung.</p>
            </div>

            @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-xl shadow-sm mb-8">
                {{ session('success') }}
            </div>
            @endif
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
            <form action="{{ route('admin.company.update', $profile->id) }}" method="POST" enctype="multipart/form-data" class="p-8 md:p-10">
                @csrf
                @method('PUT')

                <h3 class="text-lg font-bold text-secondary mb-4 border-b border-gray-100 pb-2">Identitas Visual</h3>
                <div class="mb-8 p-6 bg-gray-50/50 rounded-2xl border border-gray-100 flex flex-col md:flex-row items-start gap-8">
                    <div>
                        <label class="block text-sm font-bold text-text mb-2 uppercase">Logo Saat Ini</label>
                        @if($profile->logo)
                        <div class="w-32 h-32 bg-white rounded-2xl border border-gray-200 shadow-sm flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('storage/' . $profile->logo) }}" alt="Logo Perusahaan" class="w-full h-full object-contain p-2">
                        </div>
                        @else
                        <div class="w-32 h-32 bg-white rounded-2xl border border-gray-200 shadow-sm flex items-center justify-center flex-col text-gray-400">
                            <x-heroicon-o-photo class="w-8 h-8 mb-1" />
                            <span class="text-xs font-bold">Belum Ada</span>
                        </div>
                        @endif
                    </div>
                    <div class="flex-grow w-full">
                        <label class="block text-sm font-bold text-text mb-2 uppercase">Upload Logo Baru</label>
                        <input type="file" name="logo" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-white focus:border-secondary outline-none transition cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-orange-100 file:text-orange-700 hover:file:bg-orange-200">
                        <p class="text-xs text-gray-400 mt-2 font-medium">*Maksimal 2MB. Format: JPG, PNG, WEBP. Biarkan kosong jika tidak ingin mengubah logo.</p>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-secondary mb-4 border-b border-gray-100 pb-2">Informasi Umum</h3>
                <div class="grid grid-cols-1 gap-6 mb-8">
                    <div>
                        <label class="block text-sm font-bold text-text mb-2 uppercase">About Us</label>
                        <textarea name="about_us" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-secondary outline-none transition">{{ old('about_us', $profile->about_us) }}</textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-text mb-2 uppercase">Visi</label>
                            <textarea name="vision" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-secondary outline-none transition">{{ old('vision', $profile->vision) }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-text mb-2 uppercase">Misi</label>
                            <textarea name="mission" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-secondary outline-none transition">{{ old('mission', $profile->mission) }}</textarea>
                        </div>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-secondary mb-4 border-b border-gray-100 pb-2">Kontak Utama</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <label class="block text-sm font-bold text-text mb-2 uppercase">Email Utama</label>
                        <input type="email" name="email_main" value="{{ old('email_main', $profile->email_main) }}" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-secondary outline-none transition">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-text mb-2 uppercase">Telepon Utama</label>
                        <input type="text" name="phone_main" value="{{ old('phone_main', $profile->phone_main) }}" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-secondary outline-none transition">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-text mb-2 uppercase">Alamat Lengkap</label>
                        <textarea name="address_main" rows="2" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-secondary outline-none transition">{{ old('address_main', $profile->address_main) }}</textarea>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-secondary mb-4 border-b border-gray-100 pb-2">Sosial Media & Maps</h3>
                <div class="grid grid-cols-1 gap-6 mb-8">
                    <div>
                        <label class="block text-sm font-bold text-text mb-2 uppercase">Link Instagram</label>
                        <input type="url" name="link_instagram" value="{{ old('link_instagram', $profile->link_instagram) }}" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-secondary outline-none transition" placeholder="https://instagram.com/...">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-text mb-2 uppercase">Link Google Maps Embed (src)</label>
                        <input type="url" name="link_maps_main" value="{{ old('link_maps_main', $profile->link_maps_main) }}" class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-secondary outline-none transition">
                    </div>
                </div>

                <div class="flex justify-end pt-6 border-t border-gray-100">
                    <button type="submit" class="bg-secondary hover:bg-secondary text-white font-bold py-4 px-10 rounded-xl transition shadow-lg hover:shadow-secondary/30 uppercase tracking-widest text-sm">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>