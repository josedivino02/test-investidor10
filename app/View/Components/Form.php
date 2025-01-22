<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public function __construct(public string $action,public string $method = 'POST')
    {
        $this->method = strtoupper($method);
    }

    public function render()
    {
        return view('components.form');
    }
}