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
                    <div class="card-body mb-5">
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
                                    <div id="nombre">
                                        <h4 class="mb-3">Nombre</h4>
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre"
                                        value="{{ $usuario->nombre }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="apellidos">
                                        <h4 class="mb-3">Apellidos</h4>
                                        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos"
                                            value="{{ $usuario->apellidos }}">
                                    </div>
                                </div>

                            </div>

                            {{-- Correo Electronico --}}
                            <div class="row mt-3">
                                <div class="col">
                                    <div id="email">
                                        <h4 class="mb-3">Correo Electrónico</h4>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Correo electrónico" value="{{ $usuario->email }}">
                                    </div>
                                </div>
                            </div>


                            {{-- BOTONES --}}
                            <p class="d-inline-flex gap-1 mt-4">
                                <button class="btn btn-primary fw-bold text-dark border-dark border-3 mx-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Más Opciones
                                </button>

                                <button class="btn btn-primary fw-bold text-dark border-dark border-3 mx-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Abrir opciones de Seguridad
                                </button>
                            </p>

                            {{-- Collapse 1 --}}
                            <div class="collapse" id="collapse1">

                                <div class="row justify-content-center">
                                    {{-- DNI y rol --}}
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <h4 class="mb-3">NIF</h4>
                                                <input type="text" name="dni" class="form-control" placeholder="NIF"
                                                    value="{{ $usuario->dni }}">
                                            </div>

                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <h4 class="mb-3">Rol</h4>
                                                <input type="number" name="rol" class="form-control"
                                                    placeholder="Rol en uso" value="{{ $usuario->rol }}">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            {{-- Collapse 2  --}}
                            <div class="collapse mt-3" id="collapse2">

                                <div class="row mt-2">
                                    <div class="row">
                                        <div class="col-3 col">
                                            <h4 class="mb-3">Contraseña</h4>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Contraseña" value="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3 col">
                                            <h4 class="my-3">Repetir Contraseña</h4>
                                            <input type="password" name="password_confirmed" class="form-control"
                                                placeholder="Repita la contraseña" value="">
                                        </div>
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
