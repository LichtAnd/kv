<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Katja Veit') }}</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
        {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
        {{-- <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:wght@300;400;500;600;700&display=swap" rel="stylesheet">  --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="debug-screens">
        <div class="grid grid-rows-[auto_1fr_auto] font-body antialiased text-gray-900 bg-white min-h-screen"
            x-data="{ isMobileNavOpen: false }"
            :class="{ 'overflow-hidden': isMobileNavOpen }"
        >
            <header class="bg-primary-50">
                <x-mobile-nav />
            </header>

            {{ $slot }}

            <footer>
                <div class="bg-secondary-800">
                    <x-container spacing="md">
                        <x-newsletter></x-newsletter>
                    </x-container>
                </div>

                <div class="bg-secondary-900">
                    <x-container spacing="sm">
                        <p class="text-secondary-100">Copyright 2022 by Katja Veit</p>
                    </x-container>
                </div>
            </footer>
        </div>
    </body>
</html>
