<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        $modelo = Usuario::getAtributos();
        return view("pages.UserView", [
            'usuarios' => $usuarios,
            'atributos' => $modelo,
            'ruta' => 'usuarios',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        DB::beginTransaction();
        try {
            $usuario = new Usuario($request->all());
            $usuario->save();
            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();
        }
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('pages.details.UsuarioDetail', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        return $request;

        DB::beginTransaction();
        try {
            //code...
            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();
        }
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        DB::beginTransaction();
        try {
            //code...
            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();
        }
        return $this->index();
    }

    public function crear()
    {
        return view('pages.details.usuarioDetail', ['usuario' => new Usuario()]);
    }
}
