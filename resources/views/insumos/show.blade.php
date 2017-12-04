@extends('layouts.app')

@section('content')
    <h2>{{ $insumo->nome }}</h2>
    <h3>Código: {{ $insumo->id }}</h3>
    <h3>Detalhes: {{ $insumo->descricao }}</h3>
    <p>Quantidade Atual: {{ $insumo->quantidade }}</p>
    <p>Preço de Custo: R$ {{ $insumo->preco }}</p>

    <a href="{{ route('insumo.index') }}" class="btn btn-default">VOLTAR</a>
    <a href="{{ route('insumo.edit', $insumo->id) }}" class="btn btn-success">EDITAR</a>
@endsection
