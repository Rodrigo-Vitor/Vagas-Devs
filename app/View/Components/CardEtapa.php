<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardEtapa extends Component
{
    
    public $etapa;
    public $content;
    public $desc;

    public function __construct($etapa, $content, $desc)
    {
        $this->etapa = $etapa;
        $this->content = $content;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-etapa');
    }
}
