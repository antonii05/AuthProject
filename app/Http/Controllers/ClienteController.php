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
            $this->validarCreacion($request->all());
            $cliente = new Cliente($request->all());
            $cliente->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        } catch (\Illuminate\Validation\ValidationException $e) {
            return $e->errors();
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

    public function crear(Request $request)
    {
        $cliente = new Cliente();
        $cliente->activo = true;
        return view('pages.details.ClienteDetail', ['cliente' => $cliente]);
    }

    private function validarCreacion(array $data)
    {
        return Validator::make(
            $data,
            [
                'email' => ['email', 'unique:clientes'],
                'nombre_fiscal' => ['string'],
                'nif' => ['string', 'min:9', 'max:9'],
                'pais' => ['string'],
                'provincia' => ['string'],
            ],
            [
                'email' => 'Falta el campo correo electronico',
                'email.unique' => 'Ese correo electrónico ya existe',
                'nombre_fiscal' => 'Falta el nombre fiscal',
                'nif' => 'Falta el NIF',
                'nif.min' => 'El nix debe de tener 9 Digitos caracteres',
                'nif.max' => 'El nix debe de tener 9 Digitos caracteres',
                'pais' => 'Falta el campo Pais',
                'provincia' => 'Falta el campo Provincia',

            ]
        )->validate();
    }
}
