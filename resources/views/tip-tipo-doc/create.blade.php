@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Tip Tipo Doc
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Tip Tipo Doc</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tip_tipo_docs.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tip-tipo-doc.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
