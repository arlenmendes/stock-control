@extends('layouts.app')

@section('content')
    <a href="{{ route('insumo.create') }}" class="btn btn-primary">NOVO INSUMO</a>
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
        @foreach($insumos as $insumo)
            <tr>
                <th>{{ $insumo->id }}</th>
                <th>{{ $insumo->nome }}</th>
                <th>{{ $insumo->quantidade }}</th>
                <th>
                    <a class="btn btn-success" href="{{ route('insumo.show', $insumo->id) }}">DETALHES</a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection