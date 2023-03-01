<div class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm">
                    <form class="needs-validation" method="POST" action="{{ route('user.store') }}" novalidate>
                        @csrf
                        <div class="form-row row">
                            <div class="col-md-12 mb-3">
                                {{-- <label for="validationCustom01">Nombre (s)</label> --}}
                                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Nombre (s)" required>
                                {{-- <div class="invalid-feedback"></div> --}}
                                <div class="invalid-feedback">Ingresa el nombre.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                {{-- <label for="validationCustom02">Primer apellido</label> --}}
                                <input type="text" class="form-control" id="validationCustom02" name="first_name" placeholder="Primer apellido" required>
                                {{-- <div class="invalid-feedback"></div> --}}
                                <div class="invalid-feedback">Ingresa el primer apellido.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                {{-- <label for="validationCustomUsername">Segundo apellido</label> --}}
                                <div class="input-group">
                                    <input type="text" class="form-control" id="second_name" name="second_name" placeholder="Segundo apellido">
                                </div>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="col-md-6 mb-3">
                                {{-- <label for="validationCustomEmail">Correo electrónico</label> --}}
                                <div class="input-group">
                                    <input type="email" class="form-control" id="validationCustom04" name="email" placeholder="example@gmail.com" required>
                                    <div class="invalid-feedback">Ingresa un correo electrónico válido.</div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class="form-select" id="validationCustom05" name="role_id" required>
                                    <option value="" disabled selected>Selecciona un rol</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"> {{ $role->name_role }} </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback"></div>
                                <div class="invalid-feedback">Selecciona un rol</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="validationCustom06" name="address" placeholder="Dirección" required>
                                <div class="invalid-feedback"></div>
                                <div class="invalid-feedback">Ingresa la dirección.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="validationCustom07" name="phone" placeholder="Teléfono" required>
                                <div class="invalid-feedback"></div>
                                <div class="invalid-feedback">Ingresa un número de teléfono.</div>
                            </div>
                        </div>
                        <div align="center">
                            <button class="btn btn-primary" type="submit" align="center"> Agregar </button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <form method="POST" action="{{ route('user.store') }}">
                @csrf
                <div class="row col-md-12">
                    <div class="mb-3 col-md-4">
                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Nombre" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <input type="text" class="form-control form-control-sm" id="first_surname" name="first_surname" placeholder="Primer apellido" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <input type="text" class="form-control form-control-sm" id="second_surname" name="second_surname" placeholder="Segundo apellido">
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Correo electrónico" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Ingresa una contraseña" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary"> Guardar </button>
            </div>
        </form> --}}
      </div>
    </div>
  </div>
