@extends('layouts.base')

@section('content')
    <p>En Pasteleria La Espiga preparamos tortas caseras para compartir momentos dulces con toda la familia.</p>

    <p>Hay {{ count($tortas) }} {{ count($tortas) === 1 ? 'torta' : 'tortas' }} en la vitrina.</p>

    @forelse ($tortas as $torta)
        <p>{{ $torta->sabor }} - {{ $torta->precio }} Bs</p>
    @empty
        <p>La vitrina todavía está vacía.</p>
    @endforelse

    <p>Vitrina atendida por JARED AGUIRRE ROSAS</p>

    <a href="/tortas/nuevo">Registrar una torta</a>
@endsection
