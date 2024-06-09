@extends('layouts.app')

@section('content')
    <h1 class="my-5">Prodotti</h1>
    <div class="row">
        @foreach ($products as $item)
            <div class="col-6 col-md-4 ">
                @include('./partials/card_product')
            </div>
        @endforeach
    </div>
@endsection
