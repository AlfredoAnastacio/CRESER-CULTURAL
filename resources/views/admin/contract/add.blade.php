@extends('admin.layout')

@section('content')
    <div class="content container-fluid">

        <div class="comp-sec-wrapper">
            <section class="comp-section">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center"> Información del Contrato</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                            <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab"> Cliente</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Lugar de Trabajo</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab3" data-bs-toggle="tab">Cónyuge</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab4" data-bs-toggle="tab">Referencias</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab5" data-bs-toggle="tab">Documentos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab6" data-bs-toggle="tab">Generales</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Nombre (s) <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Primer apellido <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" requerid>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Segundo apellido <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                    <div class="form-group col-md-4">
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
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Tipo de identificación</label>
                                        <select class="form-select">
                                            <option value="" disabled selected>Selecciona una identificación</option>
                                            <option value="1">IFE/INE</option>
                                            <option value="2">LICENCIA</option>
                                            <option value="3">PASAPORTE</option>
                                            <option value="4">OTRA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Dirección</label>
                                        <input type="text" class="form-control form-control-sm" id="address" name="address">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Colonia</label>
                                        <input type="text" class="form-control form-control-sm" id="colony" name="colony">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label">Población</label>
                                        <input type="text" class="form-control form-control-sm" id="city" name="city">
                                    </div>
                                    <div class="form-group col-md-2">
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
                                    <div class="form-group col-md-8">
                                        <label class="col-form-label">Referencia casa</label>
                                        <input type="text" class="form-control form-control-sm" id="home_referency" name="home_referency">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">E-mail</label>
                                        <input type="email" class="form-control form-control-sm" id="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="solid-rounded-justified-tab2">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Ocupación<span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Empresa <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" requerid>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Departamento <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Teléfono empresa</label>
                                        <input type="text" class="form-control form-control-sm" id="colony" name="colony">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Dirección empresa</label>
                                        <input type="text" class="form-control form-control-sm" id="city" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="solid-rounded-justified-tab3">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Nombre<span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Celular<span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Ingresa el nombre" requerid>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Empresa <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" requerid>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Departamento <span class="star-red">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="second_name" name="second_name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Teléfono empresa</label>
                                        <input type="text" class="form-control form-control-sm" id="colony" name="colony">
                                    </div>
                                    <div class="form-group col-md-4">
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
                                            <label class="col-lg-3 col-form-label">Gender</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1" checked>
                                                    <label class="form-check-label" for="gender_male">
                                                    Male
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                                                    <label class="form-check-label" for="gender_female">
                                                    Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Blood Group</label>
                                            <div class="col-lg-9">
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option value="1">A+</option>
                                                    <option value="2">O+</option>
                                                    <option value="3">B+</option>
                                                    <option value="4">AB+</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Username</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Email</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Password</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Repeat Password</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title">Address</h4>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address Line 1</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address Line 2</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">State</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">City</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Country</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Postal Code</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                {{-- <div class="row col-md-4">
                                    <label class="col-form-label col-md-2">INE FRENTE</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">INE FRENTE</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">INE REVERSO</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">CROQUIS</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">COMPROBANTE DE DOMICILIO</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">FACHADA CASA</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">DOCUMENTOS 1 HOJA</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">CONTRATO</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="file">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="tab-pane" id="solid-rounded-justified-tab6">
                                Tab content 6
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
