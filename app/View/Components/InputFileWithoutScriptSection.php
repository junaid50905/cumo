<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputFileWithoutScriptSection extends Component
{
    public string $title;
    public string $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $title = '')
    {
        $this->name = $name;
        $this->title = $title ?: prepareInputLabel($name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): Factory|View|Application
    {
        return view('components.file-input-without-script-section');
    }
}
