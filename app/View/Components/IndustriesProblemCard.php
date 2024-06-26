<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IndustriesProblemCard extends Component
{
    public $icon;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $title)
    {
        $this->icon = $icon;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.industries-problem-card');
    }
}
