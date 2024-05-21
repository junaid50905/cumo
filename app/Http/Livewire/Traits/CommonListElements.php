<?php

namespace App\Http\Livewire\Traits;

use App\Utility\ProjectConstants;

trait CommonListElements
{
    protected string $paginationTheme = 'bootstrap';

    public string $search = '';
    public int $perPage = ProjectConstants::DATA_PER_PAGE;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmDelete($recordId): void
    {
        $data = [
            'routeName' => route($this->destroyRoute, $recordId),
        ];

        $data = array_merge_recursive(ProjectConstants::$swalConfirmDeleteEvents, $data);

        $this->dispatchBrowserEvent('swal', $data);
    }
}