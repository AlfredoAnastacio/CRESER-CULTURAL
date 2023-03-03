<div class="modal fade" id="addSerie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nueva serie</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm">
                        <form class="needs-validation" method="POST" action="{{ route('serie.store') }}" novalidate>
                            @csrf

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label class="col-form-label">Clave</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="cve" placeholder="Clave de la serie" required>
                                    <div class="invalid-feedback">Ingresa la clave de la serie.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label">Empresa</label>
                                    <select class="form-select form-control-sm" id="validationCustom02" name="company_id" required>
                                        <option value="" disabled selected>Selecciona una empresa</option>
                                        @foreach($companies as $companie)
                                            <option value="{{ $companie->id }}">{{ $companie->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Selecciona una empresa.</div>
                                </div>
                            </div>
                            <div align="center">
                                <button class="btn btn-primary" type="submit" align="center"> Agregar </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
