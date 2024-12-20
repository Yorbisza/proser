<div class="container">
    <div class="row">
        Hola
        <form action="{{ route('contrasenas.store') }}" method="POST" name="proser" id="proser">
            @csrf
            <div class="col-xs-3 col-sm-12 col-md-3">
                <div class="form-group">
                    <label for="nombre_usuario">Nombre usuario:</label>
                    <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario">
                </div>
            </div>
            <div class="form-group">
                <label for="contrasenas">Contraseña:</label>
                <input type="text" class="form-control" id="contrasenas" name="password"> <!-- Cambiado a 'password' -->
            </div>
            <div class="form-group">
                <label for="serve_id">Servidor:</label>
                <select name="serve_id" id="serve_id" class="form-select">
                    <option value="">Seleccione</option>
                    @foreach ($serve as $s)
                        <option value="{{ $s->id }}">{{ $s->nombre_servidores }}</option> <!-- Usar el ID del servidor -->
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
