@extends('layouts.app')

@section('content')
    <a href="{{ route('vendas.create') }}" class="btn btn-primary">NOVA VENDA</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Cliente</th>
                <th>Preço Total</th>
                <th>Data Venda</th>
                <th>Data Entrega</th>
                <th>Painel</th>
            </tr>
        </thead>
        <tboby>
            @foreach($vendas as $venda)
                <tr>
                    <th>{{ $venda->id }}</th>
                    <th>{{ $venda->cliente }}</th>
                    <th>R$ {{ $venda->preco_total }}</th>
                    <th>{{ $venda->data_venda }}</th>
                    <th>{{ $venda->data_entrega }}</th>
                    <th>
                        <a class="btn btn-success" href="{{ route('vendas.show', $venda->id) }}">DETALHES</a>
                        <form action="{{ route('vendas.destroy', $venda->id) }}" method="post">
                            {!! method_field('delete') !!}
                            {!! csrf_field() !!}
                            <button class="btn btn-danger">REMOVER</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tboby>
    </table>
@endsection