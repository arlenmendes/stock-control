@extends('layouts.app')

@section('content')
    <a href="{{ route('vendas.index') }}" class="btn btn-default">VOLTAR</a>
    <h2>Cliente: {{ $venda->cliente }}</h2>
    <div class="panel panel-default">
        <div class="panel-heading">Informações</div>
        <div class="panel-body">
            <h3>Código: {{ $venda->id }}</h3>
            <h3>Detalhes:</h3>
            <p>Data Venda: {{ $venda->data_venda }}</p>
            <p>Data Entrega: {{ $venda->data_entrega }}</p>
            <p>Valor Total: {{ $venda->preco_total }}</p>
            <div class="panel panel-default">
                <div class="panel-heading">Itens</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Preço por Item</th>
                                <th>Preço Total</th>
                            </tr>
                        </thead>
                        @foreach($venda->getItens as $item)
                            <tbody>
                                <tr>
                                    <th>{{ $item->product->nome }}</th>
                                    <th>{{ $item->quantidade }}</th>
                                    <th>{{ $item->preco }}</th>
                                    <th>{{ $item->preco * $item->quantidade }}</th>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection