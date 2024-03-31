@extends('layout')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">

<style>
    body {
        background-image: url("{{ asset('image/pzz.jpeg') }}");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        padding: 0;
    }

    h1 {
        font-family: "Anta", sans-serif;
        font-weight: 500px;
        font-style: normal;
        text-shadow: 2px black;
    }

    #dd{
        margin-top: 20%;
    }

    @media only screen and (max-width: 600px) {
        /* Styles spécifiques pour les smartphones */
        body {
            background-size: cover;
        }

        h1{
            margin: 20px;
        }
        #dd{
            margin-top: 50%;
        }
    }
</style>

@section('title','ELDPIZZZARIA')

@section('content')
<div id="dd" style="color: white; text-align:center;">
    <h1>Bienvenue chez ELDPIZZARIA</h1><br>
    <button type="button" class="btn btn-warning color-wight">
        <a href="/menu" class="text-decoration-none text-dark">Menu</a>
    </button>
</div>
@endsection
