@extends('layouts.Layout', ['hasMenu' => true])

@section('body')
    <div class="mt-4">

        {{-- Listado --}}
        <div class="row">
            <h1 class="mb-4">Listado de clientes </h1>
            <div class="justify-content-end text-end">
                <form action="{{ route('clientes.crear') }}" method="post">
                    @csrf
                    @method('POST')
                    <button class="btn btn-primary fw-bold text-dark border-dark my-4 px-5" type="submit">Nuevo Cliente</button>
                </form>
            </div>
        </div>
        <x-tabla-component :atributos="$atributos" :modelos="$clientes" :ruta="$ruta" />
    </div>
@endsection
