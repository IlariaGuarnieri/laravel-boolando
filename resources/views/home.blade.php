@extends('layout.main')

@section('content')

    <div class="container">

        @foreach ($db as $product )

        <section class="container-card">

            <div>
            <img class="product-levis" src="{{ $product ['frontImage'] }}" alt="immagine prodotto!">
            </div>
            <div class="text relaxed">
            <span class="brand">{{ $product['brand'] }}</span>
            <span class="hearts">&hearts;</span>
                <div class="sconto">-50%</div>
                <div class="sostenibilità"> Sostenibilità</div>
            <span class="clothes-name">{{ $product['name'] }}</span>
            <span class="solded-price">{{ $product['price'] }} &euro;</span>
            <span class="original-price">{{ $product['brand'] }} </span>
            </div>
        </section>

        @endforeach


    </div>

@endsection
