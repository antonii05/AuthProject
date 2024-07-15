@extends('layouts.Layout',['hasMenu' => true])

@section('body')
    <div class="mt-4">

        <h1 class="mb-4">Listado de productos </h1>

        {{-- Listado --}}
        <x-tabla-component :atributos="$atributos" :modelos="$productos" :ruta="$ruta" />
    </div>
@endsection
