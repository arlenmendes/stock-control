@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a class="btn btn-primary" href="{{ route('product.index') }}">Produtos</a>
                        <a class="btn btn-primary" href="{{ route('insumo.index') }}">Insumos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
