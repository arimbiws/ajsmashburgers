<x-app-layout title="Pengaturan Profil">
    <div class="py-3 max-w-7xl mx-auto px-5 lg:px-3">
        <div class="flex justify-between items-center mb-3 md:mb-6">
            <div>
                <h2 class="text-2xl font-bold text-text tracking-wide mb-1 md:mb-2">Pengaturan Profil</h2>
                <p class="text-sm text-gray-400">Kelola informasi akun dan kata sandi Anda.</p>
            </div>

            @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-xl shadow-sm mb-8">
                {{ session('success') }}
            </div>
            @endif
        </div>

        <div class="space-y-8">
            <div class="p-8 bg-white rounded-3xl shadow-sm border border-gray-100">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-8 bg-white rounded-3xl shadow-sm border border-gray-100">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-8 bg-red-100 rounded-3xl shadow-sm border border-red-100">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>