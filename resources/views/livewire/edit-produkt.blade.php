<div>
    <form wire:submit.prevent="updateProdukt" class="space-y-4">
        <div>
            <label for="nazev" class="block text-sm font-medium text-gray-700">Název</label>
            <input type="text" id="nazev" wire:model="nazev" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @error('nazev') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="popis" class="block text-sm font-medium text-gray-700">Popis</label>
            <textarea id="popis" wire:model="popis" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
            @error('popis') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="cena" class="block text-sm font-medium text-gray-700">Cena</label>
            <input type="number" id="cena" wire:model="cena" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @error('cena') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="cislo_kategorie" class="block text-sm font-medium text-gray-700">Kategorie</label>
            <input type="number" id="cislo_kategorie" wire:model="cislo_kategorie" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @error('cislo_kategorie') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Uložit</button>
    </form>
</div>
