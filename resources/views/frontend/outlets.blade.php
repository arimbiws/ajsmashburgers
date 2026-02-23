<x-frontend-layout title="Outlets - AJ Smash Burgers">
    <section class="bg-tertiary py-24 px-4 pt-32 text-center">
        <h1 class="font-heading text-white text-5xl md:text-7xl uppercase mb-4">Our Outlets</h1>
        <p class="text-primary font-bold tracking-widest uppercase">Find us near you</p>
    </section>

    <section class="container mx-auto px-4 py-20 max-w-5xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse ($outlets as $outlet)
            <div class="bg-box-gradient p-8 rounded-3xl shadow-xl border border-gray-100 flex flex-col justify-between">
                <div>
                    <h2 class="font-heading text-secondary text-3xl mb-4 uppercase">{{ $outlet->name }}</h2>
                    <div class="flex items-start mb-4 text-tertiary">
                        <x-heroicon-o-map-pin class="w-6 h-6 mr-3 flex-shrink-0 text-primary" />
                        <p class="font-medium">{{ $outlet->address }}</p>
                    </div>
                    <div class="flex items-center mb-6 text-tertiary">
                        <x-heroicon-o-phone class="w-6 h-6 mr-3 text-primary" />
                        <p class="font-medium">{{ $outlet->phone }}</p>
                    </div>
                </div>
                <a href="{{ $outlet->link_maps }}" target="_blank" class="w-full block text-center bg-tertiary text-white font-bold py-3 rounded-full hover:bg-primary hover:text-tertiary transition duration-300 uppercase tracking-wider text-sm">
                    Get Directions
                </a>
            </div>
            @empty
            <div class="col-span-full text-center text-gray-500 py-10">Belum ada data outlet.</div>
            @endforelse
        </div>
    </section>
</x-frontend-layout>