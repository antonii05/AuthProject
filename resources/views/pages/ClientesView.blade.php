@extends('layouts.Layout',['hasMenu' => true])

@section('body')
    <div class="mt-4">

        <h1 class="mb-4">Listado de clientes </h1>

        {{-- Listado --}}
        <x-tabla-component :atributos="$atributos" :modelos="$clientes" :ruta="$ruta" />
    </div>
@endsection
