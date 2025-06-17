<x-app-layout>
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-10">Edit Produkt</h2>

        <form action="{{ route('produkt.update', ['id' => $produkt->idprodukt]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nazev" class="block text-sm font-medium text-gray-700">Název</label>
                <input type="text" id="nazev" name="nazev" value="{{ $produkt->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="popis" class="block text-sm font-medium text-gray-700">Popis</label>
                <textarea id="popis" name="popis" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ $produkt->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="cena" class="block text-sm font-medium text-gray-700">Cena</label>
                <input type="number" id="cena" name="cena" value="{{ $produkt->cena }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="cislo_kategorie" class="block text-sm font-medium text-gray-700">Číslo Kategorie</label>
                <input type="number" id="cislo_kategorie" name="cislo_kategorie" value="{{ $produkt->cislo_kategorie }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 rounded-lg px-4 py-2">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
