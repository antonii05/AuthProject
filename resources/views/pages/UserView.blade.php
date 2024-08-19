@extends('layouts.Layout', ['hasMenu' => true])


@section('body')
    <div class="mt-4">

        <div class="row">
            <h1 class="mb-2">Listado de usuarios </h1>
            <div class="justify-content-end text-end">

                <form action="{{ route('usuario.nuevo') }}" method="post">
                    @csrf
                    @method('POST')
                    <button class="btn btn-primary fw-bold text-dark border-dark my-4" type="submit">Nuevo Usuario</button>
                </form>
            </div>
        </div>

        {{-- Listado --}}
        <x-tabla-component :atributos="$atributos" :modelos="$usuarios" :ruta="$ruta" />
    </div>
@endsection
