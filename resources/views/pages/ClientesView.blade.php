@extends('layouts.Layout')

@section('body')
    <h1>Clientes</h1>
    <x-tabla-component :atributos="$atributos" :modelos="$clientes" :ruta="$ruta" />
@endsection
