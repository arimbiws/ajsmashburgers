@props(['title', 'excerpt', 'image', 'link' => '#'])

<div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 flex flex-col h-full hover:shadow-md transition-shadow duration-300">
    <img src="{{ asset($image) }}" class="rounded-xl w-full h-48 object-cover mb-4" alt="{{ $title }}">
    <h3 class="font-heading text-xl text-text mb-3 leading-tight">{{ $title }}</h3>
    <p class="text-sm text-gray-500 mb-6 flex-grow">{{ $excerpt }}</p>
    <a href="{{ $link }}" class="bg-primary text-tertiary font-bold py-2 rounded-full w-full text-center hover:bg-yellow-500 transition-colors mt-auto">
        Read More
    </a>
</div>