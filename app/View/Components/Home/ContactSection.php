<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct
    (
        public string $adress,
        public string $email,
        public string $waMarketing
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.contact-section');
    }
}
