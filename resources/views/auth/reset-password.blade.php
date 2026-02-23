<x-guest-layout title="Reset Password">
    <div class="text-center mb-8">
        <h2 class="font-heading text-xl md:text-2xl text-white uppercase tracking-wider mb-2">Create New Password</h2>
        <p class="text-gray-400 text-sm">Enter your new password below.</p>
    </div>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <label for="email" class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">{{ __('Email Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
                class="w-full px-4 py-3 rounded-xl border {{ $errors->has('email') ? 'border-red-500 focus:ring-red-500/20' : 'border-white/10 focus:border-primary focus:ring-primary/30' }} bg-black/50 text-white transition outline-none focus:ring-1">
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
        </div>

        <div>
            <label for="password" class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">{{ __('New Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="••••••••"
                class="w-full px-4 py-3 rounded-xl border {{ $errors->has('password') ? 'border-red-500 focus:ring-red-500/20' : 'border-white/10 focus:border-primary focus:ring-primary/30' }} bg-black/50 text-white transition outline-none focus:ring-1">
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm" />
        </div>

        <div>
            <label for="password_confirmation" class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="⁎⁎⁎⁎⁎⁎⁎⁎"
                class="w-full px-4 py-3 rounded-xl border border-white/10 focus:border-primary focus:ring-primary/30 bg-black/50 text-white transition outline-none focus:ring-1">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400 text-sm" />
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full bg-primary hover:bg-yellow-500 text-tertiary font-bold py-4 px-4 rounded-xl transition duration-300 shadow-[0_0_15px_rgba(255,165,0,0.3)] hover:shadow-[0_0_25px_rgba(255,165,0,0.5)] uppercase tracking-wider">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</x-guest-layout>