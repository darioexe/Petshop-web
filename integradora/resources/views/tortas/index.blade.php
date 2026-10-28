@extends('layouts.app')

@section('content')
    <h1>Pasteleria La Espiga</h1>
    
    <p>Las mejores tortas artesanales y caseras del barrio para endulzar tus reuniones y momentos especiales.</p>
    
    <p>Hay {{ count($tortas) }} tortas en la vitrina.</p>
    
    <ul>
        @foreach($tortas as $torta)
            <li><strong>Sabor:</strong> {{ $torta->sabor }} — <strong>Precio:</strong> {{ $torta->precio }} Bs</li>
        @endforeach
    </ul>
    
    <p>Vitrina atendida por Nicolas Fabio Choque Candia</p>
    
    <p>
        <a href="/tortas/nuevo">Registrar nueva torta</a>
    </p>
@endsection