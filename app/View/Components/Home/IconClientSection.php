<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconClientSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $clients
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.icon-client-section');
    }
}
