@extends('layouts/main');
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    Hola
                    <form action="{{ route('serve.store') }}" method="POST" name="proser" id="proser">
                        @csrf
                        @method('POST')
                        <div class="col-xs-3 col-sm-12 col-md-3">
                            <div class="form-group">
                                <label for="nombre_servidores">Nombre Servidor:</label>
                                <input type="text" class="form-control" id="nombre_servidores"
                                    name="nombre_servidores">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ip_servidores">IP Servidor:</label>
                            <input type="text" class="form-control" id="ip_servidores" name="ip_servidores">
                        </div>
                        <div class="form-group">
                            <label for="puerto">Puerto:</label>
                            <input type="number" class="form-control" id="puerto" name="puerto">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                        <a href="{{route('index')}}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
