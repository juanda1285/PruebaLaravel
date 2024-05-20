@extends('layouts.app')

@section('template_title')
    {{ $proProceso->name ?? __('Ver') . " " . __('Pro Proceso') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Pro Proceso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pro_procesos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Pro Prefijo:</strong>
                                    {{ $proProceso->pro_prefijo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pro Nombre:</strong>
                                    {{ $proProceso->pro_nombre }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
