<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        $atributos = Cliente::getAtributos();
        return view("pages.ClientesView", [
            'clientes' => $clientes,
            'atributos' => $atributos,
            'ruta' => 'clientes'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Cliente::create($request->all());
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('pages.details.ClienteDetail', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $cliente = Cliente::findOrFail($id);
            $cliente->update($request->all());
            $cliente->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
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
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
        return $this->index();
    }

    public function obtenerDatosBasicos()
    {
        $clientes = Cliente::all()->toArray();
        $atributos = Cliente::getAtributos();

        return [
            'clientes' => $clientes,
            'atributos' => $atributos,
            'ruta' => 'clientes'
        ];
    }

    //No se si funciona
    private function comprobarContrasenia(Request $request)
    {
        Validator::make($request->all(), [
            'password' => ['password', 'string' ,'min:8', 'confirmed'],
        ],[
            'password'=> 'Error en la contrasenia',
            'password.confirmed'=> 'Error en la contrasenia',
        ]);
    }
}
