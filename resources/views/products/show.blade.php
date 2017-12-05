@extends('layouts.app')

@section('content')
    <h2>{{ $product->nome }}</h2>
    <h3>Código: {{ $product->id }}</h3>
    <h3>Detalhes:</h3>
    <p>Quantidade Atual: {{ $product->quantidade }}</p>
    <p>Quantidade Mínima: {{ $product->quantidade_minima }}</p>
    <p>Preço de Custo: R$ {{ $product->custo }}</p>
    <p>Preço de Sugerido: R$ {{ $product->preco_sugerido }}</p>
    <h4>Insumos</h4>
    @foreach($product->getInsumos as $insumo)
        <p><b>{{ $insumo->nome }}</b> {{ $insumo->descricao }}</p>
    @endforeach
    <a href="{{ route('product.index') }}" class="btn btn-default">VOLTAR</a>
    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success">EDITAR</a>
@endsection
