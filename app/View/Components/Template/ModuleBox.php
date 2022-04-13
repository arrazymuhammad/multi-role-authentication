<?php

namespace App\View\Components\Template;

use Illuminate\View\Component;

class ModuleBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $subtitle;
    public $color;
    public $url;
    public function __construct($title, $subtitle, $color, $url)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->color = $color;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.template.module-box');
    }
}
