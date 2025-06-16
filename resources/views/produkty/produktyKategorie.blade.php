<x-app-layout>
    <div class="container mx-auto py-12">
        <nav class="flex mb-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('homepage') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 3a1 1 0 00-.707.293l-6 6a1 1 0 001.414 1.414L10 5.414l5.293 5.293a1 1 0 001.414-1.414l-6-6A1 1 0 0010 3z"></path>
                        </svg>
                        Homepage
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 3a1 1 0 00-.707.293l-6 6a1 1 0 001.414 1.414L10 5.414l5.293 5.293a1 1 0 001.414-1.414l-6-6A1 1 0 0010 3z"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $kategorie->nazev }}</span>
                    </div>
                </li>
                @if ($produkt)
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 3a1 1 0 00-.707.293l-6 6a1 1 0 001.414 1.414L10 5.414l5.293 5.293a1 1 0 001.414-1.414l-6-6A1 1 0 0010 3z"></path>
                        </svg>
                        <a href="{{ route('produkt.show', ['id' => $produkt->idprodukt]) }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                            {{ $produkt->name }}
                        </a>
                    </div>
                </li>
                @endif
            </ol>
        </nav>

        <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-10">Produkty v kategorii: {{ $kategorie->nazev }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center">
            @foreach ($produkty as $produkt)
                <div class="w-full max-w-xs bg-white border border-gray-200 rounded-2xl shadow-lg dark:bg-gray-800 dark:border-gray-700 transition hover:scale-105 hover:shadow-xl duration-200">
                    <a href="{{ route('produkt.show', ['id' => $produkt->idprodukt]) }}">
                        <img class="rounded-t-2xl w-full h-48 object-cover" src="https://via.placeholder.com/300x200" alt="Produkt Image" />
                    </a>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ $produkt->name }}
                            </h5>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                Nové
                            </span>
                        </div>

                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            {{ $produkt->description ?? 'Popis produktu není k dispozici.' }}
                        </p>

                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">{{ number_format($produkt->cena, 0, ',', ' ') }} Kč</span>
                            <a href="{{ route('produkt.show', ['id' => $produkt->idprodukt]) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            {{ $produkty->links('pagination::custom') }}
        </div>
    </div>
</x-app-layout>
