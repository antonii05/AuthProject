<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = JWTAuth::attempt($validator->validated())) {
            return response()->json('Credenciales invalidas', 401); // Crear pagina para mostrar error
        }

        return $this->createNewToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(Auth::user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::logout();

        return view('auth.LoginView');
    }

    private function createNewToken($token)
    {
        //Se devuelve el token y el usuario autenticado
        return view('HomeView', [
            'access_token' => $token,
            'token_type' => 'bearer',
            'exp' => config('jwt.ttl'),
            'user' => Auth::user(),
        ]);
    }
    public function register(Request $request){
        try {

            UserController::store($request);

            return $this->login($request);

        } catch (\Exception $error) {
            return response()->json($error->getMessage(), 500);
        }
    }
    
    public function registro(){
        return view('auth.RegisterView');
    }

}
