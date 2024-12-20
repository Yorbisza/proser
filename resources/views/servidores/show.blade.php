<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre Servidor</th>
                    <th>IP Servidor</th>
                    <th>Puerto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servidores as $s)
                    <tr>
                        <td><b>{{ $s->nombre_servidores }}</b></td>
                        <td><b>{{ $s->ip_servidores }}</b></td>
                        <td><b>{{ $s->puerto }}</b></td>
                        <td>
                            <form method="post" action="{{ route('servidores.destroy', $s->id) }}">

                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Seguro que desa borrar el registro?');">Borrar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
