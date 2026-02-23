<x-frontend-layout title="{{ $news->title }} - AJ Smash Burgers">
    <section class="pt-32 pb-20 px-4 container mx-auto max-w-7xl">
        <a href="{{ route('news') }}" class="inline-flex items-center text-secondary hover:text-primary font-bold uppercase text-sm mb-8 transition">
            <x-heroicon-o-arrow-left class="w-4 h-4 mr-2" /> Back to News
        </a>

        <img src="{{ asset('storage/' . $news->thumbnail) }}" class="w-full h-64 md:h-[400px] object-cover rounded-3xl shadow-xl mb-8" alt="{{ $news->title }}">

        <h1 class="font-heading text-tertiary text-4xl md:text-5xl uppercase mb-4 leading-tight">
            {{ $news->title }}
        </h1>
        <div class="flex items-center text-gray-500 text-sm font-bold tracking-wider mb-8 uppercase">
            <span>{{ $news->created_at->format('d M Y') }}</span>
            <span class="mx-3">•</span>
            <span>By {{ $news->user->name ?? 'Admin' }}</span>
        </div>

        <div class="prose prose-lg max-w-none text-text leading-relaxed font-medium mb-16">
            {!! nl2br(e($news->content)) !!}
        </div>

        @if($latestNews->count() > 0)
        <div class="border-t-2 border-gray-100 pt-12">
            <h3 class="font-heading text-3xl text-tertiary uppercase mb-8">Latest News</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($latestNews as $related)
                <x-news-card
                    title="{{ $related->title }}"
                    excerpt="{{ Str::limit(strip_tags($related->content), 60) }}"
                    image="{{ 'storage/' . $related->thumbnail }}"
                    link="{{ route('news.detail', $related->slug) }}" />
                @endforeach
            </div>
        </div>
        @endif
    </section>
</x-frontend-layout>