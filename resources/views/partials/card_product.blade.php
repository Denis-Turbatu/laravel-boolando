<div class="card border border-0 rounded-0 my-4">
    <img src="{{ Vite::asset('resources/img/' . $item['frontImage']) }}" class="card-img-top" alt="{{ $item['name'] }}">
    <div class="card-body">
        <h5 class="card-text fw-semibold my-0">{{ $item['brand'] }}</h5>
        <p class="card-text my-0">{{ $item['name'] }}</p>
        <p class="card-text my-0">{{ $item['price'] }}
        @if (isset($item['badges']))
            @foreach ($item['badges'] as $badge)
                @if ($badge['type'] === 'discount')
                    - {{ $badge['value'] }}% sconto</p>
                @break
            @endif
        @endforeach
    @endif
</div>
</div>
