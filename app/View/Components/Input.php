<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public function __construct(
        public string $type = 'text',
        public string $id = '',
        public string $name,
        public string $label = '',
        public string $value = '',
        public array $options = [],
        public string $placeholder = ""
    )
    {
        $this->id = $id ?: $name;
    }

    public function render()
    {
        return view('components.input');
    }
}