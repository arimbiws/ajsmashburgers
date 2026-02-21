<x-app-layout title="Dashboard Admin">
    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="ps-5 py-5 bg-red-500 text-white font-bold">
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-orange-500">
                    <div class="text-gray-600 font-bold text-xl">Total Menu</div>
                    <div class="text-3xl font-bold text-orange-400 mt-2">{{ $totalMenus }} Item</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-blue-500">
                    <div class="text-gray-600 font-bold text-xl">Pesan Baru</div>
                    <div class="text-3xl font-bold text-blue-400 mt-2">{{ $unreadMessages }} Pesan</div>
                    <a href="#" class="text-sm text-blue-400 hover:underline">Lihat Pesan &rarr;</a>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="text-gray-600 font-bold text-xl">Total Cabang</div>
                    <div class="text-3xl font-bold text-green-400 mt-2">{{ $totalOutlets }} Outlet</div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-600">
                    Selamat datang kembali, <strong>{{ Auth::user()->name }}</strong>!
                    <br>
                    Silakan kelola menu, berita, dan profil usaha melalui navigasi di sebelah kiri (Sidebar).
                </div>
            </div>
        </div>
    </div>
</x-app-layout>