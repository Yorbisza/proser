@extends('layouts/main')

@section('contenido')
<div class="container">
    <div class="row">
    <form action="{{ route('contrasenas.update', $contrasenas->id) }}" method="POST" name="proser" id="proser">
        @csrf
        @method('PUT')
        <div class="col-xs-3 col-sm-12 col-md-3">
        <div class="form-group">
            <label for="nombre_usuario">Nombre Usuario:</label>
            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value="{{$contrasenas->nombre_usuario}}">
        </div>
        </div>
        <div class="form-group">
            <label for="password">Contraseña: </label>
            <input type="text" class="form-control" id="password" name="password" value="{{$contrasenas->password}}">
        </div>
        <div class="form-group">
            <label for="serve_id">Servidor: </label>
            <select name="serve_id" id="serve_id" class="form-select">
                <option value="">Seleccione</option> <!-- Opción por defecto -->
                @foreach ($serve as $s)
                    <option value="{{ $s->id }}" {{ $s->id == $contrasenas->serve_id ? 'selected' : '' }}>
                        {{ $s->nombre_servidores }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-warning mt-3">Actualizar</button>
        <a href="{{route('contrasenas.index')}}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
    </div>
</div>
@endsection
