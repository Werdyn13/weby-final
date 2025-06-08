<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="text-lg font-bold">{{ $title }}</h3>
        <p class="text-gray-600">{{ $description }}</p>
        <div class="mt-4">
            <span class="text-blue-600 font-bold">${{ $price }}</span>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add to Cart</button>
        </div>
    </div>
</div>

