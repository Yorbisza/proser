<?php

namespace App\Http\Controllers;

use App\Models\servidores;
use App\Models\contrasenas;
use Illuminate\Http\Request;

class ContrasenasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serve['contrasenas']=contrasenas::paginate(5);
        return view('contrasenas.show', $serve); // Devuelve la lista de servidores como JSON
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $serve = servidores::all(); // Obtener todos los servidores
        return view('contrasenas.create', compact('serve')); // Pasar la variable a la vista
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar la entrada
        $validatedData = $request->validate([
            'nombre_usuario' => 'required|string|max:255',
            'password' => 'required|string|min:6', // Ajusta la regla según tus necesidades
            'serve_id' => 'required',
        ]);

        // Crear y guardar la nueva contraseña
        $post = new contrasenas;
        $post->nombre_usuario = $validatedData['nombre_usuario'];
        $post->password = bcrypt($validatedData['password']); // Encriptar la contraseña
        $post->serve_id = $validatedData['serve_id']; // Asignar el ID del servidor desde la validación
        $post->save();

        return redirect()->route('contrasenas.index')->with('success', 'Contraseña creada exitosamente.'); // Redirigir a la lista de contraseñas
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Aquí puedes retornar una vista o JSON del recurso específico
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Aquí puedes retornar una vista para editar la contraseña
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Aquí puedes manejar la actualización del recurso
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Aquí puedes manejar la eliminación del recurso
    }
}
