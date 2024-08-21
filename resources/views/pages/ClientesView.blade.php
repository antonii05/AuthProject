@extends('layouts.Layout', ['hasMenu' => true])

@section('body')
    <div class="mt-4">

        <h1 class="mb-4">Listado de clientes </h1>

        {{-- Listado --}}
        <div class="row my-3 d-flex justify-content-end">
            <div class="col-3">
                <form action="{{ route('clientes.crear') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-primary border-dark text-dark fw-bold px-5 shadow-lg ">Crear nuevo
                        cliente</button>
                </form>
            </div>
        </div>
        <x-tabla-component :atributos="$atributos" :modelos="$clientes" :ruta="$ruta" />
    </div>
@endsection
