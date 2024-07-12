@extends('layouts.Layout')

@section('body')
    <div class="mt-4">

        <h1 class="mb-4">Listado de usuarios </h1>

        {{-- Listado --}}
        <div id="tabla">
            <table class="table table-bordered table-striped table-info shadow-lg">
                <colgroup>
                    <col style="width: 5%"> {{-- ID --}}
                    <col style="width: 20%"> {{-- Nombre --}}
                    <col style="width: 5%"> {{-- Edad --}}
                    <col style="width: 20%"> {{-- DNI --}}
                    <col style="width: 20%"> {{-- Email --}}
                    <col style="width: 5%"> {{-- Rol --}}
                </colgroup>
                <thead>
                    <tr class="text-uppercase text-center">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Dni</th>
                        <th>Email</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    @foreach ($usuarios as $item)
                        <tr class="text-center">

                            <td class="text-primary fw-bold"><a href="{{ route('usuarios.show', $item->id) }}"
                                    class="text-decoration-none">{{ $item->id }} </a>
                            </td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->edad }}</td>
                            <td>{{ $item->dni }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->rol }}</td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
