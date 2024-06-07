<div class="card border border-0 rounded-0 my-4">
  <img src="{{ Vite::asset('resources/img/' . $item['frontImage']) }}" class="card-img-top" alt="{{ $item['name'] }}">
  <div class="card-body">
    <h5 class="card-text fw-semibold my-0">{{ $item['brand'] }}</h5>
    <p class="card-text my-0">{{ $item['name'] }}</p>
    <p class="card-text my-0">{{ $item['price'] }}</p>
  </div>
</div>