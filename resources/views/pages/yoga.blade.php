<x-guest-layout>
    <main>
        <!-- Yoga -->
        <header class="grid items-center">
            <div class="z-20 w-full h-full col-start-1 row-start-1 opacity-40 bg-primary-800"></div>
            
            <div class="z-30 flex flex-col items-center justify-center col-start-1 row-start-1 text-center">
                <h1 class="font-bold text-8xl">
                    <span class="text-white">Yoga</span>
                </h1>
                
                <span class="text-5xl text-gray-200">Prenatal, Postnatal & für Kinder</span>
            </div>

            <img class="col-start-1 row-start-1 object-cover w-full min-h-[50vh] lg:h-[calc(100vh-9rem)]" src="/img/yoga-kurs-in-der-gruppe.JPG" alt="">
        </header>
        
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

        <!-- Yoga Prenatal -->
        <section>
            <x-container spacing="lg">
                <div class="overflow-hidden rounded-md aspect-w-1 aspect-h-1">
                    <img 
                        class="object-cover"
                        src="/img/katja-schwanger.jpg" 
                        alt="Junge Familie mit Baby"
                    >
                </div>

                <div class="prose">
                    <h2 class="max-w-3xl text-2xl text-gray-700 uppercase xl:text-6xl font-accent">
                        Yoga für Schwangere
                    </h2>
                    <p class="block text-xl text-gray-500 uppercase">Eine Schwangerschaft ist der Beginn einer wundervollen Reise.</p>
                    <p>Eine Reise voller Veränderungen. Yoga bereitet dich liebevoll auf diese Veränderungen vor.</p>
                    <p>Mit geburtsvorbereitenden Informationen, Atem- und Entspannungstechniken begleite ich Dich auf dieser Reise.</p>
                    <h3>Kursmerkmale</h3>
                    <ul>
                        <li>Ausschließlich Präsenzveranstaltungen</li>
                        <li>Kleingruppen bis 8 Personen</li>
                        <li>Findet in 8er Blöcken statt</li>
                        <li>Persönliche und vertraute Atmosphäre</li>
                    </ul>
                </div>

                <div class="flex justify-center gap-4 py-8">
                    <a href="#" class="w-full px-4 py-2 font-semibold text-center text-white bg-gray-500 border-2 border-gray-500 rounded-md">Kurs buchen</a>
                    <a href="#" class="w-full px-4 py-2 font-semibold text-center text-gray-700 border-2 border-gray-500 rounded-md">Mehr erfahren</a>
                </div>
            </x-container>
        </section>

        <!-- Yoga Postnatal -->
        <section class="container min-h-screen px-4 py-8 mx-auto space-y-8">
            <div class="overflow-hidden rounded-md aspect-w-1 aspect-h-1">
                <img 
                    class="object-cover"
                    src="/img/rueckbildung.jpg" 
                    alt="Junge Mutter mit Baby auf dem Arm"
                >
            </div>

            <div class="prose">
                <h2 class="max-w-3xl text-2xl text-gray-700 uppercase xl:text-6xl font-accent">
                    Yoga zur Rückbildung
                </h2>
                <p class="block text-xl text-gray-500 uppercase">Wenn du dein Baby endlich im Arm halten darfst.</p>
                <p>Yoga kann Dich in diesem Moment wundervoll unterstützen. Sei es in der Rückbildung oder beim Hineinwachsen in die Mama-Rolle.</p>
                <p>Mit Impulsen aus den Bereichen bedürfnisorientierte Erziehung und Achtsamkeit, die Dich in der Beziehung zu dir selbst, Deiner neuen Rolle als Mama und zu deinem Baby bestärken und mit jeder Menge kräftigenden Übungen darfst du körperlich und mental zu deiner starken Mitte finden.</p>
                <h3>Kursmerkmale</h3>
                <ul>
                    <li>Ausschließlich Präsenzveranstaltungen</li>
                    <li>Kleingruppen bis 8 Personen</li>
                    <li>Findet in 8er Blöcken statt</li>
                    <li>Persönliche und vertraute Atmosphäre</li>
                </ul>
            </div>

            <div class="flex justify-center gap-4 py-8">
                <a href="#" class="w-full px-4 py-2 font-semibold text-center text-white bg-gray-500 border-2 border-gray-500 rounded-md">Kurs buchen</a>
                <a href="#" class="w-full px-4 py-2 font-semibold text-center text-gray-700 border-2 border-gray-500 rounded-md">Mehr erfahren</a>
            </div>
        </section>

        <!-- Yoga für Kinder -->
        <section class="container min-h-screen px-4 py-8 mx-auto space-y-8 bg-gray-200">
            <div class="overflow-hidden rounded-md aspect-w-1 aspect-h-1">
                <img 
                    class="object-cover"
                    src="/img/kinder-yoga.jpg" 
                    alt="Katja mit Kindern beim Yoga"
                >
            </div>

            <div class="prose">
                <h2 class="max-w-3xl text-2xl text-gray-700 uppercase xl:text-6xl font-accent">
                    Yoga für Kinder
                </h2>
                <p class="block text-xl text-gray-500 uppercase">Lass dich nicht unterkriegen, sei frech und wild und wunderbar.</p>
                <p>Kinderyoga macht in erster Linie ganz viel Spaß und Freude. Neben Körperhaltungen werden Entspannungsübungen ebenso wie Massagen und Phantasiereisen liebevoll durchgeführt. Vor allem aber auch Achtsamkeit und Körperwahrnehmung können Kinder mit Yoga erlernen. Jede Stunde ist eine Abenteuerreise, in der sich die Kinder verwandeln und einfühlen dürfen.</p>
    
                <h3>Galerie</h3>            
            </div>

            <div class="grid grid-cols-3 gap-2">
                <div class="overflow-hidden rounded-md aspect-w-4 aspect-h-3">
                    <img
                        class="object-cover"
                        src="/img/2.jpg"
                        alt=""
                    >
                </div>

                <div class="overflow-hidden rounded-md aspect-w-4 aspect-h-3">
                    <img
                        class="object-cover"
                        src="/img/4.jpg"
                        alt=""
                    >
                </div>

                <div class="overflow-hidden rounded-md aspect-w-4 aspect-h-3">
                    <img
                        class="object-cover"
                        src="/img/5.jpg"
                        alt=""
                    >
                </div>
            </div>

            <div class="prose">
                <h3>Kursmerkmale</h3>
                <ul>
                    <li>Ausschließlich Präsenzveranstaltungen</li>
                    <li>Kleingruppen bis 8 Personen</li>
                    <li>Findet in 8er Blöcken statt</li>
                    <li>Persönliche und vertraute Atmosphäre</li>
                </ul>
            </div>

            <div class="flex justify-center gap-4 py-8">
                <a href="#" class="w-full px-4 py-2 font-semibold text-center text-white bg-gray-500 border-2 border-gray-500 rounded-md">Kurs buchen</a>
                <a href="#" class="w-full px-4 py-2 font-semibold text-center text-gray-700 border-2 border-gray-500 rounded-md">Mehr erfahren</a>
            </div>
        </section>
    </main>
</x-guest-layout>