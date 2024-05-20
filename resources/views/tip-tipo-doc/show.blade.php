@extends('layouts.app')

@section('template_title')
    {{ $tipTipoDoc->name ?? __('Ver') . " " . __('Tip Tipo Doc') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Tip Tipo Doc</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tip_tipo_docs.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tip Nombre:</strong>
                                    {{ $tipTipoDoc->tip_nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tip Prefijo:</strong>
                                    {{ $tipTipoDoc->tip_prefijo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
