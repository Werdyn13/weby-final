<form action="{{ route('produkty.index') }}" method="GET">
    <input type="text" name="q" value="{{ request('q') }}" placeholder="Hledat produkty...">
    <button type="submit">Hledat</button>
</form>

<div>
    @foreach ($produkty as $produkt)
    <div>
        <h3>{{ $produkt->name }}</h3>
        <p>{{ $produkt->description }}</p>
        <p>{{ number_format($produkt->cena, 0, ',', ' ') }} Kč</p>
    </div>
    @endforeach
</div>

{{ $produkty->withQueryString()->links() }}
