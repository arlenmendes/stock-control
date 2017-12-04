@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="{{ route('product.index') }}">Voltar</a>
    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger" >
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    @if(!isset($product))
        <h2>Cadastro de Produto</h2>

        <form action="{{route('product.store')}}" method="post">
    @else
        <h2>Editar Produto</h2>
        <form action="{{route('product.update', $product->id)}}" method="post">
        {!! method_field('put') !!}
    @endif
            {!! csrf_field() !!}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input required type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome" value="{{ $product->nome or old('nome') }}">
            <small id="nomeHelp" class="form-text text-muted">O nome deve conter, pelo menos, 3 caracteres.</small>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input required type="text" class="form-control" name="descricao" id="descricao" placeholder="Informe a Descrição" value="{{ $product->descricao or old('descricao') }}">
            <small id="emailHelp" class="form-text text-muted">A descrição deve conter, pelo menos, 5 caracteres.</small>
        </div>
        <div class="form-group col-md-6">
            <label for="quantidade_minima">Quantidade Mínima</label>
            <input required type="number" class="form-control" name="quantidade_minima" id="quantidade_minima" placeholder="Informe a Quantidade Mínima" value="{{ $product->quantidade_minima or old('quantidade_minima') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="quantidade">Estoque</label>
            <input required type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Informe o estoque atual" value="0" disabled value="{{ $product->quantidade or old('quantidade') }}">
            <small id="emailHelp" class="form-text text-muted">O estoque deve ser gerenciado no painel de gestão de estoque</small>
        </div>
        <div class="form-group col-md-6">
            <label for="custo">Custo</label>
            <input required type="text"class="form-control money" name="custo" id="custo" placeholder="Informe o Preço de Custo" onkeyup="maskIt(this,event,'###.###.###,##',true,{pre:'R$'})" value="{{ $product->custo or old('custo') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="preco_sugerido">Preço Sugerido para vendas</label>
            <input required type="text"class="form-control percent" name="preco_sugerido" id="preco_sugerido" placeholder="Informe o Preço Sugerido" value="{{ $product->preco_sugerido or old('preco_sugerido') }}">
            <small id="preco_sugeridoHelp" class="form-text text-muted">Em porcentagem</small>
        </div>

        <button class="btn btn-primary">SALVAR</button>
    </form>
@endsection