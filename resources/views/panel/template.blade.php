<div class="container">
    <div class="row">
       Este es el panel
</div>
<div class="col-md-4 col-xl-4">
    <div class="card bg-c-blue order-card">
        <div class="card-block">
            <h4>Servidores</h4>
            @php
                use App\Models\servidores;
                $serve = servidores::all();

            @endphp
 <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$serve}}</span></h2>
            <p>&nbsp;</p>
        </div>
    </div>
</div>
<div><p class="text-right m-b-0"><a href="{{ route('servidores.create') }}" class="text-white">Crear servidores</a>
</p></div>
<div><p class="text-right m-b-0"><a href="{{ route('servidores.index') }}" class="text-white">Lista Servidores</a>
</p></div>

<div><p class="text-right m-b-0"><a href="{{ route('contrasenas.create') }}" class="text-white">Crear Contraseñas</a>
</p></div>
<div><p class="text-right m-b-0"><a href="{{ route('contrasenas.index') }}" class="text-white">Lista contraseñas</a>
</p></div>
