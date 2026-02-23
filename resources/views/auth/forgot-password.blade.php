<x-guest-layout title="Forgot Password">
    <div class="text-center mb-8">
        <h2 class="font-heading text-xl md:text-2xl text-white uppercase tracking-wider mb-5">Reset Password</h2>
        <p class="text-gray-400 text-sm leading-relaxed">
            {{ __("Forgot your password? No problem. Just let us know your email address and we'll email you a password reset link.") }}
        </p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <div>
            <label for="email" class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">{{ __('Email Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="john@example.com"
                class="w-full px-4 py-3 rounded-xl border {{ $errors->has('email') ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20' : 'border-white/10 focus:border-primary focus:ring-primary/30' }} bg-black/50 text-white placeholder-gray-600 transition outline-none focus:ring-1">
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full bg-primary hover:bg-yellow-500 text-tertiary font-bold py-4 px-4 rounded-xl transition duration-300 shadow-[0_0_15px_rgba(255,165,0,0.3)] hover:shadow-[0_0_25px_rgba(255,165,0,0.5)] uppercase tracking-wider">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</x-guest-layout>