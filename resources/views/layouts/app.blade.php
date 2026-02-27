@props(['title' => null])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ? $title . ' - Admin' : config('app.name', 'AJ Smash Burger') . ' - Admin' }}</title>

    <link rel="icon" href="{{ asset('storage/company/icon-ajsmash.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <div x-data="{ sidebarOpen: window.innerWidth >= 1024 }"
        @resize.window="sidebarOpen = window.innerWidth >= 1024"
        class="flex h-screen overflow-hidden">

        <x-admin.sidebar />

        <div class="flex-1 flex flex-col overflow-hidden transition-all duration-300 relative">

            <x-admin.topbar />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-background p-3 md:p-5">

                @if(session('success'))
                <div x-data="{ show: true }" x-show="show" x-transition.duration.500ms class="mb-6 flex items-center justify-between bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-2xl shadow-sm">
                    <div class="flex items-center">
                        <x-heroicon-o-check-circle class="w-6 h-6 mr-3 text-green-500" />
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                    <button @click="show = false" class="text-green-500 hover:text-green-700 transition">
                        <x-heroicon-o-x-mark class="w-5 h-5" />
                    </button>
                </div>
                @endif

                {{ $slot }}

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(button) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        }

        function confirmLogout(button) {
            Swal.fire({
                title: 'Keluar dari sistem?',
                text: "Anda harus login kembali untuk mengakses panel admin.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#ef4444",
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Keluar',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        }
    </script>
    @stack('after-script')
</body>

</html>