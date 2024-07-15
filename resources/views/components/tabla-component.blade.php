<div id="tabla">
    @forelse ($modelos as $modelo)
        @if ($loop->first)
            <table class="table table-bordered table-striped table-info shadow-lg">
                <thead>
                    <tr class="text-uppercase text-center">
                        @foreach ($atributos as $atributo)
                            <th class="text-center text-uppercase">
                                {{ $atributo }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="table-group-divider">
        @endif
        <tr>
            @foreach ($atributos as $atributo)
                <td class="text-center">
                    @if ($atributo == 'id')
                        <a href="{{ route($ruta . '.show', $modelo->id) }}"
                            class="text-decoration-none text-center text-uppercase fw-bold">
                            {{ $modelo->$atributo }}
                        </a>
                    @else
                        {{ $modelo->$atributo }}
                    @endif
                </td>
            @endforeach
        </tr>
        @if ($loop->last)
                </tbody>
            </table>
        @endif
    @empty
        <small class="text-danger fw-bold">No se han cargado {{ $ruta }}</small>
    @endforelse
</div>
