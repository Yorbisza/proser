<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre Usuario</th>
                    <th>Contraseña</th>
                    <th>Servidor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contrasenas as $c)
                    <tr>
                        <td><b>{{ $c->nombre_usuario }}</b></td>
                        <td><b>{{ $c->contrasenas }}</b></td>
                        <td><b>{{ $c->serve_id }}</b></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

