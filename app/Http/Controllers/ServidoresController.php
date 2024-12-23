<?php

namespace App\Http\Controllers;

use App\Models\servidores;
use Illuminate\Http\Request;

class ServidoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serve = servidores::paginate(5);
        return view('modules/servidores/index', compact('serve'));

       // return view('servidores.show', $serve);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$serve = servidores::all(); // Obtener todos los servidores
        //return view('servidores.create', compact('serve'));

        return view('modules/servidores/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_servidores' => 'required|string|max:255',
            'ip_servidores' => 'required',
            'puerto' => 'required|string|max:10',
        ]);

        $post = new servidores;
        $post->nombre_servidores = $validatedData['nombre_servidores'];
        $post->ip_servidores = $validatedData['ip_servidores'];
        $post->puerto = $validatedData['puerto'];
        $post->save();
        return to_route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $serve = servidores::find($id);

    // Verificar si el servidor fue encontrado
    if (!$serve) {
        return redirect()->route('servidores.index')->with('error', 'Servidor no encontrado.');
    }

    return view('modules/servidores/show', compact('serve'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $serve = servidores::find($id);
      return view('modules/servidores/edit', compact('serve'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $serve = servidores::find($id);
        $serve->nombre_servidores = $request->nombre_servidores;
        $serve->ip_servidores = $request->ip_servidores;
        $serve->puerto = $request->puerto;
        $serve->save();
        return to_route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        servidores::destroy($id);
        return redirect()->route('servidores.index')->with('success', 'Servidor eliminado correctamente.');

    }
}
