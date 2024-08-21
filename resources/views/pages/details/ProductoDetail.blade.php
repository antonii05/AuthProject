@extends('layouts.Layout', ['hasMenu' => true])
@section('body')
    @if (!empty($producto))
        <div class="mt-5">
            <div class="row mt-5">

                {{-- primera carta --}}
                <div class="card mt-5">
                    @if (isset($producto->id))
                        <div class="card-header">
                            <h1 class="mb-3"> {{ 'Producto: ' . $producto->nombre_pedido }}</h1>
                        </div>
                    @else
                    <div class="card-header my-2">
                        <h4>Producto</h4>
                        <input type="text" name="nombre_pedido" class="form-control mb-4" placeholder="Nombre del producto">
                    </div>
                    @endif
                    <div class="card-body">
                        {{-- Formulario --}}
                        <form
                            action="{{ isset($producto->id) ? route('productos.update', $producto->id) : route('productos.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($producto->id))
                                @method('PUT')
                            @else
                                @method('POST')
                            @endif
                            {{-- EMAIL --}}
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div id="email" class="col">
                                        <h4 class="mb-3">Descripción</h4>
                                        <textarea name="descripcion" id="descripcion" class="form-control text-break">{{ $producto->descripcion }}</textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="nombre_fiscal">
                                        <h4 class="mb-3">Precio</h4>
                                        <input type="number" name="precio" class="form-control" placeholder="Precio"
                                            value="{{ $producto->precio }}">
                                    </div>
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <div class="mt-5">
                                <button type="submit"
                                    class="btn btn-{{ isset($producto->id) ? 'warning' : 'success' }} border-dark text-dark fw-bold px-5 shadow-lg">
                                    {{ isset($producto->id) ? 'Actualizar' : 'Guardar' }}
                                </button>
                            </div>

                        </form>

                        {{-- Boton de Eliminar --}}
                        @if (isset($producto->id))
                            <div class="mt-2">
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST"
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
