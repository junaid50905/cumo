<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class RecordList extends Component
{
    public string $title;
    public string $newEntryLink;
    public LengthAwarePaginator $records;
    public mixed $wireClick;
    public string $dataBsTarget;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($records, $title = '', $dataBsTarget = false, $newEntryLink = false, $wireClick = false)
    {
        $this->title = $title;
        $this->newEntryLink = $newEntryLink;
        $this->records = $records;
        $this->wireClick = $wireClick ? "wire:click=$wireClick" : "";
        $this->dataBsTarget = $dataBsTarget ? "data-bs-target={$dataBsTarget}" : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.record-list');
    }
}
