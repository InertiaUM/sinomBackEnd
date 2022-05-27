<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'SINOM' }} | Intelligence System Room</title>
    {{-- <link rel="icon" type="image/png" href="{{ asset('storage/img/simasa/S only.png') }}"> --}}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.6.96/css/materialdesignicons.min.css">

    @stack('css')
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body x-data="{open: false, dark:true}" x-init="
    htmlClasses = document.querySelector('html').classList;
    dark = window.localStorage.getItem('dark') ? JSON.parse(window.localStorage.getItem('dark'))
    : ( !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches )
    if(dark) htmlClasses.add('dark')
    else htmlClasses.remove('dark');
    " :class="{'overflow-hidden': open}" class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-white">
        <x-sinom-navbar />

        <!-- Page Content -->
        <main class="mx-6 pt-28 pb-12">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    @stack('js')

    @stack('scripts')

</body>

</html>