@extends('layouts.Layout', ['hasMenu' => true])

@section('body')
    @if (!empty($usuario))
        <div class="mt-5">
            <div class="row mt-5">

                {{-- primera carta --}}
                <div class="card mt-5">
                    <div class="card-header">
                        @if (isset($usuario->id))
                            <h1 class="mb-3"> {{ 'Usuario: ' . $usuario->nombre }}</h1>
                        @else
                            <h1 class="mb-3">Nuevo Usuario</h1>
                        @endif
                    </div>
                    <div class="card-body">
                        {{-- Formulario --}}
                        <form
                            action="{{ isset($usuario->id) ? route('usuarios.update', $usuario->id) : route('usuarios.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($usuario->id))
                                @method('PUT')
                            @else
                                @method('POST')
                            @endif

                            {{-- EMAIL --}}
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div id="email">
                                        <h4 class="mb-3">Correo Electrónico</h4>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Correo electrónico" value="{{ $usuario->email }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="nombre">
                                        <h4 class="mb-3">Nombre</h4>
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre"
                                            value="{{ $usuario->nombre }}">
                                    </div>
                                </div>
                            </div>

                            {{-- Direcciones --}}
                            {{-- <div class="mt-3">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <h4 class="mb-3">Dirección</h4>
                                        <input type="text" name="direccion" class="form-control" placeholder="Direccion"
                                            value="{{ $usuario->direccion }}">
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <h4 class="mb-3">Código Postal</h4>
                                        <input type="number" name="codigo_postal" class="form-control"
                                            placeholder="Codigo Postal" value="{{ $usuario->codigo_postal }}">
                                    </div>
                                </div>
                            </div> --}}

                            {{-- DNI y rol --}}
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <h4 class="mb-3">NIF</h4>
                                        <input type="text" name="dni" class="form-control" placeholder="NIF"
                                            value="{{ $usuario->dni }}">
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <h4 class="mb-3">Rol</h4>
                                        <input type="text" name="rol" class="form-control" placeholder="Rol en uso"
                                            value="{{ $usuario->rol }}">
                                    </div>
                                </div>
                            </div>

                            {{-- Provincia y activo --}}
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-12 col-sm-12 col">
                                    <div class="col-4">
                                        <h4 class="mb-3">Contraseña</h4>
                                        <input type="text" name="password" class="form-control" placeholder="Contraseña"
                                            value="{{ $usuario->password }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 col">
                                    <div class="col-4">
                                        <h4 class="mb-3">Repetir Contraseña</h4>
                                        <input type="text" name="password_confirmed" class="form-control"
                                            placeholder="Repita la contraseña" value="{{ $usuario->password }}">
                                    </div>
                                </div>
                            </div>

                            {{-- Botones --}}
                            <div class="mt-5">
                                <button type="submit"
                                    class="btn btn-{{ isset($usuario->id) ? 'warning' : 'success' }} border-dark text-dark fw-bold px-5 shadow-lg">
                                    {{ isset($usuario->id) ? 'Actualizar' : 'Guardar' }}
                                </button>
                            </div>
                        </form>

                        @if (isset($usuario->id))
                            <div class="mt-2">
                                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-danger border-dark text-dark fw-bold px-5 shadow-lg">Eliminar</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
