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
      //  $serve['contrasenas']=contrasenas::paginate(5);
        //return view('contrasenas.show', $serve); // Devuelve la lista de servidores como JSON

        $contrasenas = contrasenas::paginate(5);
        return view('modules/contrasenas/index', compact('contrasenas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $serve = servidores::all(); // Obtener todos los servidores
     // Pasar la variable a la vista
        return view('modules/contrasenas/create', compact('serve'));
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
        ],[
            'password|min6' => 'La contraseña de'
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
         // password_hash(string $password, integer $algo, array $options = ?): string
         
        $contrasenas = contrasenas::find($id);

    // Verificar si el servidor fue encontrado
    if (!$contrasenas) {
        return redirect()->route('contrasenas.index')->with('error', 'Contraseña no encontrado.');
    }

    return view('modules/contrasenas/show', compact('contrasenas'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contrasenas = contrasenas::find($id);
        $serve = servidores::all();
      return view('modules/contrasenas/edit', compact('contrasenas', 'serve'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contrasenas = contrasenas::find($id);
        $contrasenas->nombre_usuario = $request->nombre_usuario;
        $contrasenas->password = $request->password;
        $contrasenas->serve_id = $request->serve_id;
        $contrasenas->save();
        return to_route('contrasenas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        contrasenas::destroy($id);
        return redirect()->route('contrasenas.index')->with('success', 'Contraseña eliminada correctamente.');

    }
}
