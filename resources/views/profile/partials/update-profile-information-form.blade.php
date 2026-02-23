<section>
    <header>
        <h2 class="text-xl font-bold text-gray-800">
            {{ __('Informasi Profil') }}
        </h2>
        <p class="mt-1 text-sm text-gray-500">
            {{ __("Perbarui nama lengkap dan alamat email akun Anda.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <label for="name" class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">{{ __('Nama Lengkap') }}</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"
                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 outline-none transition">
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email" class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required autocomplete="username"
                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 outline-none transition">
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="mt-3">
                <p class="text-sm text-gray-800">
                    {{ __('Email Anda belum diverifikasi.') }}
                    <button form="send-verification" class="text-secondary hover:text-secondary font-bold hover:underline focus:outline-none">
                        {{ __('Klik di sini untuk mengirim ulang email verifikasi.') }}
                    </button>
                </p>
                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div class="flex items-center gap-4 mb-3 md:mb-6">
            <button type="submit" class="bg-secondary hover:bg-secondary text-white font-bold py-3 px-8 rounded-xl transition shadow-lg hover:shadow-secondary/30">
                {{ __('Simpan Perubahan') }}
            </button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2500)" class="text-sm font-bold text-green-600 bg-green-50 px-3 py-2 rounded-lg">
                {{ __('Berhasil disimpan.') }}
            </p>
            @endif
        </div>
    </form>
</section>