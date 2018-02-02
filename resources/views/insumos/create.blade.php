@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="{{ route('insumo.index') }}">Voltar</a>
    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger" >
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    @if(!isset($insumo))
        <h2>Cadastrar Matéria Prima</h2>

        <form action="{{route('insumo.store')}}" method="post">
    @else
        <h2>Editar Matéria Prima</h2>
        <form action="{{route('insumo.update', $insumo->id)}}" method="post">
            {!! method_field('put') !!}
    @endif
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="nome">Nome</label>
                <input required type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome" value="{{ $insumo->nome or old('nome') }}">
                <small id="nomeHelp" class="form-text text-muted">O nome deve conter, pelo menos, 3 caracteres.</small>
            </div>
            <div class="form-group">
                <label for="nome">Descricao</label>
                <input required type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição" value="{{ $insumo->descricao or old('descricao') }}">
                <small id="nomeHelp" class="form-text text-muted">A descrição deve conter, pelo menos, 3 caracteres.</small>
            </div>
            <div class="form-group col-md-6">
                <label for="custo">Custo</label>
                <input required type="text"class="form-control money" name="preco" id="preco" placeholder="Informe o Preço de Custo" onkeyup="maskIt(this,event,'###.###.###,##',true,{pre:'R$'})" value="{{ $insumo->preco or old('preco') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="quantidade">Estoque</label>
                <input required type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Informe o estoque atual" value="0" value="{{ $insumo->quantidade or old('quantidade') }}">
                <small id="emailHelp" class="form-text text-muted">O estoque deve ser gerenciado no painel de gestão de estoque</small>
            </div>

            <button class="btn btn-primary">SALVAR</button>
        </form>
@endsection