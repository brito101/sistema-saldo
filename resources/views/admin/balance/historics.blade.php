@extends('layouts.app')

@section('title', 'Histórico de Movimentações')

@section('content_header')
    <h1>Histórico de Movimentações</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Histórico</a></li>
    </ol>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12 d-flex flex-wrap px-0">
                            <span class="text-primary"><i class="fas fa-history"></i>
                                Histórico de Movimentações</span>
                        </div>
                    </div>

                    <div class="card-body">
                        @include('admin.includes.alerts')

                        <div class="col-12 px-0">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Valor</th>
                                        <th>Tipo</th>
                                        <th>Data</th>
                                        <th>Participante</th>
                                    <tr>
                                </thead>
                                <tbody>
                                    @forelse($historics as $historic)
                                        <tr>
                                            <td>{{ $historic->id }}</td>
                                            <td>{{ number_format($historic->amount, 2, ',', '.') }}</td>
                                            <td>{{ $historic->type($historic->type) }}</td>
                                            <td>{{ $historic->date }}</td>
                                            <td>
                                                @if ($historic->user_id_transaction)
                                                    {{ $historic->userSender->name }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        <tr>
                                        @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
