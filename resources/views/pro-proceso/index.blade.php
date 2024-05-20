@extends('layouts.app')

@section('template_title')
    Pro Procesos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pro Procesos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pro_procesos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Pro Prefijo</th>
									<th >Pro Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proProcesos as $proProceso)
                                        <tr>
                                            <td>{{ $proProceso->id}}</td>
                                            
										<td >{{ $proProceso->pro_prefijo }}</td>
										<td >{{ $proProceso->pro_nombre }}</td>

                                            <td>
                                                <form action="{{ route('pro_procesos.destroy', $proProceso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pro_procesos.show', $proProceso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pro_procesos.edit', $proProceso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $proProcesos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
