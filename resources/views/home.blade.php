@extends('navbar')
@section('title', 'Home')
@section('content')

<header>
    <div class="intro-container">
        <h1 class="description">Eat delicious traditional food </h1>
    </div>
</header>
    <section id="main">
        <div class="card">
            <img class="card-img" src="/images/gjomleze1.jpg" alt="">
            <h3 class="food-name">Gjomleze</h3>
            <p class="ingridients">Gjomleze (ѓомлезе) originates from the southwestern part of Macedonia. Mostly prepared in Ohrid, Struga and Prespa If you ever visit these parts of Macedonia, search for gjomleze prepared traditional way. It is a big soft white pie with a crispy crust. It is still prepared in the same way as hundreds of years ago; with a traditional cooking apparatus called a “sach” (сач). </p>
        </div>
        <div class="card">
            <img class="card-img" src="/images/gravce-tavce-scaled.jpg" alt="">
            <h3 class="food-name">Baked Beans</h3>
            <p class="ingridients">We just can’t talk about Macedonian cuisine without mentioning the Tavce Gravce Recipe (pronounce: tav-cheh grav-cheh). It’s Macedonia’s national dish and a standard Friday staple; most Macedonians are Orthodox Christian and in Orthodox Christianity, the meals on Fridays should not contain any meat.</p>
        </div>
        <div class="card">
            <img class="card-img" src="/images/Spageti.webp" alt="">
            <h3 class="food-name">Spaghetti</h3>
            <p class="ingridients">You can never go wrong with Italian-inspired meals, especially a good, hearty pasta. We love using fresh, garden tomatoes for our spaghetti sauce, and will often make homemade canned spaghetti sauce when we have an abundance of tomatoes so we can enjoy the bright, fresh flavor all year long.</p>
        </div>
    </section>
@endsection