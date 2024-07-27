<div>
    <div class="card my-3 col-auto">
        <div class="card-body">

            <form action="{{ route($ruta . '.store') }}" method="POST" class="d-inline">
                @csrf
                @method('POST')
                <button type="submit"
                    class="btn btn-success border-dark text-dark fw-bold px-5 shadow-lg">Guardar</button>
            </form>

            <form action="{{ route($ruta . '.update', $modelo->id) }}" method="POST" class="d-inline">
                @csrf
                @method('PUT')
                <button type="submit"
                    class="btn btn-warning border-dark text-dark fw-bold px-5 shadow-lg">Actualizar</button>
            </form>

            <form action="{{ route($ruta . '.destroy', $modelo->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="btn btn-danger border-dark text-dark fw-bold px-5 shadow-lg">Eliminar</button>
            </form>

        </div>

    </div>
</div>
