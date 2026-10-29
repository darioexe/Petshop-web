@extends('layouts.app')

@section('contenido')
    <section id="Perros" class="tarjeta">
        <h2>Para perros</h2>
        <img src="{{ asset('img/Perros.jpg') }}" alt="Comida Perros Podium">
        <h3>Comida para perros</h3>
        <ul>
            <li>Podium</li>
            <li>Pedegree</li>
            <li>Huesitos</li>
        </ul>
    </section>

    <section id="Gatos" class="tarjeta">
        <h2>Para gatos </h2>
        <img src="{{ asset('img/gatos.jpg') }}" alt="Arena de gatos Bigotes">
        <h3>Arena para gatos</h3>
        <ul>
            <li>Bigotes</li>
            <li>Michi feliz</li>
            <li>Bento pet</li>
        </ul>
    </section>

    <section id="Hamsters" class="tarjeta">
        <h2>Para hamsters</h2>
        <img src="{{ asset('img/hamsters.jpg') }}" alt="Comida de hamsters Funny Bunny">
        <h3>Alimento de hamsters</h3>
        <ul>
            <li>Funny Bunny</li>
            <li>Cereleas</li>
        </ul>
    </section>
@endsection