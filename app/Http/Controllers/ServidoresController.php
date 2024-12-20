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
        $serve['servidores']=servidores::paginate(5);
        return view('servidores.show', $serve);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {$serve = servidores::all(); // Obtener todos los servidores
        return view('servidores.create', compact('serve'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
