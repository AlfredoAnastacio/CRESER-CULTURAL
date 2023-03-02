@extends('admin.layout')

@section('content')
    <div class="content container-fluid">

        <div class="comp-sec-wrapper">
            <section class="comp-section">
                <h5 class="card-title text-center"> Información del Contrato</h5>
                <div class="card">
                    <div class="card-header row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Folio contrato</label>
                            <select class="form-select form-control-sm">
                                <option value="" disabled selected>Selecciona un contrato</option>
                                <option value="1">3001230</option>
                                <option value="2">2013849</option>
                                <option value="3">3019394</option>
                                <option value="4">1000302</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Tipo de producto</label>
                            <select class="form-select form-control-sm">
                                <option value="" disabled selected>Selecciona un contrato</option>
                                <option value="1">RELIGIOSO</option>
                                <option value="2">EDUCATIVO</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>FECHA DE CONTRATACIÓN <span class="star-red">*</span></label>
                            <input type="date" class="form-control form-control-sm" id="second_name" name="second_name">
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                            <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab"> Cliente</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Lugar de Trabajo</a></li> --}}
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab3" data-bs-toggle="tab">Cónyuge</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab4" data-bs-toggle="tab">Referencias</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab5" data-bs-toggle="tab">Documentos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab6" data-bs-toggle="tab">Datos Vendedores</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab7" data-bs-toggle="tab">Datos Financieros</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label>Nombre (s) <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Primer apellido <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" requerid>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Segundo apellido <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label">Género</label>
                                        <div class="col-lg-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1" checked>
                                                <label class="form-check-label" for="gender_male">
                                                Hombre
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                                                <label class="form-check-label" for="gender_female">
                                                Mujer
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label">Tipo de identificación</label>
                                        <select class="form-select">
                                            <option value="" disabled selected>Selecciona una identificación</option>
                                            <option value="1">IFE/INE</option>
                                            <option value="2">LICENCIA</option>
                                            <option value="3">PASAPORTE</option>
                                            <option value="4">OTRA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Dirección</label>
                                        <input type="text" class="form-control form-control-sm" id="address" name="address">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label">Colonia</label>
                                        <input type="text" class="form-control form-control-sm" id="colony" name="colony">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">Población</label>
                                        <input type="text" class="form-control form-control-sm" id="city" name="city">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label class="col-form-label">C.P.</label>
                                        <input type="text" class="form-control form-control-sm" id="cp" name="cp">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">Teléfono Fijo</label>
                                        <input type="text" class="form-control form-control-sm" id="phone" name="phone">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">Celular</label>
                                        <input type="text" class="form-control form-control-sm" id="mobile" name="mobile">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">E-mail</label>
                                        <input type="email" class="form-control form-control-sm" id="email" name="email">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label">Referencia casa</label>
                                        <input type="text" class="form-control form-control-sm" id="home_referency" name="home_referency">
                                    </div>
                                </div>
                                <div class="row">
                                    <h5> Información de lugar de trabajo</h5>
                                    <div class="form-group col-md-3">
                                        <label>Ocupación<span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Empresa <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" requerid>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Departamento <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">Teléfono empresa</label>
                                        <input type="text" class="form-control form-control-sm" id="colony" name="colony">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Dirección empresa</label>
                                        <input type="text" class="form-control form-control-sm" id="city" name="city">
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="solid-rounded-justified-tab3">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label>Nombre completo<span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Celular<span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el núm de celular" requerid>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Empresa <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" requerid>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Departamento <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label">Teléfono empresa</label>
                                        <input type="text" class="form-control form-control-sm" id="colony" name="colony">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Dirección empresa</label>
                                        <input type="text" class="form-control form-control-sm" id="city" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="solid-rounded-justified-tab4">
                                <div class="col-md-12 row">
                                    <div class="col-md-6">
                                        <h4 class="text-center"> Referencia 1</h4>
                                        <div class="form-group">
                                            <label>Nombre completo<span class="star-red">*</span></label>
                                            <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Dirección<span class="star-red">*</span></label>
                                                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="col-form-label">Tipo relación</label>
                                                <input type="text" class="form-control form-control-sm" id="colony" name="colony">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Teléfono Fijo <span class="star-red">*</span></label>
                                                <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" requerid>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Celular <span class="star-red">*</span></label>
                                                <input type="text" class="form-control form-control-sm" id="second_name" name="second_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="text-center"> Referencia 2</h4>
                                        <div class="form-group">
                                            <label>Nombre completo<span class="star-red">*</span></label>
                                            <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Dirección<span class="star-red">*</span></label>
                                                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="col-form-label">Tipo relación</label>
                                                <input type="text" class="form-control form-control-sm" id="colony" name="colony">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Teléfono Fijo <span class="star-red">*</span></label>
                                                <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" requerid>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Celular <span class="star-red">*</span></label>
                                                <input type="text" class="form-control form-control-sm" id="second_name" name="second_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="solid-rounded-justified-tab5">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3">INE FRENTE</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3">INE REVERSO</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3">Croquis</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3">Comprobante de domicilio</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3">Fachada casa</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3">Documentos 1 hoja</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-3">Contrato</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="solid-rounded-justified-tab6">
                                <div class="col-md-12 row">
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label">Gerente</label>
                                        <select class="form-select">
                                            <option value="1">HERIBERTO</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label">Supervisor</label>
                                        <select class="form-select">
                                            <option value="1">HERIBERTO</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="col-form-label"> Productos </label>
                                        <select class="select form-control select2 col-md-12" name="products[]" multiple="multiple" id="products" placeholder="Selecciones uno ó varios productos">
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->description }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="solid-rounded-justified-tab7">
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">Tipo de pago</label>
                                        <select class="form-select">
                                            <option value="" disabled selected>Tipo de pago</option>
                                            <option value="1">QUINCENAL</option>
                                            <option value="2">MENSUAL</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Monto de pago <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" requerid>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Número de pagos <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Fecha de Pago inicial <span class="star-red">*</span></label>
                                        <input type="date" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Pago inicial <span class="star-red">*</span></label>
                                        <input type="number" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Pagos parciales <span class="star-red">*</span></label>
                                        <input type="number" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
