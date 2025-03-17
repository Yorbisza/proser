@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('servidores.create') }}" class="btn btn-primary">Agregar</a>
                        <table class="table table-sm table bordered text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Servidor</th>
                                    <th>IP Servidor</th>
                                    <th>Puerto</th>
                                    <th>Usuario</th>
                                    <th>Ambiente</th>
                                    <th>Status</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($serve as $s)
                                    <tr>
                                        <td><b>{{ $s->id }}</b></td>
                                        <td><b>{{ $s->nombre_servidores }}</b></td>
                                        <td><b>{{ $s->ip_servidores }}</b></td>
                                        <td><b>{{ $s->puerto }}</b></td>
                                        <td><b>{{ $contrasenas->where('serve_id', $s->id)->first()->nombre_usuario ?? 'N/A' }}</b>
                                        </td>
                                        <td><b>{{ $ambientes->where('id', $s->ambiente_id)->first()->nombre ?? 'N/A' }}</b>
                                        </td>
                                        <td><b>{{ $status->where('id', $s->status_id)->first()->nombre ?? 'N/A' }}</b></td>

                                        <td>
                                            <form method="post" action="{{ route('servidores.destroy', $s->id) }}">
                                                <a href="{{ route('servidores.show', $s->id) }}"
                                                    class="btn btn-info">Mostrar</a>
                                                <a href="{{ route('servidores.edit', $s->id) }}"
                                                    class="btn btn-warning">Editar</a>

                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" type="submit"
                                                    onclick="return confirm('Seguro que desea borrar el registro?');">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {{ $serve->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
