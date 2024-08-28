<div>
    <link rel="stylesheet" href="{{ asset('css/NavBar.css') }}">
    <nav class="navbar navbar-expand-lg shadow-lg">
        <div class="container-fluid fw-bold">
            <a class="navbar-brand me-4 ms-3" href="#">Autentificacion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <form action="{{route('auth.logout')}}" method="POST">
                            @csrf
                                <input class="form-control" type="submit" value="Cerrar Sesion">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
