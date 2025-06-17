<x-app-layout>
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-10">Košík</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        @php
            $cart = $cart ?? [];
        @endphp

        @if (count($cart) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center">
                @foreach ($cart as $id => $produkt)
                    <div class="w-full max-w-xs bg-white border border-gray-200 rounded-2xl shadow-lg dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ $produkt['name'] }}
                            </h5>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                {{ $produkt['description'] ?? 'Popis produktu není k dispozici.' }}
                            </p>
                            <span class="text-lg font-bold text-blue-600">{{ number_format($produkt['cena'], 0, ',', ' ') }} Kč</span>
                        </div>
                        <form action="{{ route('cart.remove', ['id' => $id]) }}" method="POST" class="mt-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800">
                                Odstranit
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600 dark:text-gray-300 text-center">Košík je prázdný.</p>
        @endif
    </div>
</x-app-layout>
