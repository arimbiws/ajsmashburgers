@props(['title' => null])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ? $title . ' - Auth' : config('app.name', 'AJ Smash Burger') . ' - Auth' }}</title>

    <link rel="icon" href="{{ asset('storage/company/icon-ajsmash.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 bg-radial-hero relative min-h-screen flex flex-col sm:justify-center items-center py-10">

    <div class="absolute -top-32 -left-32 w-96 h-96 bg-primary/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-secondary/10 rounded-full blur-[100px] pointer-events-none z-0"></div>

    <div class="relative z-10 w-full sm:max-w-lg px-6 flex flex-col items-center">
        <div class="mb-10">
            <a>
                <x-application-logo class="h-24 w-auto object-contain drop-shadow-2xl hover:scale-105 transition-transform duration-300" />
            </a>
        </div>

        <div class="w-full px-8 py-10 bg-white/5 border border-white/10 shadow-[0_0_40px_rgba(0,0,0,0.3)] overflow-hidden rounded-3xl backdrop-blur-md">
            {{ $slot }}
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('home') }}" class="text-gray-400 hover:text-primary transition-colors text-sm font-bold flex items-center justify-center tracking-wider uppercase">
                &larr; Back to Website
            </a>
        </div>
    </div>
</body>

</html>