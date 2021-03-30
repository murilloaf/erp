@extends('layouts.admin')

@section('title', trans_choice('Nota Fiscal Eletrônica', 2))

@section('new_button')
    <a href="{{ url('nfe/create') }}" class="btn btn-success btn-sm">Lançar Nota Fiscal</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom-0">
            <table class='table'>
            <thead>
                <tr>
                    <th>Pedido</th>
                    <th>Nota Fiscal</th>
                    <th>Cliente</th>
                    <th>Resumo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice['order'] }}</td>
                        <td>{{ $invoice['invoice'] }}</td>
                        <td>{{ $invoice['client'] }}</td>
                        <td>{{ $invoice['resume'] }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>

        <div class="card-footer table-action">
            <div class="row align-items-center">
                {{-- @include('partials.admin.pagination', ['invoices' => $invoices]) --}}
            </div>
        </div>
    </div>
@stop