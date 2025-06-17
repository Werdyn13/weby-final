<x-app-layout>
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-10">Produkty</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center">
            @foreach ($produkty as $produkt)
                <div class="w-full max-w-xs bg-white border border-gray-200 rounded-2xl shadow-lg dark:bg-gray-800 dark:border-gray-700 transition hover:scale-105 hover:shadow-xl duration-200">
                    <a href="#">
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

                        @if (auth()->user() && auth()->user()->isAdmin())
                            <div class="flex justify-between items-center mt-4">
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
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            {{ $produkty->links('pagination::custom') }}
        </div>
    </div>

    @push('modals')
        <div id="editModal" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                <h2 class="text-xl font-bold mb-4">Edit Produkt</h2>
                <livewire:edit-produkt :produkt="$produkt" />
            </div>
        </div>
    @endpush

    <script>
        function showEditModal() {
            document.getElementById('editModal').classList.remove('hidden');
        }
    </script>
</x-app-layout>
