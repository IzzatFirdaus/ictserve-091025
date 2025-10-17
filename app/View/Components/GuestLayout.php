<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): \Illuminate\View\View
    {
        /** @var \Illuminate\View\View $view */
        return view('layouts.guest');
    }
}
