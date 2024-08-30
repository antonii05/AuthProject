@extends('layouts.Layout', ['hasMenu' => false])

@section('body')
    <div class="container-fluid full-height d-flex justify-content-center align-items-center">
        <div class="text-center p-3 w-100" style="max-width: 500px;">
            {{-- Card --}}
            <form action="{{ route('auth.register') }}" method="POST">
                @csrf

                <input type="hidden" name="retorno" value="true">

                <div class="card bg-secondary shadow-lg">
                    <div class="card-header">
                        <h3><b class="text-center text-uppercase">Registro</b></h3>
                    </div>
                    <div class="card-body text-start">
                        <div class="row">
                            {{-- Nombre --}}
                            <div class="col col-lg-6 col-md-12 col-sm-12">
                                <h5><b>Nombre</b></h5>
                                <input type="text" class="form-control mb-3 mt-3" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="col">
                                <h5><b>Apellidos</b></h5>
                                <input type="text" class="form-control mb-3 mt-3" name="apellidos" placeholder="apellidos">
                            </div>
                        </div>

                        {{-- Correo Electronico --}}
                        <h5><b class="text-uppercase">DNI</b></h5>
                        <input type="text" class="form-control mb-3 mt-3" name="dni" placeholder="DNI">

                        {{-- Correo Electronico --}}
                        <h5><b>Email</b></h5>
                        <input type="email" class="form-control mb-3 mt-3" name="email"
                            placeholder="Correo electrónico">

                        {{-- Passwd --}}
                        <h5><b>Contraseña</b></h5>
                        <input type="password" class="form-control mb-3 mt-3" name="password" placeholder="Contraseña">

                        {{-- Repetir Passwd --}}
                        <h5><b>Repetir Contraseña</b></h5>
                        <input type="password" class="form-control mb-3 mt-3" name="password_confirmed"
                            placeholder="Repetir Contraseña">

                        <input type="submit" class="boton w-100 py-2 mt-2 fw-bold" value="REGISTRATE">
                    </div>
                </div>
                {{-- Fin card --}}
            </form>
        </div>
    </div>
@endsection
