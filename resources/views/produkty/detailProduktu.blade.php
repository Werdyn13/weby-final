<x-app-layout>
    <div class="container mx-auto py-12">
        <nav class="flex mb-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('homepage') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 3a1 1 0 00-.707.293l-6 6a1 1 0 001.414 1.414L10 5.414l5.293 5.293a1 1 0 001.414-1.414l-6-6A1 1 0 0010 3z"></path>
                            <path d="M3 10a1 1 0 00-.707.293l-6 6a1 1 0 001.414 1.414L10 12.414l5.293 5.293a1 1 0 001.414-1.414l-6-6A1 1 0 0010 10z"></path>
                        </svg>
                        Homepage
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 3a1 1 0 00-.707.293l-6 6a1 1 0 001.414 1.414L10 5.414l5.293 5.293a1 1 0 001.414-1.414l-6-6A1 1 0 0010 3z"></path>
                            <path d="M3 10a1 1 0 00-.707.293l-6 6a1 1 0 001.414 1.414L10 12.414l5.293 5.293a1 1 0 001.414-1.414l-6-6A1 1 0 0010 10z"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $produkt->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-10">Produkt Detail</h2>

        <div class="max-w-lg mx-auto bg-white border border-gray-200 rounded-2xl shadow-lg dark:bg-gray-800 dark:border-gray-700 p-6">
            <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">{{ $produkt->name }}</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $kategorie->text ?? 'Popis produktu není k dispozici.' }}</p>
            <p class="text-lg font-bold text-blue-600 mb-4">Cena: {{ number_format($produkt->cena, 0, ',', ' ') }} Kč</p>
            <p class="text-gray-800 dark:text-gray-300">Kategorie: <a href="{{ route('kategorie.produkty', ['idkategorie' => $produkt->kategorie->idkategorie]) }}" class="text-blue-700 hover:underline">{{ $produkt->kategorie->nazev }}</a></p>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('homepage') }}" class="text-blue-700 hover:underline">Zpět na produkty</a>
        </div>
    </div>
</x-app-layout>
