<section>
    <header>
        <h2 class="text-xl font-bold text-gray-800">
            {{ __('Ubah Kata Sandi') }}
        </h2>
        <p class="mt-1 text-sm text-gray-500">
            {{ __('Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password" class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">{{ __('Kata Sandi Saat Ini') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password"
                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 outline-none transition">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <label for="update_password_password" class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">{{ __('Kata Sandi Baru') }}</label>
            <input id="update_password_password" name="password" type="password" autocomplete="new-password"
                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 outline-none transition">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <label for="update_password_password_confirmation" class="block text-sm font-bold text-text mb-2 uppercase tracking-wide">{{ __('Konfirmasi Kata Sandi') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:border-secondary focus:bg-white focus:ring-4 focus:ring-secondary/20 outline-none transition">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4 mb-3 md:mb-6">
            <button type="submit" class="bg-gray-800 hover:bg-black text-white font-bold py-3 px-8 rounded-xl transition shadow-lg">
                {{ __('Ubah Kata Sandi') }}
            </button>

            @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2500)" class="text-sm font-bold text-green-600 bg-green-50 px-3 py-2 rounded-lg">
                {{ __('Berhasil diubah.') }}
            </p>
            @endif
        </div>
    </form>
</section>