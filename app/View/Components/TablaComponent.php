<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tabla extends Component
{
    public $atributos;
    public $modelos;
    public $ruta;

    public function __construct(array $atributos, $modelos,$ruta)
    {
        $this->atributos = $atributos;
        $this->modelos = $modelos;
        $this->ruta = $ruta;
    }

    public function render()
    {
        return view('components.tabla-component');
    }
}
