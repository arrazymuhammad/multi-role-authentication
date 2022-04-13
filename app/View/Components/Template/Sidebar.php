<?php

namespace App\View\Components\Template;

use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menu;
    public $header;
    public function __construct($menu, $header)
    {
        $this->menu = $menu;
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.template.sidebar');
    }
}
