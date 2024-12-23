@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-sm table bordered text-center">
                            <thead>
                                <tr>
                                    <th>Nombre Usuario</th>
                                    <th>Contraseña</th>
                                    <th>Servidor</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td><b>{{ $contrasenas->nombre_usuario }}</b></td>
                                        <td><b>{{ $contrasenas->contrasenas }}</b></td>
                                        <td><b>{{ $contrasenas->serve_id }}</b></td>
                                        <td>
                                            <form method="post" action="{{ route('contrasenas.destroy', $contrasenas->id) }}">
                                                <a href="{{ route('contrasenas.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                                            </form>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
