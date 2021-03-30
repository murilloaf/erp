@extends('layouts.admin')

@section('title', trans_choice('Adicionar Nota Fiscal', 2))

@section('content')
    <div class="card">
        {{-- <div class="card-header border-bottom-"> --}}
        
        {!! Form::open([
            'route' => 'invoices.store',
            'id' => 'invoice',
            '@submit.prevent' => 'onSubmit',
            'autocomplete' => 'off',
            'class' => 'form-loading-button needs-validation',
            'novalidate' => 'true'
        ]) !!}

        <div class="card-body">
            <div class="row">
                {{ Form::textGroup('specie', 'Espécie') }}

                {{ Form::textGroup('serie', 'Série') }}
            </div>

{{--

            <form>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Espécie</span>
                    </div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Série</span>
                    </div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class='text-uppercase font-weight-bold' for="exampleInputPassword1">destinatário</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Tipo</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Razão Social</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Município</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Estado</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class='text-uppercase font-weight-bold' for="exampleInputPassword1">Transporte</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Transportadora</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Veículo</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Marca</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Espécie</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class='text-uppercase font-weight-bold' for="exampleInputPassword1">carga</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Volumes</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class='text-uppercase font-weight-bold' for="exampleInputPassword1">pagamento</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Condição</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Forma</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Bandeira</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Concluir</button>
            </form>
        {{-- </div> --}}
    </div>
@stop