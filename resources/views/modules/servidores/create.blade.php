@extends('layouts/main');
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card ">
                <div class="card-body">
                    <form action="{{ route('serve.store') }}" method="POST" name="proser" id="proser"
                        class="row g-3 needs-validation" novalidate>
                        @csrf
                        @method('POST')
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_servidores">Nombre Servidor:</label>
                                <input type="text" class="form-control" id="nombre_servidores"
                                    name="nombre_servidores" required>
                                    <div class="invalid-feedback">
                                        Por favor colocar nombre del servidor.
                                      </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ip_servidores">IP Servidor:</label>
                                <input type="text" class="form-control" id="ip_servidores" name="ip_servidores"
                                    required>
                                    <div class="invalid-feedback">
                                        Por favor colocar IP del Servidor.
                                      </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="puerto">Puerto:</label>
                                <input type="number" class="form-control" id="puerto" name="puerto" required>
                                <div class="invalid-feedback">
                                    Por favor colocar el puerto del servidor.
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="nombre_usuario">Nombre usuario:</label>
                                <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario"
                                    required>
                                    <div class="invalid-feedback">
                                        Por favor colocar nombre del usuario.
                                      </div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-12 col-md-4">

                            <div class="form-group">
                                <label for="contrasenas">Contraseña:</label>
                                <input type="text" class="form-control" id="contrasenas" name="password" required>
                                <div class="invalid-feedback">
                                    Por favor colocar la contraseña.
                                  </div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-12 col-md-4">

                            <div class="form-group">
                                <label for="ambiente_id">Ambiente: </label>
                                <select name="ambiente_id" id="ambiente_id" class="form-select" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($ambientes as $a)
                                        <option value="{{ $a->id }}">{{ $a->nombre }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Debe selecionar un ambiente.
                                  </div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="status_id">Status: </label>
                                <select name="status_id" id="status_id" class="form-select" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($status as $st)
                                        <option value="{{ $st->id }}">{{ $st->nombre }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Debe selecionar un status
                                  </div>
                            </div>
                        </div>
                        <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-3">Enviar</button>

                        <a href="{{ route('servidores.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
