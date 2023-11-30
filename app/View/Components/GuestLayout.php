<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    public $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function render(): View
    {
        return view('layouts.guest');
    }
}
