<x-guest-layout title="Log In">
    <div class="text-center mb-8">
        <h2 class="font-heading text-3xl md:text-4xl text-white tracking-wider my-4">Welcome Back!</h2>
        <p class="text-gray-400 text-sm">Log in to manage AJ Smash Burgers</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

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

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <label for="email" class="block text-xs font-bold text-gray-400 mb-2 uppercase tracking-wider">{{ __('Email Address') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="admin@example.com"
                class="w-full px-4 py-3 rounded-xl border {{ $errors->has('email') ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20' : 'border-white/10 focus:border-primary focus:ring-primary/30' }} bg-black/50 text-white placeholder-gray-600 transition outline-none focus:ring-1">
        </div>

        <div>
            <div class="flex justify-between items-center mb-2">
                <label for="password" class="block text-xs font-bold text-gray-400 uppercase tracking-wider">{{ __('Password') }}</label>
                @if (Route::has('password.request'))
                <a class="text-xs text-primary hover:text-yellow-500 transition font-medium tracking-wider" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
                @endif
            </div>
            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="••••••••"
                class="w-full px-4 py-3 rounded-xl border {{ $errors->has('password') ? 'border-red-500 focus:border-red-500 focus:ring-red-500/20' : 'border-white/10 focus:border-primary focus:ring-primary/30' }} bg-black/50 text-white placeholder-gray-600 transition outline-none focus:ring-1">
        </div>

        <div class="flex items-center">
            <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 rounded border-white/20 bg-black/50 text-primary focus:ring-primary/50 focus:ring-offset-0 transition cursor-pointer">
                <span class="ms-3 text-sm font-medium text-gray-400 group-hover:text-gray-200 transition">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full bg-primary hover:bg-yellow-500 text-tertiary font-bold py-4 px-4 rounded-xl transition duration-300 shadow-[0_0_15px_rgba(255,165,0,0.3)] hover:shadow-[0_0_25px_rgba(255,165,0,0.5)] uppercase tracking-wider mb-6">
                {{ __('Log in') }}
            </button>

            <p class="text-center text-sm font-medium text-gray-400">
                {{ __("Don't have an account?") }}
                <a class="text-primary hover:text-yellow-500 transition font-bold ml-1" href="{{ route('register') }}">
                    {{ __('Sign Up') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>