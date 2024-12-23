@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('contrasenas.create') }}" class="btn btn-primary">Agregar</a>
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
                                        <td>
                                            <form method="post" action="{{ route('contrasenas.destroy', $c->id) }}">
                                                <a href="{{ route('contrasenas.show', $c->id) }}"
                                                    class="btn btn-info">Mostrar</a>
                                                <a href="{{ route('contrasenas.edit', $c->id) }}"
                                                    class="btn btn-warning">Editar</a>

                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" type="submit"
                                                    onclick="return confirm('Seguro que desa borrar el registro?');">Borrar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
