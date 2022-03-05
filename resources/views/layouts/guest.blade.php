<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Katja Veit') }}</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" class="text-base text-secondary-100 hover:underline" href="https://fonts.googleapis.com"> --}}
        {{-- <link rel="preconnect" class="text-base text-secondary-100 hover:underline" href="https://fonts.gstatic.com" crossorigin> --}}
        {{-- <link class="text-base text-secondary-100 hover:underline" href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:wght@300;400;500;600;700&display=swap" rel="stylesheet">  --}}

        <!-- Styles -->
        <link rel="stylesheet" class="text-base text-secondary-100 hover:underline" href="{{ mix('css/app.css') }}">

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
                <div class="bg-secondary-700">
                    <x-container spacing="md">
                        <x-newsletter></x-newsletter>
                    </x-container>
                </div>

                <div class="bg-secondary-800">
                    <x-container spacing="md">
                        <div class="grid w-full lg:grid-cols-3">
                            <div>
                                <h3 class="text-xl text-secondary-300"># Kontakt</h3>
                                
                                <a class="flex items-center mt-[1em]" href="https://goo.gl/maps/AmswymZ2WJ1BnoqB9">
                                    <svg class="fill-current w-[max(44px,2rem)] h-[max(44px,2rem)] text-secondary-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <!-- Icon: Marker -->
                                        <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/>
                                    </svg>
                                    <p class="ml-4 text-base text-secondary-100">
                                        <span>Katja Veit</span><br>
                                        <span>Immenstädter Str. 94</span><br>
                                        <span>87435 Kempten</span>
                                    </p>
                                </a>

                                <p class="mt-[1em] text-base text-secondary-100">
                                    <a class="flex items-center" href="mailto:hallo@katjaveit.com" target="_blank">
                                        <svg class="fill-current w-[max(44px,2rem)] h-[max(44px,2rem)] text-secondary-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <!-- Icon: Email -->
                                            <path d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z"/>
                                        </svg>
                                        
                                        <span class="ml-4">hallo@katjaveit.com</span>
                                    </a>
                                </p>

                                <p class="mt-[1em] text-base text-secondary-100">
                                    <a class="flex items-center" href="tel:+491731618044" target="_blank">
                                        <svg class="fill-current w-[max(44px,2rem)] h-[max(44px,2rem)] text-secondary-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <!-- Icon: Phone -->
                                            <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"/>
                                        </svg>
                                        
                                        <span class="ml-4">+49 (0) 173 1618044</span>
                                    </a>
                                </p>

                                <p class="mt-[1em] text-base text-secondary-100">
                                    <a class="flex items-center" href=" https://wa.me/491731618044" target="_blank">
                                        <svg class="fill-current w-[max(44px,2rem)] h-[max(44px,2rem)] text-secondary-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <!-- Icon: Whatsapp -->
                                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                        </svg>
                                        
                                        <span class="ml-4">+49 (0) 173 1618044</span>
                                    </a>
                                </p>
                            </div>
                            
                            <div class="mt-[2em] lg:mt-0">
                                <h3 class="text-xl text-secondary-300"># Sitemap</h3>
                                
                                <ul class="mt-[1em] list-inside list-disc text-secondary-300">
                                    <li><a class="text-base text-secondary-100 hover:underline" href="{{ route('front') }}">Startseite</a></li>
                                    <li><a class="text-base text-secondary-100 hover:underline" href="{{ route('yoga') }}">Yoga</a></li>
                                    <li><a class="text-base text-secondary-100 hover:underline" href="{{ route('coaching') }}">Coaching</a></li>
                                    <li><a class="text-base text-secondary-100 hover:underline" href="{{ route('about') }}">Über Katja</a></li>
                                    <li><a class="text-base text-secondary-100 hover:underline" href="{{ route('booking') }}">Buchung</a></li>
                                </ul>
                            </div>

                            <div class="mt-[2em] lg:mt-0">
                                <h3 class="text-xl text-secondary-300"># Social</h3>

                                <div class="mt-[1em] flex">
                                    <a class="flex items-center" href="mailto:hallo@katjaveit.com" target="_blank">
                                        <svg class="fill-current w-[max(44px,2rem)] h-[max(44px,2rem)] text-secondary-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <!-- Icon: Facebook-->
                                            {{-- <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/> --}}
                                            <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                                        </svg>
                                    </a>
                                    <a class="flex items-center" href="https://www.instagram.com/katja_veit_/" target="_blank">
                                        <svg class="fill-current w-[max(44px,2rem)] h-[max(44px,2rem)] text-secondary-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <!-- Icon: Instagram-->
                                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                        </svg>
                                    </a>
                                </div>

                                <div class="mt-[2em]">
                                    <h3 class="text-xl text-secondary-300"># Partner</h3>
                                    
                                    <ul class="mt-[1em] list-inside list-disc text-secondary-300">
                                        <li><a class="text-base text-secondary-100 hover:underline" href="/">Amanda Yoga</a></li>
                                        <li><a class="text-base text-secondary-100 hover:underline" href="/">Ein weiterer Link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
