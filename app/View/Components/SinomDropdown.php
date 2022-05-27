<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SinomDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $icon,
        public string $title,
        public string $href = '',
        public array $subs = []
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sinom-dropdown');
    }
}
