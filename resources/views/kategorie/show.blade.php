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

                        <div class="flex justify-between items-center mt-4">
                            @if (auth()->user() && auth()->user()->isAdmin())
                                <a href="{{ route('produkt.edit', ['id' => $produkt->idprodukt]) }}" class="text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-yellow-400 dark:hover:bg-yellow-500 dark:focus:ring-yellow-600">
                                    Edit
                                </a>
                                <form action="{{ route('produkt.destroy', ['id' => $produkt->idprodukt]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-400 dark:hover:bg-red-500 dark:focus:ring-red-600">
                                        Delete
                                    </button>
                                </form>
                            @endif
                        </div>
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
