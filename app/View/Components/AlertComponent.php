<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertComponent extends Component
{
    public string $texto, $clases;

    /**
     * Create a new component instance.
     */
    public function __construct(string $texto, string $clases)
    {
        $this->texto = $texto;
        $this->clases = $clases;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-component');
    }
}
