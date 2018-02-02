@extends('layouts.app')

@section('content')
    <a href="{{ route('vendas.index') }}">VOLTAR</a>
    @if( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger" >
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    <h1>Vendas</h1>

    <form action="{{route('vendas.store')}}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="cliente">Cliente</label>
            <input required type="text" class="form-control" id="cliente" name="cliente" placeholder="Informe o Nome do cliente" value="{{ $venda->cliente or old('cliente') }}">
            <small id="nomeHelp" class="form-text text-muted">O nome deve conter, pelo menos, 3 caracteres.</small>
        </div>
        <div class="row">

            <div class="form-group col-md-6">
                <label for="data_venda">Data da Venda</label>
                <input required type="text" class="form-control" name="data_venda" id="data_venda" disabled value="{{ $dataAtual or $venda->data_venda }}">
            </div>
            <div class="form-group col-md-6">
                <label for="data_venda">Data da Entrega</label>
                <input required type="text" class="form-control" name="data_entrega" id="data_entrega" placeholder="dd/mm/AAAA" value="{{ $venda->data_entrega or old('data_entrega') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="">Selecione</option>
                    @foreach($status as $s)
                        <option value="{{ $s }}">{{ $s }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Informar Itens</button>
    </form>
@endsection