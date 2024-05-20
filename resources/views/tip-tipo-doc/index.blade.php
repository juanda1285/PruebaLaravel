@extends('layouts.app')

@section('template_title')
    Tip Tipo Docs
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tip Tipo Docs') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tip_tipo_docs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
                                        
									<th >Tip Nombre</th>
									<th >Tip Prefijo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipTipoDocs as $tipTipoDoc)
                                        <tr>
                                            <td>{{$tipTipoDoc->id }}</td>
                                            
										<td >{{ $tipTipoDoc->tip_nombre }}</td>
										<td >{{ $tipTipoDoc->tip_prefijo }}</td>

                                            <td>
                                                <form action="{{ route('tip_tipo_docs.destroy', $tipTipoDoc->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tip_tipo_docs.show', $tipTipoDoc->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tip_tipo_docs.edit', $tipTipoDoc->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Seguro que desea eliminar ?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipTipoDocs->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
