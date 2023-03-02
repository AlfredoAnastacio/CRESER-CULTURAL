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
                                <h5 class="card-title"> Listado de Productos</h5>
                            </div>
                            <div class="col-auto">
                                <div class="btn btn-white btn-sm" style="padding: 0;">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#addProduct">
                                        <i class="feather-plus-square me-1"></i> Agregar producto
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
                                        <th> Clave</th>
                                        <th> Descripción </th>
                                        <th> Price </th>
                                        <th> Acciones </th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    @foreach ($products as $product)
                                        <tr>
                                            <td> {{ $product->cve }} </td>
                                            <td> {{ $product->description }} </td>
                                            <td> {{ $product->price }} </td>
                                            <td>
                                                <a type="button" class="btn btn-danger btn-rounded btn-sm" id="btnDelete"><i class="far fa-trash-alt"></i> Eliminar</a>
                                                <a type="button" class="btn btn-warning btn-rounded btn-sm" href="{{ route('product.edit',['product' => $product->id]) }}"><i class="feather-eye"></i> Detalle </a>
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
    @include('admin.modal.add_product')
    {{-- @include('admin.modal.edit_user') --}}

@endsection
