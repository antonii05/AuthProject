@extends('layouts.Layout',['hasMenu' => true])

@section('body')
    <div class="mt-4">

        {{-- Listado --}}
        <div class="row">
            <h1 class="mb-2">Listado de Productos </h1>
            <div class="justify-content-end text-end">

                <form action="{{ route($ruta .'.nuevo') }}" method="post">
                    @csrf
                    @method('POST')
                    <button class="btn btn-primary fw-bold text-dark border-dark my-4" type="submit">Crear Producto</button>
                </form>
            </div>
        </div>

        <x-tabla-component :atributos="$atributos" :modelos="$productos" :ruta="$ruta" />
    </div>
@endsection
