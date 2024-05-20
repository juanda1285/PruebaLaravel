@extends('layouts.app')

@section('template_title')
    Doc Documentos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                        <form class="">
                             <input type="text" name=search class="form-control" placeholder="Buscar Documento" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ $search }}">
                            <button class="mt-2 btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                        </form>
                              
                            <span id="card_title">
                                {{ __('Doc Documentos') }}
                            </span>
                           
                             <div class="float-right">
                                <a href="{{ route('doc_documentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Doc Nombre</th>
									<th >Doc Codigo</th>
									<th >Doc Contenido</th>
									<th >Doc Id Tipo</th>
									<th >Doc Id Proceso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docDocumentos as $docDocumento)
                                        <tr>
                                            <td>{{ $docDocumento->id }}</td>
                                            
										<td >{{ $docDocumento->doc_nombre }}</td>
										<td >{{ $docDocumento->tipTipoDoc->tip_prefijo}}-{{ $docDocumento->proProceso->pro_prefijo}}-{{ $docDocumento->doc_codigo }}</td>
										<td >{{ $docDocumento->doc_contenido }}</td>
                                        <td >{{ $docDocumento->tip_id }}</td>
										<td >{{ $docDocumento->prod_id }}</td>
										

                                            <td>
                                                <form action="{{ route('doc_documentos.destroy', $docDocumento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('doc_documentos.show', $docDocumento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('doc_documentos.edit', $docDocumento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $docDocumentos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
