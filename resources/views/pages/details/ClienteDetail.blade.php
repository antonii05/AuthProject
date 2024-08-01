@extends('layouts.Layout', ['hasMenu' => true])

@section('body')
    @if (!empty($cliente))
        <div class="mt-5">
            <div class="row mt-5">

                {{-- primera carta --}}
                <div class="card mt-5">
                    <div class="card-header">
                        <h1 class="mb-3"> Cliente: {{ $cliente->nombre_fiscal }}</h1>
                    </div>
                    <div class="card-body">
                        {{-- Formulario de actualización --}}
                        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- EMAIL --}}
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div id="email">
                                        <h4 class="mb-3">Correo Electrónico</h4>
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            value="{{ $cliente->email }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="nombre_fiscal">
                                        <h4 class="mb-3">Nombre Fiscal</h4>
                                        <input type="text" name="nombre_fiscal" class="form-control"
                                            placeholder="Razon social" value="{{ $cliente->nombre_fiscal }}">
                                    </div>
                                </div>
                            </div>

                            {{-- Direcciones --}}
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <h4 class="mb-3">Dirección</h4>
                                        <input type="text" name="direccion" class="form-control" placeholder="Direccion"
                                            value="{{ $cliente->direccion }}">
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <h4 class="mb-3">Código Postal</h4>
                                        <input type="number" name="codigo_postal" class="form-control"
                                            placeholder="Codigo Postal" value="{{ $cliente->codigo_postal }}">
                                    </div>
                                </div>
                            </div>

                            {{-- NIF y país --}}
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <h4 class="mb-3">NIF</h4>
                                        <input type="text" name="nif" class="form-control" placeholder="NIF"
                                            value="{{ $cliente->nif }}">
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <h4 class="mb-3">País</h4>
                                        <input type="text" name="pais" class="form-control" placeholder="País"
                                            value="{{ $cliente->pais }}">
                                    </div>
                                </div>
                            </div>

                            {{-- Provincia y activo --}}
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-12 col-sm-12 col">
                                    <div class="col-4">
                                        <h4 class="mb-3">Provincia</h4>
                                        <input type="text" name="provincia" class="form-control" placeholder="Provincia"
                                            value="{{ $cliente->provincia }}">
                                    </div>
                                </div>

                                <div
                                    class="col-lg-6 col-md-12 col-sm-12 col d-flex align-items-center mt-5 justify-content-end">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="activo" role="switch"
                                            value="1" {{ $cliente->activo ? 'checked' : '' }}>
                                        <label class="form-check-label"><b>Activo</b></label>
                                    </div>
                                </div>
                            </div>

                            {{-- Botones --}}
                            <div class="mt-5">
                                <button type="submit"
                                    class="btn btn-warning border-dark text-dark fw-bold px-5 shadow-lg">Actualizar</button>
                            </div>
                        </form>
                        <div class="mt-2">

                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-danger border-dark text-dark fw-bold px-5 shadow-lg">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    @endif
@endsection
