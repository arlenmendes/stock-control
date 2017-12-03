@extends('layouts.app')

@section('content')


        <a href="{{ route('product.create') }}" class="btn btn-primary">NOVO PRODUTO</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Painel</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <th>{{ $product->id }}</th>
                        <th>{{ $product->nome }}</th>
                        <th>{{ $product->quantidade }}</th>
                        <th>
                            <a class="btn btn-success" href="{{ route('product.show', $product->id) }}">DETALHES</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection