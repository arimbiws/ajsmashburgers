<x-frontend-layout>
    <x-slot:title>
        Beranda - AJ Smash Burger
    </x-slot:title>

    <section class="bg-orange-500 py-20 text-white text-center">
        <h1 class="text-5xl font-bold mb-4">Rasakan Ledakan Rasa!</h1>
        <p class="text-xl mb-8">Smash Burger Terbaik di Bali dengan Cita Rasa Autentik.</p>
        <a href="{{ route('frontend.menu') }}" class="bg-white text-orange-600 px-6 py-3 rounded-full font-bold hover:bg-gray-100">
            Lihat Menu Kami
        </a>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Menu Favorit</h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach($featuredMenus as $menu)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ Storage::url($menu->menu_image) }}" alt="{{ $menu->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg">{{ $menu->name }}</h3>
                    <p class="text-gray-600 text-sm mt-1 truncate">{{ $menu->description }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-orange-600 font-bold">Rp {{ number_format($menu->price, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    </x-frontend.layout>

    @push('after-script')

    @endpush