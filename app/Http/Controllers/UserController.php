<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function index()
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
    public static function store(Request $request)
    {
        self::validaciones($request);
        DB::beginTransaction();
        try {
            $usuario = new Usuario($request->all());
            if ($request->password) {
                $usuario->password = Hash::make($request->password);
            }
            $usuario->save();
            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();
        }
        
        if($request->retorno){
            return $usuario;
        }else{
            return self::index();
        }
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
        DB::beginTransaction();
        try {
            $usuario = Usuario::findOrFail($id);
            $usuario->update($request->all());
            if ($request->password) {
                $usuario->password = Hash::make($request->password);
            }
            $usuario->save();
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
            Usuario::findOrFail($id)->delete();
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

    /**
     * Funcion que realiza las validaciones
     */
    private static function validaciones(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => ['string', 'required'],
            'apellidos' => ['string', 'required'],
            'email' => ['email', 'required'],
            'password' => ['required'],
            'password_confirmed' => ['required', 'same:password'],
            [
                'nombre.required' => 'El campo Nombre es obligatorio.',
                'nombre.string' => 'El campo Nombre debe ser un texto.',
                'apellidos.required' => 'El campo Apellidos es obligatorio.',
                'apellidos.string' => 'El campo Apellidos debe ser un texto.',
                'email.required' => 'El campo Email es obligatorio.',
                'email.email' => 'El campo Email debe ser un correo electrónico válido.',
                'password.required' => 'El campo Contraseña es obligatorio.',
                'password.min' => 'El campo Contraseña debe tener al menos :min caracteres.',
                'password_confirmed.same' => 'Las contraseñas no coinciden'
            ]
        ]);

        // Verificar si la validación falla
        if ($validator->fails()) {
            // Si falla, redirige con los errores
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    }
}
