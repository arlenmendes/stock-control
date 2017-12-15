@extends('layouts.app')

@section('content')

    <a href="{{ route('product.index') }}" class="btn btn-default">VOLTAR</a>
    <h2>Produto: {{ $product->nome }}</h2>
    <div class="panel panel-default">
        <div class="panel-heading">Informações</div>
        <div class="panel-body">
            <h3>Código: {{ $product->id }}</h3>
            <h3>Detalhes:</h3>
            <p>Quantidade Atual: {{ $product->quantidade }}</p>
            <p>Quantidade Mínima: {{ $product->quantidade_minima }}</p>
            <p>Preço de Custo: R$ {{ $product->custo }}</p>
            <p>Preço de Sugerido: R$ {{ $product->preco_sugerido }}</p>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Matéria Prima Necessária</div>
        <div class="panel-body">
            @foreach($product->getInsumos as $insumo)
                <p><b>{{ $insumo->nome }}</b> {{ $insumo->descricao }}</p>
            @endforeach
                {{--<button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">Vincular MAtérias-primas</button>--}}
        </div>
    </div>

    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success">EDITAR</a>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



@endsection
