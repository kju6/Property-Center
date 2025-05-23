<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\State;
class SelectState extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->State = State::orderBy('name')->get(); 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-state');
    }
}
