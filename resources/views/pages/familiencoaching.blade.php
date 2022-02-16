<x-guest-layout>
    <main>
        <!-- Familiencoaching -->
        <section class="relative w-full h-[calc(100vh-9rem)]">
            <div class="absolute top-0 left-0 z-20 w-full h-full opacity-40 bg-primary-800"></div>
            
            <div class="absolute top-0 left-0 z-30 flex flex-col items-center justify-center w-full h-full">
                <h1 class="font-bold text-white text-9xl">Coaching</h1>
            </div>

            <img class="absolute top-0 left-0 object-cover w-full h-full" src="/img/yoga/coaching.jpg" alt="">
        </section>
        
        <section class="bg-primary-100">
            <x-container spacing="lg">
                <h2 class="text-4xl leading-none">
                    <span class="block uppercase text-accent-600">Yoga Kurse</span>
                    <span class="block uppercase text-accent-400">Pre- und Postnatal, für Kinder und für Dich</span>
                </h2>
                <div class="mt-[clamp(2rem,6vw,6rem)] grid items-center grid-cols-12">
                    <div class="order-2 col-span-4 col-start-3 row-start-1 shadow">
                        <div class="p-[clamp(1rem,5vw,4rem)] bg-white rounded-md space-y-4">
                            <div class="prose prose-lg max-w-prose">
                                <h3>Yoga Kurse</h3>
                                <p>Kurzer Teaser: Wie Yoga Deiner Zielgruppe hilft ...  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia omnis eligendi tempora consequuntur molestiae. Rem aspernatur ea dolor labore vel.</p>
                            </div>
                
                            <div>
                                <x-button size="small">Mehr erfahren</x-button>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 col-span-5 col-start-6 row-start-1">
                        <div class="overflow-hidden rounded-md aspect-w-1 aspect-h-1 xl:aspect-none">
                        <img class="object-cover" src="img/p-b-vky-0132-2048x1365.jpg" alt="">
                    </div>
                </div>
            </x-container>
        </section>
    </main>
</x-guest-layout>