<div id="tabla">
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
            @foreach ($modelos as $modelo)
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
            @endforeach
        </tbody>
    </table>
</div>
