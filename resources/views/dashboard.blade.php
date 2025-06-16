<x-app-layout>
    @foreach ($kategorie as $kategorie)
        <div>{{ $kategorie->nazev }}</div>
    @endforeach
</x-app-layout>

