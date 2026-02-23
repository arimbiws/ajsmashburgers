<x-app-layout title="Detail Pesan">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex items-center gap-4 mb-3 md:mb-6">
            <a href="{{ route('admin.messages.index') }}" class="p-2 bg-white rounded-xl shadow-sm border border-gray-100 text-gray-500 hover:border-secondary hover:text-secondary transition-colors">
                <x-heroicon-o-arrow-left class="w-5 h-5" />
            </a>
            <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Baca Pesan</h2>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-8 border-b border-gray-100 bg-gray-50/50 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex items-center gap-4 mb-3 md:mb-6">
                    <div class="w-12 h-12 bg-orange-100 text-secondary rounded-full flex items-center justify-center font-bold text-xl">
                        {{ substr($message->name, 0, 1) }}
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">{{ $message->name }}</h3>
                        <a href="mailto:{{ $message->email }}" class="text-sm text-blue-500 hover:underline">{{ $message->email }}</a>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-xs md:text-sm font-bold text-gray-500">{{ $message->created_at->format('d F Y') }}</p>
                    <p class="text-xs text-gray-400 pt-1">{{ $message->created_at->format('H:i') }} WITA</p>
                </div>
            </div>

            <div class="p-8 md:p-10">
                <h4 class="font-bold text-base md:text-xl text-gray-800 mb-6 uppercase tracking-wide border-b border-gray-100 pb-4">
                    <span class="text-secondary">{{ $message->subject ?? 'Tidak ada subjek' }}</span>
                </h4>
                <div class="prose max-w-none text-gray-600 leading-relaxed bg-gray-50 p-6 rounded-2xl border border-gray-100">
                    {!! nl2br(e($message->message)) !!}
                </div>

                <div class="mt-10 flex justify-between gap-4">
                    <form action="{{ route('admin.messages.destroy', $message) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmDelete(this)" class="p-2 text-red-500 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                            <x-heroicon-o-trash class="w-5 h-5" />
                        </button>
                    </form>
                    <a href="mailto:{{ $message->email }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-xl transition shadow-lg inline-flex items-center">
                        Balas via Email<x-heroicon-s-paper-airplane class="w-5 h-5 ms-2" />
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>