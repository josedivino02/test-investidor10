<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{

    public function __construct(public string $title = "Titulo padrão")
    {
    }

    public function render()
    {
        return view('components.layout');
    }
}