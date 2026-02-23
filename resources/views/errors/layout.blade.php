<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name', 'AJ Smash Burgers') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 bg-radial-hero relative min-h-screen flex flex-col justify-center items-center py-10 overflow-hidden">

    <div class="absolute -top-32 -left-32 w-96 h-96 bg-primary/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary/10 rounded-full blur-[100px] pointer-events-none z-0"></div>

    <div class="relative z-10 w-full max-w-xl px-6 flex flex-col items-center text-center">
        <div class="mb-10">
            <a>
                <x-application-logo class="h-20 w-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-300" />
            </a>
        </div>

        <div class="w-full p-12 bg-white/5 border border-white/10 shadow-[0_0_40px_rgba(0,0,0,0.3)] rounded-3xl backdrop-blur-md">

            <h1 class="font-heading text-5xl text-primary mb-7 drop-shadow-[0_0_15px_rgba(255,165,0,0.5)]">
                Error
                @yield('code')!
            </h1>

            <h2 class="font-heading text-md md:text-xl text-white uppercase tracking-wider mb-4">
                @yield('message')
            </h2>

            <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-10">
                @yield('description')
            </p>

            <a href="{{ route('home') }}" class="inline-flex items-center justify-center w-full bg-primary hover:bg-yellow-500 text-tertiary font-bold py-4 px-8 rounded-xl transition duration-300 shadow-[0_0_15px_rgba(255,165,0,0.3)] hover:shadow-[0_0_25px_rgba(255,165,0,0.5)] uppercase tracking-wider">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</body>

</html>