@extends('layouts.Layout', ['hasMenu' => true])

@section('body')
    <div class="container">
        <div class="row text-center justify-content-center ms-5">
            {{-- Primera Col --}}
            <div class="col-lg-4 col-md-12 col-sm-12 col mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Usuarios</h5>
                        <p class="card-text">Modulo dedicado al control de Usuarios donde se realizaran las tareas basicas
                            para el uso comun de ellos</p>
                        <a href="{{ route('usuarios.index') }}"
                            class="boton px-2 py-1 text-decoration-none fw-bold text-dark">Acceder</a>
                    </div>
                </div>
            </div>
            {{-- FIN Primera Col --}}


            {{-- Segunda Col --}}
            <div class="col-lg-4 col-md-12 col-sm-12 col mt-5 ">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Clientes</h5>
                        <p class="card-text">Modulo dedicado al control de Clientes donde se realizaran las tareas basicas
                            para el uso comun de ellos</p>
                        <a href="{{route('clientes.index')}}" class="boton px-2 py-1 text-decoration-none fw-bold text-dark">Acceder</a>

                    </div>
                </div>
            </div>
            {{-- FIN Segunda Col --}}

            {{-- Tercera Col --}}
            <div class="col-lg-4 col-md-12 col-sm-12 col mt-5 ">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Productos</h5>
                        <p class="card-text">Se podrán generar unos productos simulando la configuracion de una tienda
                            online</p>
                        <a href="{{route('productos.index')}}" class="boton px-2 py-1 text-decoration-none fw-bold text-dark">Acceder</a>

                    </div>
                </div>
            </div>
            {{-- FIN Tercera Col --}}


        </div>
    </div>
@endsection
