<x-guest-layout>
    <main class="bg-primary-100">
        <!-- Intro/ Hero -->
        <section class="text-primary-800">            
            <x-container spacing="xl">
                <div class="grid items-center gap-[clamp(1rem,5vw,6rem)] xl:grid-cols-12">            
                    <div class="xl:col-span-6 xl:order-2">
                        <div class="relative m-2 xl:m-4">
                            <div class="absolute w-full h-full translate-x-2 translate-y-2 rounded-md bg-primary-200 xl:translate-x-4 xl:translate-y-4"></div>
                            <div class="overflow-hidden -translate-x-2 -translate-y-2 rounded-md aspect-w-1 aspect-h-1 xl:-translate-x-4 xl:-translate-y-4 xl:aspect-w-4 xl:aspect-h-3">
                                <img
                                    class="object-cover"
                                    src="/img/familie-mit-baby.jpg"
                                    alt="Junge Familie mit Baby"
                                >
                            </div>
                        </div>
                    </div>
                    
                    <div class="xl:col-span-6 xl:order-1">
                        <div class="max-w-prose">
                            <h2 class="text-4xl leading-none">
                                <span class="block uppercase text-accent-600">Für mehr Leichtigkeit </span>
                                <span class="block uppercase text-accent-400">im Familienalltag</span>
                            </h2>
                    
                            <p class="mt-[1em] text-lg">Eine Famile zu gründen kann ganz schön stressig sein. Lass Dich nicht unterkriegen! </p>
                            
                            <p class="mt-[1em] text-lg">Ich zeige Dir, wie Du zu Deiner inneren Ruhe findest und gebe Dir Werkzeuge an die Hand, die Dich im Umgang mit Deinem Kind unterstützen.</p>
                    
                            <div class="mt-[3em] flex flex-col gap-4 lg:flex-row">
                                <x-button href="{{ route('booking') }}">
                                    Kurs buchen
                                </x-button>
                                
                                <x-button outline>
                                    Mehr erfahren
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
            </x-container>
        </section>

        <section>
            <div class="bg-primary-50">
                <x-container spacing="xl">
                    <h2 class="text-4xl leading-none text-center">
                        <span class="block uppercase text-accent-600">Yoga Kurse</span>
                        <span class="block uppercase text-accent-400">für Dich und Deinen Nachwuchs</span>
                    </h2>

                    <div class="mt-[clamp(2rem,6vw,6rem)] grid items-center xl:grid-cols-12">
                        <div class="order-2 shadow xl:col-span-4 xl:col-start-3 xl:row-start-1">
                            <div class="p-[max(10%,1rem)] bg-white rounded-md space-y-4">
                                <div class="prose prose-lg max-w-prose">
                                    <h3>Yoga Kurse</h3>
                                    <p>Kurzer Teaser: Warum Yoga für Deine Zielgruppe zur Erreicheung Deines Slogans "Mehr Leichtigkeit im Familienalltag" so wichtig ist.</p>
                                </div>
                                
                                <div>
                                    <x-button size="small" href="{{ route('yoga') }}">Mehr erfahren</x-button>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 xl:col-span-5 xl:col-start-6 xl:row-start-1">
                            <div class="overflow-hidden rounded-md aspect-w-1 aspect-h-1 xl:aspect-none">
                            <img class="object-cover" src="img/p-b-vky-0132-2048x1365.jpg" alt="">
                        </div>
                    </div>
                </x-container>
            </div>
        </section>

        <section >
            <div class="bg-primary-100">
                <x-container spacing="xl">
                    <h2 class="text-4xl leading-none text-center">
                        <span class="block uppercase text-accent-600">Coachings</span>
                        <span class="block uppercase text-accent-400">für ein besseres Miteinander</span>
                    </h2>

                    <div class="mt-[clamp(2rem,6vw,6rem)] grid items-center xl:grid-cols-12">
                        <div class="order-2 shadow xl:col-span-4 xl:col-start-7 xl:row-start-1">
                            <div class="p-[max(10%,1rem)] bg-white rounded-md space-y-4">
                                <div class="prose prose-lg max-w-prose">
                                    <h3>Coachings</h3>
                                    <p>Kurzer Teaser: Warum und welche Art von Coaching für Deine Zielgruppe zur Erreicheung Deines Slogans "Mehr Leichtigkeit im Familienalltag" so wichtig ist.</p>
                                </div>
                                
                                <div>
                                    <x-button size="small" href="{{ route('coaching') }}">Mehr erfahren</x-button>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 xl:col-span-5 xl:col-start-3 xl:row-start-1">
                            <div class="overflow-hidden rounded-md aspect-w-1 aspect-h-1 xl:aspect-none">
                            <img class="object-cover" src="img/p-b-vky-0132-2048x1365.jpg" alt="">
                        </div>
                    </div>
                </x-container>
            </div>
        </section>

        <section class="bg-secondary-50">
            <x-container spacing="xl">
                <div class="col-span-2">
                    <h2 class="text-4xl leading-none">
                        <span class="block uppercase text-secondary-600">Erfahrungen</span>
                        <span class="block uppercase text-secondary-400">und Bewertungen</span>
                    </h2>
                </div>

                <div class="mt-[4em] grid gap-[clamp(1rem,5vw,4rem)] lg:grid-cols-2 2xl:grid-cols-3">
                    <x-testimonial name="Sara Müller" />
                    
                    <x-testimonial name="Tanja Schneider" />
                    
                    <x-testimonial name="Stefanie Mayer" />
                </div>
            </x-container>
        </section>
    </main>
</x-guest-layout>
