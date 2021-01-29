<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Style extends Component
{
    public $src;

    public function __construct($src)
    {
        $this->src = $src;
    }

    public function render()
    {
        return view('components.style');
    }
}
