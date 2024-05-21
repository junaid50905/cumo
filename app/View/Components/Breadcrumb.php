<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public array $base;
    public array $sub;
    public string $pageHeader;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $pageHeader, array $base, array $sub)
    {
        $this->pageHeader = $pageHeader;
        $this->base = $base;
        $this->sub = $sub;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
