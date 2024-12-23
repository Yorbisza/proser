@extends('layouts/main')

@section('contenido')
<div class="container">
    <div class="row">
    <form action="{{ route('servidores.update', $serve->id) }}" method="POST" name="proser" id="proser">
        @csrf
        @method('PUT')
        <div class="col-xs-3 col-sm-12 col-md-3">
        <div class="form-group">
            <label for="nombre_servidores">Nombre Servidor:</label>
            <input type="text" class="form-control" id="nombre_servidores" name="nombre_servidores" value="{{$serve->nombre_servidores}}">
        </div>
        </div>
        <div class="form-group">
            <label for="ip_servidores">IP Servidor:</label>
            <input type="text" class="form-control" id="ip_servidores" name="ip_servidores" value="{{$serve->ip_servidores}}">
        </div>
        <div class="form-group">
            <label for="puerto">Puerto:</label>
            <input type="number" class="form-control" id="puerto" name="puerto" value="{{$serve->puerto}}">
        </div>

        <button class="btn btn-warning mt-3">Actualizar</button>
        <a href="{{route('index')}}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
    </div>
</div>
@endsection
