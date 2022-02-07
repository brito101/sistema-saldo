@extends('layouts.app')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Fazer Recarga</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.balance') }}">Saldo</a></li>
        <li class="breadcrumb-item"><a href="#">Nova Recarga</a></li>
    </ol>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Saldo') }}
                        <div class="col-12 d-flex flex-wrap px-0">
                            <a class="btn btn-primary mr-2 btn-small" href="{{ route('balance.deposit') }}"><i
                                    class="fas fa-cart-plus"></i>
                                Recarregar</a>
                            <a class="btn btn-secondary btn-small" href=""><i class="fas fa-cart-arrow-down"></i> Sacar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger col-12 col-md-4" role="alert">
                                @foreach ($errors->all() as $error)
                                    <span> {{ $error }} </span>
                                @endforeach
                            </div>
                        @endif

                        <div class="col-12 col-md-4 px-0">
                            <form method="POST" action="{{ route('deposit.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="value" placeholder="Valor Recarga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Recarregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
