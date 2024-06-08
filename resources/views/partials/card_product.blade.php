<div class="card border border-0 rounded-0 my-4">
    <img src="{{ Vite::asset('resources/img/' . $item['frontImage']) }}" class="card-img-top" alt="{{ $item['name'] }}">
    <div class="card-body">
        <h5 class="card-text fw-semibold my-0">{{ $item['brand'] }}</h5>
        <p class="card-text my-0">{{ $item['name'] }}</p>

    @if (isset($item['badges']))
      @foreach ($item['badges'] as $badge)
        @if ($badge['type'] === 'discount')
          <span class="card-text my-0 text-decoration-line-through">{{ $item['price'] }}</span>
          <span class="card-text my-0 text-danger">{{ number_format($item['price'] - round($item['price'] * $badge['value'] / 100, 2), 2) }}</span>
          @break
        @endif
      @endforeach
      @if (!isset($badge) || $badge['type'] !== 'discount')  <span class="card-text my-0 text-danger">{{ $item['price'] }}</span>
      @endif
    @endif
</div>
</div>
