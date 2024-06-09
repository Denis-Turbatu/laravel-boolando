<div class="ms-card card border border-0 rounded-0 my-4">
    <div class="img-container">
        {{-- IMMAGINE FONTALE --}}
        <img src="{{ Vite::asset('resources/img/' . $item['frontImage']) }}"
            class="card-img-top ms-front-img position-relative top-0 start-0" alt="{{ $item['name'] }}">
        {{-- IMMAGINE DIETRO --}}
        <img src="{{ Vite::asset('resources/img/' . $item['backImage']) }}"
            class="card-img-top ms-retro-img position-absolute top-0 start-0 " alt="{{ $item['name'] }}">
    </div>
    <div class="card-body">
        {{-- NOME BRAND --}}
        <h5 class="card-text fw-semibold my-0">{{ $item['brand'] }}</h5>
        {{-- NOME ARTICOLO --}}
        <p class="card-text my-0">{{ $item['name'] }}</p>

        {{-- CONTROLLO ESISTENZA BADGES NELL'ARTICOLO --}}
        @if (isset($item['badges']))
            @foreach ($item['badges'] as $badge)
                {{-- CONTROLLO ESISTENZA DISCOUNT NEL BADGE E STAMPA CORRETTA --}}
                @if ($badge['type'] === 'discount')
                    <span class="card-text my-0 text-decoration-line-through">{{ $item['price'] }}€</span>
                    <span
                        class="card-text my-0 text-danger">{{ number_format($item['price'] - round(($item['price'] * $badge['value']) / 100, 2), 2) }}€</span>
                @break
            @endif
        @endforeach
        @if (!isset($badge) || $badge['type'] !== 'discount')
            <span class="card-text my-0 text-danger">{{ $item['price'] }}€</span>
        @endif
    @endif
</div>
</div>
