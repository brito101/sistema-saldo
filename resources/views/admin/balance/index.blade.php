@extends('layouts.app')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Saldo</a></li>
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
                        @if (session('status'))
                            <div class="alert alert-success col-12 col-md-4" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="col-12 col-md-4 px-0">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><sup style="font-size: 20px">R$</sup> {{ number_format($amount, 2, ',', '') }}
                                    </h3>
                                </div>
                                <div class="icon mt-3">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <a href="#" class="small-box-footer">Histórico <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
