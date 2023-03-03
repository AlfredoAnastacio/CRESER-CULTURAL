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
                                <h5 class="card-title"> Listado de Series</h5>
                            </div>
                            <div class="col-auto">
                                <div class="btn btn-white btn-sm" style="padding: 0;">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#addSerie">
                                        <i class="feather-plus-square me-1"></i> Agregar serie
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
                                        <th> Serie</th>
                                        <th> Empresa</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    @foreach ($series as $serie)
                                        <tr>
                                            <td> {{ $serie->cve }}</td>
                                            <td> {{ $serie->company_id }}</td>
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
    @include('admin.modal.add_serie')

@endsection
