@extends('layouts.app')

@section('content')
    <form action="{{ route('gravar-item') }}" method="post" class="row">

        <h4 class="col-md-12">Produto: {{ $produto->nome }}</h4>
        {!! csrf_field() !!}
        <input type="hidden" name="product_id" value="{{ $produto->id  }}">
        <input type="hidden" name="venda_id" value="{{ $vendaId }}">
        <div class="form-group col-md-6">
            <label for="">Quantidade</label>
            <input min="1" class="form-control" type="number" name="quantidade" value="1" placeholder="Quantiade">
        </div>
        <div class="form-group col-md-6">
            <label for="">Preço</label>
            <input class="form-control" type="number" name="preco" min="{{ $produto->custo }}" value="{{ $produto->preco_sugerido }}" placeholder="Preço">
        </div>
        <div class="form-group col-md-6">

            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
@endsection