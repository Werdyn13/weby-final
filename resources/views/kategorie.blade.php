<x-app-layout>
    <div class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-10">Kategorie</h2>

        <div class="flex-justify-center gap-8 place-items-center">
            @foreach ($kategorie as $kategorieItem)
                <div
                    class="w-full max-w-xs bg-white border border-gray-200 rounded-2xl shadow-lg dark:bg-gray-800 dark:border-gray-700 transition hover:scale-105 hover:shadow-xl duration-200 cursor-pointer"
                    onclick="window.location.href='{{ route('kategorie.show', $kategorieItem->idkategorie) }}'">
                    <a href="#">
                        <img class="rounded-t-2xl w-full h-48 object-cover" src="https://via.placeholder.com/300x200" alt="Kategorie Image" />
                    </a>
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ $kategorieItem->nazev }}
                            </h5>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            {{ $kategorieItem->description ?? 'Popis kategorie není k dispozici.' }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- Livewire komponenta pro editaci kategorie --}}
    <livewire:edit-kategorie />

    @push('scripts')
        <script>
            function showEditModal(idkategorie) {
                Livewire.emit('loadKategorie', idkategorie);
            }

            function closeEditModal() {
                document.getElementById('editModal').classList.add('hidden');
            }
        </script>
    @endpush

    @push('modals')
        <div id="editModal" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                <h2 class="text-xl font-bold mb-4">Edit Kategorie</h2>
                <form wire:submit.prevent="save">
                    <div class="mb-4">
                        <label for="nazev" class="block text-sm font-medium text-gray-700">Název</label>
                        <input type="text" id="nazev" wire:model="nazev" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="parent" class="block text-sm font-medium text-gray-700">Parent Kategorie</label>
                        <select id="parent" wire:model="parent" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="">None</option>
                            @foreach ($allKategorie as $kategorieOption)
                                <option value="{{ $kategorieOption->idkategorie }}">{{ $kategorieOption->nazev }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="text" class="block text-sm font-medium text-gray-700">Text</label>
                        <textarea id="text" wire:model="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="obrazek_url" class="block text-sm font-medium text-gray-700">Obrázek URL</label>
                        <input type="url" id="obrazek_url" wire:model="obrazek_url" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" onclick="closeEditModal()" class="text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 mr-2">Cancel</button>
                        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Save</button>
                    </div>
                </form>
            </div>
        </div>
    @endpush
</x-app-layout>
