<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Producto::all();
        $atributos = Producto::getAtributos();
        return view("pages.ProductosView", [
            'productos' => $products,
            'atributos' => $atributos,
            'ruta' => 'productos',
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $producto = new Producto($request->all());
            $producto->save();
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
        $product = Producto::findOrFail($id);
        return view('pages.details.ProductoDetail',['producto' => $product]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $producto = Producto::findOrFail($id);
            $producto->update($request->all());
            $producto->save();
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
            Producto::findOrFail($id)->delete();
            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();
        }
        return $this->index();
    }


    public function crear()
    {
        return view('pages.details.ProductoDetail', ['producto' => new Producto()]);
    }
}
