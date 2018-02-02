@extends('layouts.app')

@section('content')
    <?php
        session_start();
        $_SESSION['cesto'] = array();
    ?>
    <div class="row">
        <div class="col-md-6">
            <h2>Produtos</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Custo</th>
                    <th>Preço Sugerido</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                {!! csrf_field() !!}
                @foreach($produtos as $produto)
                    <tr onclick="adicionar(this);" class="hover-linha">
                        <th class="nome">{{ $produto->nome }}</th>
                        <th class="custo">{{ $produto->custo }}</th>
                        <th class="preco_sugerido">{{ $produto->preco_sugerido }}</th>
                        <th>
                            <a href="{{ route('selecionar-item', [$produto->id, $venda->id]) }}" class="btn btn-success">Adicionar</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h2>Produtos Selecionados</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Preço Total</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($venda->getItens as $item)
                    <tr>
                        <th>{{ $item->product->nome }}</th>
                        <th>{{ $item->quantidade }}</th>
                        <th>{{ $item->preco }}</th>
                        <th>{{ $item->preco * $item->quantidade }}</th>
                        <th><a href="{{ route('destruir-item', [$item->id, $venda->id]) }}" class="btn btn-danger">Remover</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{ route('finalizar-venda', $venda->id) }}" class="btn btn-primary btn-finalizar">Finalizar</a>

@endsection