@props(['title', 'excerpt', 'image', 'link' => '#'])

<div class="bg-white rounded-2xl p-4 shadow-md border border-gray-100 flex flex-col h-full hover:shadow-xl transition-shadow duration-300 group overflow-hidden">
    <div class="relative w-full h-48 mb-5 overflow-hidden rounded-xl shrink-0">
        <img src="{{ asset($image) }}" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500" alt="{{ $title }}">
    </div>

    <div class="flex flex-col flex-grow">
        <h3 class="font-heading text-base md:text-md lg:text-xl text-tertiary mb-3 leading-relaxed group-hover:text-secondary transition-colors">{{ $title }}</h3>
        <p class="text-sm text-gray-500 mb-6 text-justify leading-relaxed">{{ $excerpt }}</p>

        <div class="mt-auto">
            <a href="{{ $link }}" class="block bg-tertiary hover:bg-primary text-white hover:text-tertiary text-xs md:text-sm font-bold py-3 rounded-lg w-full text-center transition-colors duration-300 uppercase tracking-wider">
                Read More
            </a>
        </div>
    </div>
</div>