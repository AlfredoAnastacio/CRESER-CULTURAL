<div class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm">
                        <form class="needs-validation" method="POST" action="{{ route('product.store') }}" novalidate>
                            @csrf

                            <div class="form-row row">
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" id="validationCustom01" name="cve" placeholder="Clave del producto" required>
                                    <div class="invalid-feedback">Ingresa la clave del producto.</div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    {{-- <label for="validationCustom01">Nombre (s)</label> --}}
                                    <input type="text" class="form-control" id="validationCustom02" name="description" placeholder="Ingresa la descripción del producto" required>
                                    {{-- <div class="invalid-feedback"></div> --}}
                                    <div class="invalid-feedback">Ingresa una descripción.</div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    {{-- <label for="validationCustomUsername">Segundo apellido</label> --}}
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom03" name="price" placeholder="Precio del producto" required>
                                        <div class="invalid-feedback">Ingresa el precio del producto.</div>
                                    </div>
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
