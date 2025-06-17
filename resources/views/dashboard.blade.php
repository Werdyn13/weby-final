<x-app-layout>
    <body>
    {{-- Sekce O nás --}}
    <section class="bg-white dark:bg-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-5xl mb-6">
                    O nás
                </h2>
                <p class="mt-4 text-lg leading-7 text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Jsme moderní e-shop specializující se na kvalitní elektroniku pro každodenní použití.
                    Nabízíme široký výběr mobilních telefonů, tabletů, tiskáren, příslušenství a kabelů –
                    vše na jednom místě a za dostupné ceny. Naším cílem je spojit rychlé dodání,
                    spolehlivý servis a produkty, které drží krok s technologií i vašimi potřebami.
                    U nás nakupujete pohodlně, bezpečně a s důvěrou.
                </p>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl shadow-md text-center">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Rychlé dodání</h3>
                    <p class="text-gray-600 dark:text-gray-400">Objednávky posíláme bez zbytečných zdržení.</p>
                </div>

                <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl shadow-md text-center">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 10h4l3 10h8l3-10h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Široký výběr</h3>
                    <p class="text-gray-600 dark:text-gray-400">Od telefonů po tiskárny a kabely – máme vše, co potřebujete.</p>
                </div>

                <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl shadow-md text-center">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13 16h-1v-4h-1m1-4h.01M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8
                                   3.582-8 8 3.582 8 8 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Důvěryhodný servis</h3>
                    <p class="text-gray-600 dark:text-gray-400">Zákaznická podpora, na kterou se můžete spolehnout.</p>
                </div>
            </div>
        </div>
    </section>
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/2020px-FC_Barcelona_%28crest%29.svg.png" alt="Logo" style="display: block; width: 100%; max-height: 100px; object-fit: contain; margin-top: 110px" />

    </body>


</x-app-layout>
