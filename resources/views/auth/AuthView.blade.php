@extends('layouts.Layout', ['hasMenu' => false])

@section('body')
    <div class="container-fluid full-height d-flex justify-content-center align-items-center">
        <div class="text-center p-3 w-100" style="max-width: 500px;">
            {{-- Card --}}
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="card bg-secondary shadow-lg">
                    <div class="card-header p-2">
                        <h3><b class="text-center text-uppercase">Login</b></h3>
                    </div>
                    <div class="card-body text-start">
                        {{-- Correo Electronico --}}
                       <h5><b>Email</b></h5>
                        <input type="email" class="form-control mb-3 mt-3" name="email" placeholder="Correo electrónico">

                        {{-- Passwd --}}
                       <h5><b>Contraseña</b></h5>
                        <input type="password" class="form-control mb-3 mt-3" name="password" placeholder="Contraseña">

                        <input type="submit" class="btn w-100" value="Login">
                    </div>
                </div>
                {{-- Fin card --}}
            </form>
        </div>
    </div>
@endsection
