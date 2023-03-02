@extends('admin.layout')

@section('content')
    <div class="content container-fluid content-wrap">
        <!-- Upcoming Appointments -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title"> Listado de Contratos</h5>
                            </div>
                            <div class="col-auto">
                                <div class="btn btn-white btn-sm" style="padding: 0;">
                                    <a type="button" class="btn btn-secondary btn-sm" href="{{ route('contract.create') }}"><i class="feather-plus-square me-1"></i> Nuevo contrato</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="datatable table table-borderless hover-table" id="data-tables">
                                <thead class="thead-light" align="center">
                                    <tr>
                                        <th> Nombre completo</th>
                                        <th> Email </th>
                                        <th> Dirección </th>
                                        <th> Teléfono </th>
                                        <th> Rol </th>
                                        <th> Estatus </th>
                                        <th> Fecha de creación </th>
                                        <th> Acciones </th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    {{-- @foreach ($users as $user)
                                        <tr>
                                            <td> {{ $user->name }} {{ $user->first_surname }} {{ $user->second_surname }}</td>
                                            <td> {{ $user->email }} </td>
                                            <td> {{ $user->address }} </td>
                                            <td> {{ $user->phone }} </td>
                                            <td> {{ $user->role_id }} </td>
                                            <td>
                                                @if ($user->status_id)
                                                    <span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Activo </span>
                                                @else
                                                    <span class="badge bg-badge-grey text-danger"><i class="fas fa-circle me-1"></i> Inactivo </span>
                                                @endif
                                            </td>
                                            <td> {{ Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }} </td>
                                            <td>
                                                <a type="button" class="btn btn-danger btn-rounded btn-sm" id="btnDelete"><i class="far fa-trash-alt"></i> Eliminar</a>
                                                <a type="button" class="btn btn-warning btn-rounded btn-sm" href="{{ route('user.edit',['user' => $user->id]) }}"><i class="feather-eye"></i> Detalle </a>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tablepagination"  class="dataTables_wrapper"></div>
    </div>
@endsection
