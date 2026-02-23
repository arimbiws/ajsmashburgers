<x-guest-layout title="Sign Up">
    <div class="text-center mb-8">
        <h2 class="font-heading text-3xl md:text-4xl text-white tracking-wider my-4">Create Account</h2>
        <p class="text-gray-400 text-sm">Join the AJ Smash Burgers Team</p>
    </div>

    @if ($errors->any())
    <div class="bg-red-500 border border-red-500/30 rounded-xl p-4 mb-6 backdrop-blur-md">
        <div class="flex items-center">
            <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-white" />

            <ul class="list-none list-inside text-white text-sm ms-5 font-medium">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif


    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name" class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="John Doe"
                class="w-full px-4 py-3 rounded-xl border border-white/10 focus:border-primary focus:ring-1 focus:ring-primary bg-black/50 text-white placeholder-gray-600 transition outline-none">
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400 text-sm" />
        </div>

        <div class="mt-5">
            <label for="email" class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="john@example.com"
                class="w-full px-4 py-3 rounded-xl border border-white/10 focus:border-primary focus:ring-1 focus:ring-primary bg-black/50 text-white placeholder-gray-600 transition outline-none">
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
        </div>

        <div class="mt-5">
            <label for="password" class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="⁎⁎⁎⁎⁎⁎⁎⁎"
                class="w-full px-4 py-3 rounded-xl border border-white/10 focus:border-primary focus:ring-1 focus:ring-primary bg-black/50 text-white placeholder-gray-600 transition outline-none">
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm" />
        </div>

        <div class="mt-5">
            <label for="password_confirmation" class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="⁎⁎⁎⁎⁎⁎⁎⁎"
                class="w-full px-4 py-3 rounded-xl border border-white/10 focus:border-primary focus:ring-1 focus:ring-primary bg-black/50 text-white placeholder-gray-600 transition outline-none">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400 text-sm" />
        </div>

        <div class="mt-8">
            <button type="submit" class="w-full bg-primary hover:bg-yellow-500 text-tertiary font-bold py-3.5 px-4 rounded-xl transition duration-300 shadow-[0_0_15px_rgba(255,165,0,0.3)] hover:shadow-[0_0_25px_rgba(255,165,0,0.5)] uppercase tracking-wider mb-8">
                {{ __('Register') }}
            </button>

            <p class="text-center text-sm text-gray-400">
                {{ __('Already registered?') }}
                <a class="text-primary hover:text-yellow-500 hover:underline transition font-bold" href="{{ route('login') }}">
                    {{ __('Log in') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>