@extends('layout.main')

@section('content')

    <div class="container">

        @foreach ($db as $product )

        <section class="container-card">

            <div>
                <img src="{{ asset('img/' . $product['frontImage']) }}" alt="img">
            </div>
            <div class="text relaxed">
                <span class="brand">{{ $product['brand'] }}</span> <br>
                <span class="hearts">&hearts;</span>
                {{-- <div class="sconto">-50%</div>
                <div class="sostenibilità"> Sostenibilità</div> --}}
                    <span class="clothes-name">{{ $product['name'] }}</span> <br>
                    <span class="solded-price">{{ $product['price'] }} &euro;</span> <br>
            </div>
        </section>

        @endforeach


    </div>

@endsection
