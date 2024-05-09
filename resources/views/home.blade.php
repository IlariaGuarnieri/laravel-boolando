@extends('layout.main')

@section('content')

<main class="dritto">
    <div class="container">

        <section
  v-for="(item, index) in cardCycle"
  :key="index"
  class="container-card">

    <div>
      <img class="product-levis" src="resources/img/1.webp" alt="immagine prodotto">
      <!-- // non lo uso perche le img sono in public e non in src (collegato a riga 10) -->
      <!-- <img :src="getImagePath(item.frontImage)" alt="immagine prodotto"> -->
      <img class="product-levis" id="levis-none" :src="`/img/${item.backImage}`" alt="immagine prodotto">
    </div>
    <div class="text relaxed">
      <span class="brand">nome brand </span>
      <span class="hearts">&hearts;</span>
        <div class="sconto">-50%</div>
        <div class="sostenibilità"> Sostenibilità</div>
      <h1 class="clothes-name">nome del capo</h1>
      <span class="solded-price">prezzo &euro;</span>
      <span class="original-price">prezzo originario </span>
    </div>
  </section>

    </div>
  </main>
@endsection
