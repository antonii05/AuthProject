<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BotonesComponent extends Component
{
    public $modelo, $ruta;

    /**
     * Create a new component instance.
     */
    public function __construct($modelo, $ruta)
    {
        $this->modelo = $modelo;
        $this->ruta = $ruta;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.botones-component');
    }
}
