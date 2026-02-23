<x-frontend-layout title="Menu - AJ Smash Burgers">
    <section class="bg-tertiary py-24 px-4 pt-32 text-center">
        <h1 class="font-heading text-white text-5xl md:text-7xl uppercase mb-4">Our Menu</h1>
        <p class="text-primary font-bold tracking-widest uppercase">Savor the Smash Perfection</p>
    </section>

    <section class="container mx-auto px-4 py-20 max-w-6xl">
        @forelse ($categories as $category)
        @if($category->menus->count() > 0)
        <div class="mb-20">
            <h2 class="font-heading text-tertiary text-4xl mb-10 uppercase border-b-4 border-primary inline-block pb-2">{{ $category->name }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($category->menus as $item)
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-2xl transition duration-300 group">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('storage/' . $item->menu_image) }}" alt="{{ $item->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-bold text-xl text-tertiary mb-2">{{ $item->name }}</h3>
                        <p class="text-sm text-gray-500 mb-4 h-10 line-clamp-2">{{ $item->description }}</p>
                        <div class="text-secondary font-heading text-2xl">
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @empty
        <div class="text-center text-gray-500 py-10">Belum ada menu yang tersedia.</div>
        @endforelse
    </section>
</x-frontend-layout>