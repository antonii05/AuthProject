@extends('layouts.Layout', ['hasMenu' => true])

@section('body')
    @if (!empty($cliente))
        <div class="mt-5">
            <div class="row mt-5">

                {{-- primera cartta --}}
                <div class="card mt-5">
                    <div class="card-header">
                        <h1 class="mb-3"> Cliente: {{ $cliente->nombre_fiscal }}</h1>
                    </div>
                    <div class="card-body">
                        {{-- EMAIL --}}
                        <div id="email">
                            <h4 class="mb-3">Correo Electrónico</h4>
                            <div class="col-4 col">
                                <input type="email" name="email" class="form-control" placeholder="Email"
                                    value="{{ $cliente->email }}">
                            </div>
                        </div>

                        {{-- Contraseniasl --}}
                        <div id="password" class="mt-3">
                            <div class="row">

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <h4 class="mb-3">Contraseña</h4>

                                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <h4 class="mb-3">Repetir Contraseña</h4>

                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="Repetir contraseña">
                                </div>
                            </div>
                        </div>

                        {{-- nif y pais --}}
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
                                        value="{{ $cliente->activo }}">
                                    <label class="form-check-label"><b>Activo</b></label>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                {{-- Segunda carta --}}
                <div class="row">
                    <div class="col-5">

                        <div class="card mt-5">
                            <div class="card-body">
                                <input type="submit" class="btn btn-success border-dark text-dark px-5 shadow-lg" value="Save">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        </div>
    @endif
@endsection
