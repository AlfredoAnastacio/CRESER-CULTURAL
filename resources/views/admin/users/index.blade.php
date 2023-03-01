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
                                <h5 class="card-title"> Listado de usuarios</h5>
                            </div>
                            <div class="col-auto">
                                <div class="btn btn-white btn-sm" style="padding: 0;">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#addUser">
                                        <i class="feather-plus-square me-1"></i> Agregar usuario
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="datatable table table-borderless hover-table" id="data-tables">
                                <thead class="thead-light" align="center">
                                    <tr>
                                        <th> Nombre </th>
                                        <th> Email </th>
                                        <th> Fecha de creación </th>
                                        <th> Acciones </th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td> {{ $user->name }} {{ $user->first_surname }} {{ $user->second_surname }}</td>
                                            <td> {{ $user->email }} </td>
                                            <td> {{ Carbon\Carbon::parse($user->created_at)->format('d-m-Y') }} </td>
                                            <td>
                                                <div class="table-action">
                                                    {{-- <button type="button" class="btn btn-sm btn-secondary btn-rounded" onclick="edit({{$user->id}})"><i class="far fa-edit"></i> Editar </button> --}}
                                                    <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}" id="formDeleteUser">
                                                        @csrf
                                                        @method('DELETE')

                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-sm btn-danger btn-rounded text-white" onclick="return confirm('¿Está seguro de eliminar a este usuario?');"><i class="far fa-trash-alt"></i> Eliminar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tablepagination"  class="dataTables_wrapper"></div>
    </div>
    @include('admin.modal.create_user')
    @include('admin.modal.edit_user')

@endsection
