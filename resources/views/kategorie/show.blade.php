<x-app-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-6">{{ $kategorie->nazev }}</h1>

        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 dark:bg-gray-800 dark:border-gray-700">
            <p class="text-gray-600 dark:text-gray-300">{{ $kategorie->text }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Produkty v této Kategorii:</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @forelse ($produkty as $produkt)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-4 dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $produkt->nazev }}</h3>
                        <p class="text-gray-600 dark:text-gray-300">{{ $produkt->popis }}</p>
                    </div>
                @empty
                @endforelse
            </div>
        </div>

        @if ($subcategories->isNotEmpty())
            <div class="mt-8">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Podkategorie:</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($subcategories as $subcategory)
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-4 dark:bg-gray-800 dark:border-gray-700">
                            <a href="{{ route('kategorie.show', $subcategory->idkategorie) }}" class="text-lg font-semibold text-gray-900 dark:text-white hover:underline">
                                {{ $subcategory->nazev }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
