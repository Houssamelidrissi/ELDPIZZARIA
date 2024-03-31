@extends('layout')
@section('title', 'Menu')
<style>
    body {
        background-image: url("{{ asset('image/pzz.jpeg') }}");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        padding: 0;
    }
    .pizza-image {
        border-radius: 10px;
        width: 100%;
        height: 200px;
    }
    .pizza-card {
        background-color: rgba(130, 128, 128, 0.4);
        border: 2px solid black;
        border-radius: 15px;
        padding: 20px;
        margin: 20px;
        width: calc(33.33% - 40px);
        display: inline-block;
        box-sizing: border-box;
        padding:28px
    }
    h3, p {
        color: white;
    }
    button {
        background-color: yellow;
        color: red;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: orange;
    }
    @media only screen and (max-width: 970px) {
        /* Styles spécifiques pour les smartphones */
        .pizza-card {
            width: 100%;
            margin: 10px 0;
            display: block;
        }

        .pizza-card img {
            width: 100%; 
            height: auto; 
        }
    }
</style>
@section('content')
<center class="container">
    <div class="pizza-card">
        <h3>Pizza Berbère</h3>
        <img src="{{ asset('image/p1.jpeg') }}" alt="Pizza Berbère" class="pizza-image" />
        <p>Sauce tomate épicée, merguez ou kefta, poivrons, oignons, olives noires.</p>
        <button>45dh</button>
    </div>

    <div class="pizza-card">
        <h3>Pizza Merguez</h3>
        <img src="{{ asset('image/p2.jpeg') }}" alt="Pizza Merguez" class="pizza-image" />
        <p>Sauce tomate, merguez, poivrons, oignons, fromage.</p>
        <button>35dh</button>
    </div>

    <div class="pizza-card">
        <h3>Pizza Royale</h3>
        <img src="{{ asset('image/p3.webp') }}" alt="Pizza Royale" class="pizza-image" />
        <p>Sauce tomate, poulet rôti ou grillé, champignons, oignons, poivrons, fromage.</p>
        <button>60dh</button>
    </div>

    <div class="pizza-card">
        <h3>Pizza Marocaine</h3>
        <img src="{{ asset('image/p4.jpeg') }}" alt="Pizza Marocaine" class="pizza-image" />
        <p>Sauce tomate, poulet, olives vertes, citron confit, cumin, fromage.</p>
        <button>50dh</button>
    </div>

    <div class="pizza-card">
        <h3>Pizza Végétarienne Marocaine</h3>
        <img src="{{ asset('image/p5.jpeg') }}" alt="Pizza Végétarienne Marocaine" class="pizza-image" />
        <p>Sauce tomate, aubergines grillées, courgettes, poivrons, oignons, tomates, olives, fromage.</p>
        <button>40dh</button>
    </div>

    <div class="pizza-card" style="padding:32px">
        <h3>Pizza au Miel et au Fromage</h3>
        <img src="{{ asset('image/p6.jpeg') }}" alt="Pizza au Miel et au Fromage" class="pizza-image" />
        <p>Base de fromage frais, miel, amandes effilées, parfois agrémentée de figues ou de dattes.</p>
        <button>50dh</button>
    </div>

    <div class="pizza-card">
        <h3>Pizza Kefta</h3>
        <img src="{{ asset('image/p7.jpeg') }}" alt="Pizza Kefta" class="pizza-image" />
        <p>Sauce tomate, kefta épicée, oignons, poivrons, fromage.</p>
        <button>40dh</button>
    </div>

    <div class="pizza-card">
        <h3>Pizza aux Fruits de Mer</h3>
        <img src="{{ asset('image/p8.jpeg') }}" alt="Pizza aux Fruits de Mer" class="pizza-image" />
        <p>Sauce tomate ou blanche, fruits de mer (crevettes, calamars, moules), ail, persil, fromage.</p>
        <button>50dh</button>
    </div>

    <div class="pizza-card">
        <h3>Pizza à la Chermoula</h3>
        <img src="{{ asset('image/p9.webp') }}" alt="Pizza à la Chermoula" class="pizza-image" />
        <p>Sauce tomate, chermoula ,poulet ou fruits de mer, oignons, poivrons, fromage.</p>
        <button>30dh</button>
    </div>

    <div class="pizza-card">
        <h3>Pizza Marrakech</h3>
        <img src="{{ asset('image/p10.jpeg') }}" alt="Pizza Marrakech" class="pizza-image" />
        <p>Sauce tomate, agneau ou poulet rôti, pruneaux, amandes, cannelle, fromage.</p>
        <button>50dh</button>
    </div>
</center>
@include('includes.footer')
@endsection

